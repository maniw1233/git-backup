<?php
/**
 * wp-bizone WordPress Theme, ordasvit.com
 * wp-bizone is distributed under the terms of the GNU GPL
 * Copyright: OrdaSvit, Andrey Kvasnevskiy, ordasvit.com
 */
?>

<footer id="footer" class="site-footer">
	<!-- start footer menu -->
	<?php if (has_nav_menu('footer_menu')) { ?>
		<div class="wrapper-footer-menu col-lg-12 col-sm-12 col-xs-12">
			<nav id="navbar-footer-menu" class="wrapper-inner-footer-menu">
				<?php
				wp_nav_menu(
					array(
						'menu' => '',
						'container' => 'div',
						'container_class' => 'container-footer-menu',
						'container_id' => '',
						'container_aria_label' => '',
						'menu_class' => 'footer-menu',
						'menu_id' => 'menu-footer-menu',
						'echo' => true,
						'fallback_cb' => 'wp_page_menu',
						'before' => '',
						'after' => '',
						'link_before' => '',
						'link_after' => '',
						'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'item_spacing' => 'preserve',
						'depth' => 1,
						'walker' => '',
						'theme_location' => 'footer_menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</div>
	<?php } ?>
	<!-- end footer menu -->

	<div class="container">


		<div class="row">

			<div class="col-lg-12 col-sm-12 col-xs-12">
				<div class="soc_links">
					<ul>
						<?php if (get_theme_mod("wp_bizone_social_links_facebook")) { ?>
							<li><a target=_blank class="facebook fab fa-facebook"
									href='<?php echo wp_bizone_sanitize_url(get_theme_mod("wp_bizone_social_links_facebook")); ?>'></a>
							</li>
						<?php } ?>
						<?php if (get_theme_mod("wp_bizone_social_links_twitter")) { ?>
							<li><a target=_blank class="twitter fab fa-twitter"
									href='<?php echo wp_bizone_sanitize_url(get_theme_mod("wp_bizone_social_links_twitter")); ?>'></a>
							</li>
						<?php } ?>
						<?php if (get_theme_mod("wp_bizone_social_links_skype")) { ?>
							<li><a target=_blank class="skype fab fa-skype"
									href='<?php echo wp_bizone_sanitize_url(get_theme_mod("wp_bizone_social_links_skype")); ?>'></a>
							</li>
						<?php } ?>
						<?php if (get_theme_mod("wp_bizone_social_links_whatsapp")) { ?>
							<li><a target=_blank class="whatsapp fab fa-whatsapp"
									href='<?php echo wp_bizone_sanitize_url(get_theme_mod("wp_bizone_social_links_whatsapp")); ?>'></a>
							</li>
						<?php } ?>
						<?php if (get_theme_mod("wp_bizone_social_links_tiktok")) { ?>
							<li><a target=_blank class="tiktok fab fa-tiktok"
									href='<?php echo wp_bizone_sanitize_url(get_theme_mod("wp_bizone_social_links_tiktok")); ?>'></a>
							</li>
						<?php } ?>
						<?php if (get_theme_mod("wp_bizone_social_links_snapshat")) { ?>
							<li><a target=_blank class="snapchat fab fa-snapchat"
									href='<?php echo wp_bizone_sanitize_url(get_theme_mod("wp_bizone_social_links_snapshat")); ?>'></a>
							</li>
						<?php } ?>
						<?php if (get_theme_mod("wp_bizone_social_links_youtube_play")) { ?>
							<li><a target=_blank class="vimeo fab fa-youtube"
									href='<?php echo wp_bizone_sanitize_url(get_theme_mod("wp_bizone_social_links_youtube_play")); ?>'></a>
							</li>
						<?php } ?>
						<?php if (get_theme_mod("wp_bizone_social_links_instagram")) { ?>
							<li><a target=_blank class="vimeo fab fa-instagram"
									href='<?php echo wp_bizone_sanitize_url(get_theme_mod("wp_bizone_social_links_instagram")); ?>'></a>
							</li>
						<?php } ?>
						<?php if (get_theme_mod("wp_bizone_social_links_linkedin")) { ?>
							<li><a target=_blank class="vimeo fab fa-linkedin"
									href='<?php echo wp_bizone_sanitize_url(get_theme_mod("wp_bizone_social_links_linkedin")); ?>'></a>
							</li>
						<?php } ?>
						<?php if (get_theme_mod("wp_bizone_social_links_telegram")) { ?>
							<li><a target=_blank class="telegram fab fa-telegram"
									href='<?php echo wp_bizone_sanitize_url(get_theme_mod("wp_bizone_social_links_telegram")); ?>'></a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>

			<div class="row">
				<?php
				if (!wp_bizone_show_position_preview("footer_left", 'col-lg-3 col-md-6 col-sm-12 col-xs-12') && wp_bizone_is_active_sidebar("footer_left")) { ?>
					<div class="<?php if (wp_bizone_is_active_sidebar("footer_right_center") && wp_bizone_is_active_sidebar("footer_right") && wp_bizone_is_active_sidebar("footer_left_center")) {
						echo 'col-lg-3 col-md-6 col-sm-12 col-xs-12';
					} else if (wp_bizone_is_active_sidebar("footer_right_center") && wp_bizone_is_active_sidebar("footer_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("footer_right_center") && wp_bizone_is_active_sidebar("footer_left_center")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("footer_right_center") && wp_bizone_is_active_sidebar("footer_left_center")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("footer_right_center") || wp_bizone_is_active_sidebar("footer_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12 gallery left');
					} else if (wp_bizone_is_active_sidebar("footer_right") || wp_bizone_is_active_sidebar("footer_left_center")) {
						echo ('col-md-6 col-sm-6 col-xs-12 gallery left');
					} else if (wp_bizone_is_active_sidebar("footer_right_center") || wp_bizone_is_active_sidebar("footer_left_center")) {
						echo ('col-md-6 col-sm-6 col-xs-12 gallery left');
					} else if (wp_bizone_is_active_sidebar("footer_right_center") || wp_bizone_is_active_sidebar("footer_right") || wp_bizone_is_active_sidebar("footer_left_center")) {
						echo ('col-md-6 col-sm-6 col-xs-12 gallery left');
					} else {
						echo ('col-lg-12');
					} ?>">

						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('footer_left'); ?>
					</div>
				<?php }
				; ?>

				<?php
				if (!wp_bizone_show_position_preview("footer_left_center", 'col-lg-3 col-md-6 col-sm-12 col-xs-12') && wp_bizone_is_active_sidebar("footer_left_center")) { ?>
					<div class="<?php if (wp_bizone_is_active_sidebar("footer_right_center") && wp_bizone_is_active_sidebar("footer_right") && wp_bizone_is_active_sidebar("footer_left")) {
						echo 'col-lg-3 col-md-6 col-sm-12 col-xs-12';
					} else if (wp_bizone_is_active_sidebar("footer_right_center") && wp_bizone_is_active_sidebar("footer_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("footer_right_center") && wp_bizone_is_active_sidebar("footer_left")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("footer_right") && wp_bizone_is_active_sidebar("footer_left")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("footer_right_center") || wp_bizone_is_active_sidebar("footer_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12 right');
					} else if (wp_bizone_is_active_sidebar("footer_right") || wp_bizone_is_active_sidebar("footer_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12 right');
					} else if (wp_bizone_is_active_sidebar("footer_right_center") || wp_bizone_is_active_sidebar("footer_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12 right');
					} else if (wp_bizone_is_active_sidebar("footer_right_center") || wp_bizone_is_active_sidebar("footer_right") || wp_bizone_is_active_sidebar("footer_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12 right');
					} else {
						echo ('col-lg-12');
					} ?>">

						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('footer_left_center'); ?>
					</div>
				<?php }
				; ?>

				<?php
				if (!wp_bizone_show_position_preview("footer_right_center", 'col-lg-3 col-md-6 col-sm-12 col-xs-12') && wp_bizone_is_active_sidebar("footer_right_center")) { ?>
					<div class="<?php if (wp_bizone_is_active_sidebar("footer_left_center") && wp_bizone_is_active_sidebar("footer_right") && wp_bizone_is_active_sidebar("footer_left")) {
						echo 'col-lg-3 col-md-6 col-sm-12 col-xs-12';
					} else if (wp_bizone_is_active_sidebar("footer_left_center") && wp_bizone_is_active_sidebar("footer_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("footer_left_center") && wp_bizone_is_active_sidebar("footer_left")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("footer_right") && wp_bizone_is_active_sidebar("footer_left")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("footer_left_center") || wp_bizone_is_active_sidebar("footer_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("footer_right") || wp_bizone_is_active_sidebar("footer_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("footer_left_center") || wp_bizone_is_active_sidebar("footer_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("footer_left_center") || wp_bizone_is_active_sidebar("footer_right") || wp_bizone_is_active_sidebar("footer_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else {
						echo ('col-lg-12');
					} ?>">

						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('footer_right_center'); ?>
					</div>
				<?php }
				; ?>

				<?php
				if (!wp_bizone_show_position_preview("footer_right", 'col-lg-3 col-md-6 col-sm-12 col-xs-12') && wp_bizone_is_active_sidebar("footer_right")) { ?>
					<div class="<?php if (wp_bizone_is_active_sidebar("footer_right_center") && wp_bizone_is_active_sidebar("footer_left_center") && wp_bizone_is_active_sidebar("footer_left")) {
						echo 'col-lg-3 col-md-6 col-sm-12 col-xs-12';
					} else if (wp_bizone_is_active_sidebar("footer_right_center") && wp_bizone_is_active_sidebar("footer_left_center")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("footer_right_center") && wp_bizone_is_active_sidebar("footer_left")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("footer_left_center") && wp_bizone_is_active_sidebar("footer_left")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("footer_right_center") || wp_bizone_is_active_sidebar("footer_left_center")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("footer_left_center") || wp_bizone_is_active_sidebar("footer_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("footer_right_center") || wp_bizone_is_active_sidebar("footer_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("footer_right_center") || wp_bizone_is_active_sidebar("footer_left_center") || wp_bizone_is_active_sidebar("footer_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else {
						echo ('col-lg-12');
					} ?>">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('footer_right'); ?>
					</div>
				<?php }
				; ?>
			</div>

			<div class="col-xs-12 col-lg-12">
				<div id="copyright">
					<?php if ((get_theme_mod("wp_bizone_copyright_link")) && (get_theme_mod("wp_bizone_copyright"))) { ?>
						<a target="blank" class="copyright"
							title="<?php echo sanitize_text_field(get_theme_mod("wp_bizone_copyright")); ?>"
							href='<?php echo wp_bizone_sanitize_url(get_theme_mod("wp_bizone_copyright_link")); ?>'>
							<?php echo sanitize_text_field(get_theme_mod("wp_bizone_copyright")); ?>
						</a>
					<?php } ?>
					<?php if ((!get_theme_mod("wp_bizone_copyright_link")) && (get_theme_mod("wp_bizone_copyright"))) { ?>
						<p>
							<?php echo sanitize_text_field(get_theme_mod("wp_bizone_copyright")); ?>
						</p>
					<?php } ?>
					<?php if ((get_theme_mod("wp_bizone_copyright_link")) && (!get_theme_mod("wp_bizone_copyright"))) { ?>
						<a target="blank" class="copyright"
							href='<?php echo wp_bizone_sanitize_url(get_theme_mod("wp_bizone_copyright_link")); ?>'></a>
					<?php } ?>
				</div>
			</div>

		</div>


		<div class="container">
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Block')) { ?>

			<?php } ?>
		</div>


	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>