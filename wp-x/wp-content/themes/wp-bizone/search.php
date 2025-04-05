<?php
/**
 * wp-bizone WordPress Theme, ordasvit.com
 * wp-bizone is distributed under the terms of the GNU GPL
 * Copyright: OrdaSvit, Andrey Kvasnevskiy, ordasvit.com
 */

get_header();
?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

		<?php get_template_part('templates/positions-before-content'); ?>

		<div class="<?php if (wp_bizone_is_active_sidebar("sidebar_right") && wp_bizone_is_active_sidebar("sidebar_left")) {
			echo ('col-lg-6 col-md-12 col-sm-12 col-xs-12');
		} else if ( wp_bizone_is_active_sidebar("sidebar_right") || wp_bizone_is_active_sidebar("sidebar_left")) {
			echo ('col-lg-9 col-md-12 col-sm-12 col-xs-12');
		} else {
			echo ('col-lg-12 col-md-12 col-sm-12 col-xs-12');
		} ?>  main_page">

			<?php get_template_part('templates/short-post'); ?>

		</div>

		<?php get_template_part('templates/positions-after-content'); ?>

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>
