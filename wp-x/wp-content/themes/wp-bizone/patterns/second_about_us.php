<?php
/**
 * Title: second about us
 * Slug: wp-bizone/second_about_us
 * Categories: About-us
 * Viewport width: 800
 */
?>

<!-- wp:group {"align":"full","backgroundColor":"dark-blue", "style":{"spacing":{"padding":"0px","margin":"0"}, "border":{"top":{"color":"#FFF","width":"0px"},"bottom":{"color":"#FFF","width":"0px"},"left":{"color":"#FFF","width":"0px"},"right":{"color":"#FFF","width":"0px"}}}} -->
<div class="wp-block-group alignfull has-dark-blue-background-color has-background wrapper-pattern-first-about-us"
    style="margin:0;padding: 0px;border-top-color:#FFF;border-top-width:0px;border-bottom-color:#FFF;border-bottom-width:0px;border-left-color:#FFF;border-left-width:0px;border-right-color:#FFF;border-right-width:0px;">

    <!-- wp:columns {"align":"full", "style":{"spacing":{"padding":"0px","margin":"0"}}, "layout":{"type":"flex","justifyContent":"space-between"}} -->
    <div class="wp-block-columns alignfull row" style="margin:0;padding: 0px;">

        <!-- wp:column {"width":"45%", "style":{"spacing":{"padding":"0px","margin":"0"}}, "layout":{"type":"flex","alignItems":"flex-start"}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%;margin:0;padding: 0px;">
            <!-- wp:image {"align":"wide","sizeSlug":"large","linkDestination":"none", "style":{"spacing":{"padding":"0px","margin":"0"}}} -->
            <figure class="wp-block-image alignwide size-large" style="margin:0;padding: 0px;">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/pattern-second-about-us.jpg"
                    alt="<?php esc_attr_e('pattern-second-about-us', 'wp-bizone'); ?>" />
            </figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"55%", "style":{"spacing":{"padding":"20px","margin":"0"}}, "layout":{"type":"flex","alignItems":"flex-start"}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%;margin:0;padding: 20px;">

            <!-- wp:heading {"align":"full", "backgroundColor":"dark-blue", "style":{"typography":{"fontSize":"40px","fontWeight":"bold"},"spacing":{"padding":"0px","margin":"0"}}} -->
            <h2 class="wp-block-heading custom-white-space alignfull has-text-align-center has-text-color has-white-color has-dark-blue-background-color has-background"
                style="padding: 0px;font-size: 40px;font-weight: bold;margin: 0;">
                <?php echo esc_html_x('About us', 'Sample heading', 'wp-bizone'); ?>
            </h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"backgroundColor":"dark-blue", "style":{"typography":{"lineHeight":"2","fontSize":"16px","fontWeight":"400"},"spacing":{"padding":"0px","margin":"0"}}} -->
            <p class="custom-white-space has-text-color has-white-color has-dark-blue-background-color has-background"
                style="padding: 0px;font-size: 16px;font-weight: 400;margin: 0; line-height: 2;">
                <?php echo esc_html_x('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy.', 'Sample text', 'wp-bizone'); ?>
            </p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->