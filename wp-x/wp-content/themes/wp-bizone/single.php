<?php
/**
 * wp-bizone WordPress Theme, ordasvit.com
 * wp-bizone is distributed under the terms of the GNU GPL
 * Copyright: OrdaSvit, Andrey Kvasnevskiy, ordasvit.com
 */

get_header();
?>

<div class="row single_page">

  <?php get_template_part('templates/positions-before-content'); ?>

  <div class="<?php if (wp_bizone_is_active_sidebar("sidebar_right") && wp_bizone_is_active_sidebar("sidebar_left")) {
    echo ('col-lg-6 col-md-12 col-sm-12 col-xs-12');
  } else if (wp_bizone_is_active_sidebar("sidebar_right") || wp_bizone_is_active_sidebar("sidebar_left")) {
    echo ('col-lg-9 col-md-12 col-sm-12 col-xs-12');
  } else {
    echo ('col-lg-12 col-md-12 col-sm-12 col-xs-12');
  } ?> main_single">

    <?php if (have_posts()) {
      while (have_posts()) {
        the_post(); ?>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
              <div class="title_post col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h3>
                  <?php the_title(); ?>
                </h3>
              </div>
            </div>
            <div class="single row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="full_img post-image">
                  <?php the_post_thumbnail(array(800, 400)); ?>
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 post-description">
                <?php the_content(); ?>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 comment_form">
                <?php comments_template(); ?>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 comment_form">
                <?php wp_bizone_entry_meta_footer(); ?>
              </div>
            </div>
          </div>
        </div>

      <?php }
    } else { ?>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h2>
            <?php _e('NOT FOUND', 'wp-bizone'); ?>
          </h2>
        </div>
      </div>
    <?php } ?>

    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 paginator_single">
        <div class="left_single">
          <?php previous_post_link('%link', 'Prev', true); ?>
        </div>
        <div class="right_single">
          <?php next_post_link('%link', 'Next', true); ?>
        </div>
      </div>
    </div>
  </div>

  <?php get_template_part('templates/positions-after-content'); ?>

</div>

<?php get_footer(); ?>