<?php
/**
 * @package GR Connect
 * @version 1.0.1
 */
/*
 Plugin Name: Gratisfaction all in one loyalty contests referral program for woocommerce
 Plugin URI: http://appsmav.com
 Description: Connect your woocommerce orders with appsmav GR Loyality program.
 Version: 1.0.1
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
		var $api_url		= 'https://appsmav.com/gr/api';
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

				$headers = array('Content-Type: text/html; charset=UTF-8', 'From: Appsmav <akash@appsmav.com>', 'Bcc: Admin Appsmav <developers@appsmav.com>');

				wp_mail( $to, $subject, $body, $headers );
			}
        } // END public static function deactivate
		
		/**
		 * hook into WP's woocommerce payment made action hook
		 */
		public function send_status_init($order_id)
		{
			if(($_REQUEST['original_post_status']	==	'wc-cancelled') && ($_REQUEST['order_status']	!=	'wc-cancelled') ){
			
				 $urlApi = $this->api_url.'/addEntry';
				 
			}else if($_REQUEST['order_status']	==	'wc-cancelled'){
				
				$urlApi =  $this->api_url.'/removeEntry';
				
			}else{
				return;
			}
						
			// Set up the settings for this plugin
			$order = new WC_Order( $order_id );
				
			$param['subtotal'] = $order->get_subtotal();
			
			//if($param['total']	==	0)
			$param['total'] =	$param['subtotal'];
			
			$param['email']	=	$_REQUEST['_billing_email'];
			
						
			$amtArr		=	get_option('grconnect_price');
			$amt		=	!empty($amtArr)?$amtArr:'';
			
			$pntArr		=	get_option('grconnect_point');
			$pnt		=	!empty($pntArr)?$pntArr:'';
			
			$grAppIdArr	=	get_option('grconnect_appid');
			$grAppId	=	!empty($grAppIdArr)?$grAppIdArr:'';
			
			$grCampIdArr	=	get_option('grconnect_secret');
			$grCampId		=	!empty($grCampIdArr)?$grCampIdArr:'';
			
			$pntTot	=	ceil($param['total']/$amt) * $pnt;
			
			$paramSalt				=	array();
			
			
			$paramSalt['id_site']		=	$params['id_site']		=	$grAppId;
			$paramSalt['points']		=	$params['points']		=	$pntTot;
			$paramSalt['id_campaign']	=	$params['id_campaign']	=	$grCampId;
			$paramSalt['email']			=	$params['email']		=	$param['email'];
			
			$params['app']			=	'WP';
			$params['name']			=	$_REQUEST['_billing_first_name'];
			$params['comment']		=	'Order Id '.str_replace('wc-','',$_REQUEST['order_status']).' - '.$order_id.' From '.get_option('siteurl');
			
			
			$allparam	=	implode('#WP#',$paramSalt);
			$params['salt']			=	md5($allparam);
			
			
		
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
		
		}
		/**
		 * hook into WP's woocommerce payment made action hook
		 */
		public function send_connect_init($order_id)
		{
			// Set up the settings for this plugin
			$order = new WC_Order( $order_id );
			
			//echo $param['total'] = $order->get_total();
			$param['subtotal'] = $order->get_subtotal();
			$param['user'] = $order->get_user();
			
			//if($param['total']	==	0)
			$param['total'] =	$param['subtotal'];
			
			$param['email']	=	$_REQUEST['billing_email'];//$param['user']->data->user_email;
			
						
			$amtArr		=	get_option('grconnect_price');
			$amt		=	!empty($amtArr)?$amtArr:'';
			
			$pntArr		=	get_option('grconnect_point');
			$pnt		=	!empty($pntArr)?$pntArr:'';
			
			$grAppIdArr	=	get_option('grconnect_appid');
			$grAppId	=	!empty($grAppIdArr)?$grAppIdArr:'';
			
			$grCampIdArr	=	get_option('grconnect_secret');
			$grCampId		=	!empty($grCampIdArr)?$grCampIdArr:'';
			
			$pntTot	=	ceil($param['total']/$amt) * $pnt;
			
			$min_order		=	get_option('grconnect_min_order');
			if($min_order	>	$param['subtotal'] && $min_order	!= 0)
				$pntTot	=	0;
				
			$paramSalt				=	array();
			
			//print_r($param);
			$paramSalt['id_site']		=	$params['id_site']		=	$grAppId;
			$paramSalt['points']		=	$params['points']		=	$pntTot;
			$paramSalt['id_campaign']	=	$params['id_campaign']	=	$grCampId;
			$paramSalt['email']			=	$params['email']		=	$param['email'];
			
			$params['app']			=	'WP';
			$params['name']			=	$_REQUEST['billing_first_name'];
			$params['comment']		=	'Order Id - '.$order_id.' From '.get_option('siteurl');
			
			if(isset($_REQUEST['createaccount'])){
				$grWelBonuschkArr	=	get_option('grconnect_wel_bonus_chk');
				$grWelBonusChk		=	!empty($grWelBonuschkArr)?$grWelBonuschkArr:0;
				$grWelBonus			=	0;
				if($grWelBonusChk	==	1)
				{
					$grWelBonusArr	=	get_option('grconnect_wel_bonus');
					$grWelBonus		=	!empty($grWelBonusArr)?$grWelBonusArr:0;
				
					$paramSalt['points']		=	$params['points']		=	$pntTot + $grWelBonus;
					$params['comment']			=	$params['comment']." Welcome bonus added. "; 
				}
			}
			
			$allparam	=	implode('#WP#',$paramSalt);
			$params['salt']			=	md5($allparam);
			
			
			if($grAppId	!=	'' && $grCampId	!=	''){
				// throw new Exception("Gr app id or app secret is missing");
					
				 $url =  $this->api_url.'/addEntry';
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
			
						
			// Possibly do additional admin_init tasks
		} // END public static function activate
		
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
				
				$urlApi =  $this->api_url.'/addEntry';
				
							
				$amtArr		=	get_option('grconnect_price');
				$amt		=	!empty($amtArr)?$amtArr:'';
				
				$pntArr		=	get_option('grconnect_point');
				$pnt		=	!empty($pntArr)?$pntArr:'';
				
				$grAppIdArr	=	get_option('grconnect_appid');
				$grAppId	=	!empty($grAppIdArr)?$grAppIdArr:'';
				
				$grCampIdArr	=	get_option('grconnect_secret');
				$grCampId		=	!empty($grCampIdArr)?$grCampIdArr:'';
				
				$pntTot	=	ceil($param['total']/$amt) * $pnt;
				
				$paramSalt				=	array();
				
				
				$paramSalt['id_site']		=	$params['id_site']		=	$grAppId;
				$paramSalt['points']		=	$params['points']		=	$pntTot;
				$paramSalt['id_campaign']	=	$params['id_campaign']	=	$grCampId;
				$paramSalt['email']			=	$params['email']		=	$param['email'];
				
				$params['app']			=	'WP';
				$params['name']			=	$order->billing_first_name;
				$params['comment']		=	'Order Id Refund Restore - '.$refund->post->post_parent.' From '.get_option('siteurl');
				
				
				$allparam	=	implode('#WP#',$paramSalt);
				$params['salt']			=	md5($allparam);
				
				
			
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
			}
			
			// Possibly do additional admin_init tasks
		} // END public static function activate
		
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
			
			$urlApi =  $this->api_url.'/removeEntry';
			
						
			$amtArr		=	get_option('grconnect_price');
			$amt		=	!empty($amtArr)?$amtArr:'';
			
			$pntArr		=	get_option('grconnect_point');
			$pnt		=	!empty($pntArr)?$pntArr:'';
			
			$grAppIdArr	=	get_option('grconnect_appid');
			$grAppId	=	!empty($grAppIdArr)?$grAppIdArr:'';
			
			$grCampIdArr	=	get_option('grconnect_secret');
			$grCampId		=	!empty($grCampIdArr)?$grCampIdArr:'';
			
			$pntTot	=	ceil($param['total']/$amt) * $pnt;
			
			$paramSalt				=	array();
			
			
			$paramSalt['id_site']		=	$params['id_site']		=	$grAppId;
			$paramSalt['points']		=	$params['points']		=	$pntTot;
			$paramSalt['id_campaign']	=	$params['id_campaign']	=	$grCampId;
			$paramSalt['email']			=	$params['email']		=	$param['email'];
			
			$params['app']			=	'WP';
			$params['name']			=	$order->billing_first_name;
			$params['comment']		=	'Order Id Refunded - '.$order_id.' From '.get_option('siteurl');
			
			
			$allparam	=	implode('#WP#',$paramSalt);
			$params['salt']			=	md5($allparam);
			
			
		
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
			}
			// Possibly do additional admin_init tasks
		} // END public static function activate

		/**
		 * Initialize some custom settings
		 */     
		public function init_settings()
		{
			
			// register the settings for this plugin
			register_setting('grconnect-group', 'grconnect_appid');			
			register_setting('grconnect-group', 'grconnect_secret');			
			register_setting('grconnect-group', 'grconnect_point');			
			register_setting('grconnect-group', 'grconnect_price');	
			register_setting('grconnect-group', 'grconnect_min_order');			
			register_setting('grconnect-group', 'grconnect_wel_bonus_chk');			
			register_setting('grconnect-group', 'grconnect_wel_bonus');
		} // END public function init_custom_settings()
		
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
			include(sprintf("%s/templates/settings.php", dirname(__FILE__)));
		} // END public function plugin_settings_page()

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