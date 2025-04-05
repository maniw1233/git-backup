<?php
/**
 * Title: simple statistics
 * Slug: wp-bizone/simple_statistics
 * Categories: Statistics
 * Viewport width: 1400
 */
?>

<!-- wp:group {"align":"full","backgroundColor":"red", "style":{"spacing":{"margin":{"top":"10px","bottom":"10px","left":"0","right":"0"},"padding":{"top":"40px","bottom":"50px"}}}} -->
<div class="wp-block-group alignfull has-red-background-color has-background"
    style="margin-top:10px;margin-bottom:10px;margin-left: 0;margin-right: 0;padding-top: 40px;padding-bottom: 50px;">
    <!-- wp:heading {"align":"full", "align":"center", "backgroundColor":"red" ,"style":{"typography":{"fontSize":"32px","fontWeight":"bold"},"spacing":{"padding":"10px","margin":"0"}}} -->
    <h2 class="wp-block-heading alignfull has-text-align-center has-text-color has-white-color has-red-background-color has-background"
        style="padding: 10px;font-size: 32px;font-weight: bold;margin: 0;">
        <?php echo esc_html_x('Our statistics', 'Sample heading', 'wp-bizone'); ?>
    </h2>
    <!-- /wp:heading -->
    <!-- wp:columns {"align":"full", "layout":{"type":"flex","justifyContent":"space-between"}} -->
    <div class="wp-block-columns alignfull wrapper-pattern-statistics wrapperStatistics row">
        <!-- wp:column {"width":"23%", "style":{"spacing":{"margin":{"top":"10px","bottom":"10px","left":"0","right":"0"}},"border":{"top":{"color":"#FFF","width":"10px"},"bottom":{"color":"#FFF","width":"10px"},"left":{"color":"#FFF","width":"10px"},"right":{"color":"#FFF","width":"10px"}}}} -->
        <div class="wp-block-column"
            style="flex-basis:23%;margin-top:10px;margin-bottom:10px;margin-left: 0;margin-right: 0;border-top-color:#FFF;border-top-width:10px;border-bottom-color:#FFF;border-bottom-width:10px;border-left-color:#FFF;border-left-width:10px;border-right-color:#FFF;border-right-width:10px">
            <!-- wp:paragraph {"align":"center", "backgroundColor":"red" ,"style":{"typography":{"fontSize":"40px","fontWeight":"bold"},"spacing":{"padding":"10px","margin":"0"}}} -->
            <p class="statisticsNumber has-text-align-center has-text-color has-white-color has-red-background-color has-background"
                style="padding: 10px;font-size: 40px;font-weight: bold;margin: 0;">
                <?php echo esc_html_x('777', 'Sample numeric value', 'wp-bizone'); ?>
            </p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center", "backgroundColor":"red" ,"style":{"typography":{"fontSize":"26px","fontWeight":"bold"},"spacing":{"padding":"10px","margin":"0"}}} -->
            <p class="custom-white-space has-text-align-center has-text-color has-black-color has-red-background-color has-background"
                style="padding: 10px;font-size: 26px;font-weight: bold;margin: 0;">
                <?php echo esc_html_x('awards', 'Sample heading column', 'wp-bizone'); ?>
            </p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"width":"23%", "style":{"spacing":{"margin":{"top":"10px","bottom":"10px","left":"0","right":"0"}},"border":{"top":{"color":"#FFF","width":"10px"},"bottom":{"color":"#FFF","width":"10px"},"left":{"color":"#FFF","width":"10px"},"right":{"color":"#FFF","width":"10px"}}}} -->
        <div class="wp-block-column"
            style="flex-basis:23%;margin-top:10px;margin-bottom:10px;margin-left: 0;margin-right: 0;border-top-color:#FFF;border-top-width:10px;border-bottom-color:#FFF;border-bottom-width:10px;border-left-color:#FFF;border-left-width:10px;border-right-color:#FFF;border-right-width:10px">
            <!-- wp:paragraph {"align":"center", "backgroundColor":"red" ,"style":{"typography":{"fontSize":"40px","fontWeight":"bold"},"spacing":{"padding":"10px","margin":"0"}}} -->
            <p class="statisticsNumber has-text-align-center has-text-color has-white-color has-red-background-color has-background"
                style="padding: 10px;font-size: 40px;font-weight: bold;margin: 0;">
                <?php echo esc_html_x('888', 'Sample numeric value', 'wp-bizone'); ?>
            </p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center", "backgroundColor":"red" ,"style":{"typography":{"fontSize":"26px","fontWeight":"bold"},"spacing":{"padding":"10px","margin":"0"}}} -->
            <p class="custom-white-space has-text-align-center has-text-color has-black-color has-red-background-color has-background"
                style="padding: 10px;font-size: 26px;font-weight: bold;margin: 0;">
                <?php echo esc_html_x('customers', 'Sample heading column', 'wp-bizone'); ?>
            </p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"width":"23%", "style":{"spacing":{"margin":{"top":"10px","bottom":"10px","left":"0","right":"0"}},"border":{"top":{"color":"#FFF","width":"10px"},"bottom":{"color":"#FFF","width":"10px"},"left":{"color":"#FFF","width":"10px"},"right":{"color":"#FFF","width":"10px"}}}} -->
        <div class="wp-block-column"
            style="flex-basis:23%;margin-top:10px;margin-bottom:10px;margin-left: 0;margin-right: 0;border-top-color:#FFF;border-top-width:10px;border-bottom-color:#FFF;border-bottom-width:10px;border-left-color:#FFF;border-left-width:10px;border-right-color:#FFF;border-right-width:10px">
            <!-- wp:paragraph {"align":"center", "backgroundColor":"red" ,"style":{"typography":{"fontSize":"40px","fontWeight":"bold"},"spacing":{"padding":"10px","margin":"0"}}} -->
            <p class="statisticsNumber has-text-align-center has-text-color has-white-color has-red-background-color has-background"
                style="padding: 10px;font-size: 40px;font-weight: bold;margin: 0;">
                <?php echo esc_html_x('999', 'Sample numeric value', 'wp-bizone'); ?>
            </p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center", "backgroundColor":"red" ,"style":{"typography":{"fontSize":"26px","fontWeight":"bold"},"spacing":{"padding":"10px","margin":"0"}}} -->
            <p class="custom-white-space has-text-align-center has-text-color has-black-color has-red-background-color has-background"
                style="padding: 10px;font-size: 26px;font-weight: bold;margin: 0;">
                <?php echo esc_html_x('offices', 'Sample heading column', 'wp-bizone'); ?>
            </p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"width":"23%", "style":{"spacing":{"margin":{"top":"10px","bottom":"10px","left":"0","right":"0"}},"border":{"top":{"color":"#FFF","width":"10px"},"bottom":{"color":"#FFF","width":"10px"},"left":{"color":"#FFF","width":"10px"},"right":{"color":"#FFF","width":"10px"}}}} -->
        <div class="wp-block-column"
            style="flex-basis:23%;margin-top:10px;margin-bottom:10px;margin-left: 0;margin-right: 0;border-top-color:#FFF;border-top-width:10px;border-bottom-color:#FFF;border-bottom-width:10px;border-left-color:#FFF;border-left-width:10px;border-right-color:#FFF;border-right-width:10px">
            <!-- wp:paragraph {"align":"center", "backgroundColor":"red" ,"style":{"typography":{"fontSize":"40px","fontWeight":"bold"},"spacing":{"padding":"10px","margin":"0"}}} -->
            <p class="statisticsNumber has-text-align-center has-text-color has-white-color has-red-background-color has-background"
                style="padding: 10px;font-size: 40px;font-weight: bold;margin: 0;">
                <?php echo esc_html_x('666', 'Sample numeric value', 'wp-bizone'); ?>
            </p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center", "backgroundColor":"red" ,"style":{"typography":{"fontSize":"26px","fontWeight":"bold"},"spacing":{"padding":"10px","margin":"0"}}} -->
            <p class="custom-white-space has-text-align-center has-text-color has-black-color has-red-background-color has-background"
                style="padding: 10px;font-size: 26px;font-weight: bold;margin: 0;">
                <?php echo esc_html_x('stores', 'Sample heading column', 'wp-bizone'); ?>
            </p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->