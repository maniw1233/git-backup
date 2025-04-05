<?php
/**
 * Particular template tags for this theme
 *
 * Some of this functionality may eventually be superseded by essential features.
 *
 * @package Medical Trauma Center
 */

if ( ! function_exists( 'medical_trauma_center_entry_header' ) ) :
	/**
	 * Prints HTML with meta information for the categories.
	 */
	function medical_trauma_center_entry_header() {
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$medical_trauma_center_categories_list = get_the_category_list( ' ' );
			if ( !is_single() && $medical_trauma_center_categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . '%1$s' . '</span>', $medical_trauma_center_categories_list ); // WPCS: XSS OK.
			}
		}
	}
endif;

if ( ! function_exists( 'medical_trauma_center_post_meta' ) ) :
	/**
	 * Prints HTML with meta information for the tags and comments.
	 */
	function medical_trauma_center_post_meta() {

		$medical_trauma_center_time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$medical_trauma_center_time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
		}

		$medical_trauma_center_time_string = sprintf( $medical_trauma_center_time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date( 'M j, Y' ) ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date( 'M j, Y' ) )
		);
		$year = get_the_date( 'Y' );
		$month = get_the_date( 'm' );
		$link = ( is_single() ) ? get_month_link( $year, $month ) : get_permalink();

		$posted_on = '<a href="' . esc_url( $link ) . '" rel="bookmark">' . $medical_trauma_center_time_string . '</a>';

		if ( !is_single() && !get_theme_mod( 'hide_date', false ) ){
			echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.
		}else if ( is_single() && !get_theme_mod( 'hide_single_post_date', false ) ){
			echo '<span class="posted-on">' . $posted_on . '</span>';
		}

		$byline = '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>';

		if ( !is_single() && !get_theme_mod( 'hide_author', false ) ){
			echo '<span class="byline"> ' . $byline . '</span>';
		}

		if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			if( !is_single() && !get_theme_mod( 'hide_comment', false ) ){ 
				echo '<span class="comments-link">';
				comments_popup_link(
					sprintf(
						wp_kses(
							/* translators: %s: post title */
							__( 'Comment<span class="screen-reader-text"> on %s</span>', 'medical-trauma-center' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					)
				);
				echo '</span>';
			}else if ( is_single() && !get_theme_mod( 'hide_single_post_comment', false ) ){
				echo '<span class="comments-link">';
				comments_popup_link(
					sprintf(
						wp_kses(
							/* translators: %s: post title */
							__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'medical-trauma-center' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					)
				);
				echo '</span>';
			}
		}

		if ( 'post' === get_post_type() ) {
				/* translators: used between list items, there is a space after the comma */
				$medical_trauma_center_categories_list = get_the_category_list( esc_html__( ', ', 'medical-trauma-center' ) );
				
				if( is_single() && $medical_trauma_center_categories_list && !get_theme_mod( 'hide_single_post_category', false ) ){
					/* translators: 1: list of categories. */
					printf( '<span class="cat-links">' . '%1$s' . '</span>', $medical_trauma_center_categories_list ); // WPCS: XSS OK.
				}
		}

		if ( is_single() && !get_theme_mod( 'hide_single_post_tag_links', false ) ){ 
			if( get_the_tag_list() ): ?>
				<div class="tag-links">
					<span class="screen-reader-text">
						<?php echo esc_html__( 'Tags', 'medical-trauma-center' ); ?>
					</span>
					<?php echo get_the_tag_list( '', esc_html__( ', ', 'medical-trauma-center' ) ); ?>
				</div>
			<?php endif; 
		} 
	}
endif;

if( !function_exists( 'medical_trauma_center_get_day_link' ) ):
/**
* Returns the permalink of Post day
*
* @since Medical Trauma Center 1.0.0
* @return url
*/
function medical_trauma_center_get_day_link(){
	return get_day_link( get_the_time('Y'), get_the_time('m'), get_the_time('d') );
}
endif;

/**
 * Gets a nicely formatted string for the published date.
 *
 * @since Medical Trauma Center 1.0.0
 * @return string
 */
if ( ! function_exists( 'medical_trauma_center_time_link' ) ) :

function medical_trauma_center_time_link() {

	$medical_trauma_center_time_string = '<span class="entry-date published" datetime="%1$s">%2$s</span>';
	
	$medical_trauma_center_time_string = sprintf( $medical_trauma_center_time_string,
		get_the_date( DATE_W3C ),
		get_the_date()
	);
?>
	<span class="screen-reader-text"><?php echo esc_html__( 'Posted on', 'medical-trauma-center' ); ?></span>
	<span class="posted-on">
		<a href="<?php echo esc_url( medical_trauma_center_get_day_link() ); ?>" rel="bookmark">
			<?php echo wp_kses_post( $medical_trauma_center_time_string ); ?>
		</a>
	</span>
	<?php		
}
endif;

if ( ! function_exists( 'medical_trauma_center_edit_link' ) ) :

function medical_trauma_center_edit_link( $echo = true ) {

	if( ! $echo ){
		ob_start();
	}

	edit_post_link(
		sprintf(
			# translators: %s: Name of current post
			__( 'EDIT<span class="screen-reader-text"> "%s"</span>', 'medical-trauma-center' ),
			get_the_title()
		),
		'<span class="edit-link">',
		'</span>'
	);

	if( ! $echo ){
		$output = ob_get_contents();
		ob_end_clean();
		return $output;
	}
}
endif;