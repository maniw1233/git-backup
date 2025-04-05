<?php
/**
 * wp-bizone WordPress Theme, ordasvit.com
 * wp-bizone is distributed under the terms of the GNU GPL
 * Copyright: OrdaSvit, Andrey Kvasnevskiy, ordasvit.com
 */
?>
<div id="wrapper-content">
    <div class="row">

        <?php
        if (!wp_bizone_show_position_preview("top_left", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("top_left")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("top_right") && wp_bizone_is_active_sidebar("top_left_center") && wp_bizone_is_active_sidebar("top_right_center")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("top_right") && wp_bizone_is_active_sidebar("top_left_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("top_right") && wp_bizone_is_active_sidebar("top_right_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("top_left_center") && wp_bizone_is_active_sidebar("top_right_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("top_right") || wp_bizone_is_active_sidebar("top_left_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("top_left_center") || wp_bizone_is_active_sidebar("top_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("top_right") || wp_bizone_is_active_sidebar("top_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("top_right") || wp_bizone_is_active_sidebar("top_left_center") || wp_bizone_is_active_sidebar("top_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else {
                echo ('col-lg-12');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('top_left'); ?>
            </div>
        <?php }
        ; ?>

        <?php
        if (!wp_bizone_show_position_preview("top_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("top_left_center")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("top_right") && wp_bizone_is_active_sidebar("top_left") && wp_bizone_is_active_sidebar("top_right_center")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("top_right") && wp_bizone_is_active_sidebar("top_left")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("top_right") && wp_bizone_is_active_sidebar("top_right_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("top_left") && wp_bizone_is_active_sidebar("top_right_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("top_right") || wp_bizone_is_active_sidebar("top_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("top_left") || wp_bizone_is_active_sidebar("top_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("top_right") || wp_bizone_is_active_sidebar("top_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("top_right") || wp_bizone_is_active_sidebar("top_left") || wp_bizone_is_active_sidebar("top_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else {
                echo ('col-lg-12');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('top_left_center'); ?>
            </div>
        <?php }
        ; ?>

        <?php
        if (!wp_bizone_show_position_preview("top_right_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("top_right_center")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("top_right") && wp_bizone_is_active_sidebar("top_left_center") && wp_bizone_is_active_sidebar("top_left")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("top_right") && wp_bizone_is_active_sidebar("top_left_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("top_right") && wp_bizone_is_active_sidebar("top_left")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("top_left_center") && wp_bizone_is_active_sidebar("top_left")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("top_right") || wp_bizone_is_active_sidebar("top_left_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("top_left_center") || wp_bizone_is_active_sidebar("top_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("top_right") || wp_bizone_is_active_sidebar("top_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("top_right") || wp_bizone_is_active_sidebar("top_left_center") || wp_bizone_is_active_sidebar("top_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else {
                echo ('col-lg-12');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('top_right_center'); ?>
            </div>
        <?php }
        ; ?>

        <?php
        if (!wp_bizone_show_position_preview("top_right", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("top_right")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("top_left") && wp_bizone_is_active_sidebar("top_left_center") && wp_bizone_is_active_sidebar("top_right_center")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("top_left") && wp_bizone_is_active_sidebar("top_left_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("top_left") && wp_bizone_is_active_sidebar("top_right_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("top_left_center") && wp_bizone_is_active_sidebar("top_right_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("top_left") || wp_bizone_is_active_sidebar("top_left_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("top_left_center") || wp_bizone_is_active_sidebar("top_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("top_left") || wp_bizone_is_active_sidebar("top_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("top_left") || wp_bizone_is_active_sidebar("top_left_center") || wp_bizone_is_active_sidebar("top_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else {
                echo ('col-lg-12');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('top_right'); ?>
            </div>
        <?php }
        ; ?>

    </div>

    <div class="row">

        <?php
        if (!wp_bizone_show_position_preview("line1_left", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line1_left")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("line1_right") && wp_bizone_is_active_sidebar("line1_left_center") && wp_bizone_is_active_sidebar("line1_right_center")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("line1_right") && wp_bizone_is_active_sidebar("line1_left_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line1_right") && wp_bizone_is_active_sidebar("line1_right_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line1_left_center") && wp_bizone_is_active_sidebar("line1_right_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line1_right") || wp_bizone_is_active_sidebar("line1_left_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line1_left_center") || wp_bizone_is_active_sidebar("line1_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line1_right") || wp_bizone_is_active_sidebar("line1_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line1_right") || wp_bizone_is_active_sidebar("line1_left_center") || wp_bizone_is_active_sidebar("line1_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else {
                echo ('col-lg-12 title_blog');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('line1_left'); ?>
            </div>
        <?php }
        ; ?>

        <?php
        if (!wp_bizone_show_position_preview("line1_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line1_left_center")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("line1_right") && wp_bizone_is_active_sidebar("line1_left") && wp_bizone_is_active_sidebar("line1_right_center")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("line1_right") && wp_bizone_is_active_sidebar("line1_left")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line1_right") && wp_bizone_is_active_sidebar("line1_right_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line1_left") && wp_bizone_is_active_sidebar("line1_right_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line1_right") || wp_bizone_is_active_sidebar("line1_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line1_left") || wp_bizone_is_active_sidebar("line1_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line1_right") || wp_bizone_is_active_sidebar("line1_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line1_right") || wp_bizone_is_active_sidebar("line1_left") || wp_bizone_is_active_sidebar("line1_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else {
                echo ('col-lg-12');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('line1_left_center'); ?>
            </div>
        <?php }
        ; ?>

        <?php
        if (!wp_bizone_show_position_preview("line1_right_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line1_right_center")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("line1_right") && wp_bizone_is_active_sidebar("line1_left_center") && wp_bizone_is_active_sidebar("line1_left")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("line1_right") && wp_bizone_is_active_sidebar("line1_left_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line1_right") && wp_bizone_is_active_sidebar("line1_left")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line1_left_center") && wp_bizone_is_active_sidebar("line1_left")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line1_right") || wp_bizone_is_active_sidebar("line1_left_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line1_left_center") || wp_bizone_is_active_sidebar("line1_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line1_right") || wp_bizone_is_active_sidebar("line1_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line1_right") || wp_bizone_is_active_sidebar("line1_left_center") || wp_bizone_is_active_sidebar("line1_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else {
                echo ('col-lg-12');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('line1_right_center'); ?>
            </div>
        <?php }
        ; ?>

        <?php
        if (!wp_bizone_show_position_preview("line1_right", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line1_right")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("line1_left") && wp_bizone_is_active_sidebar("line1_left_center") && wp_bizone_is_active_sidebar("line1_right_center")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("line1_left") && wp_bizone_is_active_sidebar("line1_left_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line1_left") && wp_bizone_is_active_sidebar("line1_right_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line1_left_center") && wp_bizone_is_active_sidebar("line1_right_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line1_left") || wp_bizone_is_active_sidebar("line1_left_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line1_left_center") || wp_bizone_is_active_sidebar("line1_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line1_left") || wp_bizone_is_active_sidebar("line1_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line1_left") || wp_bizone_is_active_sidebar("line1_left_center") || wp_bizone_is_active_sidebar("line1_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else {
                echo ('col-lg-12');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('line1_right'); ?>
            </div>
        <?php }
        ; ?>

    </div>

    <div class="row">

        <?php
        if (!wp_bizone_show_position_preview("line2_left", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line2_left")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("line2_left_center") && wp_bizone_is_active_sidebar("line2_right_center") && wp_bizone_is_active_sidebar("line2_right")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("line2_left_center") && wp_bizone_is_active_sidebar("line2_right_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line2_left_center") && wp_bizone_is_active_sidebar("line2_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line2_right_center") && wp_bizone_is_active_sidebar("line2_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line2_left_center") || wp_bizone_is_active_sidebar("line2_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12 line2 left');
            } else if (wp_bizone_is_active_sidebar("line2_right_center") || wp_bizone_is_active_sidebar("line2_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12 left');
            } else if (wp_bizone_is_active_sidebar("line2_left_center") || wp_bizone_is_active_sidebar("line2_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12 left');
            } else if (wp_bizone_is_active_sidebar("line2_left_center") || wp_bizone_is_active_sidebar("line2_right_center") || wp_bizone_is_active_sidebar("line2_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12 line2 left');
            } else {
                echo ('col-lg-12 menu_title');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('line2_left'); ?>

            </div>
        <?php }
        ; ?>

        <?php
        if (!wp_bizone_show_position_preview("line2_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line2_left_center")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("line2_left") && wp_bizone_is_active_sidebar("line2_right_center") && wp_bizone_is_active_sidebar("line2_right")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("line2_left") && wp_bizone_is_active_sidebar("line2_right_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line2_left") && wp_bizone_is_active_sidebar("line2_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line2_right_center") && wp_bizone_is_active_sidebar("line2_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line2_left") || wp_bizone_is_active_sidebar("line2_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12 right');
            } else if (wp_bizone_is_active_sidebar("line2_right_center") || wp_bizone_is_active_sidebar("line2_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12 right');
            } else if (wp_bizone_is_active_sidebar("line2_left") || wp_bizone_is_active_sidebar("line2_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12 right');
            } else if (wp_bizone_is_active_sidebar("line2_left") || wp_bizone_is_active_sidebar("line2_right_center") || wp_bizone_is_active_sidebar("line2_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12 line2 right');
            } else {
                echo ('col-lg-12');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('line2_left_center'); ?>
            </div>
        <?php }
        ; ?>

        <?php
        if (!wp_bizone_show_position_preview("line2_right_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line2_right_center")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("line2_left_center") && wp_bizone_is_active_sidebar("line2_left") && wp_bizone_is_active_sidebar("line2_right")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("line2_left_center") && wp_bizone_is_active_sidebar("line2_left")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line2_left_center") && wp_bizone_is_active_sidebar("line2_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line2_left") && wp_bizone_is_active_sidebar("line2_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line2_left_center") || wp_bizone_is_active_sidebar("line2_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line2_left") || wp_bizone_is_active_sidebar("line2_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line2_left_center") || wp_bizone_is_active_sidebar("line2_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line2_left_center") || wp_bizone_is_active_sidebar("line2_left") || wp_bizone_is_active_sidebar("line2_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12 line2');
            } else {
                echo ('col-lg-12');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('line2_right_center'); ?>
            </div>
        <?php }
        ; ?>

        <?php
        if (!wp_bizone_show_position_preview("line2_right", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line2_right")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("line2_left_center") && wp_bizone_is_active_sidebar("line2_right_center") && wp_bizone_is_active_sidebar("line2_left")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("line2_left_center") && wp_bizone_is_active_sidebar("line2_right_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line2_left_center") && wp_bizone_is_active_sidebar("line2_left")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line2_left_center") && wp_bizone_is_active_sidebar("line2_left")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line2_left_center") || wp_bizone_is_active_sidebar("line2_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line2_right_center") || wp_bizone_is_active_sidebar("line2_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line2_left_center") || wp_bizone_is_active_sidebar("line2_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line2_left_center") || wp_bizone_is_active_sidebar("line2_right_center") || wp_bizone_is_active_sidebar("line2_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12 line2');
            } else {
                echo ('col-lg-12');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('line2_right'); ?>
            </div>
        <?php }
        ; ?>

    </div>

    <div class="container">
        <div class="row">

            <?php
            if (!wp_bizone_show_position_preview("line3_left", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line3_left")) { ?>
                <div class="<?php if (wp_bizone_is_active_sidebar("line3_left_center") && wp_bizone_is_active_sidebar("line3_right_center") && wp_bizone_is_active_sidebar("line3_right")) {
                    echo 'col-md-3 col-sm-3 col-xs-12';
                } else if (wp_bizone_is_active_sidebar("line3_left_center") && wp_bizone_is_active_sidebar("line3_right_center")) {
                    echo ('col-md-4 col-sm-4 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line3_left_center") && wp_bizone_is_active_sidebar("line3_right")) {
                    echo ('col-md-4 col-sm-4 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line3_right_center") && wp_bizone_is_active_sidebar("line3_right")) {
                    echo ('col-md-4 col-sm-4 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line3_left_center") || wp_bizone_is_active_sidebar("line3_right_center")) {
                    echo ('col-md-6 col-sm-6 col-xs-12 title_left');
                } else if (wp_bizone_is_active_sidebar("line3_right_center") || wp_bizone_is_active_sidebar("line3_right")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line3_left_center") || wp_bizone_is_active_sidebar("line3_right")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line3_left_center") || wp_bizone_is_active_sidebar("line3_right_center") || wp_bizone_is_active_sidebar("line3_right")) {
                    echo ('col-md-6 col-sm-6 col-xs-12 title_left');
                } else {
                    echo ('col-lg-12');
                } ?>">
                    <?php if (function_exists('dynamic_sidebar'))
                        dynamic_sidebar('line3_left'); ?>
                </div>
            <?php }
            ; ?>

            <?php
            if (!wp_bizone_show_position_preview("line3_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line3_left_center")) { ?>
                <div class="<?php if (wp_bizone_is_active_sidebar("line3_left") && wp_bizone_is_active_sidebar("line3_right_center") && wp_bizone_is_active_sidebar("line3_right")) {
                    echo 'col-md-3 col-sm-3 col-xs-12';
                } else if (wp_bizone_is_active_sidebar("line3_left") && wp_bizone_is_active_sidebar("line3_right_center")) {
                    echo ('col-md-4 col-sm-4 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line3_left") && wp_bizone_is_active_sidebar("line3_right")) {
                    echo ('col-md-4 col-sm-4 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line3_right_center") && wp_bizone_is_active_sidebar("line3_right")) {
                    echo ('col-md-4 col-sm-4 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line3_left") || wp_bizone_is_active_sidebar("line3_right_center")) {
                    echo ('col-md-6 col-sm-6 col-xs-12 right');
                } else if (wp_bizone_is_active_sidebar("line3_right_center") || wp_bizone_is_active_sidebar("line3_right")) {
                    echo ('col-md-6 col-sm-6 col-xs-12 right');
                } else if (wp_bizone_is_active_sidebar("line3_left") || wp_bizone_is_active_sidebar("line3_right")) {
                    echo ('col-md-6 col-sm-6 col-xs-12 right');
                } else if (wp_bizone_is_active_sidebar("line3_left") || wp_bizone_is_active_sidebar("line3_right_center") || wp_bizone_is_active_sidebar("line3_right")) {
                    echo ('col-md-6 col-sm-6 col-xs-12 right');
                } else {
                    echo ('col-lg-12');
                } ?>">
                    <?php if (function_exists('dynamic_sidebar'))
                        dynamic_sidebar('line3_left_center'); ?>
                </div>
            <?php }
            ; ?>

            <?php
            if (!wp_bizone_show_position_preview("line3_right_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line3_right_center")) { ?>
                <div class="<?php if (wp_bizone_is_active_sidebar("line3_left_center") && wp_bizone_is_active_sidebar("line3_left") && wp_bizone_is_active_sidebar("line3_right")) {
                    echo 'col-md-3 col-sm-3 col-xs-12';
                } else if (wp_bizone_is_active_sidebar("line3_left_center") && wp_bizone_is_active_sidebar("line3_left")) {
                    echo ('col-md-4 col-sm-4 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line3_left_center") && wp_bizone_is_active_sidebar("line3_right")) {
                    echo ('col-md-4 col-sm-4 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line3_left") && wp_bizone_is_active_sidebar("line3_right")) {
                    echo ('col-md-4 col-sm-4 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line3_left_center") || wp_bizone_is_active_sidebar("line3_left")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line3_left") || wp_bizone_is_active_sidebar("line3_right")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line3_left_center") || wp_bizone_is_active_sidebar("line3_right")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line3_left_center") || wp_bizone_is_active_sidebar("line3_left") || wp_bizone_is_active_sidebar("line3_right")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else {
                    echo ('col-lg-12');
                } ?>">
                    <?php if (function_exists('dynamic_sidebar'))
                        dynamic_sidebar('line3_right_center'); ?>
                </div>
            <?php }
            ; ?>

            <?php
            if (!wp_bizone_show_position_preview("line3_right", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line3_right")) { ?>
                <div class="<?php if (wp_bizone_is_active_sidebar("line3_left_center") && wp_bizone_is_active_sidebar("line3_right_center") && wp_bizone_is_active_sidebar("line3_left")) {
                    echo 'col-md-3 col-sm-3 col-xs-12';
                } else if (wp_bizone_is_active_sidebar("line3_left_center") && wp_bizone_is_active_sidebar("line3_right_center")) {
                    echo ('col-md-4 col-sm-4 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line3_left_center") && wp_bizone_is_active_sidebar("line3_left")) {
                    echo ('col-md-4 col-sm-4 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line3_left_center") && wp_bizone_is_active_sidebar("line3_left")) {
                    echo ('col-md-4 col-sm-4 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line3_left_center") || wp_bizone_is_active_sidebar("line3_right_center")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line3_right_center") || wp_bizone_is_active_sidebar("line3_left")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line3_left_center") || wp_bizone_is_active_sidebar("line3_left")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line3_left_center") || wp_bizone_is_active_sidebar("line3_right_center") || wp_bizone_is_active_sidebar("line3_left")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else {
                    echo ('col-lg-12');
                } ?>">
                    <?php if (function_exists('dynamic_sidebar'))
                        dynamic_sidebar('line3_right'); ?>
                </div>
            <?php }
            ; ?>

        </div>
    </div>

    <div class="row">

        <?php
        if (!wp_bizone_show_position_preview("line4_left", 'col-md-3 col-sm-3 col-xs-12 blocks left') && wp_bizone_is_active_sidebar("line4_left")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("line4_left_center") && wp_bizone_is_active_sidebar("line4_right_center") && wp_bizone_is_active_sidebar("line4_right")) {
                echo 'col-md-3 col-sm-3 col-xs-12 blocks left';
            } else if (wp_bizone_is_active_sidebar("line4_left_center") && wp_bizone_is_active_sidebar("line4_right_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line4_left_center") && wp_bizone_is_active_sidebar("line4_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line4_right_center") && wp_bizone_is_active_sidebar("line4_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line4_left_center") || wp_bizone_is_active_sidebar("line4_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line4_right_center") || wp_bizone_is_active_sidebar("line4_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line4_left_center") || wp_bizone_is_active_sidebar("line4_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line4_left_center") || wp_bizone_is_active_sidebar("line4_right_center") || wp_bizone_is_active_sidebar("line4_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else {
                echo ('col-lg-12');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('line4_left'); ?>
            </div>
        <?php }
        ; ?>

        <?php
        if (!wp_bizone_show_position_preview("line4_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line4_left_center")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("line4_left") && wp_bizone_is_active_sidebar("line4_right_center") && wp_bizone_is_active_sidebar("line4_right")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("line4_left") && wp_bizone_is_active_sidebar("line4_right_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line4_left") && wp_bizone_is_active_sidebar("line4_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line4_right_center") && wp_bizone_is_active_sidebar("line4_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line4_left") || wp_bizone_is_active_sidebar("line4_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line4_right_center") || wp_bizone_is_active_sidebar("line4_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line4_left") || wp_bizone_is_active_sidebar("line4_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line4_left") || wp_bizone_is_active_sidebar("line4_right_center") || wp_bizone_is_active_sidebar("line4_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else {
                echo ('col-lg-12');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('line4_left_center'); ?>
            </div>
        <?php }
        ; ?>

        <?php
        if (!wp_bizone_show_position_preview("line4_right_center", 'col-md-3 col-sm-3 col-xs-12 blocks in_up') && wp_bizone_is_active_sidebar("line4_right_center")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("line4_left_center") && wp_bizone_is_active_sidebar("line4_left") && wp_bizone_is_active_sidebar("line4_right")) {
                echo 'col-md-3 col-sm-3 col-xs-12 blocks in_up';
            } else if (wp_bizone_is_active_sidebar("line4_left_center") && wp_bizone_is_active_sidebar("line4_left")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line4_left_center") && wp_bizone_is_active_sidebar("line4_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line4_left") && wp_bizone_is_active_sidebar("line4_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line4_left_center") || wp_bizone_is_active_sidebar("line4_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line4_left") || wp_bizone_is_active_sidebar("line4_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line4_left_center") || wp_bizone_is_active_sidebar("line4_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line4_left_center") || wp_bizone_is_active_sidebar("line4_left") || wp_bizone_is_active_sidebar("line4_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else {
                echo ('col-lg-12');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('line4_right_center'); ?>
            </div>
        <?php }
        ; ?>

        <?php
        if (!wp_bizone_show_position_preview("line4_right", 'col-md-3 col-sm-3 col-xs-12 blocks right') && wp_bizone_is_active_sidebar("line4_right")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("line4_left_center") && wp_bizone_is_active_sidebar("line4_right_center") && wp_bizone_is_active_sidebar("line4_left")) {
                echo 'col-md-3 col-sm-3 col-xs-12 blocks right';
            } else if (wp_bizone_is_active_sidebar("line4_left_center") && wp_bizone_is_active_sidebar("line4_right_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line4_left_center") && wp_bizone_is_active_sidebar("line4_left")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line4_left_center") && wp_bizone_is_active_sidebar("line4_left")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line4_left_center") || wp_bizone_is_active_sidebar("line4_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line4_right_center") || wp_bizone_is_active_sidebar("line4_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line4_left_center") || wp_bizone_is_active_sidebar("line4_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line4_left_center") || wp_bizone_is_active_sidebar("line4_right_center") || wp_bizone_is_active_sidebar("line4_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else {
                echo ('col-lg-12');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('line4_right'); ?>
            </div>
        <?php }
        ; ?>

    </div>

    <div class="container">
        <div class="row">

            <?php
            if (!wp_bizone_show_position_preview("center_left", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("center_left")) { ?>
                <div class="<?php if (wp_bizone_is_active_sidebar("center_left_position") && wp_bizone_is_active_sidebar("center_right_position") && wp_bizone_is_active_sidebar("center_right")) {
                    echo 'col-md-3 col-sm-3 col-xs-12';
                } else if (wp_bizone_is_active_sidebar("center_left_position") && wp_bizone_is_active_sidebar("center_right_position")) {
                    echo ('col-md-4 col-sm-4 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("center_left_position") && wp_bizone_is_active_sidebar("center_right")) {
                    echo ('col-md-4 col-sm-4 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("center_right_position") && wp_bizone_is_active_sidebar("center_right")) {
                    echo ('col-md-4 col-sm-4 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("center_left_position") || wp_bizone_is_active_sidebar("center_right_position")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("center_right_position") || wp_bizone_is_active_sidebar("center_right")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("center_left_position") || wp_bizone_is_active_sidebar("center_right")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("center_left_position") || wp_bizone_is_active_sidebar("center_right_position") || wp_bizone_is_active_sidebar("center_right")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else {
                    echo ('col-lg-12');
                } ?>">
                    <?php if (function_exists('dynamic_sidebar'))
                        dynamic_sidebar('center_left'); ?>
                </div>
            <?php }
            ; ?>

            <?php
            if (!wp_bizone_show_position_preview("center_left_position", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("center_left_position")) {
                ?>
                <div class="<?php if (wp_bizone_is_active_sidebar("center_left") && wp_bizone_is_active_sidebar("center_right_position") && wp_bizone_is_active_sidebar("center_right")) {
                    echo 'col-md-3 col-sm-3 col-xs-12';
                } else if (wp_bizone_is_active_sidebar("center_left") && wp_bizone_is_active_sidebar("center_right_position")) {
                    echo ('col-md-4 col-sm-4 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("center_left") && wp_bizone_is_active_sidebar("center_right")) {
                    echo ('col-md-4 col-sm-4 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("center_right_position") && wp_bizone_is_active_sidebar("center_right")) {
                    echo ('col-md-4 col-sm-4 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("center_left") || wp_bizone_is_active_sidebar("center_right_position")) {
                    echo ('col-md-6 col-sm-6 col-xs-12 title_left');
                } else if (wp_bizone_is_active_sidebar("center_right_position") || wp_bizone_is_active_sidebar("center_right")) {
                    echo ('col-md-6 col-sm-6 col-xs-12 title_left');
                } else if (wp_bizone_is_active_sidebar("center_left") || wp_bizone_is_active_sidebar("center_right")) {
                    echo ('col-md-6 col-sm-6 col-xs-12 title_left');
                } else if (wp_bizone_is_active_sidebar("center_left") || wp_bizone_is_active_sidebar("center_right_position") || wp_bizone_is_active_sidebar("center_right")) {
                    echo ('col-md-6 col-sm-6 col-xs-12 title_left');
                } else {
                    echo ('col-lg-12');
                } ?>">
                    <?php if (function_exists('dynamic_sidebar'))
                        dynamic_sidebar('center_left_position'); ?>
                </div>
            <?php }
            ; ?>

            <?php
            if (!wp_bizone_show_position_preview("center_right_position", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("center_right_position")) { ?>
                <div class="<?php if (wp_bizone_is_active_sidebar("center_left_position") && wp_bizone_is_active_sidebar("center_left") && wp_bizone_is_active_sidebar("center_right")) {
                    echo 'col-md-3 col-sm-3 col-xs-12';
                } else if (wp_bizone_is_active_sidebar("center_left_position") && wp_bizone_is_active_sidebar("center_left")) {
                    echo ('col-md-4 col-sm-4 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("center_left_position") && wp_bizone_is_active_sidebar("center_right")) {
                    echo ('col-md-4 col-sm-4 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("center_left") && wp_bizone_is_active_sidebar("center_right")) {
                    echo ('col-md-4 col-sm-4 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("center_left_position") || wp_bizone_is_active_sidebar("center_left")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("center_left") || wp_bizone_is_active_sidebar("center_right")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("center_left_position") || wp_bizone_is_active_sidebar("center_right")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("center_left_position") || wp_bizone_is_active_sidebar("center_left") || wp_bizone_is_active_sidebar("center_right")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else {
                    echo ('col-lg-12');
                } ?>">
                    <?php if (function_exists('dynamic_sidebar'))
                        dynamic_sidebar('center_right_position'); ?>
                </div>
            <?php }
            ; ?>

            <?php
            if (!wp_bizone_show_position_preview("center_right", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("center_right")) { ?>
                <div class="<?php if (wp_bizone_is_active_sidebar("center_left_position") && wp_bizone_is_active_sidebar("center_right_position") && wp_bizone_is_active_sidebar("center_left")) {
                    echo 'col-md-3 col-sm-3 col-xs-12';
                } else if (wp_bizone_is_active_sidebar("center_left_position") && wp_bizone_is_active_sidebar("center_right_position")) {
                    echo ('col-md-4 col-sm-4 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("center_left_position") && wp_bizone_is_active_sidebar("center_left")) {
                    echo ('col-md-4 col-sm-4 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("center_right_position") && wp_bizone_is_active_sidebar("center_left")) {
                    echo ('col-md-4 col-sm-4 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("center_left_position") || wp_bizone_is_active_sidebar("center_right_position")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("center_right_position") || wp_bizone_is_active_sidebar("center_left")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("center_left_position") || wp_bizone_is_active_sidebar("center_left")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("center_left_position") || wp_bizone_is_active_sidebar("center_right_position") || wp_bizone_is_active_sidebar("center_left")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else {
                    echo ('col-lg-12');
                } ?>">
                    <?php if (function_exists('dynamic_sidebar'))
                        dynamic_sidebar('center_right'); ?>
                </div>
            <?php }
            ; ?>

        </div>
    </div>

    <div class="container">
        <div class="row">

            <?php
            if (!wp_bizone_show_position_preview("sidebar_left", 'col-lg-3 col-md-12 col-sm-12 col-xs-12') && wp_bizone_is_active_sidebar("sidebar_left")) { ?>
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 side_bar_left_page">
                    <?php if (function_exists('dynamic_sidebar'))
                        dynamic_sidebar('sidebar_left'); ?>
                </div>
            <?php }
            ; ?>