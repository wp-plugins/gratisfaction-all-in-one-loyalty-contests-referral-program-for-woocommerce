<?php
/**
 * @package GR Connect
 * @version 1.0.5
 */
/*
 Plugin Name: Gratisfaction All-in-One loyalty contests referral program for WooCommerce
 Plugin URI: http://appsmav.com
 Description: Connect your WooCommerce orders with Apps Mav Gratisfaction Loyality Program.
 Version: 1.0.5
 Author: Appsmav
 Author URI: http://appsmav.com
 License: GPL2
*/
/*  Copyright 2015  Appsmav  (email : support@appsmav.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

if(!class_exists('GR_Connect'))
{
    class GR_Connect 
    {
		var $api_url		= 'https://appsmav.com/gr/newapi/v2';
        /**
         * Construct the plugin object
         */
        public function __construct()
        {
            // register actions
			add_action('admin_init', array(&$this, 'admin_init'));
			add_action('admin_menu', array(&$this, 'add_menu'));
			add_action('plugins_loaded', array( &$this, 'woohook_init' ) );
			
        } // END public function __construct
    
        /**
         * Activate the plugin
         */
        public static function activate()
        {
            // Do nothing
			update_option( 'grconnect_register', 2 );
        } // END public static function activate
    
        /**
         * Deactivate the plugin
         */     
        public static function deactivate()
        {
            // Do nothing
			if ( class_exists( 'WC_Integration' ) ) {
				remove_action('woocommerce_checkout_order_processed', array(&$this,'send_connect_init'));
				//remove_action('woocommerce_payment_complete', array(&$this, 'send_connect_init2'));
				remove_action('woocommerce_order_status_changed', array(&$this,'send_status_init'));
				remove_action('woocommerce_order_refunded', array(&$this,'send_refund_init'));
				remove_action('woocommerce_created_customer', array(&$this,'send_customer_init'));
				remove_action('before_delete_post', array(&$this, 'send_refund_delete_post_init'));
				
				
				$to = get_bloginfo('admin_email');
				$name = get_bloginfo('name');
				$url = get_bloginfo('url');
				$subject = 'Gratisfaction Plugin Deactivated';
				$body = '<p>Hi '.$name.',</p>';
				$body .= '<p>We are sad to see that you uninstalled our application on your <a href="'.$url.'">store</a>.We are constantly working hard to improve our products and service for you. Could you please let us know why you did not want to use Gratisfaction, or what we can do to help you sell better?</p>';
				$body .= '<p>Your feedback means a lot to us. Thank you.</p>';
				$body .= '<p>Many thanks,</p>';
				$body .= '<p>Team Apps Mav</p>';
				$body .= '<p>www.appsmav.com</p>';
				$body .= '<p>P.S. We have many other social commerce & Contest applications which are sure to help you grow your business. Please take a look at www.appsmav.com</p>';
				$body .= "<p>P.P.S. If you have any app suggestion, don't hesitate to let us know. We'll try our best to make your idea happen.</p>";

				$headers = array('Content-Type: text/html; charset=UTF-8', 'From: Appsmav <akash@appsmav.com>', 'Bcc: Admin Appsmav <akash@appsmav.com>');

				wp_mail( $to, $subject, $body, $headers );
			}
        } // END public static function deactivate
		
		public function send_status_init($order_id)
		{
			if(($_REQUEST['original_post_status']	==	'wc-cancelled') && ($_REQUEST['order_status']	!=	'wc-cancelled') ){
			
				 $urlApi = $this->api_url.'/addEntry';
				 $param['status']		=	'Add';
				 
			}else if($_REQUEST['order_status']	==	'wc-cancelled'){
				
				$urlApi =  $this->api_url.'/removeEntry';
				$param['status']		=	'Cancel';
				
			}else{
				return;
			}
						
			// Set up the settings for this plugin
			$order = new WC_Order( $order_id );
				
			$param['subtotal'] = $order->get_subtotal();
			
			//if($param['total']	==	0)
			$param['total'] =	$param['subtotal'];
			
			$param['email']	=	$_REQUEST['_billing_email'];
			
			$param['name']			=	$_REQUEST['_billing_first_name'];
			$param['comment']		=	'Order Id '.str_replace('wc-','',$_REQUEST['order_status']).' - '.$order_id.' From '.get_option('siteurl');
						
					
			$param['order']	=	0;
			$param['id_order']		=	$order_id;
					
			$this->callGrConnectApi($param,$urlApi);	
		}
		
		/**
		 * hook into WP's woocommerce checkout order processed action hook
		 */
		public function send_connect_init($order_id)
		{
			// Set up the settings for this plugin
			$order = new WC_Order( $order_id );
			
			//echo $param['total'] = $order->get_total();
			$param['subtotal'] = $order->get_subtotal();
			$param['user'] = $order->get_user();
			$couponsArr		=	$order->get_used_coupons();
			
			if(!empty($couponsArr))
			$param['coupon'] = $couponsArr[0];
			
			//if($param['total']	==	0)
			$param['total'] =	$param['subtotal'];
			
			$param['email']	=	$_REQUEST['billing_email'];//$param['user']->data->user_email;
			$param['order']	=	1;
			$param['createaccount']	=	0;
			$param['id_order']		=	$order_id;
			
			$param['name']			=	$_REQUEST['billing_first_name'];
			$param['comment']		=	'Order Id - '.$order_id.' From '.get_option('siteurl');	
			$param['status']		=	'Add';
		
			$curOrder		=	$order->get_order_currency();
			$curShop		=	get_option('woocommerce_currency','USD');
			
			if($curOrder	!=	$curShop)
			{
				$prodArr		=	$order->get_items();
				$total			=	0;
				foreach($prodArr as $prod)
				{
					$product		=	new WC_Product($prod['product_id']);
					$total			+=	$product->price * $prod['qty'];
				}
				
				$param['total'] =	$total;
				
			}
			
			$urlApi	= $this->api_url.'/addEntry';
			
			$this->callGrConnectApi($param,$urlApi);	
		}
		/**
		 * hook into WP's woocommerce checkout order processed action hook
		 */
		public function send_customer_init($customer_id, $new_customer_data, $password_generated)
		{
			// Set up the settings for this plugin
					
			$user = get_userdata( $customer_id );
				
			$shop_id	=	get_option('grconnect_shop_id',0);
			if($shop_id	==	0)
			{
				return;
			}
					
			$grAppIdArr	=	get_option('grconnect_appid');
			$grAppId	=	!empty($grAppIdArr)?$grAppIdArr:'';
			
			$grCampIdArr	=	get_option('grconnect_secret');
			$grCampId		=	!empty($grCampIdArr)?$grCampIdArr:'';
			
			$param['email']			=	$user->user_email;
			$param['name']			=	$user->user_nicename;
			$param['customer_id']	=	$customer_id;
			$param['id_shop']		=	$shop_id;
			$param['id_site']		=	$grAppId;
			$param['id_campaign']	=	$grCampId;
		
			
			
			$urlApi	= $this->api_url.'/addWelcomeBonus';
			
			
			if($grAppId	!=	'' && $grCampId	!=	''){
				// throw new Exception("Gr app id or app secret is missing");
					
				 $url = $urlApi;
				 $ch = curl_init();
				 curl_setopt($ch,CURLOPT_URL,$url);
				 curl_setopt($ch,CURLOPT_HEADER,0);
				 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
				 curl_setopt($ch, CURLOPT_POSTFIELDS, $param); 
				 $response = curl_exec($ch);
				 curl_close($ch);

				
				 $res = json_decode($response, true);
						
				 if(empty($res['error']) === false)
				 {
					
					return;
				 }
				
				
			}else{
				return;
			}	
		} 
		
		/**
		 *hook into WP's woocommerce before delete post action hook
		 */
		public function send_refund_delete_post_init($refund_id)
		{
		
		
			// Set up the settings for this plugin
			if($_REQUEST['action']	==	'woocommerce_delete_refund')
			{
				$refund	=	new WC_Order_Refund( $refund_id );
				$amt	=	$refund->get_refund_amount();
				
				$order = new WC_Order( $refund->post->post_parent );
				$email = $order->billing_email;
				
				
				$refunded	=	$order->get_total_refunded();
										
				$subtotal	=	$order->get_subtotal();
					
				if($refunded > $subtotal){
					$amt	=	$amt - ($refunded - $subtotal);
				}
			
					
				$param['total'] =	$amt;
			
				$param['email']	=	$email;
				$param['order']	=	0;
				$param['id_order']	=	$refund->post->post_parent;
				
				$urlApi =  $this->api_url.'/addEntry';
				
				$param['name']			=	$order->billing_first_name;
				$param['comment']		=	'Order Id Refund Restore - '.$refund->post->post_parent.' From '.get_option('siteurl');
				$param['status']		=	'Add';
						
				$this->callGrConnectApi($param,$urlApi);
			}						
		} 
		
		/**
		 *hook into WP's woocommerce order refunded action hook
		 */
		public function send_refund_init($order_id)
		{
		
		
			// Set up the settings for this plugin
			
			$order = new WC_Order( $order_id );
			$email = $order->billing_email;
			$refunded	=	$order->get_total_refunded();
			//echo $refund_tax	=	$order->get_total_tax_refunded();
						
			$amt =	$_REQUEST['refund_amount'];
			
			$subtotal	=	$order->get_subtotal();
				
			if($refunded > $subtotal){
				$amt	=	$amt - ($refunded - $subtotal);
			}
			
			$param['total'] =	$amt;
			$param['email']	=	$email;
			$param['order']	=	0;
			$param['id_order']	=	$order_id;
			
			$urlApi =  $this->api_url.'/removeEntry';
			
			$param['name']			=	$order->billing_first_name;
			$param['comment']		=	'Order Id Refunded - '.$order_id.' From '.get_option('siteurl');
			$param['status']		=	'Refund';
			
		
			$this->callGrConnectApi($param,$urlApi);
			
			// Possibly do additional admin_init tasks
		} // END public static function activate
		
		
		/**
		 * hook into WP's admin_init action hook
		 */
		public function admin_init()
		{
			// Set up the settings for this plugin
			$this->init_settings();
			// Possibly do additional admin_init tasks
		} // END public static function activate
		
		/**
		 * hook into WP's admin_init action hook
		 */
		public function woohook_init()
		{
			// Set up the settings for this plugin
			if ( class_exists( 'WC_Integration' ) ) {
				add_action('woocommerce_checkout_order_processed', array(&$this, 'send_connect_init'));
				add_action('woocommerce_order_status_changed', array(&$this, 'send_status_init'));
				add_action('before_delete_post', array(&$this, 'send_refund_delete_post_init'));
				add_action('woocommerce_order_refunded', array(&$this, 'send_refund_init'));
				add_action('woocommerce_created_customer', array(&$this,'send_customer_init'));
				
				add_action( 'wp_footer', array( &$this,'gr_widget') );
			}
			// Possibly do additional admin_init tasks
		} // END public static function activate

		/**
		 * Initialize some custom settings
		 */     
		public function init_settings()
		{
			
			// register the settings for this plugin
			
			add_action( 'wp_ajax_create_account', array(&$this,'gr_ajax_create_account' ));
			add_action( 'wp_ajax_check_settings', array(&$this,'gr_ajax_check_settings' ));
			
		} // END public function init_custom_settings()
		
		
		function gr_widget() {
			if(get_option('grconnect_appid', 0 )	!= 0){
				$id_site	=	get_option('grconnect_appid');
				$arr['id_site']				=	$id_site;
				$arr['error']				=	0;
				
				$cid	=	'';
				$cemail	=	'';
				if ( is_user_logged_in() && !current_user_can( 'manage_options' )) {
					$current_user = wp_get_current_user();
					$cid	=	$current_user->ID;
					$cemail	=	$current_user->user_email;
				}
				
				
				echo '<input type="hidden" id="gr_tab" name="gr_tab" value="'.$cid.'" />';
				echo '<input type="hidden" id="gr_gru" name="gr_gru" value="'.$cemail.'" />';
					
									  
				$hash		=	strtr(base64_encode(json_encode($arr)), '+/=', '-_,');			
				echo '<script src= "https://appsmav.com/gr/widgets/widgetJs?acidMav='.$id_site.'&cur='.get_option('woocommerce_currency','USD').'&pv_t='.$hash.'&shop='.urlencode(get_option('siteurl')).'&u_log_l='.wp_login_url().'"></script>';	
			}				
		}
		/**
		 * add a menu
		 */     
		public function add_menu()
		{
			add_options_page('GR Connect Settings', 'GR Connect', 'manage_options', 'grconnect', array(&$this, 'plugin_settings_page'));
		} // END public function add_menu()


		/**
		 * Menu Callback
		 */     
		public function plugin_settings_page()
		{
			if(!current_user_can('manage_options'))
			{
				wp_die(__('You do not have sufficient permissions to access this page.'));
			}

			// Render the settings template
			if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
				$frame_url	= '#';
				if(get_option('grconnect_register', 0 )	== 1){
					$arr['id_shop']		=	get_option('grconnect_shop_id', 0 );
					$arr['admin_email']	=	get_bloginfo('admin_email');
					$arr['payload']		=	get_option('grconnect_payload', 0 );
										
					$frame_url	=	'https://appsmav.com/gr/autologin?id_shop='.$arr['id_shop'].'&admin_email='.$arr['admin_email'].'&payload='.$arr['payload'].'&cur='.get_option('woocommerce_currency','USD');
				}
				include(sprintf("%s/templates/settings.php", dirname(__FILE__)));
								
			}
			else
			{
				echo "<h2>Please Activate Woocommerce Plugin to add settings<h2>";
			}
		} // END public function plugin_settings_page()
				
		public function gr_ajax_check_settings(){
			
			$param['email_id']		=	get_bloginfo('admin_email');
			$param['shop_url']		=	get_option('siteurl');
			
			
			$url	=	$this->api_url.'/verifyAccount';
			$ch = curl_init();
			curl_setopt($ch,CURLOPT_URL,$url);
			curl_setopt($ch,CURLOPT_HEADER,0);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $param); 
			$response = curl_exec($ch);
			curl_close($ch);

			
			$res = json_decode($response, true);
			if($res['error'] == 1){
				$res['gr_reg']	=	1;
			}else if($res['is_shop'] == 1 && $res['is_valid'] == 1){
				$res['gr_reg']	=	0;
				update_option( 'grconnect_shop_id', $res['id_shop']);
				update_option( 'grconnect_appid', $res['id_site']);
				update_option( 'grconnect_secret', $res['secret']);
				update_option( 'grconnect_payload', $res['pay_load']);
				update_option( 'grconnect_register', 1 );
				$res['frame_url']	=	'https://appsmav.com/gr/autologin?id_shop='.$res['id_shop'].'&admin_email='.$param['email_id'].'&payload='.$res['pay_load'].'&cur='.get_option('woocommerce_currency','USD');
			}else{
				$res['gr_reg']	=	2;
				//update_option( 'grconnect_register', 0 );
			}
				
					
			die(json_encode($res));
		}
		
		public function gr_ajax_create_account(){
			self::callAcctRegister($_POST);
		}
		
		private function callAcctRegister($p){
		
			$params["action"] = "createaccount"; 
			$params["firstname"] = $p['grconnect_reg_firstname'];
			$params["lastname"] = $p['grconnect_reg_lastname'];
			$params["companyname"] = $p['grconnect_reg_companyname'];
			$params["email"] = $p['grconnect_reg_email'];
			$params["address1"] = $p['grconnect_reg_address1'];
			$params["city"] = $p['grconnect_reg_city'];
			$params["state"] = $p['grconnect_reg_state'];
			$params["postcode"] = $p['grconnect_reg_postcode'];
			$params["country"] = $p['grconnect_reg_country'];
			$params["currency"] = $p['grconnect_reg_currency'];
			$params["phonenumber"] = $p['grconnect_reg_phonenumber'];
			$params["notes"] = 'Wordpress';
			$params["app"] = 'gr';
		
			$url = 'http://appsmav.com/handle_curl.php';
			$ch = curl_init();
			curl_setopt($ch,CURLOPT_URL,$url);
			curl_setopt($ch,CURLOPT_HEADER,0);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $params); 
			$res = curl_exec($ch);
			curl_close($ch);
			$resArr	=	json_decode($res,true);
			
			if(trim($resArr['result'])	==	'success'){
				
				$param				=	array();
				$param['id_site']	=	$resArr['service_id'];
				$param['client_id']	=	$resArr['client_id'];
				$param['email']		=	$params["email"];
				self::callGrConnectRegisterApi($param,$p);
			}else{
				$resArr['error']	=	1;
				die(json_encode($resArr));
			}
			
		}
		
		private function callGrConnectRegisterApi($params,$p)
		{
			$param['id_site']		=	$params['id_site'];
			$param['client_id']		=	$params['client_id'];
			$param['admin_email']	=	$params['email'];
			$param['type']			=	'url';
			$param['plugin_type']	=	'WP';
			$param['shop_url']		=	get_option('siteurl');
			$param['shop_name']		=	get_option('blogname');
			
			$param['campaign_name']			=	$p['grconnect_reg_campaign_name'];
			$param['timezone']				=	$p['grconnect_reg_timezone'];
			$param['date_format']			=	$p['grconnect_reg_date_format'];
			$param['exclusion_period']		=	$p['grconnect_reg_exclusion_period'];
			
			$url	=	$this->api_url.'/register';
			$ch = curl_init();
			curl_setopt($ch,CURLOPT_URL,$url);
			curl_setopt($ch,CURLOPT_HEADER,0);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $param); 
			$response = curl_exec($ch);
			curl_close($ch);

			
			$res = json_decode($response, true);
			
			if($res['error']	==	0){
				update_option( 'grconnect_shop_id', $res['id_shop']);
				update_option( 'grconnect_appid', $params['id_site']);
				update_option( 'grconnect_secret', $res['secret']);
				update_option( 'grconnect_payload', $res['pay_load']);
				update_option( 'grconnect_register', 1 );
				
				$res['appid']	=	$params['id_site'];
				
				$id_shop		=	$res['id_shop'];
				$admin_email	=	$params['email'];
				$payload		=	$res['pay_load'];
					
				$res['frame_url']	=	'https://appsmav.com/gr/autologin?id_shop='.$id_shop.'&admin_email='.$admin_email.'&payload='.$payload.'&cur='.get_option('woocommerce_currency','USD');
				$response	=	json_encode($res);	
			}
			die($response);
		}
		
		private function callGrConnectApi($param,$urlApi)
		{
						
			$shop_id	=	get_option('grconnect_shop_id',0);
			if($shop_id	==	0)
			{
				$this->callGrConnectRegisterApi();	
				$shop_id	=	get_option('grconnect_shop_id');
			}
					
			$grAppIdArr	=	get_option('grconnect_appid');
			$grAppId	=	!empty($grAppIdArr)?$grAppIdArr:'';
			
			$grCampIdArr	=	get_option('grconnect_secret');
			$grCampId		=	!empty($grCampIdArr)?$grCampIdArr:'';
			
			
			
			$paramSalt				=	array();
			
			
			$paramSalt['id_site']		=	$params['id_site']		=	$grAppId;
			$paramSalt['points']		=	$params['points']		=	0;
			$paramSalt['id_campaign']	=	$params['id_campaign']	=	$grCampId;
			$paramSalt['email']			=	$params['email']		=	$param['email'];
			
			$params['app']			=	'WP';
			$params['name']			=	$param['name'];
			$params['comment']		=	$param['comment'];
			
			
			
			$allparam				=	implode('#WP#',$paramSalt);
			$params['salt']			=	md5($allparam);
			
			$params['id_shop']		=	$shop_id;
			$params['coupon']		=	isset($param['coupon'])?$param['coupon']:'';
			$params['id_order']		=	$param['id_order'];
			$params['amount']		=	$param['total'];
			$params['currency']		=	get_option('woocommerce_currency','USD');
			$params['status']		=	$param['status'];			
		
			if($grAppId	!=	'' && $grCampId	!=	''){
				// throw new Exception("Gr app id or app secret is missing");
					
				 $url = $urlApi;
				 $ch = curl_init();
				 curl_setopt($ch,CURLOPT_URL,$url);
				 curl_setopt($ch,CURLOPT_HEADER,0);
				 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
				 curl_setopt($ch, CURLOPT_POSTFIELDS, $params); 
				 $response = curl_exec($ch);
				 curl_close($ch);

				
				 $res = json_decode($response, true);
										
				 if(empty($res['error']) === false)
				 {
					
					$msg = 'Unexpected error occur. Please check with administrator.';
											
					//throw new Exception($msg);
				 }
				
			}else{
				echo 'Gr app id or secret is missing';
			}
			
			return;
		}

    } // END class GR_Connect
} // END if(!class_exists('GR_Connect'))


if(class_exists('GR_Connect'))
{
    // Installation and uninstallation hooks
    register_activation_hook(__FILE__, array('GR_Connect', 'activate'));
    register_deactivation_hook(__FILE__, array('GR_Connect', 'deactivate'));

    // instantiate the plugin class
    $gr_connect = new GR_Connect();
	
	// Add the settings link to the plugins page
    function plugin_settings_link($links)
    { 
        $settings_link = '<a href="options-general.php?page=grconnect">Settings</a>'; 
        array_unshift($links, $settings_link); 
        return $links; 
    }

    $plugin = plugin_basename(__FILE__); 
    add_filter("plugin_action_links_$plugin", 'plugin_settings_link');

}