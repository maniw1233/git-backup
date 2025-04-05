<?php
/**
 * Title: special offer one
 * Slug: wp-bizone/special_offer_one
 * Categories: Special-offer
 * Viewport width: 800
 */
?>

<!-- wp:group {"align":"full","backgroundColor":"orange", "style":{"spacing":{"padding":"0px 10%","margin":"0"}, "border":{"top":{"color":"#FFF","width":"0px"},"bottom":{"color":"#FFF","width":"0px"},"left":{"color":"#FFF","width":"0px"},"right":{"color":"#FFF","width":"0px"}}}} -->
<div class="wp-block-group alignfull has-orange-background-color has-background wrapper-pattern-first-special_offer_one"
    style="margin:0;padding: 0px 10%;border-top-color:#FFF;border-top-width:0px;border-bottom-color:#FFF;border-bottom-width:0px;border-left-color:#FFF;border-left-width:0px;border-right-color:#FFF;border-right-width:0px;">

    <!-- wp:columns {"align":"full", "style":{"spacing":{"padding":"0px","margin":"0"}}, "layout":{"type":"flex","justifyContent":"space-between"}} -->
    <div class="wp-block-columns alignfull row" style="margin:0;padding: 0px;">

        <!-- wp:column {"width":"30%", "style":{"spacing":{"padding":"20px","margin":"0 10px"}, "border":{"top":{"color":"#FFF","width":"0px"},"bottom":{"color":"#FFF","width":"0px"},"left":{"color":"#FFF","width":"8px","style":"dashed"},"right":{"color":"#FFF","width":"8px","style":"dashed"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center"
            style="flex-basis:30%;margin:0 10px;padding: 20px; border-top-color:#FFF;border-top-width:0px;border-bottom-color:#FFF;border-bottom-width:0px;border-left-color:#FFF;border-left-width:8px;border-left-style:dashed;border-right-color:#FFF;border-right-width:8px;border-right-style:dashed;">

            <!-- wp:paragraph {"backgroundColor":"orange", "style":{"typography":{"lineHeight":"2","fontSize":"100px","fontWeight":"bold"},"spacing":{"padding":"0px","margin":"0"}}} -->
            <p class="custom-white-space has-text-color has-text-align-center has-white-color has-orange-background-color has-background"
                style="padding: 0px;font-size: 100px;font-weight: bold;margin: 0; line-height: 2;">
                <?php echo esc_html_x('25 %', 'Sample text', 'wp-bizone'); ?>
            </p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"70%","backgroundColor":"orange", "style":{"spacing":{"padding":"20px","margin":"0"}}} -->
        <div class="wp-block-column has-orange-background-color has-background"
            style="flex-basis:70%;padding: 20px;margin:0;">

            <!-- wp:paragraph {"backgroundColor":"orange", "style":{"typography":{"lineHeight":"1","fontSize":"26px","fontWeight":"bold"},"spacing":{"padding":"0px","margin":"0"}}} -->
            <p class="custom-white-space has-text-color has-black-color has-orange-background-color has-background"
                style="padding: 0px;font-size: 26px;font-weight: bold;margin: 0; line-height: 1;">
                <?php echo esc_html_x('Our Special Offer For You', 'Sample text', 'wp-bizone'); ?>
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"align":"full","backgroundColor":"orange", "style":{"typography":{"fontSize":"36px","fontWeight":"bold"},"spacing":{"padding":"0px","margin":"10px 0"}}} -->
            <h2 class="wp-block-heading custom-white-space alignfull has-text-color has-black-color has-orange-background-color has-background"
                style="padding: 0px;font-size: 36px;font-weight: bold;margin: 10px 0;">
                <?php echo esc_html_x('DISCOUNT ON ALL OUR SERVICES', 'Sample heading', 'wp-bizone'); ?>
            </h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"backgroundColor":"orange", "style":{"typography":{"lineHeight":"2","fontSize":"16px","fontWeight":"400"},"spacing":{"padding":"0px","margin":"0"}}} -->
            <p class="custom-white-space has-text-color has-black-color has-orange-background-color has-background"
                style="padding: 0px;font-size: 16px;font-weight: 400;margin: 0; line-height: 2;">
                <?php echo esc_html_x('There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomised words which dont look even slightly
                        believable.', 'Sample text', 'wp-bizone'); ?>
            </p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->