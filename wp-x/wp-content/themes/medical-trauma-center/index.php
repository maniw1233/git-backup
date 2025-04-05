<?php
/**
 * The primary template file
 *
 * @package Medical Trauma Center
 */

get_header();
?>	
	<div id="content" class="site-content">
		<div class="container">
			<?php
			$query = new WP_Query( apply_filters( 'medical_trauma_center_blog_args', array(
				'post_type'           => 'post',
				'post_status'         => 'publish',
				'paged'          	  => get_query_var( 'paged', 1 ),
			)));
			$posts_array = $query->get_posts();
			$medical_trauma_center_show_latest_posts = count( $posts_array ) > 0; ?>
			<section class="section-post-area">
				<div class="row">
					<div class="col-lg-8">
						<div id="primary" class="content-area">
							<?php
								if ( $query->have_posts() ) :

									if ( is_home() && !is_front_page() ) :
										?>
										<header>
											<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
										</header>
										<?php
									endif;

									/* Start the Loop */
									while ( $query->have_posts() ) :
										$query->the_post();

										get_template_part( 'template-parts/content', get_post_type() );

									endwhile;

								elseif ( !is_sticky() && ! $query->have_posts() ):
									get_template_part( 'template-parts/content', 'none' );
								endif;
							?>
							<?php								
								the_posts_pagination( array(
									'total'        => $query->max_num_pages,
									'next_text' => '<span>'.esc_html__( 'Next', 'medical-trauma-center' ) .'</span><span class="screen-reader-text">' . esc_html__( 'Next page', 'medical-trauma-center' ) . '</span>',
									'prev_text' => '<span>'.esc_html__( 'Prev', 'medical-trauma-center' ) .'</span><span class="screen-reader-text">' . esc_html__( 'Previous page', 'medical-trauma-center' ) . '</span>',
									'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'medical-trauma-center' ) . ' </span>',
								));
								wp_reset_postdata();
							?>
						</div>
					</div>
					<div class="col-lg-4">
						<div id="secondary" class="sidebar left-sidebar">
							<?php get_sidebar('sidebar-1'); ?>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
<?php
get_footer();