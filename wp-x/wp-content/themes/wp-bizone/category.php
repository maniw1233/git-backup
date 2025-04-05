<?php
/**
 * wp-bizone WordPress Theme, ordasvit.com
 * wp-bizone is distributed under the terms of the GNU GPL
 * Copyright: OrdaSvit, Andrey Kvasnevskiy, ordasvit.com
 */

/*
Template Name: Category
*/

get_header();
?>

<div class="row category">

  <?php get_template_part('templates/positions-before-content'); ?>

  <div class="<?php if (wp_bizone_is_active_sidebar("sidebar_right") && wp_bizone_is_active_sidebar("sidebar_left")) {
    echo ('col-lg-6 col-md-12 col-sm-12 col-xs-12');
  } else if (wp_bizone_is_active_sidebar("sidebar_right") || wp_bizone_is_active_sidebar("sidebar_left")) {
    echo ('col-lg-9 col-md-12 col-sm-12 col-xs-12');
  } else {
    echo ('col-lg-12 col-md-12 col-sm-12 col-xs-12');
  } ?> category-wrapper">

    <?php
    $countcat = get_category(get_query_var('cat'), false);

    print_r("<h1 class='category-name'>" . $countcat->cat_name . '</h1>');
    ?>

    <?php get_template_part('templates/short-post'); ?>

  </div>

  <?php get_template_part('templates/positions-after-content'); ?>

</div>

<?php get_footer(); ?>