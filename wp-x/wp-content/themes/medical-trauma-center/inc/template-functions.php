<?php
/**
 * Features that improve the theme by integrating with WordPress
 *
 * @package Medical Trauma Center
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function medical_trauma_center_body_classes( $classes ) {
	// Adds a class of theme skin
	if( get_theme_mod( 'skin_select', 'default' ) == 'dark' ){
		$classes[] = 'dark-skin';
	}elseif( get_theme_mod( 'skin_select', 'default' ) == 'blackwhite' ){
		$classes[] = 'black-white-skin';
	}else{
		$classes[] = 'default-skin';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'medical_trauma_center_body_classes' );

/**
 * Page/Post title in frontpage and blog
 */
function medical_trauma_center_page_title_display() {
	if ( is_singular() || ( !is_home() && is_front_page() ) ): ?>
		<h1 class="page-title entry-title"><?php single_post_title(); ?></h1>
	<?php elseif ( is_archive() ) : 
		the_archive_title( '<h1 class="page-title">', '</h1>' );
	elseif ( is_search() ) : ?>
		<h1 class="page-title entry-title">
			<?php // translators: %s is the search query
		 		printf( esc_html__( 'Search Results for: %s', 'medical-trauma-center' ), get_search_query() ); 
			?>
		</h1>
	<?php elseif ( is_404() ) :
		echo '<h1 class="page-title entry-title">' . esc_html__( 'Oops! That page can&#39;t be found.', 'medical-trauma-center' ) . '</h1>';
	endif;
}		

/**
 * Adds custom size in images
 */
function medical_trauma_center_image_size( $image_size ){
	$image_id = get_post_thumbnail_id();
	
	the_post_thumbnail( $image_size, array(
		'alt' => esc_attr(get_post_meta( $image_id, '_wp_attachment_image_alt', true))
	) );
}

/**
* Adds a submit button in search form
* 
* @since Medical Trauma Center 1.0.0
* @param string $form
* @return string
*/
function medical_trauma_center_modify_search_form( $form ){
	return str_replace( '</form>', '<button type="submit" class="search-button"><span class="fas fa-search"></span></button></form>', $form );
}
add_filter( 'get_search_form', 'medical_trauma_center_modify_search_form' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function medical_trauma_center_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'medical_trauma_center_pingback_header' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function medical_trauma_center_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'medical_trauma_center_content_width', 720 );
}
add_action( 'after_setup_theme', 'medical_trauma_center_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 * @since Medical Trauma Center 1.0.0
 */
function medical_trauma_center_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Left Sidebar', 'medical-trauma-center' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'medical-trauma-center' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title-wrap"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );

	for( $i = 1; $i <= 4; $i++ ){
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Sidebar', 'medical-trauma-center' ) . ' ' . $i,
			'id'            => 'footer-sidebar-' . $i,
			'description'   => esc_html__( 'Add widgets here.', 'medical-trauma-center' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="footer-item">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		));
	}
}
add_action( 'widgets_init', 'medical_trauma_center_widgets_init' );

/**
 * Check whether the sidebar is active or not.
 *
 * @see https://codex.wordpress.org/Conditional_Tags
 * @since Medical Trauma Center 1.0.0
 * @return bool whether the sidebar is active or not.
 */
function medical_trauma_center_is_active_footer_sidebar(){

	for( $i = 1; $i <= 4; $i++ ){
		if ( is_active_sidebar( 'footer-sidebar-'.$i ) ) : 
			return true;
		endif;
	}
	return false;
}


if( ! function_exists( 'medical_trauma_center_sort_category' ) ):
/**
 * Helper function for medical_trauma_center_get_the_category()
 *
 * @since Medical Trauma Center 1.0.0
 */
function medical_trauma_center_sort_category( $a, $b ){
    return $a->term_id < $b->term_id;
}
endif;


/**
 * To disable archive prefix title.
 * @since Medical Trauma Center 1.0.0
 */

function medical_trauma_center_modify_archive_title( $title ) {
	if( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
    } elseif ( is_author() ) {
		$title = '<span class="vcard">' . get_the_author() . '</span>' ;
    } elseif ( is_year() ) {
        $title = get_the_date( _x( 'Y', 'yearly archives date format', 'medical-trauma-center' ) );
    } elseif ( is_month() ) {
        $title = get_the_date( _x( 'F Y', 'monthly archives date format', 'medical-trauma-center' ) );
    } elseif ( is_day() ) {
        $title = get_the_date( _x( 'F j, Y', 'daily archives date format', 'medical-trauma-center' ) );
     } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }

	return $title;
}

add_filter( 'get_the_archive_title', 'medical_trauma_center_modify_archive_title' );

if( ! function_exists( 'medical_trauma_center_get_the_category' ) ):
/**
* Returns categories after sorting by term id descending
* 
* @since Medical Trauma Center 1.0.0
* @uses medical_trauma_center_sort_category()
* @return array
*/
function medical_trauma_center_get_the_category( $id = false ){
    $failed = true;

    if( !$id ){
        $id = get_the_id();
    }
    
    # Check if Yoast Plugin is installed 
    # If yes then, get Primary category, set by Plugin

    if ( class_exists( 'WPSEO_Primary_Term' ) ){

        # Show the post's 'Primary' category, if this Yoast feature is available, & one is set
        $wpseo_primary_term = new WPSEO_Primary_Term( 'category', $id );
        $wpseo_primary_term = $wpseo_primary_term->get_primary_term();

        $medical_trauma_center_cat[0] = get_term( $wpseo_primary_term );

        if ( !is_wp_error( $medical_trauma_center_cat[0] ) ) { 
           $failed = false;
        }
    }

    if( $failed ){

      $medical_trauma_center_cat = get_the_category( $id );
      usort( $medical_trauma_center_cat, 'medical_trauma_center_sort_category' );  
    }
    
    return $medical_trauma_center_cat;
}

endif;

/**
* Get post categoriesby by term id
* 
* @since Medical Trauma Center 1.0.0
* @uses medical_trauma_center_get_post_categories()
* @return array
*/
function medical_trauma_center_get_post_categories(){

	$terms = get_terms( array(
	    'taxonomy' => 'category',
	    'hide_empty' => true,
	) );

	if( empty($terms) || !is_array( $terms ) ){
		return array();
	}

	$data = array();
	foreach ( $terms as $key => $value) {
		$term_id = absint( $value->term_id );
		$data[$term_id] =  esc_html( $value->name );
	}
	return $data;

}

/**
* Get Custom Logo URL
* 
* @since Medical Trauma Center 1.0.0
*/
function medical_trauma_center_get_custom_logo_url(){
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    if ( is_array($image) ){
	    return $image[0];
	}else{
		return '';
	}
}

if( !function_exists( 'medical_trauma_center_get_intermediate_image_sizes' ) ){
	/**
	* Array of image sizes.
	* 
	* @since Medical Trauma Center 1.3.6
	* @return array
	*/
	function medical_trauma_center_get_intermediate_image_sizes(){

		$data 	= array(
			'full'			=> esc_html__( 'Full Size', 'medical-trauma-center' ),
			'large'			=> esc_html__( 'Large Size', 'medical-trauma-center' ),
			'medium'		=> esc_html__( 'Medium Size', 'medical-trauma-center' ),
			'medium_large'	=> esc_html__( 'Medium Large Size', 'medical-trauma-center' ),
			'thumbnail'		=> esc_html__( 'Thumbnail Size', 'medical-trauma-center' ),
			'1536x1536'		=> esc_html__( '1536x1536 Size', 'medical-trauma-center' ),
			'2048x2048'		=> esc_html__( '2048x2048 Size', 'medical-trauma-center' ),
			'medical-trauma-center-1920-550' => esc_html__( '1920x550 Size', 'medical-trauma-center' ),
			'medical-trauma-center-1370-550'	=> esc_html__( '1370x550 Size', 'medical-trauma-center' ),
			'medical-trauma-center-590-310'	=> esc_html__( '590x310 Size', 'medical-trauma-center' ),
			'medical-trauma-center-420-380'	=> esc_html__( '420x380 Size', 'medical-trauma-center' ),
			'medical-trauma-center-420-300'	=> esc_html__( '420x300 Size', 'medical-trauma-center' ),
			'medical-trauma-center-420-200'	=> esc_html__( '420x200 Size', 'medical-trauma-center' ),
			'medical-trauma-center-290-150'	=> esc_html__( '290x150 Size', 'medical-trauma-center' ),
			'medical-trauma-center-80-60'	=> esc_html__( '80x60 Size', 'medical-trauma-center' ),
		);
		
		return $data;

	}
}