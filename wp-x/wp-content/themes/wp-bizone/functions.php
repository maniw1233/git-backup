<?php
/**
 * wp-bizone WordPress Theme, ordasvit.com
 * wp-bizone is distributed under the terms of the GNU GPL
 * Copyright: OrdaSvit, Andrey Kvasnevskiy, ordasvit.com
 */

/**
 * Add support for a custom header imageHeader Text Color.
 */

require get_template_directory() . '/inc/sanitization-callbacks.php';
require get_template_directory() . '/inc/settings-template.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-positions.php';


/**
 * wp-bizone only works in WordPress 3.6 or later.
 */
if (version_compare($GLOBALS['wp_version'], '3.6-alpha', '<'))
	require get_template_directory() . '/inc/back-compat.php';

if (!function_exists('wp_bizone_entry_meta')) {
	/**
	 * Print HTML with meta information for current post: categories, tags, permalink, author, and date.
	 * Create your own wp_bizone_entry_meta() to override in a child theme.
	 * @return void
	 */
	function wp_bizone_entry_meta()
	{
		if (is_sticky() && is_home() && !is_paged())
			echo '<span class="featured-post">' . __('Sticky', 'wp-bizone') . '</span>';

		if (!has_post_format('link') && 'post' == get_post_type())
			wp_bizone_entry_date();

		// Translators: used between list items, there is a space after the comma.
		$categories_list = get_the_category_list(__(', ', 'wp-bizone'));
		if ($categories_list) {
			echo '<span class="categories-links">' . $categories_list . '</span>';
		}

		// Translators: used between list items, there is a space after the comma.
		$tag_list = get_the_tag_list('', __(', ', 'wp-bizone'));
		if ($tag_list) {
			echo '<span class="tags-links">' . $tag_list . '</span>';
		}

		// Post author
		if ('post' == get_post_type()) {
			printf(
				'<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
				esc_url(get_author_posts_url(get_the_author_meta('ID'))),
				esc_attr(sprintf(__('View all posts by %s', 'wp-bizone'), get_the_author())),
				get_the_author()
			);
		}
	}
}


if (!function_exists('wp_bizone_entry_date')) {
	/**
	 * Print HTML with date information for current post.
	 * Create your own wp_bizone_entry_date() to override in a child theme.
	 * @param boolean $echo (optional) Whether to echo the date. Default true.
	 * @return string The HTML-formatted post date.
	 */
	function wp_bizone_entry_date($echo = true)
	{
		if (has_post_format(array('chat', 'status')))
			$format_prefix = _x('%1$s on %2$s', '1: post format name. 2: date', 'wp-bizone');
		else
			$format_prefix = '%2$s';

		$date = sprintf(
			'<span class="date"><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a></span>',
			esc_url(get_permalink()),
			esc_attr(sprintf(__('Permalink to %s', 'wp-bizone'), the_title_attribute('echo=0'))),
			esc_attr(get_the_date('c')),
			esc_html(sprintf($format_prefix, get_post_format_string(get_post_format()), get_the_date()))
		);

		if ($echo)
			echo $date;

		return $date;
	}
}


//Add register Menu
register_nav_menus(
	array(
		'primary_menu' => esc_html__('Primary menu', 'wp-bizone'),
		'top_menu' => esc_html__('Top menu', 'wp-bizone'),
		'footer_menu' => esc_html__('Footer menu', 'wp-bizone'),
	)
);

if (function_exists('register_block_style')) {
	register_block_style(
		'core/quote',
		array(
			'name' => 'blue-quote',
			'label' => __('Blue Quote', 'wp-bizone'),
			'is_default' => true,
			'inline_style' => '.wp-block-quote.is-style-blue-quote { color: blue; }',
		)
	);
}


require get_template_directory() . '/inc/enqueue-styles.php';
require get_template_directory() . '/inc/enqueue-scripts.php';


function wp_bizone_new_excerpt_length($length)
{
	if (is_admin())
		return $length;

	return 70;
}
add_filter('excerpt_length', 'wp_bizone_new_excerpt_length');


function wp_bizone_new_excerpt_more($more)
{
	global $post;

	if (is_admin())
		return $more;

	return get_template_part('templates/single', 'post');
}
add_filter('excerpt_more', 'wp_bizone_new_excerpt_more');


if (!function_exists('wp_bizone_the_posts_navigation')) {
	function wp_bizone_the_posts_navigation()
	{
		the_posts_pagination(
			array(
				'before_page_number' => esc_html__('', 'wp-bizone') . ' ',
				'mid_size' => 1,
				'prev_text' => sprintf(
					'%s <span class="nav-prev-text">%s</span>',
					is_rtl() ? ('<i class="fas fa-angle-double-right"></i>') : ('<i class="fas fa-angle-double-left"></i>'),
					wp_kses(
						'<span class="nav-short">' . __('Prev', 'wp-bizone') . '</span>',
						array(
							'span' => array(
								'class' => array(),
							),
						)
					)
				),
				'next_text' => sprintf(
					'<span class="nav-next-text">%s</span> %s',
					wp_kses(
						'<span class="nav-short">' . __('Next', 'wp-bizone') . '</span>',
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					is_rtl() ? ('<i class="fas fa-angle-double-left"></i>') : ('<i class="fas fa-angle-double-right"></i>')
				),
			)
		);
	}
}


//Add Post Thumbnails
add_theme_support('post-thumbnails');

/*
 * Let WordPress manage the document title.
 * This theme does not use a hard-coded <title> tag in the document head,
 * WordPress will provide it for us.
 */
add_theme_support('title-tag');

add_theme_support('automatic-feed-links');
add_theme_support("wp-block-styles");
add_theme_support("responsive-embeds");
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));

//Add Сustom Background
$wp_bizone_defaults = array(
	'default-image' => '',
	'default-preset' => 'default', // 'default', 'fill', 'fit', 'repeat', 'custom'
	'default-position-x' => 'left',    // 'left', 'center', 'right'
	'default-position-y' => 'top',     // 'top', 'center', 'bottom'
	'default-size' => 'auto',    // 'auto', 'contain', 'cover'
	'default-repeat' => 'repeat',  // 'repeat-x', 'repeat-y', 'repeat', 'no-repeat'
	'default-attachment' => 'scroll',  // 'scroll', 'fixed'
	'default-color' => '',
	'wp-head-callback' => '_custom_background_cb',
	'admin-head-callback' => '',
	'admin-preview-callback' => '',
);
add_theme_support('custom-background', $wp_bizone_defaults);


/**
 * Get the information about the logo.
 *
 * @param string $html The HTML output from get_custom_logo (core function).
 * @return string
 */
function wp_bizone_get_custom_logo($html)
{

	$logo_id = get_theme_mod('custom_logo');

	if (!$logo_id) {
		return $html;
	}

	$logo = wp_get_attachment_image_src($logo_id, 'full');

	if ($logo) {
		// For clarity.
		$logo_width = esc_attr($logo[1]);
		$logo_height = esc_attr($logo[2]);

	}

	return $html;
}
add_filter('get_custom_logo', 'wp_bizone_get_custom_logo');

//Add Сustom Logo
function wp_bizone_custom_logo_setup()
{
	$defaults = array(
		'height' => 100,
		'width' => 400,
		'flex-height' => true,
		'flex-width' => true,
		'header-text' => array('site-title', 'site-description'),
		'unlink-homepage-logo' => false,
	);
	add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'wp_bizone_custom_logo_setup');

/**
 * Include a skip to content link at the top of the page so that users can bypass the menu.
 */
function wp_bizone_skip_link()
{
	echo '<a class="skip-link screen-reader-text" href="#wrapper-content">' .
		/* translators: Hidden accessibility text. */
		__('Skip to the content', 'wp-bizone') .
		'</a>';
}

add_action('wp_body_open', 'wp_bizone_skip_link', 5);

// Add support for full and wide align images.
add_theme_support('align-wide');

// Add support for editor styles.
add_theme_support('editor-styles');

$editor_stylesheet_path = './css/style-editor.css';

// Note, the is_IE global variable is defined by WordPress and is used
// to detect if the current browser is internet explorer.
global $is_IE;
if ($is_IE) {
	$editor_stylesheet_path = './css/ie-editor.css';
}

// Enqueue editor styles.
add_editor_style($editor_stylesheet_path);


//widgets
class wp_bizone_Custom_Title_Widget extends WP_Widget
{
	public function __construct()
	{
		parent::__construct(
			'title_block',
			__('Title block', 'wp-bizone'),
			array(
				'description' => __('widget for title and text', 'wp-bizone'),
			)
		);
	}
	public function update($new_instance, $old_instance)
	{
		$instance = array();
		$instance['title'] = ($new_instance['title']);
		$instance['text'] = ($new_instance['text']);
		return $instance;
	}
	public function form($instance)
	{
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">
				<?php echo __('Title', 'wp-bizone'); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
				name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $instance['title']; ?>" />

			<label for="<?php echo $this->get_field_id('text'); ?>">
				<?php echo __('Text', 'wp-bizone'); ?>
			</label>
			<input class="widefat" rows="5" cols="20" id="<?php echo $this->get_field_id('text'); ?>"
				name="<?php echo $this->get_field_name('text'); ?>" type="textarea" value="<?php echo $instance['text']; ?>" />
		</p>
		<?php
	}
	public function widget($args, $instance)
	{
		?>

		<div class="title in_up">
			<span class="title_top">
				<?php echo $instance['title']; ?>
			</span>
			<p>
				<?php echo $instance['text']; ?>
			</p>

		</div>
		<?php
	}
}
add_action('widgets_init', function () {
	register_widget('wp_bizone_Custom_Title_Widget');
});

if (!function_exists('wp_bizone_show_position_preview')) {
	function wp_bizone_show_position_preview($position_name, $css_class = "")
	{
		if (isset($_REQUEST['tp']) && $_REQUEST['tp']) {
			echo "<div class='" . $css_class . "'>";
			echo "<div class='show_theme_position'>" . $position_name . "</div>";

			if (function_exists('dynamic_sidebar'))
				dynamic_sidebar($position_name);

			echo "</div>";

			return true;
		}

		return false;
	}
}

//need for cirrect show theme positions
if (!function_exists('wp_bizone_is_active_sidebar')) {
	function wp_bizone_is_active_sidebar($position_name)
	{
		if (isset($_REQUEST['tp']) && $_REQUEST['tp']) {
			return true;
		} else {
			return is_active_sidebar($position_name);
		}

	}
}

//need for show author_bio_avatar_size 
if (!function_exists('wp_bizone_author_bio_avatar_size')) {
	function wp_bizone_author_bio_avatar_size()
	{
		return 74;
	}
}


/*-----comment tags-----*/
function wp_bizone_theme_init()
{
	add_filter('comment_form_defaults', 'wp_bizone_theme_comments_form_defaults');
}
add_action('after_setup_theme', 'wp_bizone_theme_init');

function wp_bizone_theme_comments_form_defaults($default)
{
	unset($default['comment_notes_after']);
	return $default;
}


// adding a category for patterns
add_action('init', 'wp_bizone_register_statistics_pattern_category', 25);

function wp_bizone_register_statistics_pattern_category()
{
	if (class_exists('WP_Block_Patterns_Registry')) {

		register_block_pattern_category(
			'Statistics',
			array('label' => __('Statistics', 'wp-bizone'))
		);

	}
}

add_action('init', 'wp_bizone_register_about_us_pattern_category', 30);

function wp_bizone_register_about_us_pattern_category()
{
	if (class_exists('WP_Block_Patterns_Registry')) {

		register_block_pattern_category(
			'About-us',
			array('label' => __('About us', 'wp-bizone'))
		);

	}
}

add_action('init', 'wp_bizone_register_special_offer_pattern_category', 35);

function wp_bizone_register_special_offer_pattern_category()
{
	if (class_exists('WP_Block_Patterns_Registry')) {

		register_block_pattern_category(
			'Special-offer',
			array('label' => __('Special offer', 'wp-bizone'))
		);

	}
}

add_action('init', 'wp_bizone_register_price_tables_pattern_category', 40);

function wp_bizone_register_price_tables_pattern_category()
{
	if (class_exists('WP_Block_Patterns_Registry')) {

		register_block_pattern_category(
			'Price-tables',
			array('label' => __('Price tables', 'wp-bizone'))
		);

	}
}