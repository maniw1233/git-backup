<?php
/**
 * wp-bizone WordPress Theme, ordasvit.com
 * wp-bizone is distributed under the terms of the GNU GPL
 * Copyright: OrdaSvit, Andrey Kvasnevskiy, ordasvit.com
 */

get_header(); ?>
<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

		<?php get_template_part('templates/positions-before-content'); ?>

		<div class="<?php if (wp_bizone_is_active_sidebar("sidebar_right") && wp_bizone_is_active_sidebar("sidebar_left")) {
			echo ('col-lg-6 col-md-12 col-sm-12 col-xs-12');
		} else if (wp_bizone_is_active_sidebar("sidebar_right") || wp_bizone_is_active_sidebar("sidebar_left")) {
			echo ('col-lg-9 col-md-12 col-sm-12 col-xs-12');
		} else {
			echo ('col-lg-12 col-md-12 col-sm-12 col-xs-12');
		} ?>  main_page">

			<?php if (have_posts()): ?>
				<header class="archive-header">
					<h1 class="archive-title">
						<?php printf(__('%s Archives', 'wp-bizone'), '<span>' . get_post_format_string(get_post_format()) . '</span>'); ?>
					</h1>
				</header><!-- .archive-header -->

				<?php
				while (have_posts()) {
					the_post(); ?>
					<div class="row">
						<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="full_imgs left">
								<a href="<?php the_permalink() ?>">
									<?php the_post_thumbnail(array(878, 878)); ?>
								</a>
							</div>
							<h3 class="title-post-cat"><a href="<?php the_permalink() ?>">
									<?php the_title(); ?>
								</a></h3>
							<p class="desc-post-cat">
								<?php the_excerpt(); ?>
							</p>
							<div class="link">
								<a href="<?php the_permalink() ?>">
									<?php _e("Details >", "wp-bizone"); ?>
								</a>
							</div>
						</div>
					</div>
				<?php }

				?>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cat-pagination wp-block-query-pagination">
					<?php
					wp_bizone_the_posts_navigation();
					?>
				</div>

			<?php else: ?>
				<?php get_template_part('content', 'none'); ?>
			<?php endif; ?>
		</div>

		<?php get_template_part('templates/positions-after-content'); ?>

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>