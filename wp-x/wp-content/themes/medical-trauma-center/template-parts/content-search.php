<?php
/**
 * Section of the template used to display results on search pages
 * 
 * @package Medical Trauma Center
 */

?>
<?php
	$class = '';
	if(!has_post_thumbnail()){
		$class = 'no-thumbnail';
	}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( $class . ' ' ) ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<figure class="featured-image">
			<a href="<?php the_permalink(); ?>">
				<?php medical_trauma_center_image_size( 'medical-trauma-center-1370-550' ) ?>
			</a>
		</figure>
	<?php endif; ?>
	<div class="entry-content">
		<header class="entry-header">
			<?php 
				medical_trauma_center_entry_header();
				the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			?>
		</header>

		<div class="entry-meta">
			<?php medical_trauma_center_post_meta(); ?>
		</div>
		
		<div class="entry-text">
			<?php
				$medical_trauma_center_excerpt_limit = get_theme_mod('medical_trauma_center_excerpt_limit', 50);
				echo "<p>" . wp_trim_words(get_the_excerpt(), $medical_trauma_center_excerpt_limit) . "</p>";
			?>
		</div>
	</div>
</article>