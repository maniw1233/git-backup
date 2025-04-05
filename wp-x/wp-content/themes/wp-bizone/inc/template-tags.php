<?php
/**
 * wp-bizone WordPress Theme, ordasvit.com
 * wp-bizone is distributed under the terms of the GNU GPL
 * Copyright: OrdaSvit, Andrey Kvasnevskiy, ordasvit.com
 */


/**
 * Logo & Description
 */

/**
 * Displays the site logo, either text or image.
 *
 * @param array $args    Arguments for displaying the site logo either as an image or text.
 * @param bool  $display Display or return the HTML.
 * @return string Compiled HTML based on our arguments.
 */
function wp_bizone_site_logo( $args = array(), $display = true ) {
	$logo       = get_custom_logo();
	$site_title = get_bloginfo( 'name' );
	$contents   = '';
	$classname  = '';

	$defaults = array(
		'logo'        => '%1$s<span class="screen-reader-text">%2$s</span>',
		'logo_class'  => 'site-logo',
		'title'       => '<a href="%1$s">%2$s</a>',
		'title_class' => 'site-title',
		'home_wrap'   => '<h1 class="%1$s">%2$s</h1>',
		'single_wrap' => '<div class="%1$s faux-heading">%2$s</div>',
		'condition'   => ( is_front_page() || is_home() ) && ! is_page(),
	);

	$args = wp_parse_args( $args, $defaults );

	/**
	 * Filters the arguments for `wp_bizone_site_logo
	 * @param array $defaults Function's default arguments.
	 */
	$args = apply_filters( 'wp_bizone_site_logo_args', $args, $defaults );

	if ( has_custom_logo() ) {
		$contents  = sprintf( $args['logo'], $logo, esc_html( $site_title ) );
		$classname = $args['logo_class'];
	} else {
		$contents  = sprintf( $args['title'], esc_url( get_home_url( null, '/' ) ), esc_html( $site_title ) );
		$classname = $args['title_class'];
	}

	$wrap = $args['condition'] ? 'home_wrap' : 'single_wrap';

	$html = sprintf( $args[ $wrap ], $classname, $contents );

	/**
	 * Filters the arguments for `wp_bizone_site_logo()`.
	 *
	 * @param string $html      Compiled HTML based on our arguments.
	 * @param array  $args      Parsed arguments.
	 * @param string $classname Class name based on current view, home or single.
	 * @param string $contents  HTML for site title or logo.
	 */
	$html = apply_filters( 'wp_bizone_site_logo', $html, $args, $classname, $contents );

	if ( ! $display ) {
		return $html;
	}

	echo $html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}

/**
 * Displays the site description.
 *
 * @param bool $display Display or return the HTML.
 * @return string The HTML to display.
 */
function wp_bizone_site_description( $display = true ) {
	$description = get_bloginfo( 'description' );

	if ( ! $description ) {
		return;
	}

	$wrapper = '<div class="site-description">%s</div><!-- .site-description -->';

	$html = sprintf( $wrapper, esc_html( $description ) );

	/**
	 * Filters the HTML for the site description.
	 *
	 * @param string $html        The HTML to display.
	 * @param string $description Site description via `bloginfo()`.
	 * @param string $wrapper     The format used in case you want to reuse it in a `sprintf()`.
	 */
	$html = apply_filters( 'wp_bizone_site_description', $html, $description, $wrapper );

	if ( ! $display ) {
		return $html;
	}

	echo $html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}

if (!function_exists('wp_bizone_posted_on')) {
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 *
	 * @return void
	 */
	function wp_bizone_posted_on()
	{
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

		$time_string = sprintf(
			$time_string,
			esc_attr(get_the_date(DATE_W3C)),
			esc_html(get_the_date())
		);
		echo '<span class="posted-on">';
		printf(
			/* translators: %s: Publish date. */
			esc_html__('Published %s', 'wp-bizone'),
			$time_string // phpcs:ignore WordPress.Security.EscapeOutput
		);
		echo '</span>';
	}
}

if (!function_exists('wp_bizone_posted_by')) {
/**
 * Custom template tags for this theme
 *
 * @package WordPress
 * @subpackage wp_bizone
 */

	function wp_bizone_posted_by()
	{
		if (!get_the_author_meta('description') && post_type_supports(get_post_type(), 'author')) {
			echo '<span class="byline">';
			printf(
				/* translators: %s: Author name. */
				esc_html__('By %s', 'wp-bizone'),
				'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" rel="author">' . esc_html(get_the_author()) . '</a>'
			);
			echo '</span>';
		}
	}
}

if (!function_exists('wp_bizone_entry_meta_footer')) {
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 * Footer entry meta is displayed differently in archives and single posts.
	 *
	 *
	 * @return void
	 */
	function wp_bizone_entry_meta_footer()
	{

		// Early exit if not a post.
		if ('post' !== get_post_type()) {
			return;
		}

		// Hide meta information on pages.
		if (!is_single()) {

			if (is_sticky()) {
				echo '<p>' . esc_html_x('Featured post', 'Label for sticky posts', 'wp-bizone') . '</p>';
			}

			$post_format = get_post_format();
			if ('aside' === $post_format || 'status' === $post_format) {
				echo '<p><a href="' . esc_url(get_permalink()) . '">' . wp_bizone_continue_reading_text() . '</a></p>'; // phpcs:ignore WordPress.Security.EscapeOutput
			}

			// Posted on.
			wp_bizone_posted_on();

			// Edit post link.
			edit_post_link(
				sprintf(
					/* translators: %s: Post title. Only visible to screen readers. */
					esc_html__('Edit %s', 'wp-bizone'),
					'<span class="screen-reader-text">' . get_the_title() . '</span>'
				),
				'<span class="edit-link">',
				'</span><br>'
			);

			if (has_category() || has_tag()) {

				echo '<div class="post-taxonomies">';

				$categories_list = get_the_category_list(wp_get_list_item_separator());
				if ($categories_list) {
					printf(
						/* translators: %s: List of categories. */
						'<span class="cat-links">' . esc_html__('Categorized as %s', 'wp-bizone') . ' </span>',
						$categories_list // phpcs:ignore WordPress.Security.EscapeOutput
					);
				}

				$tags_list = get_the_tag_list('', wp_get_list_item_separator());
				if ($tags_list) {
					printf(
						/* translators: %s: List of tags. */
						'<span class="tags-links">' . esc_html__('Tagged %s', 'wp-bizone') . '</span>',
						$tags_list // phpcs:ignore WordPress.Security.EscapeOutput
					);
				}
				echo '</div>';
			}
		} else {

			echo '<div class="posted-by">';
			// Posted on.
			wp_bizone_posted_on();
			// Posted by.
			wp_bizone_posted_by();
			// Edit post link.
			edit_post_link(
				sprintf(
					/* translators: %s: Post title. Only visible to screen readers. */
					esc_html__('Edit %s', 'wp-bizone'),
					'<span class="screen-reader-text">' . get_the_title() . '</span>'
				),
				'<span class="edit-link">',
				'</span>'
			);
			echo '</div>';

			if (has_category() || has_tag()) {

				echo '<div class="post-taxonomies">';

				if (function_exists('wp_get_list_item_separator'))
					$delimiter = wp_get_list_item_separator();
				else
					$delimiter = ', ';

				$categories_list = get_the_category_list($delimiter);
				if ($categories_list) {
					printf(
						/* translators: %s: List of categories. */
						'<span class="cat-links">' . esc_html('Categorized as %s', 'delta') . ' </span>',
						$categories_list // phpcs:ignore WordPress.Security.EscapeOutput
					);
				}

				$tags_list = get_the_tag_list('', $delimiter);
				if ($tags_list) {
					printf(
						/* translators: %s: List of tags. */
						'<span class="tags-links">' . esc_html__('Tagged %s', 'wp-bizone') . '</span>',
						$tags_list // phpcs:ignore WordPress.Security.EscapeOutput
					);
				}
				echo '</div>';
			}
		}
	}
}

if ( ! function_exists( 'wp_bizone_the_posts_navigation' ) ) {
	function wp_bizone_the_posts_navigation() {
		the_posts_pagination(
			array(
				'before_page_number' => esc_html__( '', 'wp-bizone' ) . ' ',
				'mid_size'           => 1,
				'prev_text'          => sprintf(
					'%s <span class="nav-prev-text">%s</span>',
					is_rtl() ? ( '<i class="fas fa-angle-double-right"></i>' ) : ( '<i class="fas fa-angle-double-left"></i>' ),
					wp_kses(
						__( '<span class="nav-short">Prev</span>', 'wp-bizone' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					)
				),
				'next_text'          => sprintf(
					'<span class="nav-next-text">%s</span> %s',
					wp_kses(
						__( '<span class="nav-short">Next</span>', 'wp-bizone' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					is_rtl() ? ( '<i class="fas fa-angle-double-left"></i>' ) : ( '<i class="fas fa-angle-double-right"></i>' )
				),
			)
		);
	}
}
