<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' ); ?>

<div id="content" class="site-content">
    <div class="container">
        <?php

            /**
             * Hook: woocommerce_before_main_content.
             * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
             * @hooked woocommerce_breadcrumb - 20
             * @hooked WC_Structured_Data::generate_website_data() - 30
             */
            do_action( 'woocommerce_before_main_content' );

            /**
             * Hook: woocommerce_shop_loop_header.
             * @hooked woocommerce_product_taxonomy_archive_header - 10
             */
            do_action( 'woocommerce_shop_loop_header' );

        ?>

        <div class="row">
            <div class="col-lg-8 woocommerce-div">
                <?php if ( woocommerce_product_loop() ) : ?>
                    
                    <?php
                    /**
                     * Hook: woocommerce_before_shop_loop.
                     * @hooked woocommerce_output_all_notices - 10
                     * @hooked woocommerce_result_count - 20
                     * @hooked woocommerce_catalog_ordering - 30
                     */
                    do_action( 'woocommerce_before_shop_loop' );

                    woocommerce_product_loop_start();

                    if ( wc_get_loop_prop( 'total' ) ) {
                        while ( have_posts() ) {
                            the_post();

                            /**
                             * Hook: woocommerce_shop_loop.
                             */
                            do_action( 'woocommerce_shop_loop' );

                            wc_get_template_part( 'content', 'product' );
                        }
                    }

                    woocommerce_product_loop_end();

                    /**
                     * Hook: woocommerce_after_shop_loop.
                     * @hooked woocommerce_pagination - 10
                     */
                    do_action( 'woocommerce_after_shop_loop' );
                    else :
                        /**
                         * Hook: woocommerce_no_products_found.
                         * @hooked wc_no_products_found - 10
                         */
                        do_action( 'woocommerce_no_products_found' );
                    endif;
                    ?>
            </div>
            
            <div class="col-lg-4">
                <?php
                /**
                 * Hook: woocommerce_sidebar.
                 * @hooked woocommerce_get_sidebar - 10
                 */
                do_action( 'woocommerce_sidebar' );
                ?>
            </div>
        </div>
    </div>
</div>

<?php

/**
 * Hook: woocommerce_after_main_content.
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

get_footer( 'shop' );
?>
