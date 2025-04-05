<?php
/**
 * Title: first about us
 * Slug: wp-bizone/first_about_us
 * Categories: About-us
 * Viewport width: 800
 */
?>

<!-- wp:group {"align":"full","backgroundColor":"dark-gray", "style":{"spacing":{"padding":"0px","margin":"0"}, "border":{"top":{"color":"#FFF","width":"0px"},"bottom":{"color":"#FFF","width":"0px"},"left":{"color":"#FFF","width":"0px"},"right":{"color":"#FFF","width":"0px"}}}} -->
<div class="wp-block-group alignfull has-dark-gray-background-color has-background wrapper-pattern-first-about-us"
    style="margin:0;padding: 0px;border-top-color:#FFF;border-top-width:0px;border-bottom-color:#FFF;border-bottom-width:0px;border-left-color:#FFF;border-left-width:0px;border-right-color:#FFF;border-right-width:0px;">

    <!-- wp:columns {"align":"full", "style":{"spacing":{"padding":"0px","margin":"0"}}, "layout":{"type":"flex","justifyContent":"space-between"}} -->
    <div class="wp-block-columns alignfull row" style="margin:0;padding: 0px;">

        <!-- wp:column {"width":"40%", "style":{"spacing":{"padding":"20px","margin":"0"}}, "layout":{"type":"flex","alignItems":"flex-start"}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%;margin:0;padding: 20px;">

            <!-- wp:heading {"align":"full", "style":{"typography":{"fontSize":"40px","fontWeight":"bold"},"spacing":{"padding":"0px","margin":"0"}}} -->
            <h2 class="wp-block-heading custom-white-space alignfull has-text-align-center has-text-color has-white-color"
                style="padding: 0px;font-size: 40px;font-weight: bold;margin: 0;">
                <?php echo esc_html_x('About us', 'Sample heading', 'wp-bizone'); ?>
            </h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"lineHeight":"2","fontSize":"16px","fontWeight":"400"},"spacing":{"padding":"0px","margin":"0"}}} -->
            <p class="custom-white-space has-text-color has-white-color"
                style="padding: 0px;font-size: 16px;font-weight: 400;margin: 0; line-height: 2;">
                <?php echo esc_html_x('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy.', 'Sample text', 'wp-bizone'); ?>
            </p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"60%", "style":{"spacing":{"padding":"0px","margin":"0"}}} -->
        <div class="wp-block-column" style="flex-basis:60%;margin:0;padding: 0px;">

            <!-- wp:columns {"align":"full", "layout":{"type":"flex","justifyContent":"space-between"}, "style":{"spacing":{"padding":"0px","margin":"0"}}} -->
            <div class="wp-block-columns alignfull row" style="margin:0;padding: 0px;">

                <!-- wp:column {"width":"50%", "style":{"spacing":{"padding":"0px","margin":"0"}}} -->
                <div class="wp-block-column" style="flex-basis:50%;margin:0;padding: 0px;">

                    <!-- wp:image {"align":"wide","sizeSlug":"large","linkDestination":"none", "style":{"spacing":{"padding":"0px","margin":"0"}}} -->
                    <figure class="wp-block-image alignwide size-large" style="margin:0;padding: 0px;">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/pattern-first-about-us-1.jpg"
                            alt="<?php esc_attr_e('pattern-first-about-us-1', 'wp-bizone'); ?>" />
                    </figure>
                    <!-- /wp:image -->

                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"50%", "backgroundColor":"pink", "layout":{"type":"flex","alignItems":"flex-start"}, "style":{"spacing":{"padding":"20px","margin":"0"}}} -->
                <div class="wp-block-column has-pink-background-color has-background"
                    style="flex-basis:50%;padding: 20px;margin:0;">

                    <!-- wp:paragraph {"align":"full", "backgroundColor":"pink", "style":{"typography":{"fontSize":"30px","fontWeight":"bold"},"spacing":{"padding":"0px","margin":"0"}}} -->
                    <p class="custom-white-space alignfull has-text-color has-white-color has-pink-background-color has-background"
                        style="padding: 0px;font-size: 30px;font-weight: bold;margin: 0;">
                        <?php echo esc_html_x('Our company', 'Sample text', 'wp-bizone'); ?>
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"backgroundColor":"pink", "style":{"typography":{"fontSize":"16px","fontWeight":"400"},"spacing":{"padding":"0px","margin":"0"}}} -->
                    <p class="custom-white-space has-text-color has-white-color has-pink-background-color has-background"
                        style="padding: 0px;font-size: 16px;font-weight: 400;margin: 0;">
                        <?php echo esc_html_x('There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable.', 'Sample text', 'wp-bizone'); ?>
                    </p>
                    <!-- /wp:paragraph -->

                </div>
                <!-- /wp:column -->

            </div>
            <!-- /wp:columns -->

            <!-- wp:columns {"align":"full", "layout":{"type":"flex","justifyContent":"space-between"}, "style":{"spacing":{"padding":"0px","margin":"0"}}} -->
            <div class="wp-block-columns alignfull row" style="margin:0;padding: 0px;">

                <!-- wp:column {"width":"100%", "style":{"spacing":{"padding":"0px","margin":"0"}}} -->
                <div class="wp-block-column" style="flex-basis:100%;margin:0;padding: 0px;">

                    <!-- wp:image {"align":"wide","sizeSlug":"small","linkDestination":"none", "style":{"spacing":{"padding":"0px","margin":"0"}}} -->
                    <figure class="wp-block-image alignwide size-small" style="margin:0;padding: 0px;">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/pattern-first-about-us-2.jpg"
                            alt="<?php esc_attr_e('pattern-first-about-us-2', 'wp-bizone'); ?>" />
                    </figure>
                    <!-- /wp:image -->

                </div>
                <!-- /wp:column -->

            </div>
            <!-- /wp:columns -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->