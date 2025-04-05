<?php
/**
 * wp-bizone WordPress Theme, ordasvit.com
 * wp-bizone is distributed under the terms of the GNU GPL
 * Copyright: OrdaSvit, Andrey Kvasnevskiy, ordasvit.com
 */

    if (!wp_bizone_show_position_preview("sidebar_right", "col-lg-3 col-md-12 col-sm-12 col-xs-12") && wp_bizone_is_active_sidebar("sidebar_right")) {
        if (function_exists('dynamic_sidebar') && wp_bizone_is_active_sidebar("sidebar_right")) {
            ?>
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 side_bar_right_page">
                <?php
                dynamic_sidebar('sidebar_right');
                ?>
            </div>
            <?php
        }
    }
    ;
    ?>

    </div>
    </div>

    <div class="row">
        <?php
        if (!wp_bizone_show_position_preview("line5_left", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line5_left")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("line5_right_center") && wp_bizone_is_active_sidebar("line5_right") && wp_bizone_is_active_sidebar("line5_left_center")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("line5_right_center") && wp_bizone_is_active_sidebar("line5_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line5_right_center") && wp_bizone_is_active_sidebar("line5_left_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line5_right_center") && wp_bizone_is_active_sidebar("line5_left_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line5_right_center") || wp_bizone_is_active_sidebar("line5_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12 gallery left');
            } else if (wp_bizone_is_active_sidebar("line5_right") || wp_bizone_is_active_sidebar("line5_left_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12 gallery left');
            } else if (wp_bizone_is_active_sidebar("line5_right_center") || wp_bizone_is_active_sidebar("line5_left_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12 gallery left');
            } else if (wp_bizone_is_active_sidebar("line5_right_center") || wp_bizone_is_active_sidebar("line5_right") || wp_bizone_is_active_sidebar("line5_left_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12 gallery left');
            } else {
                echo ('col-lg-12');
            } ?>">

                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('line5_left'); ?>
            </div>
        <?php }
        ; ?>

        <?php
        if (!wp_bizone_show_position_preview("line5_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line5_left_center")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("line5_right_center") && wp_bizone_is_active_sidebar("line5_right") && wp_bizone_is_active_sidebar("line5_left")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("line5_right_center") && wp_bizone_is_active_sidebar("line5_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line5_right_center") && wp_bizone_is_active_sidebar("line5_left")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line5_right") && wp_bizone_is_active_sidebar("line5_left")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line5_right_center") || wp_bizone_is_active_sidebar("line5_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12 right');
            } else if (wp_bizone_is_active_sidebar("line5_right") || wp_bizone_is_active_sidebar("line5_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12 right');
            } else if (wp_bizone_is_active_sidebar("line5_right_center") || wp_bizone_is_active_sidebar("line5_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12 right');
            } else if (wp_bizone_is_active_sidebar("line5_right_center") || wp_bizone_is_active_sidebar("line5_right") || wp_bizone_is_active_sidebar("line5_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12 right');
            } else {
                echo ('col-lg-12');
            } ?>">

                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('line5_left_center'); ?>
            </div>
        <?php }
        ; ?>

        <?php
        if (!wp_bizone_show_position_preview("line5_right_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line5_right_center")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("line5_left_center") && wp_bizone_is_active_sidebar("line5_right") && wp_bizone_is_active_sidebar("line5_left")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("line5_left_center") && wp_bizone_is_active_sidebar("line5_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line5_left_center") && wp_bizone_is_active_sidebar("line5_left")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line5_right") && wp_bizone_is_active_sidebar("line5_left")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line5_left_center") || wp_bizone_is_active_sidebar("line5_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line5_right") || wp_bizone_is_active_sidebar("line5_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line5_left_center") || wp_bizone_is_active_sidebar("line5_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line5_left_center") || wp_bizone_is_active_sidebar("line5_right") || wp_bizone_is_active_sidebar("line5_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else {
                echo ('col-lg-12');
            } ?>">

                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('line5_right_center'); ?>
            </div>
        <?php }
        ; ?>

        <?php
        if (!wp_bizone_show_position_preview("line5_right", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line5_right")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("line5_right_center") && wp_bizone_is_active_sidebar("line5_left_center") && wp_bizone_is_active_sidebar("line5_left")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("line5_right_center") && wp_bizone_is_active_sidebar("line5_left_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line5_right_center") && wp_bizone_is_active_sidebar("line5_left")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line5_left_center") && wp_bizone_is_active_sidebar("line5_left")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line5_right_center") || wp_bizone_is_active_sidebar("line5_left_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line5_left_center") || wp_bizone_is_active_sidebar("line5_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line5_right_center") || wp_bizone_is_active_sidebar("line5_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line5_right_center") || wp_bizone_is_active_sidebar("line5_left_center") || wp_bizone_is_active_sidebar("line5_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else {
                echo ('col-lg-12');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('line5_right'); ?>
            </div>
        <?php }
        ; ?>
    </div>

    <div class="row">

        <?php
        if (!wp_bizone_show_position_preview("line6_left", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line6_left")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("line6_left_center") && wp_bizone_is_active_sidebar("line6_right_center") && wp_bizone_is_active_sidebar("line6_right")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("line6_left_center") && wp_bizone_is_active_sidebar("line6_right_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line6_left_center") && wp_bizone_is_active_sidebar("line6_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line6_right_center") && wp_bizone_is_active_sidebar("line6_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line6_left_center") || wp_bizone_is_active_sidebar("line6_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12 title_post left');
            } else if (wp_bizone_is_active_sidebar("line6_right_center") || wp_bizone_is_active_sidebar("line6_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12 title_post');
            } else if (wp_bizone_is_active_sidebar("line6_left_center") || wp_bizone_is_active_sidebar("line6_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12 title_post');
            } else if (wp_bizone_is_active_sidebar("line6_left_center") || wp_bizone_is_active_sidebar("line6_right_center") || wp_bizone_is_active_sidebar("line6_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12 title_post');
            } else {
                echo ('col-lg-12');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('line6_left'); ?>
            </div>
        <?php }
        ; ?>

        <?php
        if (!wp_bizone_show_position_preview("line6_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line6_left_center")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("line6_left") && wp_bizone_is_active_sidebar("line6_right_center") && wp_bizone_is_active_sidebar("line6_right")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("line6_left") && wp_bizone_is_active_sidebar("line6_right_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line6_left") && wp_bizone_is_active_sidebar("line6_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line6_right_center") && wp_bizone_is_active_sidebar("line6_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line6_left") || wp_bizone_is_active_sidebar("line6_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12 title_post_left');
            } else if (wp_bizone_is_active_sidebar("line6_right_center") || wp_bizone_is_active_sidebar("line6_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12 title_post_left');
            } else if (wp_bizone_is_active_sidebar("line6_left") || wp_bizone_is_active_sidebar("line6_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12 title_post_left');
            } else if (wp_bizone_is_active_sidebar("line6_left") || wp_bizone_is_active_sidebar("line6_right_center") || wp_bizone_is_active_sidebar("line6_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12 title_post_left');
            } else {
                echo ('col-lg-12');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('line6_left_center'); ?>
            </div>
        <?php }
        ; ?>

        <?php
        if (!wp_bizone_show_position_preview("line6_right_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line6_right_center")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("line6_left_center") && wp_bizone_is_active_sidebar("line6_left") && wp_bizone_is_active_sidebar("line6_right")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("line6_left_center") && wp_bizone_is_active_sidebar("line6_left")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line6_left_center") && wp_bizone_is_active_sidebar("line6_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line6_left") && wp_bizone_is_active_sidebar("line6_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line6_left_center") || wp_bizone_is_active_sidebar("line6_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line6_left") || wp_bizone_is_active_sidebar("line6_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line6_left_center") || wp_bizone_is_active_sidebar("line6_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line6_left_center") || wp_bizone_is_active_sidebar("line6_left") || wp_bizone_is_active_sidebar("line6_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else {
                echo ('col-lg-12');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('line6_right_center'); ?>
            </div>
        <?php }
        ; ?>

        <?php
        if (!wp_bizone_show_position_preview("line6_right", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line6_right")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("line6_left_center") && wp_bizone_is_active_sidebar("line6_right_center") && wp_bizone_is_active_sidebar("line6_left")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("line6_left_center") && wp_bizone_is_active_sidebar("line6_right_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line6_left_center") && wp_bizone_is_active_sidebar("line6_left")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line6_left_center") && wp_bizone_is_active_sidebar("line6_left")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line6_left_center") || wp_bizone_is_active_sidebar("line6_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line6_right_center") || wp_bizone_is_active_sidebar("line6_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line6_left_center") || wp_bizone_is_active_sidebar("line6_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line6_left_center") || wp_bizone_is_active_sidebar("line6_right_center") || wp_bizone_is_active_sidebar("line6_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else {
                echo ('col-lg-12');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('line6_right'); ?>
            </div>
        <?php }
        ; ?>

    </div>

    <div class="row">

        <?php
        if (!wp_bizone_show_position_preview("line7_left", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line7_left")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("line7_left_center") && wp_bizone_is_active_sidebar("line7_right_center") && wp_bizone_is_active_sidebar("line7_right")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("line7_left_center") && wp_bizone_is_active_sidebar("line7_right_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line7_left_center") && wp_bizone_is_active_sidebar("line7_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line7_right_center") && wp_bizone_is_active_sidebar("line7_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line7_left_center") || wp_bizone_is_active_sidebar("line7_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12 contact_title_right left');
            } else if (wp_bizone_is_active_sidebar("line7_right_center") || wp_bizone_is_active_sidebar("line7_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12 contact_title_right left');
            } else if (wp_bizone_is_active_sidebar("line7_left_center") || wp_bizone_is_active_sidebar("line7_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12 contact_title_right left');
            } else if (wp_bizone_is_active_sidebar("line7_left_center") || wp_bizone_is_active_sidebar("line7_right_center") || wp_bizone_is_active_sidebar("line7_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12 contact_title_right left');
            } else {
                echo ('col-lg-12');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('line7_left'); ?>
            </div>
        <?php }
        ; ?>

        <?php
        if (!wp_bizone_show_position_preview("line7_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line7_left_center")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("line7_left") && wp_bizone_is_active_sidebar("line7_right_center") && wp_bizone_is_active_sidebar("line7_right")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("line7_left") && wp_bizone_is_active_sidebar("line7_right_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line7_left") && wp_bizone_is_active_sidebar("line7_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line7_right_center") && wp_bizone_is_active_sidebar("line7_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line7_left") || wp_bizone_is_active_sidebar("line7_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12 contact_title');
            } else if (wp_bizone_is_active_sidebar("line7_right_center") || wp_bizone_is_active_sidebar("line7_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12 contact_title');
            } else if (wp_bizone_is_active_sidebar("line7_left") || wp_bizone_is_active_sidebar("line7_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12 contact_title_right');
            } else if (wp_bizone_is_active_sidebar("line7_left") || wp_bizone_is_active_sidebar("line7_right_center") || wp_bizone_is_active_sidebar("line7_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12 contact_title');
            } else {
                echo ('col-lg-12');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('line7_left_center'); ?>
            </div>
        <?php }
        ; ?>

        <?php
        if (!wp_bizone_show_position_preview("line7_right_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line7_right_center")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("line7_left_center") && wp_bizone_is_active_sidebar("line7_left") && wp_bizone_is_active_sidebar("line7_right")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("line7_left_center") && wp_bizone_is_active_sidebar("line7_left")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line7_left_center") && wp_bizone_is_active_sidebar("line7_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line7_left") && wp_bizone_is_active_sidebar("line7_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line7_left_center") || wp_bizone_is_active_sidebar("line7_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line7_left") || wp_bizone_is_active_sidebar("line7_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line7_left_center") || wp_bizone_is_active_sidebar("line7_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line7_left_center") || wp_bizone_is_active_sidebar("line7_left") || wp_bizone_is_active_sidebar("line7_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else {
                echo ('col-lg-12');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('line7_right_center'); ?>

            </div>
        <?php }
        ; ?>

        <?php
        if (!wp_bizone_show_position_preview("line7_right", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line7_right")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("line7_left_center") && wp_bizone_is_active_sidebar("line7_right_center") && wp_bizone_is_active_sidebar("line7_left")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("line7_left_center") && wp_bizone_is_active_sidebar("line7_right_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line7_left_center") && wp_bizone_is_active_sidebar("line7_left")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line7_left_center") && wp_bizone_is_active_sidebar("line7_left")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line7_left_center") || wp_bizone_is_active_sidebar("line7_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line7_right_center") || wp_bizone_is_active_sidebar("line7_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line7_left_center") || wp_bizone_is_active_sidebar("line7_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line7_left_center") || wp_bizone_is_active_sidebar("line7_right_center") || wp_bizone_is_active_sidebar("line7_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else {
                echo ('col-lg-12');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('line7_right'); ?>
            </div>
        <?php }
        ; ?>

    </div>

    <div class="container">
        <div class="row">

            <?php
            if (!wp_bizone_show_position_preview("line8_left", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line8_left")) { ?>
                <div class="<?php if (wp_bizone_is_active_sidebar("line8_left_center") && wp_bizone_is_active_sidebar("line8_right_center") && wp_bizone_is_active_sidebar("line8_right")) {
                    echo 'col-md-3 col-sm-3 col-xs-12';
                } else if (wp_bizone_is_active_sidebar("line8_left_center") && wp_bizone_is_active_sidebar("line8_right_center")) {
                    echo ('col-md-4 col-sm-4 col-xs-12 contact_block left');
                } else if (wp_bizone_is_active_sidebar("line8_left_center") && wp_bizone_is_active_sidebar("line8_right")) {
                    echo ('col-md-4 col-sm-4 col-xs-12 contact_block left');
                } else if (wp_bizone_is_active_sidebar("line8_right_center") && wp_bizone_is_active_sidebar("line8_right")) {
                    echo ('col-md-4 col-sm-4 col-xs-12 contact_block left');
                } else if (wp_bizone_is_active_sidebar("line8_left_center") || wp_bizone_is_active_sidebar("line8_right_center")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line8_right_center") || wp_bizone_is_active_sidebar("line8_right")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line8_left_center") || wp_bizone_is_active_sidebar("line8_right")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line8_left_center") || wp_bizone_is_active_sidebar("line8_right_center") || wp_bizone_is_active_sidebar("line8_right")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else {
                    echo ('col-lg-12');
                } ?>">
                    <?php if (function_exists('dynamic_sidebar'))
                        dynamic_sidebar('line8_left'); ?>
                </div>
            <?php }
            ; ?>

            <?php
            if (!wp_bizone_show_position_preview("line8_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line8_left_center")) { ?>
                <div class="<?php if (wp_bizone_is_active_sidebar("line8_left") && wp_bizone_is_active_sidebar("line8_right_center") && wp_bizone_is_active_sidebar("line8_right")) {
                    echo 'col-md-3 col-sm-3 col-xs-12';
                } else if (wp_bizone_is_active_sidebar("line8_left") && wp_bizone_is_active_sidebar("line8_right_center")) {
                    echo ('col-md-4 col-sm-4 col-xs-12 map_block in_up');
                } else if (wp_bizone_is_active_sidebar("line8_left") && wp_bizone_is_active_sidebar("line8_right")) {
                    echo ('col-md-4 col-sm-4 col-xs-12 map_block in_up');
                } else if (wp_bizone_is_active_sidebar("line8_right_center") && wp_bizone_is_active_sidebar("line8_right")) {
                    echo ('col-md-4 col-sm-4 col-xs-12 map_block in_up');
                } else if (wp_bizone_is_active_sidebar("line8_left") || wp_bizone_is_active_sidebar("line8_right_center")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line8_right_center") || wp_bizone_is_active_sidebar("line8_right")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line8_left") || wp_bizone_is_active_sidebar("line8_right")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line8_left") || wp_bizone_is_active_sidebar("line8_right_center") || wp_bizone_is_active_sidebar("line8_right")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else {
                    echo ('col-lg-12');
                } ?>">
                    <?php if (function_exists('dynamic_sidebar'))
                        dynamic_sidebar('line8_left_center'); ?>
                </div>
            <?php }
            ; ?>

            <?php
            if (!wp_bizone_show_position_preview("line8_right_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line8_right_center")) { ?>
                <div class="<?php if (wp_bizone_is_active_sidebar("line8_left_center") && wp_bizone_is_active_sidebar("line8_left") && wp_bizone_is_active_sidebar("line8_right")) {
                    echo 'col-md-3 col-sm-3 col-xs-12';
                } else if (wp_bizone_is_active_sidebar("line8_left_center") && wp_bizone_is_active_sidebar("line8_left")) {
                    echo ('col-md-4 col-sm-4 col-xs-12 adress_block right');
                } else if (wp_bizone_is_active_sidebar("line8_left_center") && wp_bizone_is_active_sidebar("line8_right")) {
                    echo ('col-md-4 col-sm-4 col-xs-12 adress_block right');
                } else if (wp_bizone_is_active_sidebar("line8_left") && wp_bizone_is_active_sidebar("line8_right")) {
                    echo ('col-md-4 col-sm-4 col-xs-12 adress_block right');
                } else if (wp_bizone_is_active_sidebar("line8_left_center") || wp_bizone_is_active_sidebar("line8_left")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line8_left") || wp_bizone_is_active_sidebar("line8_right")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line8_left_center") || wp_bizone_is_active_sidebar("line8_right")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line8_left_center") || wp_bizone_is_active_sidebar("line8_left") || wp_bizone_is_active_sidebar("line8_right")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else {
                    echo ('col-lg-12');
                } ?>">
                    <?php if (function_exists('dynamic_sidebar'))
                        dynamic_sidebar('line8_right_center'); ?>
                </div>
            <?php }
            ; ?>

            <?php
            if (!wp_bizone_show_position_preview("line8_right", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line8_right")) { ?>
                <div class="<?php if (wp_bizone_is_active_sidebar("line8_left_center") && wp_bizone_is_active_sidebar("line8_right_center") && wp_bizone_is_active_sidebar("line8_left")) {
                    echo 'col-md-3 col-sm-3 col-xs-12';
                } else if (wp_bizone_is_active_sidebar("line8_left_center") && wp_bizone_is_active_sidebar("line8_right_center")) {
                    echo ('col-md-4 col-sm-4 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line8_left_center") && wp_bizone_is_active_sidebar("line8_left")) {
                    echo ('col-md-4 col-sm-4 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line8_left_center") && wp_bizone_is_active_sidebar("line8_left")) {
                    echo ('col-md-4 col-sm-4 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line8_left_center") || wp_bizone_is_active_sidebar("line8_right_center")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line8_right_center") || wp_bizone_is_active_sidebar("line8_left")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line8_left_center") || wp_bizone_is_active_sidebar("line8_left")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else if (wp_bizone_is_active_sidebar("line8_left_center") || wp_bizone_is_active_sidebar("line8_right_center") || wp_bizone_is_active_sidebar("line8_left")) {
                    echo ('col-md-6 col-sm-6 col-xs-12');
                } else {
                    echo ('col-lg-12');
                } ?>">
                    <?php if (function_exists('dynamic_sidebar'))
                        dynamic_sidebar('line8_right'); ?>
                </div>
            <?php }
            ; ?>

        </div>
    </div>

    <div class="row">

        <?php
        if (!wp_bizone_show_position_preview("line9_left", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line9_left")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("line9_left_center") && wp_bizone_is_active_sidebar("line9_right_center") && wp_bizone_is_active_sidebar("line9_right")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("line9_left_center") && wp_bizone_is_active_sidebar("line9_right_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line9_left_center") && wp_bizone_is_active_sidebar("line9_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line9_right_center") && wp_bizone_is_active_sidebar("line9_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line9_left_center") || wp_bizone_is_active_sidebar("line9_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line9_right_center") || wp_bizone_is_active_sidebar("line9_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line9_left_center") || wp_bizone_is_active_sidebar("line9_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line9_left_center") || wp_bizone_is_active_sidebar("line9_right_center") || wp_bizone_is_active_sidebar("line9_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else {
                echo ('col-lg-12');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('line9_left'); ?>
            </div>
        <?php }
        ; ?>

        <?php
        if (!wp_bizone_show_position_preview("line9_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line9_left_center")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("line9_left") && wp_bizone_is_active_sidebar("line9_right_center") && wp_bizone_is_active_sidebar("line9_right")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("line9_left") && wp_bizone_is_active_sidebar("line9_right_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line9_left") && wp_bizone_is_active_sidebar("line9_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line9_right_center") && wp_bizone_is_active_sidebar("line9_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line9_left") || wp_bizone_is_active_sidebar("line9_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line9_right_center") || wp_bizone_is_active_sidebar("line9_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line9_left") || wp_bizone_is_active_sidebar("line9_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line9_left") || wp_bizone_is_active_sidebar("line9_right_center") || wp_bizone_is_active_sidebar("line9_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else {
                echo ('col-lg-12');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('line9_left_center'); ?>
            </div>
        <?php }
        ; ?>

        <?php
        if (!wp_bizone_show_position_preview("line9_right_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line9_right_center")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("line9_left_center") && wp_bizone_is_active_sidebar("line9_left") && wp_bizone_is_active_sidebar("line9_right")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("line9_left_center") && wp_bizone_is_active_sidebar("line9_left")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line9_left_center") && wp_bizone_is_active_sidebar("line9_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line9_left") && wp_bizone_is_active_sidebar("line9_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line9_left_center") || wp_bizone_is_active_sidebar("line9_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line9_left") || wp_bizone_is_active_sidebar("line9_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line9_left_center") || wp_bizone_is_active_sidebar("line9_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line9_left_center") || wp_bizone_is_active_sidebar("line9_left") || wp_bizone_is_active_sidebar("line9_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else {
                echo ('col-lg-12');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('line9_right_center'); ?>
            </div>
        <?php }
        ; ?>

        <?php
        if (!wp_bizone_show_position_preview("line9_right", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("line9_right")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("line9_left_center") && wp_bizone_is_active_sidebar("line9_right_center") && wp_bizone_is_active_sidebar("line9_left")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("line9_left_center") && wp_bizone_is_active_sidebar("line9_right_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line9_left_center") && wp_bizone_is_active_sidebar("line9_left")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line9_left_center") && wp_bizone_is_active_sidebar("line9_left")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line9_left_center") || wp_bizone_is_active_sidebar("line9_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line9_right_center") || wp_bizone_is_active_sidebar("line9_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line9_left_center") || wp_bizone_is_active_sidebar("line9_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("line9_left_center") || wp_bizone_is_active_sidebar("line9_right_center") || wp_bizone_is_active_sidebar("line9_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else {
                echo ('col-lg-12');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('line9_right'); ?>
            </div>
        <?php }
        ; ?>

    </div>

    <div class="row wrapper-bottom-row">

        <?php
        if (!wp_bizone_show_position_preview("bottom_left", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("bottom_left")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("bottom_left_center") && wp_bizone_is_active_sidebar("bottom_right_center") && wp_bizone_is_active_sidebar("bottom_right")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("bottom_left_center") && wp_bizone_is_active_sidebar("bottom_right_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("bottom_left_center") && wp_bizone_is_active_sidebar("bottom_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("bottom_right_center") && wp_bizone_is_active_sidebar("bottom_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("bottom_left_center") || wp_bizone_is_active_sidebar("bottom_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("bottom_right_center") || wp_bizone_is_active_sidebar("bottom_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("bottom_left_center") || wp_bizone_is_active_sidebar("bottom_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("bottom_left_center") || wp_bizone_is_active_sidebar("bottom_right_center") || wp_bizone_is_active_sidebar("bottom_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else {
                echo ('col-lg-12');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('bottom_left'); ?>
            </div>
        <?php }
        ; ?>

        <?php
        if (!wp_bizone_show_position_preview("bottom_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("bottom_left_center")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("bottom_left") && wp_bizone_is_active_sidebar("bottom_right_center") && wp_bizone_is_active_sidebar("bottom_right")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("bottom_left") && wp_bizone_is_active_sidebar("bottom_right_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("bottom_left") && wp_bizone_is_active_sidebar("bottom_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("bottom_right_center") && wp_bizone_is_active_sidebar("bottom_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("bottom_left") || wp_bizone_is_active_sidebar("bottom_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("bottom_right_center") || wp_bizone_is_active_sidebar("bottom_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("bottom_left") || wp_bizone_is_active_sidebar("bottom_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("bottom_left") || wp_bizone_is_active_sidebar("bottom_right_center") || wp_bizone_is_active_sidebar("bottom_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else {
                echo ('col-lg-12');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('bottom_left_center'); ?>
            </div>
        <?php }
        ; ?>

        <?php
        if (!wp_bizone_show_position_preview("bottom_right_center", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("bottom_right_center")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("bottom_left_center") && wp_bizone_is_active_sidebar("bottom_left") && wp_bizone_is_active_sidebar("bottom_right")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("bottom_left_center") && wp_bizone_is_active_sidebar("bottom_left")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("bottom_left_center") && wp_bizone_is_active_sidebar("bottom_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("bottom_left") && wp_bizone_is_active_sidebar("bottom_right")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("bottom_left_center") || wp_bizone_is_active_sidebar("bottom_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("bottom_left") || wp_bizone_is_active_sidebar("bottom_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("bottom_left_center") || wp_bizone_is_active_sidebar("bottom_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("bottom_left_center") || wp_bizone_is_active_sidebar("bottom_left") || wp_bizone_is_active_sidebar("bottom_right")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else {
                echo ('col-lg-12');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('bottom_right_center'); ?>
            </div>
        <?php }
        ; ?>

        <?php
        if (!wp_bizone_show_position_preview("bottom_right", 'col-md-3 col-sm-3 col-xs-12') && wp_bizone_is_active_sidebar("bottom_right")) { ?>
            <div class="<?php if (wp_bizone_is_active_sidebar("bottom_left_center") && wp_bizone_is_active_sidebar("bottom_right_center") && wp_bizone_is_active_sidebar("bottom_left")) {
                echo 'col-md-3 col-sm-3 col-xs-12';
            } else if (wp_bizone_is_active_sidebar("bottom_left_center") && wp_bizone_is_active_sidebar("bottom_right_center")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("bottom_left_center") && wp_bizone_is_active_sidebar("bottom_left")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("bottom_right_center") && wp_bizone_is_active_sidebar("bottom_left")) {
                echo ('col-md-4 col-sm-4 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("bottom_left_center") || wp_bizone_is_active_sidebar("bottom_right_center")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("bottom_right_center") || wp_bizone_is_active_sidebar("bottom_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("bottom_left_center") || wp_bizone_is_active_sidebar("bottom_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else if (wp_bizone_is_active_sidebar("bottom_left_center") || wp_bizone_is_active_sidebar("bottom_right_center") || wp_bizone_is_active_sidebar("bottom_left")) {
                echo ('col-md-6 col-sm-6 col-xs-12');
            } else {
                echo ('col-lg-12');
            } ?>">
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('bottom_right'); ?>
            </div>
        <?php }
        ; ?>

    </div>
</div>