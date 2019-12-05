<?php
$wpwmm_options = get_option( 'wpwmm_options' );
if ( isset( $_POST['submit'] ) ) {

	$wpwmm_options['wpwmm_user_icon'] = htmlspecialchars( $_POST['wpwmm_user_icon'] );
	update_option( 'wpwmm_options', $wpwmm_options );
}

$message = "";
?>
<?php if ( ! empty( $_POST ) ) : ?>
	<div id="message" class="updated fade"><p><strong><?php _e( 'Options saved.' ) ?></strong></p></div>
<?php endif; ?>
<div class="wrap">
	<h2><?php _e( 'Web Media Manager Configuration', 'wp-web-media-manager' ); ?></h2>

	<div class="metabox-holder" id="poststuff">
		<div class="meta-box-sortables">
			<script>
                jQuery(document).ready(function ($) {
                    $('.postbox').children('h3, .handlediv').click(function () {
                        $(this).siblings('.inside').toggle();
                    });
                });
			</script>
			<div class="postbox">
				<div title="<?php _e( "Click to open/close", "wp-web-media-manager" ); ?>" class="handlediv">
					<br>
				</div>
				<h3 class="hndle"><span><?php _e( "Hi Web Meida author! Is it good?", "wp-web-media-manager" ); ?></span></h3>
				<div class="inside" style="display: block;">
					<img src="../wp-content/plugins/web-media-manager/img/icon_coffee.png" alt="buy me a coffee" style="height:60px; margin: 10px; float:left;"/>
					<p>Hi! This plugin from <a href="https://susu.mu?f=wpwmm" target="_blank" title="Susumu Seino">Susumu Seino</a>'s Web Media Manager.</p>
					<p>I'm been spending many hours to develop that plugin. <br/>If you like and use this plugin, you can <strong>buy a cup of coffee</strong>.</p>
				</div>
			</div>
			<form action="" method="post">


				<div class="postbox">
					<div title="<?php _e( "Click to open/close", "wp-web-media-manager" ); ?>" class="handlediv">
						<br>
					</div>
					<h3 class="hndle"><span><?php _e( "Options", "wp-web-media-manager" ); ?></span></h3>
					<div class="inside" style="display: block;">

						<table class="form-table">
							<tr>
								<th><?php _e( "User Icon (avatar) Uploader", "wp-web-media-manager" ) ?></th>
								<td>
									<label for="wpwmm-enabled" style="margin-right: 15px;">
										<input type="radio" name="wpwmm_user_icon" id="wpwmm-enabled" value="1" <?php if ( $wpwmm_options['wpwmm_user_icon'] )
											echo "checked='checked'" ?> /><?php _e( "Enabled", "wp-web-media-manager" ) ?></label>
									<label for="wpwmm-disabled">
										<input type="radio" name="wpwmm_user_icon" id="wpwmm-disabled" value="0" <?php if ( ! $wpwmm_options['wpwmm_user_icon'] )
											echo "checked='checked'" ?> /><?php _e( "Disabled", "wp-web-media-manager" ) ?></label>
								</td>
							</tr>

							<tr>
								<th></th>
								<td>
									<input type="submit" name="submit" class="button button-primary" value="<?php _e( 'Update options &raquo;' ); ?>"/>
								</td>
							</tr>

						</table>

					</div>
				</div>

			</form>
		</div>
	</div>