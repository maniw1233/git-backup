<?php
/**
 * wp-bizone WordPress Theme, ordasvit.com
 * wp-bizone is distributed under the terms of the GNU GPL
 * Copyright: OrdaSvit, Andrey Kvasnevskiy, ordasvit.com
 */

get_header();

?>

<div id="main" class="site-main">

	<div id="wrapper-content">
		<div class="row">

			<?php
			if (!wp_bizone_show_position_preview("top_left", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("top_left")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("top_right") && wp_bizone_is_active_sidebar("top_left_center") && wp_bizone_is_active_sidebar("top_right_center")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("top_right") && wp_bizone_is_active_sidebar("top_left_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("top_right") && wp_bizone_is_active_sidebar("top_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("top_left_center") && wp_bizone_is_active_sidebar("top_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("top_right") || wp_bizone_is_active_sidebar("top_left_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("top_left_center") || wp_bizone_is_active_sidebar("top_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("top_right") || wp_bizone_is_active_sidebar("top_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("top_right") || wp_bizone_is_active_sidebar("top_left_center") || wp_bizone_is_active_sidebar("top_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('top_left'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_bizone_show_position_preview("top_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("top_left_center")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("top_right") && wp_bizone_is_active_sidebar("top_left") && wp_bizone_is_active_sidebar("top_right_center")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("top_right") && wp_bizone_is_active_sidebar("top_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("top_right") && wp_bizone_is_active_sidebar("top_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("top_left") && wp_bizone_is_active_sidebar("top_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("top_right") || wp_bizone_is_active_sidebar("top_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("top_left") || wp_bizone_is_active_sidebar("top_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("top_right") || wp_bizone_is_active_sidebar("top_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("top_right") || wp_bizone_is_active_sidebar("top_left") || wp_bizone_is_active_sidebar("top_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('top_left_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_bizone_show_position_preview("top_right_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("top_right_center")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("top_right") && wp_bizone_is_active_sidebar("top_left_center") && wp_bizone_is_active_sidebar("top_left")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("top_right") && wp_bizone_is_active_sidebar("top_left_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("top_right") && wp_bizone_is_active_sidebar("top_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("top_left_center") && wp_bizone_is_active_sidebar("top_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("top_right") || wp_bizone_is_active_sidebar("top_left_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("top_left_center") || wp_bizone_is_active_sidebar("top_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("top_right") || wp_bizone_is_active_sidebar("top_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("top_right") || wp_bizone_is_active_sidebar("top_left_center") || wp_bizone_is_active_sidebar("top_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('top_right_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_bizone_show_position_preview("top_right", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("top_right")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("top_left") && wp_bizone_is_active_sidebar("top_left_center") && wp_bizone_is_active_sidebar("top_right_center")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("top_left") && wp_bizone_is_active_sidebar("top_left_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("top_left") && wp_bizone_is_active_sidebar("top_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("top_left_center") && wp_bizone_is_active_sidebar("top_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("top_left") || wp_bizone_is_active_sidebar("top_left_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("top_left_center") || wp_bizone_is_active_sidebar("top_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("top_left") || wp_bizone_is_active_sidebar("top_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("top_left") || wp_bizone_is_active_sidebar("top_left_center") || wp_bizone_is_active_sidebar("top_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('top_right'); ?>
				</div>
			<?php }
			; ?>

		</div>

		<div id="about-us">
			<h3 class="my_widget_title_custom">
				<?php _e('About us', 'wp-bizone'); ?>
			</h3>
			<h4 class="sub-title-block">
				<?php esc_html_e('We are creative team', 'wp-bizone') ?>
			</h4>
			<div class="container wrapper-about-us">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
						<div class="wrapper-inner-about-us">
							<i class="fa fa-desktop"></i>
							<h3>
								<?php esc_html_e('responsive', 'wp-bizone') ?>
							</h3>
							<p>
								<?php esc_html_e('Fully responsive wordpress template', 'wp-bizone') ?>
							</p>
							<a href="#!">
								<?php esc_html_e('read more', 'wp-bizone') ?>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
						<div class="wrapper-inner-about-us">
							<i class="fa fa-cog"></i>
							<h3>
								<?php esc_html_e('BUSINESS', 'wp-bizone') ?>
							</h3>
							<p>
								<?php esc_html_e('Modern business web template', 'wp-bizone') ?>
							</p>
							<a href="#!">
								<?php esc_html_e('read more', 'wp-bizone') ?>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
						<div class="wrapper-inner-about-us">
							<i class="fa fa-laptop"></i>
							<h3>
								<?php esc_html_e('PORTFOLIO', 'wp-bizone') ?>
							</h3>
							<p>
								<?php esc_html_e('One page wordpress portfolio template', 'wp-bizone') ?>
							</p>
							<a href="#!">
								<?php esc_html_e('read more', 'wp-bizone') ?>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
						<div class="wrapper-inner-about-us">
							<i class="fa fa-paper-plane"></i>
							<h3>
								<?php esc_html_e('CREATIVE', 'wp-bizone') ?>
							</h3>
							<p>
								<?php esc_html_e('Young creative web design', 'wp-bizone') ?>
							</p>
							<a href="#!">
								<?php esc_html_e('read more', 'wp-bizone') ?>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">

			<?php
			if (!wp_bizone_show_position_preview("line1_left", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line1_left")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("line1_right") && wp_bizone_is_active_sidebar("line1_left_center") && wp_bizone_is_active_sidebar("line1_right_center")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("line1_right") && wp_bizone_is_active_sidebar("line1_left_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line1_right") && wp_bizone_is_active_sidebar("line1_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line1_left_center") && wp_bizone_is_active_sidebar("line1_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line1_right") || wp_bizone_is_active_sidebar("line1_left_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line1_left_center") || wp_bizone_is_active_sidebar("line1_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line1_right") || wp_bizone_is_active_sidebar("line1_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line1_right") || wp_bizone_is_active_sidebar("line1_left_center") || wp_bizone_is_active_sidebar("line1_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12 title_blog');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line1_left'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_bizone_show_position_preview("line1_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line1_left_center")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("line1_right") && wp_bizone_is_active_sidebar("line1_left") && wp_bizone_is_active_sidebar("line1_right_center")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("line1_right") && wp_bizone_is_active_sidebar("line1_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line1_right") && wp_bizone_is_active_sidebar("line1_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line1_left") && wp_bizone_is_active_sidebar("line1_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line1_right") || wp_bizone_is_active_sidebar("line1_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line1_left") || wp_bizone_is_active_sidebar("line1_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line1_right") || wp_bizone_is_active_sidebar("line1_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line1_right") || wp_bizone_is_active_sidebar("line1_left") || wp_bizone_is_active_sidebar("line1_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line1_left_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_bizone_show_position_preview("line1_right_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line1_right_center")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("line1_right") && wp_bizone_is_active_sidebar("line1_left_center") && wp_bizone_is_active_sidebar("line1_left")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("line1_right") && wp_bizone_is_active_sidebar("line1_left_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line1_right") && wp_bizone_is_active_sidebar("line1_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line1_left_center") && wp_bizone_is_active_sidebar("line1_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line1_right") || wp_bizone_is_active_sidebar("line1_left_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line1_left_center") || wp_bizone_is_active_sidebar("line1_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line1_right") || wp_bizone_is_active_sidebar("line1_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line1_right") || wp_bizone_is_active_sidebar("line1_left_center") || wp_bizone_is_active_sidebar("line1_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line1_right_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_bizone_show_position_preview("line1_right", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line1_right")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("line1_left") && wp_bizone_is_active_sidebar("line1_left_center") && wp_bizone_is_active_sidebar("line1_right_center")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("line1_left") && wp_bizone_is_active_sidebar("line1_left_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line1_left") && wp_bizone_is_active_sidebar("line1_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line1_left_center") && wp_bizone_is_active_sidebar("line1_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line1_left") || wp_bizone_is_active_sidebar("line1_left_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line1_left_center") || wp_bizone_is_active_sidebar("line1_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line1_left") || wp_bizone_is_active_sidebar("line1_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line1_left") || wp_bizone_is_active_sidebar("line1_left_center") || wp_bizone_is_active_sidebar("line1_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line1_right'); ?>
				</div>
			<?php }
			; ?>

		</div>

		<div class="row">

			<?php
			if (!wp_bizone_show_position_preview("line2_left", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line2_left")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("line2_left_center") && wp_bizone_is_active_sidebar("line2_right_center") && wp_bizone_is_active_sidebar("line2_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("line2_left_center") && wp_bizone_is_active_sidebar("line2_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line2_left_center") && wp_bizone_is_active_sidebar("line2_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line2_right_center") && wp_bizone_is_active_sidebar("line2_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line2_left_center") || wp_bizone_is_active_sidebar("line2_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12 line2 left');
				} else if (wp_bizone_is_active_sidebar("line2_right_center") || wp_bizone_is_active_sidebar("line2_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 left');
				} else if (wp_bizone_is_active_sidebar("line2_left_center") || wp_bizone_is_active_sidebar("line2_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 left');
				} else if (wp_bizone_is_active_sidebar("line2_left_center") || wp_bizone_is_active_sidebar("line2_right_center") || wp_bizone_is_active_sidebar("line2_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 line2 left');
				} else {
					echo ('col-lg-12 menu_title');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line2_left'); ?>

				</div>
			<?php }
			; ?>

			<?php
			if (!wp_bizone_show_position_preview("line2_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line2_left_center")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("line2_left") && wp_bizone_is_active_sidebar("line2_right_center") && wp_bizone_is_active_sidebar("line2_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("line2_left") && wp_bizone_is_active_sidebar("line2_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line2_left") && wp_bizone_is_active_sidebar("line2_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line2_right_center") && wp_bizone_is_active_sidebar("line2_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line2_left") || wp_bizone_is_active_sidebar("line2_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12 right');
				} else if (wp_bizone_is_active_sidebar("line2_right_center") || wp_bizone_is_active_sidebar("line2_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 right');
				} else if (wp_bizone_is_active_sidebar("line2_left") || wp_bizone_is_active_sidebar("line2_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 right');
				} else if (wp_bizone_is_active_sidebar("line2_left") || wp_bizone_is_active_sidebar("line2_right_center") || wp_bizone_is_active_sidebar("line2_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 line2 right');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line2_left_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_bizone_show_position_preview("line2_right_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line2_right_center")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("line2_left_center") && wp_bizone_is_active_sidebar("line2_left") && wp_bizone_is_active_sidebar("line2_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("line2_left_center") && wp_bizone_is_active_sidebar("line2_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line2_left_center") && wp_bizone_is_active_sidebar("line2_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line2_left") && wp_bizone_is_active_sidebar("line2_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line2_left_center") || wp_bizone_is_active_sidebar("line2_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line2_left") || wp_bizone_is_active_sidebar("line2_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line2_left_center") || wp_bizone_is_active_sidebar("line2_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line2_left_center") || wp_bizone_is_active_sidebar("line2_left") || wp_bizone_is_active_sidebar("line2_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 line2');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line2_right_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_bizone_show_position_preview("line2_right", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line2_right")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("line2_left_center") && wp_bizone_is_active_sidebar("line2_right_center") && wp_bizone_is_active_sidebar("line2_left")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("line2_left_center") && wp_bizone_is_active_sidebar("line2_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line2_left_center") && wp_bizone_is_active_sidebar("line2_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line2_left_center") && wp_bizone_is_active_sidebar("line2_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line2_left_center") || wp_bizone_is_active_sidebar("line2_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line2_right_center") || wp_bizone_is_active_sidebar("line2_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line2_left_center") || wp_bizone_is_active_sidebar("line2_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line2_left_center") || wp_bizone_is_active_sidebar("line2_right_center") || wp_bizone_is_active_sidebar("line2_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12 line2');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line2_right'); ?>
				</div>
			<?php }
			; ?>

		</div>

		<div class="container">
			<div class="row">

				<?php
				if (!wp_bizone_show_position_preview("line3_left", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line3_left")) { ?>
					<div class="<?php if (wp_bizone_is_active_sidebar("line3_left_center") && wp_bizone_is_active_sidebar("line3_right_center") && wp_bizone_is_active_sidebar("line3_right")) {
						echo 'col-md-3 col-sm-3 col-xs-12';
					} else if (wp_bizone_is_active_sidebar("line3_left_center") && wp_bizone_is_active_sidebar("line3_right_center")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line3_left_center") && wp_bizone_is_active_sidebar("line3_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line3_right_center") && wp_bizone_is_active_sidebar("line3_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line3_left_center") || wp_bizone_is_active_sidebar("line3_right_center")) {
						echo ('col-md-6 col-sm-6 col-xs-12 title_left');
					} else if (wp_bizone_is_active_sidebar("line3_right_center") || wp_bizone_is_active_sidebar("line3_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line3_left_center") || wp_bizone_is_active_sidebar("line3_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line3_left_center") || wp_bizone_is_active_sidebar("line3_right_center") || wp_bizone_is_active_sidebar("line3_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12 title_left');
					} else {
						echo ('col-lg-12');
					} ?>">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('line3_left'); ?>
					</div>
				<?php }
				; ?>

				<?php
				if (!wp_bizone_show_position_preview("line3_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line3_left_center")) { ?>
					<div class="<?php if (wp_bizone_is_active_sidebar("line3_left") && wp_bizone_is_active_sidebar("line3_right_center") && wp_bizone_is_active_sidebar("line3_right")) {
						echo 'col-md-3 col-sm-3 col-xs-12';
					} else if (wp_bizone_is_active_sidebar("line3_left") && wp_bizone_is_active_sidebar("line3_right_center")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line3_left") && wp_bizone_is_active_sidebar("line3_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line3_right_center") && wp_bizone_is_active_sidebar("line3_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line3_left") || wp_bizone_is_active_sidebar("line3_right_center")) {
						echo ('col-md-6 col-sm-6 col-xs-12 right');
					} else if (wp_bizone_is_active_sidebar("line3_right_center") || wp_bizone_is_active_sidebar("line3_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12 right');
					} else if (wp_bizone_is_active_sidebar("line3_left") || wp_bizone_is_active_sidebar("line3_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12 right');
					} else if (wp_bizone_is_active_sidebar("line3_left") || wp_bizone_is_active_sidebar("line3_right_center") || wp_bizone_is_active_sidebar("line3_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12 right');
					} else {
						echo ('col-lg-12');
					} ?>">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('line3_left_center'); ?>
					</div>
				<?php }
				; ?>

				<?php
				if (!wp_bizone_show_position_preview("line3_right_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line3_right_center")) { ?>
					<div class="<?php if (wp_bizone_is_active_sidebar("line3_left_center") && wp_bizone_is_active_sidebar("line3_left") && wp_bizone_is_active_sidebar("line3_right")) {
						echo 'col-md-3 col-sm-3 col-xs-12';
					} else if (wp_bizone_is_active_sidebar("line3_left_center") && wp_bizone_is_active_sidebar("line3_left")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line3_left_center") && wp_bizone_is_active_sidebar("line3_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line3_left") && wp_bizone_is_active_sidebar("line3_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line3_left_center") || wp_bizone_is_active_sidebar("line3_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line3_left") || wp_bizone_is_active_sidebar("line3_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line3_left_center") || wp_bizone_is_active_sidebar("line3_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line3_left_center") || wp_bizone_is_active_sidebar("line3_left") || wp_bizone_is_active_sidebar("line3_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else {
						echo ('col-lg-12');
					} ?>">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('line3_right_center'); ?>
					</div>
				<?php }
				; ?>

				<?php
				if (!wp_bizone_show_position_preview("line3_right", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line3_right")) { ?>
					<div class="<?php if (wp_bizone_is_active_sidebar("line3_left_center") && wp_bizone_is_active_sidebar("line3_right_center") && wp_bizone_is_active_sidebar("line3_left")) {
						echo 'col-md-3 col-sm-3 col-xs-12';
					} else if (wp_bizone_is_active_sidebar("line3_left_center") && wp_bizone_is_active_sidebar("line3_right_center")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line3_left_center") && wp_bizone_is_active_sidebar("line3_left")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line3_left_center") && wp_bizone_is_active_sidebar("line3_left")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line3_left_center") || wp_bizone_is_active_sidebar("line3_right_center")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line3_right_center") || wp_bizone_is_active_sidebar("line3_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line3_left_center") || wp_bizone_is_active_sidebar("line3_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line3_left_center") || wp_bizone_is_active_sidebar("line3_right_center") || wp_bizone_is_active_sidebar("line3_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else {
						echo ('col-lg-12');
					} ?>">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('line3_right'); ?>
					</div>
				<?php }
				; ?>

			</div>
		</div>

		<div id="our-services">
			<h3 class="my_widget_title_custom">
				<?php _e('OUR SERVICES', 'wp-bizone'); ?>
			</h3>
			<h4 class="sub-title-block">
				<?php esc_html_e('We are creative team', 'wp-bizone') ?>
			</h4>
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<div class="wrapper-service">
							<i class="fa fa-flag"></i>
							<div>
								<h3>
									<?php esc_html_e('FONT AWESOME ICONS', 'wp-bizone') ?>
								</h3>
								<p>
									<?php esc_html_e('Lorem ipsum dolor sit amet, conse adipiscing elit adipiscing', 'wp-bizone') ?>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<div class="wrapper-service">
							<i class="fa fa-desktop"></i>
							<div>
								<h3>
									<?php esc_html_e('RESPONSIVE LAYOUT', 'wp-bizone') ?>
								</h3>
								<p>
									<?php esc_html_e('Lorem ipsum dolor sit amet, conse adipiscing elit adipiscing', 'wp-bizone') ?>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<div class="wrapper-service">
							<i class="fab fa-html5"></i>
							<div>
								<h3>
									<?php esc_html_e('HIGH-TECH DEVELOPMENT', 'wp-bizone') ?>
								</h3>
								<p>
									<?php esc_html_e('Lorem ipsum dolor sit amet, conse adipiscing elit adipiscing', 'wp-bizone') ?>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<div class="wrapper-service">
							<i class="fa fa-clock"></i>
							<div>
								<h3>
									<?php esc_html_e('PRODUCTION TIME', 'wp-bizone') ?>
								</h3>
								<p>
									<?php esc_html_e('Lorem ipsum dolor sit amet, conse adipiscing elit adipiscing', 'wp-bizone') ?>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<div class="wrapper-service">
							<i class="fas fa-exchange-alt"></i>
							<div>
								<h3>
									<?php esc_html_e('INSTANT', 'wp-bizone') ?>
								</h3>
								<p>
									<?php esc_html_e('Lorem ipsum dolor sit amet, conse adipiscing elit adipiscing', 'wp-bizone') ?>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<div class="wrapper-service">
							<i class="fab fa-css3"></i>
							<div>
								<h3>
									<?php esc_html_e('NEW STANDARD', 'wp-bizone') ?>
								</h3>
								<p>
									<?php esc_html_e('Lorem ipsum dolor sit amet, conse adipiscing elit adipiscing', 'wp-bizone') ?>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<div class="wrapper-service">
							<i class="fas fa-tachometer-alt"></i>
							<div>
								<h3>
									<?php esc_html_e('PRODUCTION SPEED', 'wp-bizone') ?>
								</h3>
								<p>
									<?php esc_html_e('Lorem ipsum dolor sit amet, conse adipiscing elit adipiscing', 'wp-bizone') ?>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<div class="wrapper-service">
							<i class="fa fa-cogs"></i>
							<div>
								<h3>
									<?php esc_html_e('QUICK START', 'wp-bizone') ?>
								</h3>
								<p>
									<?php esc_html_e('Lorem ipsum dolor sit amet, conse adipiscing elit adipiscing', 'wp-bizone') ?>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<div class="wrapper-service">
							<i class="fa fa-tint"></i>
							<div>
								<h3>
									<?php esc_html_e('COLOR DESIGN', 'wp-bizone') ?>
								</h3>
								<p>
									<?php esc_html_e('Lorem ipsum dolor sit amet, conse adipiscing elit adipiscing', 'wp-bizone') ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">

			<?php
			if (!wp_bizone_show_position_preview("line4_left", 'col-md-3 col-sm-3 col-xs-12 blocks left') && wp_bizone_is_active_sidebar("line4_left")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("line4_left_center") && wp_bizone_is_active_sidebar("line4_right_center") && wp_bizone_is_active_sidebar("line4_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12 blocks left';
				} else if (wp_bizone_is_active_sidebar("line4_left_center") && wp_bizone_is_active_sidebar("line4_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line4_left_center") && wp_bizone_is_active_sidebar("line4_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line4_right_center") && wp_bizone_is_active_sidebar("line4_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line4_left_center") || wp_bizone_is_active_sidebar("line4_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line4_right_center") || wp_bizone_is_active_sidebar("line4_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line4_left_center") || wp_bizone_is_active_sidebar("line4_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line4_left_center") || wp_bizone_is_active_sidebar("line4_right_center") || wp_bizone_is_active_sidebar("line4_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line4_left'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_bizone_show_position_preview("line4_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line4_left_center")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("line4_left") && wp_bizone_is_active_sidebar("line4_right_center") && wp_bizone_is_active_sidebar("line4_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("line4_left") && wp_bizone_is_active_sidebar("line4_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line4_left") && wp_bizone_is_active_sidebar("line4_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line4_right_center") && wp_bizone_is_active_sidebar("line4_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line4_left") || wp_bizone_is_active_sidebar("line4_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line4_right_center") || wp_bizone_is_active_sidebar("line4_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line4_left") || wp_bizone_is_active_sidebar("line4_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line4_left") || wp_bizone_is_active_sidebar("line4_right_center") || wp_bizone_is_active_sidebar("line4_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line4_left_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_bizone_show_position_preview("line4_right_center", 'col-md-3 col-sm-3 col-xs-12 blocks in_up') && wp_bizone_is_active_sidebar("line4_right_center")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("line4_left_center") && wp_bizone_is_active_sidebar("line4_left") && wp_bizone_is_active_sidebar("line4_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12 blocks in_up';
				} else if (wp_bizone_is_active_sidebar("line4_left_center") && wp_bizone_is_active_sidebar("line4_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line4_left_center") && wp_bizone_is_active_sidebar("line4_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line4_left") && wp_bizone_is_active_sidebar("line4_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line4_left_center") || wp_bizone_is_active_sidebar("line4_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line4_left") || wp_bizone_is_active_sidebar("line4_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line4_left_center") || wp_bizone_is_active_sidebar("line4_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line4_left_center") || wp_bizone_is_active_sidebar("line4_left") || wp_bizone_is_active_sidebar("line4_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line4_right_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_bizone_show_position_preview("line4_right", 'col-md-3 col-sm-3 col-xs-12 blocks right') && wp_bizone_is_active_sidebar("line4_right")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("line4_left_center") && wp_bizone_is_active_sidebar("line4_right_center") && wp_bizone_is_active_sidebar("line4_left")) {
					echo 'col-md-3 col-sm-3 col-xs-12 blocks right';
				} else if (wp_bizone_is_active_sidebar("line4_left_center") && wp_bizone_is_active_sidebar("line4_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line4_left_center") && wp_bizone_is_active_sidebar("line4_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line4_left_center") && wp_bizone_is_active_sidebar("line4_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line4_left_center") || wp_bizone_is_active_sidebar("line4_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line4_right_center") || wp_bizone_is_active_sidebar("line4_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line4_left_center") || wp_bizone_is_active_sidebar("line4_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line4_left_center") || wp_bizone_is_active_sidebar("line4_right_center") || wp_bizone_is_active_sidebar("line4_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line4_right'); ?>
				</div>
			<?php }
			; ?>

		</div>

		<div class="wrapperStatistics">
			<h3>
				<?php esc_html_e('our statistic', 'wp-bizone') ?>
			</h3>
			<h4 class="sub-title-block">
				<?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'wp-bizone') ?>
			</h4>
			<div class="wrapperOneStatistics">
				<p class="statisticsNumber">
					<?php esc_html_e('7900', 'wp-bizone') ?>
				</p>
				<h4>
					<?php esc_html_e('SATISFIED CUSTOMERS', 'wp-bizone') ?>
				</h4>
			</div>
			<div class="wrapperOneStatistics">
				<p class="statisticsNumber">
					<?php esc_html_e('69875', 'wp-bizone') ?>
				</p>
				<h4>
					<?php esc_html_e('SATISFIED CUSTOMERS', 'wp-bizone') ?>
				</h4>
			</div>
			<div class="wrapperOneStatistics">
				<p class="statisticsNumber">
					<?php esc_html_e('589', 'wp-bizone') ?>
				</p>
				<h4>
					<?php esc_html_e('SATISFIED CUSTOMERS', 'wp-bizone') ?>
				</h4>
			</div>
		</div>

		<div class="container">
			<div class="row">

				<?php
				if (!wp_bizone_show_position_preview("center_left", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("center_left")) { ?>
					<div class="<?php if (wp_bizone_is_active_sidebar("center_left_position") && wp_bizone_is_active_sidebar("center_right_position") && wp_bizone_is_active_sidebar("center_right")) {
						echo 'col-md-3 col-sm-3 col-xs-12';
					} else if (wp_bizone_is_active_sidebar("center_left_position") && wp_bizone_is_active_sidebar("center_right_position")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("center_left_position") && wp_bizone_is_active_sidebar("center_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("center_right_position") && wp_bizone_is_active_sidebar("center_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("center_left_position") || wp_bizone_is_active_sidebar("center_right_position")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("center_right_position") || wp_bizone_is_active_sidebar("center_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("center_left_position") || wp_bizone_is_active_sidebar("center_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("center_left_position") || wp_bizone_is_active_sidebar("center_right_position") || wp_bizone_is_active_sidebar("center_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else {
						echo ('col-lg-12');
					} ?>">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('center_left'); ?>
					</div>
				<?php }
				; ?>

				<?php
				if (!wp_bizone_show_position_preview("center_left_position", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("center_left_position")) {
					?>
					<div class="<?php if (wp_bizone_is_active_sidebar("center_left") && wp_bizone_is_active_sidebar("center_right_position") && wp_bizone_is_active_sidebar("center_right")) {
						echo 'col-md-3 col-sm-3 col-xs-12';
					} else if (wp_bizone_is_active_sidebar("center_left") && wp_bizone_is_active_sidebar("center_right_position")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("center_left") && wp_bizone_is_active_sidebar("center_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("center_right_position") && wp_bizone_is_active_sidebar("center_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("center_left") || wp_bizone_is_active_sidebar("center_right_position")) {
						echo ('col-md-6 col-sm-6 col-xs-12 title_left');
					} else if (wp_bizone_is_active_sidebar("center_right_position") || wp_bizone_is_active_sidebar("center_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12 title_left');
					} else if (wp_bizone_is_active_sidebar("center_left") || wp_bizone_is_active_sidebar("center_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12 title_left');
					} else if (wp_bizone_is_active_sidebar("center_left") || wp_bizone_is_active_sidebar("center_right_position") || wp_bizone_is_active_sidebar("center_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12 title_left');
					} else {
						echo ('col-lg-12');
					} ?>">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('center_left_position'); ?>
					</div>
				<?php }
				; ?>

				<?php
				if (!wp_bizone_show_position_preview("center_right_position", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("center_right_position")) { ?>
					<div class="<?php if (wp_bizone_is_active_sidebar("center_left_position") && wp_bizone_is_active_sidebar("center_left") && wp_bizone_is_active_sidebar("center_right")) {
						echo 'col-md-3 col-sm-3 col-xs-12';
					} else if (wp_bizone_is_active_sidebar("center_left_position") && wp_bizone_is_active_sidebar("center_left")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("center_left_position") && wp_bizone_is_active_sidebar("center_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("center_left") && wp_bizone_is_active_sidebar("center_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("center_left_position") || wp_bizone_is_active_sidebar("center_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("center_left") || wp_bizone_is_active_sidebar("center_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("center_left_position") || wp_bizone_is_active_sidebar("center_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("center_left_position") || wp_bizone_is_active_sidebar("center_left") || wp_bizone_is_active_sidebar("center_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else {
						echo ('col-lg-12');
					} ?>">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('center_right_position'); ?>
					</div>
				<?php }
				; ?>

				<?php
				if (!wp_bizone_show_position_preview("center_right", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("center_right")) { ?>
					<div class="<?php if (wp_bizone_is_active_sidebar("center_left_position") && wp_bizone_is_active_sidebar("center_right_position") && wp_bizone_is_active_sidebar("center_left")) {
						echo 'col-md-3 col-sm-3 col-xs-12';
					} else if (wp_bizone_is_active_sidebar("center_left_position") && wp_bizone_is_active_sidebar("center_right_position")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("center_left_position") && wp_bizone_is_active_sidebar("center_left")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("center_right_position") && wp_bizone_is_active_sidebar("center_left")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("center_left_position") || wp_bizone_is_active_sidebar("center_right_position")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("center_right_position") || wp_bizone_is_active_sidebar("center_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("center_left_position") || wp_bizone_is_active_sidebar("center_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("center_left_position") || wp_bizone_is_active_sidebar("center_right_position") || wp_bizone_is_active_sidebar("center_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else {
						echo ('col-lg-12');
					} ?>">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('center_right'); ?>
					</div>
				<?php }
				; ?>

			</div>
		</div>

		<div class="container">
			<div class="row">

				<?php
				if (!wp_bizone_show_position_preview("sidebar_left", 'col-lg-3 col-md-12 col-sm-12 col-xs-12') && wp_bizone_is_active_sidebar("sidebar_left")) { ?>
					<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 side_bar_left_page">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('sidebar_left'); ?>
					</div>
				<?php }
				; ?>

				<div class="<?php if (wp_bizone_is_active_sidebar("sidebar_right") && wp_bizone_is_active_sidebar("sidebar_left")) {
					echo ('col-lg-6 col-md-12 col-sm-12 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("sidebar_right") || wp_bizone_is_active_sidebar("sidebar_left")) {
					echo ('col-lg-9 col-md-12 col-sm-12 col-xs-12');
				} else {
					echo ('col-lg-12 col-md-12 col-sm-12 col-xs-12');
				} ?>  main_page">

					<?php wp_bizone_show_position_preview("main_content"); ?>

				</div>

				<?php if (!wp_bizone_show_position_preview("sidebar_right", "col-lg-3 col-md-12 col-sm-12 col-xs-12") && wp_bizone_is_active_sidebar("sidebar_right")) {
					if (function_exists('dynamic_sidebar') && wp_bizone_is_active_sidebar("sidebar_right")) {
						?>
						<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 side_bar_right_page">
							<?php
							dynamic_sidebar('sidebar_right');
							?>
						</div>
						<?php
					}
				}
				;
				?>

			</div>
		</div>

		<div class="row">
			<?php
			if (!wp_bizone_show_position_preview("line5_left", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line5_left")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("line5_right_center") && wp_bizone_is_active_sidebar("line5_right") && wp_bizone_is_active_sidebar("line5_left_center")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("line5_right_center") && wp_bizone_is_active_sidebar("line5_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line5_right_center") && wp_bizone_is_active_sidebar("line5_left_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line5_right_center") && wp_bizone_is_active_sidebar("line5_left_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line5_right_center") || wp_bizone_is_active_sidebar("line5_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 gallery left');
				} else if (wp_bizone_is_active_sidebar("line5_right") || wp_bizone_is_active_sidebar("line5_left_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12 gallery left');
				} else if (wp_bizone_is_active_sidebar("line5_right_center") || wp_bizone_is_active_sidebar("line5_left_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12 gallery left');
				} else if (wp_bizone_is_active_sidebar("line5_right_center") || wp_bizone_is_active_sidebar("line5_right") || wp_bizone_is_active_sidebar("line5_left_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12 gallery left');
				} else {
					echo ('col-lg-12');
				} ?>">

					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line5_left'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_bizone_show_position_preview("line5_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line5_left_center")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("line5_right_center") && wp_bizone_is_active_sidebar("line5_right") && wp_bizone_is_active_sidebar("line5_left")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("line5_right_center") && wp_bizone_is_active_sidebar("line5_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line5_right_center") && wp_bizone_is_active_sidebar("line5_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line5_right") && wp_bizone_is_active_sidebar("line5_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line5_right_center") || wp_bizone_is_active_sidebar("line5_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 right');
				} else if (wp_bizone_is_active_sidebar("line5_right") || wp_bizone_is_active_sidebar("line5_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12 right');
				} else if (wp_bizone_is_active_sidebar("line5_right_center") || wp_bizone_is_active_sidebar("line5_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12 right');
				} else if (wp_bizone_is_active_sidebar("line5_right_center") || wp_bizone_is_active_sidebar("line5_right") || wp_bizone_is_active_sidebar("line5_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12 right');
				} else {
					echo ('col-lg-12');
				} ?>">

					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line5_left_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_bizone_show_position_preview("line5_right_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line5_right_center")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("line5_left_center") && wp_bizone_is_active_sidebar("line5_right") && wp_bizone_is_active_sidebar("line5_left")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("line5_left_center") && wp_bizone_is_active_sidebar("line5_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line5_left_center") && wp_bizone_is_active_sidebar("line5_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line5_right") && wp_bizone_is_active_sidebar("line5_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line5_left_center") || wp_bizone_is_active_sidebar("line5_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line5_right") || wp_bizone_is_active_sidebar("line5_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line5_left_center") || wp_bizone_is_active_sidebar("line5_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line5_left_center") || wp_bizone_is_active_sidebar("line5_right") || wp_bizone_is_active_sidebar("line5_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">

					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line5_right_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_bizone_show_position_preview("line5_right", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line5_right")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("line5_right_center") && wp_bizone_is_active_sidebar("line5_left_center") && wp_bizone_is_active_sidebar("line5_left")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("line5_right_center") && wp_bizone_is_active_sidebar("line5_left_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line5_right_center") && wp_bizone_is_active_sidebar("line5_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line5_left_center") && wp_bizone_is_active_sidebar("line5_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line5_right_center") || wp_bizone_is_active_sidebar("line5_left_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line5_left_center") || wp_bizone_is_active_sidebar("line5_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line5_right_center") || wp_bizone_is_active_sidebar("line5_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line5_right_center") || wp_bizone_is_active_sidebar("line5_left_center") || wp_bizone_is_active_sidebar("line5_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line5_right'); ?>
				</div>
			<?php }
			; ?>
		</div>

		<div class="row">

			<?php
			if (!wp_bizone_show_position_preview("line6_left", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line6_left")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("line6_left_center") && wp_bizone_is_active_sidebar("line6_right_center") && wp_bizone_is_active_sidebar("line6_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("line6_left_center") && wp_bizone_is_active_sidebar("line6_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line6_left_center") && wp_bizone_is_active_sidebar("line6_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line6_right_center") && wp_bizone_is_active_sidebar("line6_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line6_left_center") || wp_bizone_is_active_sidebar("line6_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12 title_post left');
				} else if (wp_bizone_is_active_sidebar("line6_right_center") || wp_bizone_is_active_sidebar("line6_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 title_post');
				} else if (wp_bizone_is_active_sidebar("line6_left_center") || wp_bizone_is_active_sidebar("line6_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 title_post');
				} else if (wp_bizone_is_active_sidebar("line6_left_center") || wp_bizone_is_active_sidebar("line6_right_center") || wp_bizone_is_active_sidebar("line6_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 title_post');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line6_left'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_bizone_show_position_preview("line6_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line6_left_center")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("line6_left") && wp_bizone_is_active_sidebar("line6_right_center") && wp_bizone_is_active_sidebar("line6_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("line6_left") && wp_bizone_is_active_sidebar("line6_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line6_left") && wp_bizone_is_active_sidebar("line6_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line6_right_center") && wp_bizone_is_active_sidebar("line6_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line6_left") || wp_bizone_is_active_sidebar("line6_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12 title_post_left');
				} else if (wp_bizone_is_active_sidebar("line6_right_center") || wp_bizone_is_active_sidebar("line6_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 title_post_left');
				} else if (wp_bizone_is_active_sidebar("line6_left") || wp_bizone_is_active_sidebar("line6_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 title_post_left');
				} else if (wp_bizone_is_active_sidebar("line6_left") || wp_bizone_is_active_sidebar("line6_right_center") || wp_bizone_is_active_sidebar("line6_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 title_post_left');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line6_left_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_bizone_show_position_preview("line6_right_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line6_right_center")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("line6_left_center") && wp_bizone_is_active_sidebar("line6_left") && wp_bizone_is_active_sidebar("line6_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("line6_left_center") && wp_bizone_is_active_sidebar("line6_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line6_left_center") && wp_bizone_is_active_sidebar("line6_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line6_left") && wp_bizone_is_active_sidebar("line6_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line6_left_center") || wp_bizone_is_active_sidebar("line6_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line6_left") || wp_bizone_is_active_sidebar("line6_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line6_left_center") || wp_bizone_is_active_sidebar("line6_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line6_left_center") || wp_bizone_is_active_sidebar("line6_left") || wp_bizone_is_active_sidebar("line6_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line6_right_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_bizone_show_position_preview("line6_right", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line6_right")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("line6_left_center") && wp_bizone_is_active_sidebar("line6_right_center") && wp_bizone_is_active_sidebar("line6_left")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("line6_left_center") && wp_bizone_is_active_sidebar("line6_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line6_left_center") && wp_bizone_is_active_sidebar("line6_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line6_left_center") && wp_bizone_is_active_sidebar("line6_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line6_left_center") || wp_bizone_is_active_sidebar("line6_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line6_right_center") || wp_bizone_is_active_sidebar("line6_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line6_left_center") || wp_bizone_is_active_sidebar("line6_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line6_left_center") || wp_bizone_is_active_sidebar("line6_right_center") || wp_bizone_is_active_sidebar("line6_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line6_right'); ?>
				</div>
			<?php }
			; ?>

		</div>

		<div class="row">

			<?php
			if (!wp_bizone_show_position_preview("line7_left", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line7_left")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("line7_left_center") && wp_bizone_is_active_sidebar("line7_right_center") && wp_bizone_is_active_sidebar("line7_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("line7_left_center") && wp_bizone_is_active_sidebar("line7_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line7_left_center") && wp_bizone_is_active_sidebar("line7_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line7_right_center") && wp_bizone_is_active_sidebar("line7_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line7_left_center") || wp_bizone_is_active_sidebar("line7_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12 contact_title_right left');
				} else if (wp_bizone_is_active_sidebar("line7_right_center") || wp_bizone_is_active_sidebar("line7_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 contact_title_right left');
				} else if (wp_bizone_is_active_sidebar("line7_left_center") || wp_bizone_is_active_sidebar("line7_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 contact_title_right left');
				} else if (wp_bizone_is_active_sidebar("line7_left_center") || wp_bizone_is_active_sidebar("line7_right_center") || wp_bizone_is_active_sidebar("line7_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 contact_title_right left');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line7_left'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_bizone_show_position_preview("line7_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line7_left_center")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("line7_left") && wp_bizone_is_active_sidebar("line7_right_center") && wp_bizone_is_active_sidebar("line7_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("line7_left") && wp_bizone_is_active_sidebar("line7_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line7_left") && wp_bizone_is_active_sidebar("line7_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line7_right_center") && wp_bizone_is_active_sidebar("line7_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line7_left") || wp_bizone_is_active_sidebar("line7_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12 contact_title');
				} else if (wp_bizone_is_active_sidebar("line7_right_center") || wp_bizone_is_active_sidebar("line7_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 contact_title');
				} else if (wp_bizone_is_active_sidebar("line7_left") || wp_bizone_is_active_sidebar("line7_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 contact_title_right');
				} else if (wp_bizone_is_active_sidebar("line7_left") || wp_bizone_is_active_sidebar("line7_right_center") || wp_bizone_is_active_sidebar("line7_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 contact_title');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line7_left_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_bizone_show_position_preview("line7_right_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line7_right_center")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("line7_left_center") && wp_bizone_is_active_sidebar("line7_left") && wp_bizone_is_active_sidebar("line7_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("line7_left_center") && wp_bizone_is_active_sidebar("line7_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line7_left_center") && wp_bizone_is_active_sidebar("line7_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line7_left") && wp_bizone_is_active_sidebar("line7_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line7_left_center") || wp_bizone_is_active_sidebar("line7_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line7_left") || wp_bizone_is_active_sidebar("line7_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line7_left_center") || wp_bizone_is_active_sidebar("line7_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line7_left_center") || wp_bizone_is_active_sidebar("line7_left") || wp_bizone_is_active_sidebar("line7_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line7_right_center'); ?>

				</div>
			<?php }
			; ?>

			<?php
			if (!wp_bizone_show_position_preview("line7_right", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line7_right")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("line7_left_center") && wp_bizone_is_active_sidebar("line7_right_center") && wp_bizone_is_active_sidebar("line7_left")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("line7_left_center") && wp_bizone_is_active_sidebar("line7_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line7_left_center") && wp_bizone_is_active_sidebar("line7_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line7_left_center") && wp_bizone_is_active_sidebar("line7_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line7_left_center") || wp_bizone_is_active_sidebar("line7_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line7_right_center") || wp_bizone_is_active_sidebar("line7_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line7_left_center") || wp_bizone_is_active_sidebar("line7_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line7_left_center") || wp_bizone_is_active_sidebar("line7_right_center") || wp_bizone_is_active_sidebar("line7_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line7_right'); ?>
				</div>
			<?php }
			; ?>

		</div>

		<div id="our-team">
			<h3 class="my_widget_title_custom">
				<?php _e('our team', 'wp-bizone'); ?>
			</h3>
			<h4 class="sub-title-block">
				<?php esc_html_e('We are creative team', 'wp-bizone') ?>
			</h4>
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
						<div class="wrapper-team">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/images/1-270x350-1.png'); ?>"
								alt="team">
							<h3>
								<?php esc_html_e('JAC FITRU', 'wp-bizone') ?>
							</h3>
							<h4>
								<?php esc_html_e('Lawyer', 'wp-bizone') ?>
							</h4>
							<p>
								<?php esc_html_e('Consectetuer adipiscing elit, sed diam nonummy nibh', 'wp-bizone') ?>
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
						<div class="wrapper-team">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/images/2-270x350-1.png'); ?>"
								alt="team">
							<h3>
								<?php esc_html_e('DUXER PUPS', 'wp-bizone') ?>
							</h3>
							<h4>
								<?php esc_html_e('Consultant', 'wp-bizone') ?>
							</h4>
							<p>
								<?php esc_html_e('Consectetuer adipiscing elit, sed diam nonummy nibh', 'wp-bizone') ?>
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
						<div class="wrapper-team">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/images/3-270x350-1.png'); ?>"
								alt="team">
							<h3>
								<?php esc_html_e('HICH ZOZYL', 'wp-bizone') ?>
							</h3>
							<h4>
								<?php esc_html_e('Manager', 'wp-bizone') ?>
							</h4>
							<p>
								<?php esc_html_e('Consectetuer adipiscing elit, sed diam nonummy nibh', 'wp-bizone') ?>
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
						<div class="wrapper-team">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/images/4-270x350-1.png'); ?>"
								alt="team">
							<h3>
								<?php esc_html_e('GOGO QSIP', 'wp-bizone') ?>
							</h3>
							<h4>
								<?php esc_html_e('Director', 'wp-bizone') ?>
							</h4>
							<p>
								<?php esc_html_e('Consectetuer adipiscing elit, sed diam nonummy nibh', 'wp-bizone') ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">

				<?php
				if (!wp_bizone_show_position_preview("line8_left", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line8_left")) { ?>
					<div class="<?php if (wp_bizone_is_active_sidebar("line8_left_center") && wp_bizone_is_active_sidebar("line8_right_center") && wp_bizone_is_active_sidebar("line8_right")) {
						echo 'col-md-3 col-sm-3 col-xs-12';
					} else if (wp_bizone_is_active_sidebar("line8_left_center") && wp_bizone_is_active_sidebar("line8_right_center")) {
						echo ('col-md-4 col-sm-4 col-xs-12 contact_block left');
					} else if (wp_bizone_is_active_sidebar("line8_left_center") && wp_bizone_is_active_sidebar("line8_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12 contact_block left');
					} else if (wp_bizone_is_active_sidebar("line8_right_center") && wp_bizone_is_active_sidebar("line8_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12 contact_block left');
					} else if (wp_bizone_is_active_sidebar("line8_left_center") || wp_bizone_is_active_sidebar("line8_right_center")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line8_right_center") || wp_bizone_is_active_sidebar("line8_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line8_left_center") || wp_bizone_is_active_sidebar("line8_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line8_left_center") || wp_bizone_is_active_sidebar("line8_right_center") || wp_bizone_is_active_sidebar("line8_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else {
						echo ('col-lg-12');
					} ?>">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('line8_left'); ?>
					</div>
				<?php }
				; ?>

				<?php
				if (!wp_bizone_show_position_preview("line8_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line8_left_center")) { ?>
					<div class="<?php if (wp_bizone_is_active_sidebar("line8_left") && wp_bizone_is_active_sidebar("line8_right_center") && wp_bizone_is_active_sidebar("line8_right")) {
						echo 'col-md-3 col-sm-3 col-xs-12';
					} else if (wp_bizone_is_active_sidebar("line8_left") && wp_bizone_is_active_sidebar("line8_right_center")) {
						echo ('col-md-4 col-sm-4 col-xs-12 map_block in_up');
					} else if (wp_bizone_is_active_sidebar("line8_left") && wp_bizone_is_active_sidebar("line8_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12 map_block in_up');
					} else if (wp_bizone_is_active_sidebar("line8_right_center") && wp_bizone_is_active_sidebar("line8_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12 map_block in_up');
					} else if (wp_bizone_is_active_sidebar("line8_left") || wp_bizone_is_active_sidebar("line8_right_center")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line8_right_center") || wp_bizone_is_active_sidebar("line8_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line8_left") || wp_bizone_is_active_sidebar("line8_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line8_left") || wp_bizone_is_active_sidebar("line8_right_center") || wp_bizone_is_active_sidebar("line8_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else {
						echo ('col-lg-12');
					} ?>">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('line8_left_center'); ?>
					</div>
				<?php }
				; ?>

				<?php
				if (!wp_bizone_show_position_preview("line8_right_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line8_right_center")) { ?>
					<div class="<?php if (wp_bizone_is_active_sidebar("line8_left_center") && wp_bizone_is_active_sidebar("line8_left") && wp_bizone_is_active_sidebar("line8_right")) {
						echo 'col-md-3 col-sm-3 col-xs-12';
					} else if (wp_bizone_is_active_sidebar("line8_left_center") && wp_bizone_is_active_sidebar("line8_left")) {
						echo ('col-md-4 col-sm-4 col-xs-12 adress_block right');
					} else if (wp_bizone_is_active_sidebar("line8_left_center") && wp_bizone_is_active_sidebar("line8_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12 adress_block right');
					} else if (wp_bizone_is_active_sidebar("line8_left") && wp_bizone_is_active_sidebar("line8_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12 adress_block right');
					} else if (wp_bizone_is_active_sidebar("line8_left_center") || wp_bizone_is_active_sidebar("line8_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line8_left") || wp_bizone_is_active_sidebar("line8_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line8_left_center") || wp_bizone_is_active_sidebar("line8_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line8_left_center") || wp_bizone_is_active_sidebar("line8_left") || wp_bizone_is_active_sidebar("line8_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else {
						echo ('col-lg-12');
					} ?>">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('line8_right_center'); ?>
					</div>
				<?php }
				; ?>

				<?php
				if (!wp_bizone_show_position_preview("line8_right", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line8_right")) { ?>
					<div class="<?php if (wp_bizone_is_active_sidebar("line8_left_center") && wp_bizone_is_active_sidebar("line8_right_center") && wp_bizone_is_active_sidebar("line8_left")) {
						echo 'col-md-3 col-sm-3 col-xs-12';
					} else if (wp_bizone_is_active_sidebar("line8_left_center") && wp_bizone_is_active_sidebar("line8_right_center")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line8_left_center") && wp_bizone_is_active_sidebar("line8_left")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line8_left_center") && wp_bizone_is_active_sidebar("line8_left")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line8_left_center") || wp_bizone_is_active_sidebar("line8_right_center")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line8_right_center") || wp_bizone_is_active_sidebar("line8_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line8_left_center") || wp_bizone_is_active_sidebar("line8_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("line8_left_center") || wp_bizone_is_active_sidebar("line8_right_center") || wp_bizone_is_active_sidebar("line8_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else {
						echo ('col-lg-12');
					} ?>">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('line8_right'); ?>
					</div>
				<?php }
				; ?>

			</div>
		</div>

		<div id="our-team">
			<h3 class="my_widget_title_custom">
				<?php _e('our price', 'wp-bizone'); ?>
			</h3>
			<h4 class="sub-title-block">
				<?php esc_html_e('We are creative price', 'wp-bizone') ?>
			</h4>
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
						<div class="wrapper-price">
							<h4>
								<?php esc_html_e('$39', 'wp-bizone') ?>
							</h4>
							<h3>
								<?php esc_html_e('STANDART', 'wp-bizone') ?>
							</h3>
							<p>
								<?php esc_html_e('1 Users', 'wp-bizone') ?>
							</p>
							<p>
								<?php esc_html_e('1 Workspaces', 'wp-bizone') ?>
							</p>
							<p>
								<?php esc_html_e('1 Clients', 'wp-bizone') ?>
							</p>
							<p>
								<?php esc_html_e('1Gb Storage', 'wp-bizone') ?>
							</p>
							<p>
								<?php esc_html_e('Max file size 1GB', 'wp-bizone') ?>
							</p>
							<a href="#!">
								<?php esc_html_e('get plan', 'wp-bizone') ?>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
						<div class="wrapper-price">
							<h4>
								<?php esc_html_e('$129', 'wp-bizone') ?>
							</h4>
							<h3>
								<?php esc_html_e('BUSINESS', 'wp-bizone') ?>
							</h3>
							<p>
								<?php esc_html_e('3 Users', 'wp-bizone') ?>
							</p>
							<p>
								<?php esc_html_e('3 Workspaces', 'wp-bizone') ?>
							</p>
							<p>
								<?php esc_html_e('3 Clients', 'wp-bizone') ?>
							</p>
							<p>
								<?php esc_html_e('3Gb Storage', 'wp-bizone') ?>
							</p>
							<p>
								<?php esc_html_e('Max file size 3GB', 'wp-bizone') ?>
							</p>
							<a href="#!">
								<?php esc_html_e('get plan', 'wp-bizone') ?>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
						<div class="wrapper-price">
							<h4>
								<?php esc_html_e('$177', 'wp-bizone') ?>
							</h4>
							<h3>
								<?php esc_html_e('CORPORATE', 'wp-bizone') ?>
							</h3>
							<p>
								<?php esc_html_e('5 Users', 'wp-bizone') ?>
							</p>
							<p>
								<?php esc_html_e('5 Workspaces', 'wp-bizone') ?>
							</p>
							<p>
								<?php esc_html_e('5 Clients', 'wp-bizone') ?>
							</p>
							<p>
								<?php esc_html_e('5Gb Storage', 'wp-bizone') ?>
							</p>
							<p>
								<?php esc_html_e('Max file size 5GB', 'wp-bizone') ?>
							</p>
							<a href="#!">
								<?php esc_html_e('get plan', 'wp-bizone') ?>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
						<div class="wrapper-price">
							<h4>
								<?php esc_html_e('$215', 'wp-bizone') ?>
							</h4>
							<h3>
								<?php esc_html_e('INDIVIDUAL', 'wp-bizone') ?>
							</h3>
							<p>
								<?php esc_html_e('10 Users', 'wp-bizone') ?>
							</p>
							<p>
								<?php esc_html_e('10 Workspaces', 'wp-bizone') ?>
							</p>
							<p>
								<?php esc_html_e('10 Clients', 'wp-bizone') ?>
							</p>
							<p>
								<?php esc_html_e('10Gb Storage', 'wp-bizone') ?>
							</p>
							<p>
								<?php esc_html_e('Max file size 10GB', 'wp-bizone') ?>
							</p>
							<a href="#!">
								<?php esc_html_e('get plan', 'wp-bizone') ?>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">

			<?php
			if (!wp_bizone_show_position_preview("line9_left", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line9_left")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("line9_left_center") && wp_bizone_is_active_sidebar("line9_right_center") && wp_bizone_is_active_sidebar("line9_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("line9_left_center") && wp_bizone_is_active_sidebar("line9_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line9_left_center") && wp_bizone_is_active_sidebar("line9_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line9_right_center") && wp_bizone_is_active_sidebar("line9_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line9_left_center") || wp_bizone_is_active_sidebar("line9_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line9_right_center") || wp_bizone_is_active_sidebar("line9_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line9_left_center") || wp_bizone_is_active_sidebar("line9_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line9_left_center") || wp_bizone_is_active_sidebar("line9_right_center") || wp_bizone_is_active_sidebar("line9_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line9_left'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_bizone_show_position_preview("line9_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line9_left_center")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("line9_left") && wp_bizone_is_active_sidebar("line9_right_center") && wp_bizone_is_active_sidebar("line9_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("line9_left") && wp_bizone_is_active_sidebar("line9_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line9_left") && wp_bizone_is_active_sidebar("line9_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line9_right_center") && wp_bizone_is_active_sidebar("line9_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line9_left") || wp_bizone_is_active_sidebar("line9_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line9_right_center") || wp_bizone_is_active_sidebar("line9_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line9_left") || wp_bizone_is_active_sidebar("line9_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line9_left") || wp_bizone_is_active_sidebar("line9_right_center") || wp_bizone_is_active_sidebar("line9_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line9_left_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_bizone_show_position_preview("line9_right_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line9_right_center")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("line9_left_center") && wp_bizone_is_active_sidebar("line9_left") && wp_bizone_is_active_sidebar("line9_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("line9_left_center") && wp_bizone_is_active_sidebar("line9_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line9_left_center") && wp_bizone_is_active_sidebar("line9_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line9_left") && wp_bizone_is_active_sidebar("line9_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line9_left_center") || wp_bizone_is_active_sidebar("line9_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line9_left") || wp_bizone_is_active_sidebar("line9_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line9_left_center") || wp_bizone_is_active_sidebar("line9_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line9_left_center") || wp_bizone_is_active_sidebar("line9_left") || wp_bizone_is_active_sidebar("line9_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line9_right_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_bizone_show_position_preview("line9_right", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line9_right")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("line9_left_center") && wp_bizone_is_active_sidebar("line9_right_center") && wp_bizone_is_active_sidebar("line9_left")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("line9_left_center") && wp_bizone_is_active_sidebar("line9_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line9_left_center") && wp_bizone_is_active_sidebar("line9_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line9_left_center") && wp_bizone_is_active_sidebar("line9_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line9_left_center") || wp_bizone_is_active_sidebar("line9_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line9_right_center") || wp_bizone_is_active_sidebar("line9_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line9_left_center") || wp_bizone_is_active_sidebar("line9_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("line9_left_center") || wp_bizone_is_active_sidebar("line9_right_center") || wp_bizone_is_active_sidebar("line9_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line9_right'); ?>
				</div>
			<?php }
			; ?>

		</div>

		<div class="row wrapper-bottom-row">

			<?php
			if (!wp_bizone_show_position_preview("bottom_left", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("bottom_left")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("bottom_left_center") && wp_bizone_is_active_sidebar("bottom_right_center") && wp_bizone_is_active_sidebar("bottom_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("bottom_left_center") && wp_bizone_is_active_sidebar("bottom_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("bottom_left_center") && wp_bizone_is_active_sidebar("bottom_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("bottom_right_center") && wp_bizone_is_active_sidebar("bottom_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("bottom_left_center") || wp_bizone_is_active_sidebar("bottom_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("bottom_right_center") || wp_bizone_is_active_sidebar("bottom_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("bottom_left_center") || wp_bizone_is_active_sidebar("bottom_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("bottom_left_center") || wp_bizone_is_active_sidebar("bottom_right_center") || wp_bizone_is_active_sidebar("bottom_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('bottom_left'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_bizone_show_position_preview("bottom_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("bottom_left_center")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("bottom_left") && wp_bizone_is_active_sidebar("bottom_right_center") && wp_bizone_is_active_sidebar("bottom_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("bottom_left") && wp_bizone_is_active_sidebar("bottom_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("bottom_left") && wp_bizone_is_active_sidebar("bottom_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("bottom_right_center") && wp_bizone_is_active_sidebar("bottom_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("bottom_left") || wp_bizone_is_active_sidebar("bottom_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("bottom_right_center") || wp_bizone_is_active_sidebar("bottom_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("bottom_left") || wp_bizone_is_active_sidebar("bottom_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("bottom_left") || wp_bizone_is_active_sidebar("bottom_right_center") || wp_bizone_is_active_sidebar("bottom_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('bottom_left_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_bizone_show_position_preview("bottom_right_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("bottom_right_center")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("bottom_left_center") && wp_bizone_is_active_sidebar("bottom_left") && wp_bizone_is_active_sidebar("bottom_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("bottom_left_center") && wp_bizone_is_active_sidebar("bottom_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("bottom_left_center") && wp_bizone_is_active_sidebar("bottom_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("bottom_left") && wp_bizone_is_active_sidebar("bottom_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("bottom_left_center") || wp_bizone_is_active_sidebar("bottom_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("bottom_left") || wp_bizone_is_active_sidebar("bottom_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("bottom_left_center") || wp_bizone_is_active_sidebar("bottom_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("bottom_left_center") || wp_bizone_is_active_sidebar("bottom_left") || wp_bizone_is_active_sidebar("bottom_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('bottom_right_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_bizone_show_position_preview("bottom_right", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("bottom_right")) { ?>
				<div class="<?php if (wp_bizone_is_active_sidebar("bottom_left_center") && wp_bizone_is_active_sidebar("bottom_right_center") && wp_bizone_is_active_sidebar("bottom_left")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_bizone_is_active_sidebar("bottom_left_center") && wp_bizone_is_active_sidebar("bottom_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("bottom_left_center") && wp_bizone_is_active_sidebar("bottom_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("bottom_right_center") && wp_bizone_is_active_sidebar("bottom_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("bottom_left_center") || wp_bizone_is_active_sidebar("bottom_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("bottom_right_center") || wp_bizone_is_active_sidebar("bottom_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("bottom_left_center") || wp_bizone_is_active_sidebar("bottom_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_bizone_is_active_sidebar("bottom_left_center") || wp_bizone_is_active_sidebar("bottom_right_center") || wp_bizone_is_active_sidebar("bottom_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('bottom_right'); ?>
				</div>
			<?php }
			; ?>

		</div>
	</div>


</div><!-- #main -->

<?php
get_footer();
?>