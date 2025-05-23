<?php
/**
 * wp-bizone WordPress Theme, ordasvit.com
 * wp-bizone is distributed under the terms of the GNU GPL
 * Copyright: OrdaSvit, Andrey Kvasnevskiy, ordasvit.com
 */

/**
 * Set up the WordPress core custom header arguments and settings.
 * @uses add_theme_support() to register support for 3.4 and up.
 * @uses wp_bizone_theme_header_style() to style front-end.
 * @uses wp_bizone_theme_admin_header_style() to style wp-admin form.
 * @uses wp_bizone_theme_admin_header_image() to add custom markup to wp-admin form.
 * @uses register_default_headers() to set up the bundled header images.
 * @since wp_bizone
 * @return void
 */
function wp_bizone_theme_custom_header_setup() {
	$args = array(
		// Text color and image (empty to use none).
		'default-text-color'     => '220e10',
		'default-image'          => '%s/images/headers/bg.jpg',

		// Set height and width, with a maximum value for the width.
		'height'                 => 230,
		'width'                  => 1600,

		// Callbacks for styling the header and the admin preview.
		'wp-head-callback'       => 'wp_bizone_theme_header_style',
		'admin-head-callback'    => 'wp_bizone_theme_admin_header_style',
		'admin-preview-callback' => 'wp_bizone_theme_admin_header_image',
	);

	add_theme_support( 'custom-header', $args );

	/*
	 * Default custom headers packaged with the theme.
	 * %s is a placeholder for the theme template directory URI.
	 */
	register_default_headers( array(
		'circle' => array(
			'url'           => '%s/images/headers/circle.png',
			'thumbnail_url' => '%s/images/headers/circle-thumbnail.png',
			'description'   => _x( 'Circle', 'header image description', 'wp-bizone' )
		),
		'diamond' => array(
			'url'           => '%s/images/headers/diamond.png',
			'thumbnail_url' => '%s/images/headers/diamond-thumbnail.png',
			'description'   => _x( 'Diamond', 'header image description', 'wp-bizone' )
		),
		'star' => array(
			'url'           => '%s/images/headers/star.png',
			'thumbnail_url' => '%s/images/headers/star-thumbnail.png',
			'description'   => _x( 'Star', 'header image description', 'wp-bizone' )
		),
	) );
}
add_action( 'after_setup_theme', 'wp_bizone_theme_custom_header_setup', 11 );


/**
 * Style the header text displayed on the blog.
 * get_header_textcolor() options: Hide text (returns 'blank'), or any hex value.
 * @since wp_bizone
 * @return void
 */
function wp_bizone_theme_header_style() {
	$header_image = get_header_image();
	$text_color   = get_header_textcolor();
	// If no custom options for text are set, let's bail.
	if ( empty( $header_image ) && $text_color == get_theme_support( 'custom-header', 'default-text-color' ) )
		return;
	// If we get this far, we have custom styles.
	?>
	<style type="text/css" id="wp_bizone-header-css">
	<?php if ( ! empty( $header_image ) ) : ?>
		.site-header {background:url(<?php header_image(); ?>) no-repeat scroll top;background-size:1600px auto;}
	<?php endif;
	// Has the text been hidden?
	if ( ! display_header_text() ) : ?>
		.site-title,.site-description {position:absolute;clip:rect(1px 1px 1px 1px);/*IE7*/clip:rect(1px, 1px, 1px, 1px);}
	<?php if ( empty( $header_image ) ) : ?>
		.site-header .home-link {min-height:0;}
	<?php endif;
	// If the user has set a custom color for the text, use that.
	elseif ( $text_color != get_theme_support( 'custom-header', 'default-text-color' ) ) : ?>
		.site-title,.site-description {color:#<?php echo esc_attr( $text_color ); ?>;}
	<?php endif; ?>
	</style>
	<?php }

/**
 * Style the header image displayed on the Appearance > Header admin panel.
 * @since wp_bizone
 * @return void
 */
function wp_bizone_theme_admin_header_style() {
	$header_image = get_header_image();?>
	<style type="text/css" id="wp_bizone-admin-header-css">
	.appearance_page_custom-header #headimg {border:none;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;
		box-sizing:border-box;
		<?php if ( ! empty( $header_image ) ) {
			echo 'background: url(' . esc_url( $header_image ) . ') no-repeat scroll top; background-size: 1600px auto;';
		} ?>
		padding:0 20px;
	}
	#headimg .home-link {
		-webkit-box-sizing: border-box;
		-moz-box-sizing:    border-box;
		box-sizing:         border-box;
		margin: 0 auto;
		max-width: 1040px;
		<?php
		if ( ! empty( $header_image ) || display_header_text() ) {
			echo 'min-height: 230px;';
		} ?>
		width: 100%;
	}
	<?php if ( ! display_header_text() ) : ?>
	#headimg h1,#headimg h2 {position:absolute !important;clip:rect(1px 1px 1px 1px);/*IE7*/clip:rect(1px,1px,1px,1px);}
	<?php endif; ?>
	#headimg h1 {font:bold 60px/1 Bitter, Georgia, serif;margin:0;padding:58px 0 10px;}
	#headimg h1 a {text-decoration:none;}
	#headimg h1 a:hover {text-decoration:underline;}
	#headimg h2 {font:200 italic 24px "Source Sans Pro", Helvetica, sans-serif;margin:0;text-shadow:none;}
	.default-header img {max-width:230px;width:auto;}
	</style>
<?php }
/**
 * Output markup to be displayed on the Appearance > Header admin panel.
 * This callback overrides the default markup displayed there.
 * @since wp_bizone
 * @return void
 */
function wp_bizone_theme_admin_header_image() { ?>
	<div id="headimg" style="background: url(<?php header_image();?>) no-repeat scroll top; background-size:1600px auto;">
		<?php $style = ' style="color:#' . get_header_textcolor() . ';"'; ?>
		<div class="home-link">
			<h1 class="displaying-header-text"><a id="name"<?php echo $style; ?> onclick="return false;" href="#"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 id="desc" class="displaying-header-text"<?php echo $style; ?>><?php bloginfo( 'description' ); ?></h2>
		</div>
	</div>
<?php }