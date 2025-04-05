<?php
/**
 * wp-bizone WordPress Theme, ordasvit.com
 * wp-bizone is distributed under the terms of the GNU GPL
 * Copyright: OrdaSvit, Andrey Kvasnevskiy, ordasvit.com
 */

get_header(); ?>

<div id="primary" class="content-area">
	<div id="content" class="site-content author_articles" role="main">

		<?php get_template_part('templates/positions-before-content'); ?>

		<div class="<?php if (wp_bizone_is_active_sidebar("sidebar_right") && wp_bizone_is_active_sidebar("sidebar_left")) {
			echo ('col-lg-6 col-md-12 col-sm-12 col-xs-12');
		} else if (wp_bizone_is_active_sidebar("sidebar_right") || wp_bizone_is_active_sidebar("sidebar_left")) {
			echo ('col-lg-9 col-md-12 col-sm-12 col-xs-12');
		} else {
			echo ('col-lg-12 col-md-12 col-sm-12 col-xs-12');
		} ?> category-wrapper">
			<header class="archive-header">
				<div class="page-header">
					<h1 class="archive-title">
						<?php printf(__('All posts by %s', 'wp-bizone'), '<span class="vcard"><a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr(get_the_author()) . '" rel="me">' . get_the_author() . '</a></span>'); ?>
					</h1>
				</div>
			</header><!-- .archive-header -->

			<?php if (get_the_author_meta('description')) { ?>
				<?php get_template_part('author-bio'); ?>
			<?php }
			; ?>

			<?php get_template_part('templates/short-post'); ?>

		</div>

		<?php get_template_part('templates/positions-after-content'); ?>

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>