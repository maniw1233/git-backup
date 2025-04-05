<?php
/**
 * wp-bizone WordPress Theme, ordasvit.com
 * wp-bizone is distributed under the terms of the GNU GPL
 * Copyright: OrdaSvit, Andrey Kvasnevskiy, ordasvit.com
 */
?>

<div class="row comments">
	<div class="col-lg-12">

		<?php if (have_comments()): ?>
			<h2 class="comments-title">
				<?php
				printf(
					_nx('One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'wp-bizone'),
					number_format_i18n(get_comments_number()),
					'<span>' . get_the_title() . '</span>'
				);
				?>
			</h2>

			<ul class="comment-list">
				<?php
				wp_list_comments(
					array(
						'style' => 'ul',
						'short_ping' => true,
						'avatar_size' => 74,
					));
				?>
			</ul><!-- .comment-list -->

			<?php
			// Are there comments to navigate through?
			if (get_comment_pages_count() > 1 && get_option('page_comments')):
				?>
				<nav class="navigation comment-navigation" role="navigation">
					<h1 class="screen-reader-text section-heading">
						<?php _e('Comment navigation', 'wp-bizone'); ?>
					</h1>
					<div class="nav-previous">
						<?php previous_comments_link(__('&larr; Older Comments', 'wp-bizone')); ?>
					</div>
					<div class="nav-next">
						<?php next_comments_link(__('Newer Comments &rarr;', 'wp-bizone')); ?>
					</div>
				</nav><!-- .comment-navigation -->
			<?php endif; // Check for comment navigation ?>

			<?php if (!comments_open() && get_comments_number()): ?>
				<p class="no-comments">
					<?php _e('Comments are closed.', 'wp-bizone'); ?>
				</p>
			<?php endif; ?>

		<?php endif; ?>

		<?php comment_form(); ?>

	</div>

</div><!-- #comments -->