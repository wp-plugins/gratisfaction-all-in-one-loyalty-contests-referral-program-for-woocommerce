<div class="wrap">
    <h2>GR Connect</h2>
    <form method="post" action="options.php"> 
        <?php @settings_fields('grconnect-group'); ?>
        <?php @do_settings_fields('grconnect-group'); ?>

        <table class="form-table">  
            <tr valign="top">
                <th scope="row"><label for="grconnect_appid">AppId</label></th>
                <td><input type="text" name="grconnect_appid" id="grconnect_appid" value="<?php echo get_option('grconnect_appid'); ?>" /></td>
            </tr> 
			<tr valign="top">
                <th scope="row"><label for="grconnect_secret">Secret</label></th>
                <td><input type="text" name="grconnect_secret" id="grconnect_secret" value="<?php echo get_option('grconnect_secret'); ?>" /></td>
            </tr>
			<tr valign="top">
                <th scope="row"><label for="grconnect_point">Points</label></th>
                <td><input type="text" name="grconnect_point" id="grconnect_point" value="<?php echo get_option('grconnect_point'); ?>" /></td>
            </tr>
			<tr valign="top">
                <th scope="row"><label for="grconnect_price">Price</label></th>
                <td><input type="text" name="grconnect_price" id="grconnect_price" value="<?php echo get_option('grconnect_price'); ?>" /></td>
            </tr>
			<tr valign="top">
                <th scope="row"><label for="grconnect_min_order">Minimum Order</label><br><small class="help-block">By default a customer earns points from orders regardless of the order value (tax, shippind,discount and handling excluded). Put 0 if not want to apply it</small></th>
                <td><input type="text" name="grconnect_min_order" id="grconnect_min_order" value="<?php echo get_option('grconnect_min_order'); ?>" /></td>
            </tr>
			<tr valign="top">
                <th scope="row"><label for="grconnect_wel_bonus">Welcome Bonus</label><br><small class="help-block">If enable, a one-time Welcome bonus is automatically given to all store accounts eligible for the loyality program)</small></th>
                <td>
					<table>
						<tr>
							<td>
								<input type="radio" name="grconnect_wel_bonus_chk" value="1" />ON
								<input type="radio" name="grconnect_wel_bonus_chk" value="0" />OFF
							</td></tr>
						<tr><td><input type="text" name="grconnect_wel_bonus" id="grconnect_wel_bonus" value="<?php echo get_option('grconnect_wel_bonus'); ?>" />Points</td></tr>
					</table>
				</td>
            </tr>
           
        </table>

        <?php @submit_button(); ?>
    </form>
</div>
<script type="text/javascript">
	jQuery(document).ready(function(){
		var grconnect_wel_bonus_chk	=	'<?php echo get_option('grconnect_wel_bonus_chk'); ?>';
		
		if(	grconnect_wel_bonus_chk == '1')
		{
			jQuery('#grconnect_wel_bonus').attr('disabled', false);
			jQuery('input[name="grconnect_wel_bonus_chk"][value="1"]').attr('checked', 'checked');
		}
		else
		{
			jQuery('#grconnect_wel_bonus').attr('disabled', 'disabled');
			jQuery('input[name="grconnect_wel_bonus_chk"][value="0"]').attr('checked', 'checked');
		}
		
		jQuery('input[name=grconnect_wel_bonus_chk]').on('click',function(){
			var grconnect_wel_bonus_chk	=	jQuery(this).val();
			if(	grconnect_wel_bonus_chk == 1)
			{
				jQuery('#grconnect_wel_bonus').attr('disabled', false);
			}
			else
			{
				jQuery('#grconnect_wel_bonus').attr('disabled', 'disabled');
			}
		});
	});
</script>