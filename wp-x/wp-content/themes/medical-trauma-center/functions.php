<?php
/**
 * Medical Trauma Center functions and definitions
 *
 * @package Medical Trauma Center
 */

if ( ! function_exists( 'medical_trauma_center_setup' ) ) :
	function medical_trauma_center_setup() {
		
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'woocommerce' );

		load_theme_textdomain( 'medical-trauma-center', get_template_directory() . '/languages' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Post thumbnail support should be enabled for pages and posts.
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'medical-trauma-center' ),
			'menu-2' => esc_html__( 'Footer', 'medical-trauma-center' ),
		) );

		/*
		 * To produce valid HTML5, change the default core markup for the comments, search form, and search form.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		
		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'width'       => 270,
			'height'      => 80,
			'flex-height' => true,
			'flex-width'  => true,
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add custom image size.
		add_image_size( 'medical-trauma-center-1920-550', 1920, 550, true );
		add_image_size( 'medical-trauma-center-1370-550', 1370, 550, true );
		add_image_size( 'medical-trauma-center-590-310', 590, 310, true );
		add_image_size( 'medical-trauma-center-420-380', 420, 380, true );
		add_image_size( 'medical-trauma-center-420-300', 420, 300, true );
		add_image_size( 'medical-trauma-center-420-200', 420, 200, true );
		add_image_size( 'medical-trauma-center-290-150', 290, 150, true );
		add_image_size( 'medical-trauma-center-80-60', 80, 60, true );
		
		add_editor_style( array( '/assets/css/editor-style.min.css') );

		add_theme_support( 'align-wide' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'wp-block-styles' );
		
		add_theme_support( 'custom-background', apply_filters( 'medical_trauma_center_custom_background', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
        
        add_theme_support( 'responsive-embeds' );

		add_theme_support('custom-header', array(
			'default-image'      => '',
			'width'              => 1920,
			'height'             => 200,
			'flex-height'        => true,
			'flex-width'         => true,
			'uploads'            => true,
		));
	}
endif;
add_action( 'after_setup_theme', 'medical_trauma_center_setup' );

/**
 * Enqueue scripts and styles.
 */
function medical_trauma_center_scripts() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css' );
	if ( is_rtl() ){
		wp_enqueue_style( 'bootstrap-rtl', get_template_directory_uri() . '/assets/bootstrap/css/rtl/bootstrap.min.css' );
	}

	wp_enqueue_style( 'medical-trauma-center-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/all.min.css' );
	
	wp_enqueue_style( 'owl.carousel.css', get_template_directory_uri() . '/assets/css/owl.carousel.css' );
	wp_enqueue_style( 'medical-trauma-center-blocks', get_template_directory_uri() . '/assets/css/blocks.min.css' );
	wp_enqueue_style( 'playfair-google-font', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap', false );
	
	wp_enqueue_style( 'roboto-google-font', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap', false );

	$scripts = array(
		array(
			'id'     => 'bootstrap',
			'url'    => get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js',
			'footer' => true
		),
		array(
			'id'     => 'owl.carousel.js',
			'url'    => get_template_directory_uri() . '/assets/js/owl.carousel.js',
			'footer' => true
		),
		array(
			'id'     => 'medical-trauma-center-custom',
			'url'    => get_template_directory_uri() . '/assets/js/custom.js',
			'footer' => true
		)
	);

	medical_trauma_center_add_scripts( $scripts );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'medical_trauma_center_scripts' );

/**
* Add script
* 
* @since Medical Trauma Center 1.0.0
*/
function medical_trauma_center_add_scripts( $scripts ){
	foreach ( $scripts as $key => $value ) {
		wp_enqueue_script( $value['id'] , $value['url'] , array( 'jquery', 'jquery-masonry' ), 0.8, $value['footer'] );
	}
}

/**
 * Sanitizes Image Upload.
 *
 * @param string $input potentially dangerous data.
 */
function medical_trauma_center_sanitize_image( $input ) {
	$filetype = wp_check_filetype( $input );
	if ( $filetype['ext'] && wp_ext2type( $filetype['ext'] ) === 'image' ) {
		return esc_url( $input );
	}
	return '';
}

/**
* Enqueue editor styles for Gutenberg
* 
* @since Medical Trauma Center 1.0.0
*/
function medical_trauma_center_block_editor_styles() {
	// Block styles.
	wp_enqueue_style( 'medical-trauma-center-block-editor-style', get_theme_file_uri( '/assets/css/editor-blocks.min.css' ) );
}
add_action( 'enqueue_block_editor_assets', 'medical_trauma_center_block_editor_styles' );

// Sanitization function to ensure it's an integer within the range
function medical_trauma_center_sanitize_number( $input ) {
    $input = absint( $input ); // Convert to a non-negative integer
    return ( $input >= 1 && $input <= 6 ) ? $input : 1; // Return input if within range, or default to 1
}

// Add custom container before main content
add_action('woocommerce_before_main_content', 'medical_trauma_center_add_custom_container_start', 5);
function medical_trauma_center_add_custom_container_start() {
    echo '<div class="container custom-woo-css my-5">';
}

// Close custom container after main content
add_action('woocommerce_after_main_content', 'medical_trauma_center_add_custom_container_end', 15);
function medical_trauma_center_add_custom_container_end() {
    echo '</div>';
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';

/**
 * Dynamic CSS.
 */
require get_template_directory() . '/inc/customizer/loader.php';

/**
* GET START.
*/
require get_template_directory() . '/themeinfo/medical_trauma_center_themeinfo_page.php';


define('MEDICAL_TRAUMA_CENTER_BUY_NOW',__('https://www.themepixels.net/products/trauma-center-wordpress-theme/','medical-trauma-center'));
define('MEDICAL_TRAUMA_CENTER_LIVE_DEMO',__('https://www.themepixels.net/demo-site/medical-trauma-center/','medical-trauma-center'));
define('MEDICAL_TRAUMA_CENTER_FREE_DOC',__('https://www.themepixels.net/docs/medical-trauma-center-free/','medical-trauma-center'));
define('MEDICAL_TRAUMA_CENTER_BUNDLE',__('https://www.themepixels.net/products/wp-theme-bundle/','medical-trauma-center'));
define('MEDICAL_TRAUMA_CENTER_THEME_SUPPORT',__('https://wordpress.org/support/theme/medical-trauma-center','medical-trauma-center'));

// NOTICE FUNCTION
function medical_trauma_center_activation_notice() {
    if (get_option('medical_trauma_center_notice_dismissed')) {
        return;
    }

    if (isset($_GET['page']) && $_GET['page'] === 'medical-trauma-center-themeinfo-page') {
        return;
    }
    ?>
    <div class="updated notice notice-theme-info-class is-dismissible" data-notice="theme_info">
        <div class="medical-trauma-center-theme-info-notice clearfix">
            <div class="medical-trauma-center-theme-notice-content">
                <h2 class="medical-trauma-center-notice-h2">
                    <?php
                    printf(
                        /* translators: 1: Theme name */
                        esc_html__('Hello! Thank you for choosing our %1$s!', 'medical-trauma-center'), '<strong>' . esc_html(wp_get_theme()->get('Name')) . '</strong>'
                    );
                    ?>
                </h2>
                <a class="medical-trauma-center-btn-theme-info button button-primary" 
                    href="<?php echo esc_url(admin_url('themes.php?page=medical-trauma-center-themeinfo-page')); ?>" 
                    id="medical-trauma-center-themeinfo-button">
                    <?php esc_html_e('Medical Trauma Center Theme Information', 'medical-trauma-center') ?>
                </a>
            </div>
        </div>
    </div>
    <?php
}

add_action('admin_notices', 'medical_trauma_center_activation_notice');

add_action('wp_ajax_medical_trauma_center_dismiss_notice', 'medical_trauma_center_dismiss_notice');

function medical_trauma_center_notice_status() {
    delete_option('medical_trauma_center_notice_dismissed');
}
add_action('after_switch_theme', 'medical_trauma_center_notice_status');

function medical_trauma_center_dismiss_notice() {
    update_option('medical_trauma_center_notice_dismissed', true);
    wp_send_json_success();
}

function medical_trauma_center_admin_enqueue_scripts(){
	wp_enqueue_style('medical-trauma-center-admin-style', esc_url( get_template_directory_uri() ) . '/assets/css/medical-trauma-center-notice.css');
	wp_enqueue_script('medical-trauma-center-dismiss-notice-script', get_stylesheet_directory_uri() . '/assets/js/medical-trauma-center-notice.js', array('jquery'), null, true);
}
add_action( 'admin_enqueue_scripts', 'medical_trauma_center_admin_enqueue_scripts' );