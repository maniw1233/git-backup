<?php
/**
 * wp-bizone WordPress Theme, ordasvit.com
 * wp-bizone is distributed under the terms of the GNU GPL
 * Copyright: OrdaSvit, Andrey Kvasnevskiy, ordasvit.com
 */
?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>
	<?php
	if ($wp_version >= 5.2)
		wp_body_open();
	?>



	<a class="top_up">
		<i class="fas fa-angle-double-up"></i>
	</a>


	<!-- start top menu -->
	<?php if (has_nav_menu('top_menu')) { ?>
		<div class="wrapper-top-menu col-lg-12 col-sm-12 col-xs-12">
			<nav id="navbar-top-menu" class="wrapper-inner-top-menu">
				<button id="button-top-menu" class="" type="button">
					<i class="fas fa-bars"></i>
					<span>
						<?php esc_html_e('menu', 'wp-bizone') ?>
					</span>
				</button>

				<?php
				wp_nav_menu(
					array(
						'menu' => '',
						'container' => 'div',
						'container_class' => 'container-top-menu',
						'container_id' => '',
						'container_aria_label' => '',
						'menu_class' => 'top-menu menu',
						'menu_id' => 'menu-top-menu',
						'echo' => true,
						'fallback_cb' => 'wp_page_menu',
						'before' => '',
						'after' => '',
						'link_before' => '',
						'link_after' => '',
						'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'item_spacing' => 'preserve',
						'depth' => 3,
						'walker' => '',
						'theme_location' => 'top_menu',
					)
				);
				?>
			</nav>
		</div>
	<?php } ?>
	<!-- end top menu -->

	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 wrapper-custom-logo-link">
					<?php

					if (function_exists('wp_bizone_site_logo')) {
						wp_bizone_site_logo();
					}
					if (function_exists('wp_bizone_site_description')) {
						wp_bizone_site_description();
					}

					?>

				</div>

				<div class="wrapper-menu col-lg-10 col-md-12 col-sm-12 col-xs-12">

					<div class="row">

						<?php if (!has_nav_menu('primary_menu')) { ?>
							<div class="col-lg-12 col-sm-12 col-xs-12">

								<nav id="site-navigation" class="navbar navbar-expand-lg bg-body-tertiary main-navigation"
									role="navigation">
									<div class="container-fluid">
										<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
											data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
											aria-expanded="false"
											aria-label="<?php esc_attr_e('Toggle navigation', 'wp-bizone'); ?>">
											<i class="fas fa-bars"></i>
										</button>

										<?php
										wp_nav_menu(
											array(
												'menu' => '',
												'container' => '',
												'container_class' => '',
												'container_id' => '',
												'container_aria_label' => '',
												'menu_class' => 'navbar-nav menu collapse navbar-collapse',
												'menu_id' => 'navbarSupportedContent',
												'echo' => true,
												'fallback_cb' => 'wp_page_menu',
												'before' => '',
												'after' => '',
												'link_before' => '',
												'link_after' => '',
												'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
												'item_spacing' => 'preserve',
												'depth' => 0,
												'walker' => '',
												'theme_location' => '',
											)
										);
										?>
									</div>
								</nav><!-- #site-navigation -->

							</div>
						<?php } ?>

						<?php if (has_nav_menu('primary_menu')) { ?>
							<div class="col-lg-12 col-sm-12 col-xs-12">

								<nav id="site-navigation-primary"
									class="navbar navbar-expand-lg bg-body-tertiary main-navigation" role="navigation">
									<div class="container-fluid">
										<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
											data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
											aria-expanded="false"
											aria-label="<?php esc_attr_e('Toggle navigation', 'wp-bizone'); ?>">
											<i class="fas fa-bars"></i>
										</button>

										<?php
										wp_nav_menu(
											array(
												'menu' => '',
												'container' => '',
												'container_class' => '',
												'container_id' => '',
												'container_aria_label' => '',
												'menu_class' => 'navbar-nav menu collapse navbar-collapse',
												'menu_id' => 'navbarSupportedContent',
												'echo' => true,
												'fallback_cb' => 'wp_page_menu',
												'before' => '',
												'after' => '',
												'link_before' => '',
												'link_after' => '',
												'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
												'item_spacing' => 'preserve',
												'depth' => 0,
												'walker' => '',
												'theme_location' => 'primary_menu',
											)
										);
										?>
									</div>
								</nav><!-- #site-navigation -->

							</div>
						<?php } ?>

					</div>

				</div>


				<?php
				if (!wp_bizone_show_position_preview("header_position_cart", 'col-lg-2 col-sm-12 col-xs-12') && wp_bizone_is_active_sidebar("header_position_cart")) { ?>
					<div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('header_position_cart'); ?>
					</div>
				<?php }
				?>

			</div>

			<div class="row">

				<?php
				if (!wp_bizone_show_position_preview("position_left_header", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("position_left_header")) { ?>
					<div class="<?php if (wp_bizone_is_active_sidebar("position_right_header") && wp_bizone_is_active_sidebar("position_center_left_header") && wp_bizone_is_active_sidebar("position_center_right_header")) {
						echo 'col-md-3 col-sm-3 col-xs-12';
					} else if (wp_bizone_is_active_sidebar("position_right_header") && wp_bizone_is_active_sidebar("position_center_left_header")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("position_right_header") && wp_bizone_is_active_sidebar("position_center_right_header")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("position_center_left_header") && wp_bizone_is_active_sidebar("position_center_right_header")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("position_right_header") || wp_bizone_is_active_sidebar("position_center_left_header")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("position_center_left_header") || wp_bizone_is_active_sidebar("position_center_right_header")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("position_right_header") || wp_bizone_is_active_sidebar("position_center_right_header")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("position_right_header") || wp_bizone_is_active_sidebar("position_center_left_header") || wp_bizone_is_active_sidebar("position_center_right_header")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else {
						echo ('col-lg-12');
					} ?>">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('position_left_header'); ?>
					</div>
				<?php }
				; ?>

				<?php
				if (!wp_bizone_show_position_preview("position_center_left_header", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("position_center_left_header")) { ?>
					<div class="<?php if (wp_bizone_is_active_sidebar("position_right_header") && wp_bizone_is_active_sidebar("position_left_header") && wp_bizone_is_active_sidebar("position_center_right_header")) {
						echo 'col-md-3 col-sm-3 col-xs-12';
					} else if (wp_bizone_is_active_sidebar("position_right_header") && wp_bizone_is_active_sidebar("position_left_header")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("position_right_header") && wp_bizone_is_active_sidebar("position_center_right_header")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("position_left_header") && wp_bizone_is_active_sidebar("position_center_right_header")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("position_right_header") || wp_bizone_is_active_sidebar("position_left_header")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("position_left_header") || wp_bizone_is_active_sidebar("position_center_right_header")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("position_right_header") || wp_bizone_is_active_sidebar("position_center_right_header")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("position_right_header") || wp_bizone_is_active_sidebar("position_left_header") || wp_bizone_is_active_sidebar("position_center_right_header")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else {
						echo ('col-lg-12');
					} ?>">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('position_center_left_header'); ?>
					</div>
				<?php }
				; ?>

				<?php
				if (!wp_bizone_show_position_preview("position_center_right_header", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("position_center_right_header")) { ?>
					<div class="<?php if (wp_bizone_is_active_sidebar("position_right_header") && wp_bizone_is_active_sidebar("position_center_left_header") && wp_bizone_is_active_sidebar("position_left_header")) {
						echo 'col-md-3 col-sm-3 col-xs-12';
					} else if (wp_bizone_is_active_sidebar("position_right_header") && wp_bizone_is_active_sidebar("position_center_left_header")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("position_right_header") && wp_bizone_is_active_sidebar("position_left_header")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("position_center_left_header") && wp_bizone_is_active_sidebar("position_left_header")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("position_right_header") || wp_bizone_is_active_sidebar("position_center_left_header")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("position_center_left_header") || wp_bizone_is_active_sidebar("position_left_header")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("position_right_header") || wp_bizone_is_active_sidebar("position_left_header")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("position_right_header") || wp_bizone_is_active_sidebar("position_center_left_header") || wp_bizone_is_active_sidebar("position_left_header")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else {
						echo ('col-lg-12');
					} ?>">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('position_center_right_header'); ?>
					</div>
				<?php }
				; ?>

				<?php
				if (!wp_bizone_show_position_preview("position_right_header", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("position_right_header")) { ?>
					<div class="<?php if (wp_bizone_is_active_sidebar("position_left_header") && wp_bizone_is_active_sidebar("position_center_left_header") && wp_bizone_is_active_sidebar("position_center_right_header")) {
						echo 'col-md-3 col-sm-3 col-xs-12';
					} else if (wp_bizone_is_active_sidebar("position_left_header") && wp_bizone_is_active_sidebar("position_center_left_header")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("position_left_header") && wp_bizone_is_active_sidebar("position_center_right_header")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("position_center_left_header") && wp_bizone_is_active_sidebar("position_center_right_header")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("position_left_header") || wp_bizone_is_active_sidebar("position_center_left_header")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("position_center_left_header") || wp_bizone_is_active_sidebar("position_center_right_header")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("position_left_header") || wp_bizone_is_active_sidebar("position_center_right_header")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_bizone_is_active_sidebar("position_left_header") || wp_bizone_is_active_sidebar("position_center_left_header") || wp_bizone_is_active_sidebar("position_center_right_header")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else {
						echo ('col-lg-12');
					} ?>">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('position_right_header'); ?>
					</div>
				<?php }
				; ?>

			</div>
		</div>

	</div>