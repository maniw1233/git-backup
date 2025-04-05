<?php
/**
 * wp-bizone WordPress Theme, ordasvit.com
 * wp-bizone is distributed under the terms of the GNU GPL
 * Copyright: OrdaSvit, Andrey Kvasnevskiy, ordasvit.com
 */

/**
 * Header styles for this theme
 *
 * @package WordPress
 * @subpackage wp_bizone
 */

//css styles connect to the admin
function wp_bizone_true_style_backend()
{
	wp_enqueue_style('wp_bizone_admin_style', get_stylesheet_directory_uri() . '/css/admin_style.css');
}
add_action('admin_enqueue_scripts', 'wp_bizone_true_style_backend');

function wp_bizone_true_include_in_font()
{
	wp_enqueue_style('fontawesome', get_stylesheet_directory_uri() . '/css/fontawesome.css');
}
add_action('admin_enqueue_scripts', 'wp_bizone_true_include_in_font');
//css styles connect to the admin



add_action('wp_enqueue_scripts', 'wp_bizone_rigistre_header_styles');
function wp_bizone_rigistre_header_styles()
{

	$os_uri = get_template_directory_uri();

	wp_register_style('wp_bizone_google_fonts', '//fonts.googleapis.com/css2?family=Abel&family=Comfortaa:wght@300..700&family=Dancing+Script:wght@400..700&family=Dosis:wght@200..800&family=Francois+One&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lobster&family=Lora:ital,wght@0,400..700;1,400..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Oxygen:wght@300;400;700&family=PT+Sans+Narrow:wght@400;700&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Prosto+One&family=Quicksand:wght@300..700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Share:ital,wght@0,400;0,700;1,400;1,700&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&family=Ubuntu+Condensed&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap', false);
	wp_enqueue_style('wp_bizone_google_fonts');

	wp_register_style('wp_bizone_fontawesome_style', $os_uri . '/css/fontawesome.css', false);
	wp_enqueue_style('wp_bizone_fontawesome_style');

	wp_register_style('wp_bizone_bootstrap_style', $os_uri . '/bootstrap/css/bootstrap.css', true);
	wp_enqueue_style('wp_bizone_bootstrap_style');

	wp_register_style('wp_bizone_bootstrap_style_rtl', $os_uri . '/bootstrap/css/bootstrap.rtl.css', true);
	wp_enqueue_style('wp_bizone_bootstrap_style_rtl');

	if (isset($_REQUEST['tp']) && $_REQUEST['tp']) {
		wp_register_style('wp_bizone_style_positions_preview', $os_uri . '/css/style-positions-preview.css', false);
		wp_enqueue_style('wp_bizone_style_positions_preview');
	}

	wp_register_style('wp_bizone_style_wp', $os_uri . '/css/wp-style.css', false);
	wp_enqueue_style('wp_bizone_style_wp');

	wp_register_style('wp_bizone_woocommerce_style', $os_uri . '/css/woocommerce.css', false);
	wp_enqueue_style('wp_bizone_woocommerce_style');

	wp_register_style('wp_bizone_style_main', $os_uri . '/style.css', false);
	wp_enqueue_style('wp_bizone_style_main');


	?>
	<style>
		body a {
			color:
			<?php if (get_theme_mod('wp_bizone_link_color')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_link_color'));
			} else {
				echo '#1E73BE';
			} ?>
			;
			text-decoration:
			<?php if (get_theme_mod('wp_bizone_main_body_links')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_main_body_links'));
			} else {
				echo 'underline';
			} ?>
			;
			font-family:
			<?php if (get_theme_mod('wp_bizone_advanced_typography_body_links')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_advanced_typography_body_links'));
			} else {
				echo 'Abel,sans-serif';
			} ?>
			;
		}

		body a:hover {
			text-decoration:
			<?php if (get_theme_mod('wp_bizone_main_body_links_hover_underline')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_main_body_links_hover_underline'));
			} else {
				echo 'none';
			} ?>
			;
			color:
			<?php if (get_theme_mod('wp_bizone_link_hover_color')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_link_hover_color'));
			} else {
				echo '#000';
			} ?>
			;
		}

		ul.navbar-nav>li a {
			font-size:
			<?php if (get_theme_mod('wp_bizone_main_menu_font_size')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_main_menu_font_size'));
			} else {
				echo '12';
			} ?>px;
			color:
			<?php if (get_theme_mod('wp_bizone_main_menu_link_color')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_main_menu_link_color'));
			} else {
				echo '#1E73BE';
			} ?>
			;
			text-decoration:
			<?php if (get_theme_mod('wp_bizone_main_menu_link_underline')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_main_menu_link_underline'));
			} else {
				echo 'none';
			} ?>
			;
			font-family:
			<?php if (get_theme_mod('wp_bizone_advanced_typography_main_menu_font')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_advanced_typography_main_menu_font'));
			} else {
				echo 'Abel,sans-serif';
			} ?>
			;
		}

		ul.navbar-nav>li a:hover {
			text-decoration:
			<?php if (get_theme_mod('wp_bizone_main_menu_link_hover_underline')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_main_menu_link_hover_underline'));
			} else {
				echo 'none';
			} ?>
			;
			color:
			<?php if (get_theme_mod('wp_bizone_main_menu_link_hover_color')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_main_menu_link_hover_color'));
			} else {
				echo '#1E73BE';
			} ?>
			;
		}


		ul#menu-top-menu>li a {
			font-size:
			<?php if (get_theme_mod('wp_bizone_top_menu_font_size')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_top_menu_font_size'));
			} else {
				echo '14';
			} ?>px;
			color:
			<?php if (get_theme_mod('wp_bizone_top_menu_link_color')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_top_menu_link_color'));
			} else {
				echo '#1E73BE';
			} ?>
			;
			text-decoration:
			<?php if (get_theme_mod('wp_bizone_top_menu_link_underline')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_top_menu_link_underline'));
			} else {
				echo 'none';
			} ?>
			;
			font-family:
			<?php if (get_theme_mod('wp_bizone_advanced_typography_top_menu_font')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_advanced_typography_top_menu_font'));
			} else {
				echo 'Abel,sans-serif';
			} ?>
			;
		}

		ul#menu-top-menu>li a:hover {
			text-decoration:
			<?php if (get_theme_mod('wp_bizone_top_menu_link_hover_underline')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_top_menu_link_hover_underline'));
			} else {
				echo 'none';
			} ?>
			;
			color:
			<?php if (get_theme_mod('wp_bizone_top_menu_link_hover_color')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_top_menu_link_hover_color'));
			} else {
				echo '#1E73BE';
			} ?>
			;
		}

		ul#menu-footer-menu>li>a {
			font-size:
			<?php if (get_theme_mod('wp_bizone_footer_menu_font_size')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_footer_menu_font_size'));
			} else {
				echo '14';
			} ?>px;
			color:
			<?php if (get_theme_mod('wp_bizone_footer_menu_link_color')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_footer_menu_link_color'));
			} else {
				echo '#1E73BE';
			} ?>
			;
			text-decoration:
			<?php if (get_theme_mod('wp_bizone_footer_menu_link_underline')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_footer_menu_link_underline'));
			} else {
				echo 'none';
			} ?>
			;
			font-family:
			<?php if (get_theme_mod('wp_bizone_advanced_typography_footer_menu_font')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_advanced_typography_footer_menu_font'));
			} else {
				echo 'Abel,sans-serif';
			} ?>
			;
		}

		ul#menu-footer-menu>li>a:hover {
			text-decoration:
			<?php if (get_theme_mod('wp_bizone_footer_menu_link_hover_underline')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_footer_menu_link_hover_underline'));
			} else {
				echo 'none';
			} ?>
			;
			color:
			<?php if (get_theme_mod('wp_bizone_footer_menu_link_hover_color')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_footer_menu_link_hover_color'));
			} else {
				echo '#1E73BE';
			} ?>
			;
		}


		div#copyright a {
			font-size:
			<?php if (get_theme_mod('wp_bizone_copyright_font_size')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_copyright_font_size'));
			} else {
				echo '14';
			} ?>px;
			color:
			<?php if (get_theme_mod('wp_bizone_copyright_color')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_copyright_color'));
			} else {
				echo '#ccc';
			} ?>
			;
			text-decoration:
			<?php if (get_theme_mod('wp_bizone_copyright_link_underline')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_copyright_link_underline'));
			} else {
				echo 'none';
			} ?>
			;
		}

		div#copyright a:hover {
			color:
			<?php if (get_theme_mod('wp_bizone_copyright_hover_color')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_copyright_hover_color'));
			} else {
				echo '#ccc';
			} ?>
			;
			text-decoration:
			<?php if (get_theme_mod('wp_bizone_copyright_link_hover_underline')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_copyright_link_hover_underline'));
			} else {
				echo 'none';
			} ?>
			;
		}

		.soc_links a {
			font-size:
			<?php if (get_theme_mod('wp_bizone_social_links_font_size')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_social_links_font_size'));
			} else {
				echo '14';
			} ?>px;
			color:
			<?php if (get_theme_mod('wp_bizone_social_links_color')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_social_links_color'));
			} else {
				echo '#ccc';
			} ?>
			;
		}

		.soc_links a:hover {
			color:
			<?php if (get_theme_mod('wp_bizone_social_links_hover_color')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_social_links_hover_color'));
			} else {
				echo '#ccc';
			} ?>
			;
		}

		.site-footer a {
			color:
			<?php if (get_theme_mod('wp_bizone_footer_link_color')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_footer_link_color'));
			} else {
				echo '#1E73BE';
			} ?>
			;
			text-decoration:
			<?php if (get_theme_mod('wp_bizone_footer_links_underline')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_footer_links_underline'));
			} else {
				echo 'none';
			} ?>
			;
		}

		.site-footer a:hover {
			color:
			<?php if (get_theme_mod('wp_bizone_footer_link_hover_color')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_footer_link_hover_color'));
			} else {
				echo '#1E73BE';
			} ?>
			;
			text-decoration:
			<?php if (get_theme_mod('wp_bizone_footer_links_hover_underline')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_footer_links_hover_underline'));
			} else {
				echo 'none';
			} ?>
			;
		}

		body h1 {
			font-family:
			<?php if (get_theme_mod('wp_bizone_advanced_typography_h1')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_advanced_typography_h1'));
			} else {
				echo 'Abel,sans-serif';
			} ?>
			;
		}

		body h2 {
			font-family:
			<?php if (get_theme_mod('wp_bizone_advanced_typography_h2')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_advanced_typography_h2'));
			} else {
				echo 'Abel,sans-serif';
			} ?>
			;
		}

		body h3 {
			font-family:
			<?php if (get_theme_mod('wp_bizone_advanced_typography_h3')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_advanced_typography_h3'));
			} else {
				echo 'Abel,sans-serif';
			} ?>
			;
		}

		body h4 {
			font-family:
			<?php if (get_theme_mod('wp_bizone_advanced_typography_h4')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_advanced_typography_h4'));
			} else {
				echo 'Abel,sans-serif';
			} ?>
			;
		}

		body h5 {
			font-family:
			<?php if (get_theme_mod('wp_bizone_advanced_typography_h5')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_advanced_typography_h5'));
			} else {
				echo 'Abel,sans-serif';
			} ?>
			;
		}

		body h6 {
			font-family:
			<?php if (get_theme_mod('wp_bizone_advanced_typography_h6')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_advanced_typography_h6'));
			} else {
				echo 'Abel,sans-serif';
			} ?>
			;
		}

		body {
			font-family:
			<?php if (get_theme_mod('wp_bizone_advanced_typography_h6')) {
				echo sanitize_text_field(get_theme_mod('wp_bizone_advanced_typography_h6'));
			} else {
				echo 'Abel,sans-serif';
			} ?>
			;
		}

		.site-header {
			<?php if (!is_front_page())
				echo "background:none;"; ?>
		}

		#header {
			<?php if (is_front_page())
				echo "padding-bottom:117px;"; ?>
		}
	</style>
	<?php
}


