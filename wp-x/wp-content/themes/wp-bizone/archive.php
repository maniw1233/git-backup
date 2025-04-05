<?php
/**
 * wp-bizone WordPress Theme, ordasvit.com
 * wp-bizone is distributed under the terms of the GNU GPL
 * Copyright: OrdaSvit, Andrey Kvasnevskiy, ordasvit.com
 */

get_header(); ?>

<div id="primary" class="content-area wrapper-archive">
  <div id="content" class="site-content" role="main">

    <?php get_template_part('templates/positions-before-content'); ?>

    <div class="<?php if (wp_bizone_is_active_sidebar("sidebar_right") && wp_bizone_is_active_sidebar("sidebar_left")) {
      echo ('col-lg-6 col-md-12 col-sm-12 col-xs-12');
    } else if (wp_bizone_is_active_sidebar("sidebar_right") || wp_bizone_is_active_sidebar("sidebar_left")) {
      echo ('col-lg-9 col-md-12 col-sm-12 col-xs-12');
    } else {
      echo ('col-lg-12 col-md-12 col-sm-12 col-xs-12');
    } ?>  archive-page">

      <header class="archive-header">
        <h1 class="archive-title">
          <?php
          if (is_day()):
            printf(__('Daily Archives: %s', 'wp-bizone'), get_the_date());
          elseif (is_month()):
            printf(__('Monthly Archives: %s', 'wp-bizone'), get_the_date(_x('F Y', 'monthly archives date format', 'wp-bizone')));
          elseif (is_year()):
            printf(__('Yearly Archives: %s', 'wp-bizone'), get_the_date(_x('Y', 'yearly archives date format', 'wp-bizone')));
          else:
            _e('Archives', 'wp-bizone');
          endif;
          ?>
        </h1>
      </header><!-- .archive-header -->

      <?php get_template_part('templates/short-post'); ?>

    </div>

    <?php get_template_part('templates/positions-after-content'); ?>

  </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>