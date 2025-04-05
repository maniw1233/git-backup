<?php
/**
 * Template Name: Default Home Page
 */

get_header();
?>

<main id="primary">
    <section id="main-banner-wrap">
        <div id="banner-area">
            <div class="owl-carousel owl-theme">
                <?php
                    $medical_trauma_center_banner = get_theme_mod( 'medical_trauma_center_slider');
                    for ( $i = 1; $i <= $medical_trauma_center_banner; $i++ ){ ?>
                    <div class="item">
                        <div class="main-banner-inner-box">
                            <?php
                            $medical_trauma_center_banner_image = get_theme_mod( 'medical_trauma_center_banner_image'.$i, '' );
                            if ( ! empty( $medical_trauma_center_banner_image ) ) { ?>
                                <img src="<?php echo esc_url( $medical_trauma_center_banner_image ); ?>">
                            <?php } ?>
                        </div>
                        <div class="main-banner-content-box">
                            <?php
                                $medical_trauma_center_banner_heading = get_theme_mod( 'medical_trauma_center_banner_heading'.$i, '' );
                                if ( ! empty( $medical_trauma_center_banner_heading ) ) { ?>
                                <h3><?php echo esc_html( $medical_trauma_center_banner_heading ); ?></h3>
                            <?php } ?>
                            <?php
                                $medical_trauma_center_banner_content = get_theme_mod( 'medical_trauma_center_banner_content'.$i, '' );
                                if ( ! empty( $medical_trauma_center_banner_content ) ) { ?>
                                <p><?php echo esc_html( $medical_trauma_center_banner_content ); ?></p>
                            <?php } ?>
                            <?php
                                $medical_trauma_center_banner_btn = get_theme_mod( 'medical_trauma_center_banner_btn'.$i, '' );
                                $medical_trauma_center_banner_button_link = get_theme_mod( 'medical_trauma_center_banner_button_link'.$i, '' );
                                if ( ! empty( $medical_trauma_center_banner_btn ) ) { ?>
                                <a href="<?php echo esc_url( $medical_trauma_center_banner_button_link ); ?>"><?php echo esc_html( $medical_trauma_center_banner_btn ); ?></a>
                            <?php } ?>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </section>

    <section class="team py-5">
        <div class="container">
            <?php
                $medical_trauma_center_team_title = get_theme_mod( 'medical_trauma_center_team_title', '' );
                if ( ! empty( $medical_trauma_center_team_title ) ) { ?>
                <div class="main-heading">
                    <h4 class="mb-0"><?php echo esc_html( $medical_trauma_center_team_title ); ?></h4>
                </div>
            <?php } ?>
            <?php
                $medical_trauma_center_team_short_title = get_theme_mod( 'medical_trauma_center_team_short_title', '' );
                if ( ! empty( $medical_trauma_center_team_short_title ) ) { ?>
                <div class="main-heading mb-5">
                    <h3 class="mb-0"><?php echo esc_html( $medical_trauma_center_team_short_title ); ?></h3>
                </div>
            <?php } ?>
            <div class="row">
                <?php
                    $medical_trauma_center_team = get_theme_mod( 'medical_trauma_center_team_count');
                    for ( $i = 1; $i <= $medical_trauma_center_team; $i++ ){ ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-box mb-4">
                            <?php
                                $medical_trauma_center_team_image = get_theme_mod( 'medical_trauma_center_team_image'.$i, '' );
                                if ( ! empty( $medical_trauma_center_team_image ) ) { ?>
                                    <img src="<?php echo esc_url( $medical_trauma_center_team_image ); ?>">
                            <?php } ?>
                            <?php
                                $medical_trauma_center_team_name = get_theme_mod( 'medical_trauma_center_team_name'.$i, '' );
                                if ( ! empty( $medical_trauma_center_team_name ) ) { ?>
                                <h3 class="mt-4 mb-1"><?php echo esc_html( $medical_trauma_center_team_name ); ?></h3>
                            <?php } ?>
                            <?php
                                $medical_trauma_center_team_designation = get_theme_mod( 'medical_trauma_center_team_designation'.$i, '' );
                                if ( ! empty( $medical_trauma_center_team_designation ) ) { ?>
                                <p><?php echo esc_html( $medical_trauma_center_team_designation ); ?></p>
                            <?php } ?>
                            <div class="social-team-box">
                                <?php
                                    // Get social media URLs before checking if they are not empty
                                    $medical_trauma_center_team_facebook_url = get_theme_mod( 'medical_trauma_center_team_facebook_url'.$i, '' );
                                    $medical_trauma_center_team_twitter_url = get_theme_mod( 'medical_trauma_center_team_twitter_url'.$i, '' );
                                    $medical_trauma_center_team_instagram_url = get_theme_mod( 'medical_trauma_center_team_instagram_url'.$i, '' );
                                    $medical_trauma_center_team_youtube_url = get_theme_mod( 'medical_trauma_center_team_youtube_url'.$i, '' );
                                    $medical_trauma_center_team_whatsapp_url = get_theme_mod( 'medical_trauma_center_team_whatsapp_url'.$i, '' );
                                ?>
                                <?php if ( ! empty( $medical_trauma_center_team_facebook_url ) ) { ?>
                                    <a href="<?php echo esc_url( $medical_trauma_center_team_facebook_url ); ?>"><i class="fab fa-facebook-f mr-3"></i></a>
                                <?php } ?>

                                <?php if ( ! empty( $medical_trauma_center_team_twitter_url ) ) { ?>
                                    <a href="<?php echo esc_url( $medical_trauma_center_team_twitter_url ); ?>"><i class="fab fa-twitter mr-3"></i></a>
                                <?php } ?>

                                <?php if ( ! empty( $medical_trauma_center_team_instagram_url ) ) { ?>
                                    <a href="<?php echo esc_url( $medical_trauma_center_team_instagram_url ); ?>"><i class="fab fa-instagram mr-3"></i></a>
                                <?php } ?>

                                <?php if ( ! empty( $medical_trauma_center_team_youtube_url ) ) { ?>
                                    <a href="<?php echo esc_url( $medical_trauma_center_team_youtube_url ); ?>"><i class="fab fa-youtube mr-3"></i></a>
                                <?php } ?>

                                <?php if ( ! empty( $medical_trauma_center_team_whatsapp_url ) ) { ?>
                                    <a href="<?php echo esc_url( $medical_trauma_center_team_whatsapp_url ); ?>"><i class="fab fa-whatsapp"></i></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();