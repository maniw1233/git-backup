<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if( !class_exists( 'Medical_Trauma_Center_Welcome' ) ) {

	class Medical_Trauma_Center_Welcome {
		public $medical_trauma_center_theme_fields;

		public function __construct( $medical_trauma_center_fields = array() ) {
			$this->medical_trauma_center_theme_fields = $medical_trauma_center_fields;
			add_action ('admin_init' , array( $this, 'admin_scripts' ) );
			add_action('admin_menu', array( $this, 'medical_trauma_center_themeinfo_page_menu' ));
		}

		public function admin_scripts() {
			global $pagenow;
			$medical_trauma_center_file_dir = get_template_directory_uri() . '/themeinfo/assets/';

			if ( $pagenow === 'themes.php' && isset($_GET['page']) && $_GET['page'] === 'medical-trauma-center-themeinfo-page' ) {

				wp_enqueue_style (
					'medical-trauma-center-themeinfo-page-style',
					$medical_trauma_center_file_dir . 'medical_trauma_center_themeinfo_page.css',
					array(), '1.0.0'
				);

				wp_enqueue_script (
					'medical-trauma-center-themeinfo-page-functions',
					$medical_trauma_center_file_dir . 'medical_trauma_center_themeinfo_page.js',
					array('jquery'),
					'1.0.0',
					true
				);
			}
		}

        public function medical_trauma_center_theme_info($medical_trauma_center_id, $medical_trauma_center_screenshot = false) {
            $medical_trauma_center_themedata = wp_get_theme();
            return ($medical_trauma_center_screenshot === true) ? esc_url($medical_trauma_center_themedata->get_screenshot()) : esc_html($medical_trauma_center_themedata->get($medical_trauma_center_id));
        }

        public function medical_trauma_center_themeinfo_page_menu() {
            add_theme_page(
                /* translators: 1: Theme Name. */
                sprintf(esc_html__('%1$s Info', 'medical-trauma-center'), $this->medical_trauma_center_theme_info('Name')),
                sprintf(esc_html__('%1$s Info', 'medical-trauma-center'), $this->medical_trauma_center_theme_info('Name')),
                'edit_theme_options',
                'medical-trauma-center-themeinfo-page',
                array( $this, 'medical_trauma_center_themeinfo_page' )
            );
		}

        public function medical_trauma_center_themeinfo_page() {
            // Define tabs with proper escaping and prefixes
            $medical_trauma_center_tabs = array(
                'medical_trauma_center_home'      => esc_html__('Home', 'medical-trauma-center'),
                'medical_trauma_center_free_pro'  => esc_html__('Free VS Pro', 'medical-trauma-center'),
                'medical_trauma_center_faqs'      => esc_html__('FAQs', 'medical-trauma-center'),
                'medical_trauma_center_support'   => esc_html__('Free Theme Supports', 'medical-trauma-center'),
                'medical_trauma_center_review'    => esc_html__('Please Rate Us', 'medical-trauma-center'),
            );
            ?>
            <div class="wrap about-wrap access-wrap">
        
                <div class="abt-promo-wrap clearfix">
                    <div class="abt-theme-wrap">
                        <h1>
                            <?php
                            printf(
                                /* translators: 1: Theme Name. */
                                esc_html__('%1$s - Version %2$s', 'medical-trauma-center'),
                                esc_html($this->medical_trauma_center_theme_info('Name')),
                                esc_html($this->medical_trauma_center_theme_info('Version'))
                            );
                            ?>
                        </h1>
                        <div class="doc-links">
                            <h4><?php echo esc_html__('Visit Sites :-', 'medical-trauma-center'); ?></h4>
                            <a href="<?php echo esc_url(MEDICAL_TRAUMA_CENTER_BUY_NOW); ?>" target="_blank">
                                <span class="dashicons dashicons-admin-site-alt3"></span>
                                <span class="theme-pixel-tooltip"><?php echo esc_html__('View Website', 'medical-trauma-center'); ?></span>
                            </a>
                            <a href="<?php echo esc_url(MEDICAL_TRAUMA_CENTER_LIVE_DEMO); ?>" target="_blank">
                                <span class="dashicons dashicons-desktop"></span>
                                <span class="theme-pixel-tooltip"><?php echo esc_html__('View Demo Site', 'medical-trauma-center'); ?></span>
                            </a>
                            <a href="<?php echo esc_url(MEDICAL_TRAUMA_CENTER_THEME_SUPPORT); ?>" target="_blank">
                                <span class="dashicons dashicons-megaphone"></span>
                                <span class="theme-pixel-tooltip"><?php echo esc_html__('Contact Support', 'medical-trauma-center'); ?></span>
                            </a>
                            <a href="<?php echo esc_url(MEDICAL_TRAUMA_CENTER_FREE_DOC); ?>" target="_blank">
                                <span class="dashicons dashicons-pdf"></span>
                                <span class="theme-pixel-tooltip"><?php echo esc_html__('Documentation', 'medical-trauma-center'); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
        
                <div class="test">
                    <div class="nav-tab-wrapper clearfix">
                        <?php
                        $tabHTML = '';
        
                        foreach ($medical_trauma_center_tabs as $medical_trauma_center_id => $medical_trauma_center_label) :
        
                            $medical_trauma_center_target = '';
                            $medical_trauma_center_nav_class = 'nav-tab';
                            $medical_trauma_center_section = isset($_GET['section']) ? sanitize_text_field($_GET['section']) : 'medical_trauma_center_home';
        
                            if ($medical_trauma_center_id === $medical_trauma_center_section) {
                                $medical_trauma_center_nav_class .= ' nav-tab-active';
                            }
        
                            if ($medical_trauma_center_id === 'medical_trauma_center_free_pro') {
                                $medical_trauma_center_nav_class .= ' upgrade-button';
                            }

                            if ($medical_trauma_center_id === 'medical_trauma_center_review') {
                                $medical_trauma_center_nav_class .= ' review-button';
                            }
        
                            switch ($medical_trauma_center_id) {
        
                                case 'medical_trauma_center_support':
                                    $medical_trauma_center_target = 'target="_blank"';
                                    $medical_trauma_center_url = esc_url('https://wordpress.org/support/theme/' . esc_html($this->medical_trauma_center_theme_info('TextDomain')));
                                break;
        
                                case 'medical_trauma_center_review':
                                    $medical_trauma_center_target = 'target="_blank"';
                                    $medical_trauma_center_url = esc_url('https://wordpress.org/support/theme/' . esc_html($this->medical_trauma_center_theme_info('TextDomain')) . '/reviews/#new-post');
                                break;
                                
                                case 'medical_trauma_center_home':
                                    $medical_trauma_center_url = esc_url(admin_url('themes.php?page=medical-trauma-center-themeinfo-page'));
                                break;
        
                                default:
                                    $medical_trauma_center_url = esc_url(admin_url('themes.php?page=medical-trauma-center-themeinfo-page&section=' . esc_attr($medical_trauma_center_id)));
                                break;
        
                            }
        
                            $tabHTML .= '<a ';
                            $tabHTML .= $medical_trauma_center_target;
                            $tabHTML .= ' href="' . esc_url($medical_trauma_center_url) . '"';
                            $tabHTML .= ' class="' . esc_attr($medical_trauma_center_nav_class) . '"';
                            $tabHTML .= '>';
                            $tabHTML .= esc_html($medical_trauma_center_label);

                            if ($medical_trauma_center_id === 'medical_trauma_center_review') {
                                $tabHTML .= ' <span class="dashicons dashicons-star-filled"></span>';
                                $tabHTML .= ' <span class="dashicons dashicons-star-filled"></span>';
                                $tabHTML .= ' <span class="dashicons dashicons-star-filled"></span>';
                                $tabHTML .= ' <span class="dashicons dashicons-star-filled"></span>';
                                $tabHTML .= ' <span class="dashicons dashicons-star-filled"></span>';
                            }

                            $tabHTML .= '</a>';
        
                        endforeach;
        
                        echo $tabHTML;
                        ?>
        
                        <div class="get-pro">
                            <h3><?php echo esc_html__('Medical Trauma Center Pro', 'medical-trauma-center'); ?></h3>
                            <p><?php echo esc_html__('Get all of the features that are infinite!!!', 'medical-trauma-center'); ?></p>
                            <a class="theme-pixel-button-btn primary-btn" target="_blank" href="<?php echo esc_url(MEDICAL_TRAUMA_CENTER_BUY_NOW); ?>"><?php echo esc_html__('Upgrade To Pro', 'medical-trauma-center'); ?></a>
                        </div>
                    </div>

                    <div class="second-div">
                        <div class="themeinfo-section-wrapper">
                            <div class="themeinfo-section medical_trauma_center_home clearfix">
                                <?php
                                $medical_trauma_center_section = isset($_GET['section']) ? sanitize_text_field($_GET['section']) : 'medical_trauma_center_home';
                                switch ($medical_trauma_center_section) {
            
                                    case 'medical_trauma_center_free_pro':
                                        $this->medical_trauma_center_free_pro();
                                    break;
            
                                    case 'medical_trauma_center_faqs':
                                        $this->medical_trauma_center_faqs();
                                    break;
            
                                    case 'medical_trauma_center_home':
                                    default:
                                        $this->medical_trauma_center_home();
                                    break;
            
                                }
                                ?>
                            </div>
                        </div>
            
                        <div class="theme-steps-list">

                            <div class="theme-steps highlight">
                                <h3><?php echo esc_html__('Buy Medical Trauma Center Pro', 'medical-trauma-center'); ?></h3>
                                <p><?php echo esc_html__('To get limitless features and improvements, buy the Medical Trauma Center Theme Pro edition.', 'medical-trauma-center'); ?></p>
                                <a target="_blank" class="button button-primary" href="<?php echo esc_url(MEDICAL_TRAUMA_CENTER_BUY_NOW); ?>"><?php echo esc_html__('Buy Pro Theme', 'medical-trauma-center'); ?></a>
                            </div>

                            <div class="theme-steps">
                                <h3><?php echo esc_html__('Documentation', 'medical-trauma-center'); ?></h3>
                                <p><?php echo esc_html__('Do you need additional information? You may find detailed instructions on how to use the Medical Trauma Center Theme in our extensive documentation.', 'medical-trauma-center'); ?></p>
                                <a target="_blank" class="button button-primary" href="<?php echo esc_url(MEDICAL_TRAUMA_CENTER_FREE_DOC); ?>"><?php echo esc_html__('Go to Free Docs', 'medical-trauma-center'); ?></a>
                            </div>
            
                            <div class="theme-steps">
                                <h3><?php echo esc_html__('Preview Pro Theme', 'medical-trauma-center'); ?></h3>
                                <p><?php echo esc_html__('Explore our Pro Themes full potential! To see the stunning designs and high-end functionality, click the Live Demo button.', 'medical-trauma-center'); ?></p>
                                <a target="_blank" class="button button-primary" href="<?php echo esc_url(MEDICAL_TRAUMA_CENTER_LIVE_DEMO); ?>"><?php echo esc_html__('View Live Demo', 'medical-trauma-center'); ?></a>
                            </div>
            
                            <div class="theme-steps highlight">
                                <h3><?php echo esc_html__('Get the Bundle', 'medical-trauma-center'); ?></h3>
                                <p><?php echo esc_html__('Introducing the WP Theme Bundle by Theme Pixel, a comprehensive collection of over 50 professionally designed WordPress themes tailored for various niches and businesses.', 'medical-trauma-center'); ?></p>
                                <a target="_blank" class="button button-primary" href="<?php echo esc_url(MEDICAL_TRAUMA_CENTER_BUNDLE); ?>"><?php echo esc_html__('Get Bundle', 'medical-trauma-center'); ?></a>
                            </div>
            
                        </div>
                    </div>
                </div>
        
            </div>
            <?php
        }

        public function medical_trauma_center_home() {
            ?>
            <div class="theme-info-top-wrap clearfix">
                <h3><?php esc_html_e( 'HOME', 'medical-trauma-center' ); ?></h3>
                <div class="theme-details">
                    <div class="theme-screenshot">
                        <img src="<?php echo esc_url( $this->medical_trauma_center_theme_info( 'Screenshot', true ) ); ?>" alt="<?php esc_attr_e( 'Theme screenshot', 'medical-trauma-center' ); ?>" />
                    </div>
                    <div class="about-text"><?php echo esc_html( $this->medical_trauma_center_theme_info( 'Description' ) ); ?></div>
                    <div class="clearfix"></div>
                </div>
                <div class="theme-pixel-settings">
                    <h2><?php esc_html_e( 'Quick Customizer Settings', 'medical-trauma-center' ); ?></h2>
                    <div class="theme-pixel-button">
                        <a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="theme-pixel-btn" target="_blank">
                            <?php esc_html_e( 'Go To Customizer', 'medical-trauma-center' ); ?> <span class="dashicons dashicons-arrow-right-alt"></span>
                        </a>
                    </div>
                </div>
                <div class="theme-pixel-card customizer three-col">
                    <div class="theme-pixel-cardbody">
                        <div class="icon-box">
                            <span class="dashicons dashicons-admin-site-alt3"></span>
                        </div>
                        <div class="theme-pixel-text-wrap">
                            <h3 class="theme-pixel-heading"><?php esc_html_e( 'Site Identity', 'medical-trauma-center' ); ?></h3>
                            <div class="theme-pixel-button">
                                <a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php?autofocus%5Bcontrol%5D=site_identity' ) ); ?>" class="theme-pixel-btn">
                                    <?php esc_html_e( 'Customize', 'medical-trauma-center' ); ?>
                                    <span class="dashicons dashicons-arrow-right-alt"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="theme-pixel-cardbody">
                        <div class="icon-box">
                            <span class="dashicons dashicons-color-picker"></span>
                        </div>
                        <div class="theme-pixel-text-wrap">
                            <h3 class="theme-pixel-heading"><?php esc_html_e( 'Color Settings', 'medical-trauma-center' ); ?></h3>
                            <div class="theme-pixel-button">
                                <a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php?autofocus%5Bsection%5D=colors' ) ); ?>" class="theme-pixel-btn">
                                    <?php esc_html_e( 'Customize', 'medical-trauma-center' ); ?>
                                    <span class="dashicons dashicons-arrow-right-alt"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="theme-pixel-cardbody">
                        <div class="icon-box">
                            <span class="dashicons dashicons-screenoptions"></span>
                        </div>
                        <div class="theme-pixel-text-wrap">
                            <h3 class="theme-pixel-heading"><?php esc_html_e( 'Layout Settings', 'medical-trauma-center' ); ?></h3>
                            <div class="theme-pixel-button">
                                <a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php?autofocus%5Bpanel%5D=layout_settings' ) ); ?>" class="theme-pixel-btn">
                                    <?php esc_html_e( 'Customize', 'medical-trauma-center' ); ?>
                                    <span class="dashicons dashicons-arrow-right-alt"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="theme-pixel-cardbody">
                        <div class="icon-box">
                            <span class="dashicons dashicons-format-image"></span>
                        </div>
                        <div class="theme-pixel-text-wrap">
                            <h3 class="theme-pixel-heading"><?php esc_html_e( 'General Settings', 'medical-trauma-center' ); ?></h3>
                            <div class="theme-pixel-button">
                                <a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php?autofocus%5Bpanel%5D=banner_option' ) ); ?>" class="theme-pixel-btn">
                                    <?php esc_html_e( 'Customize', 'medical-trauma-center' ); ?>
                                    <span class="dashicons dashicons-arrow-right-alt"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="theme-pixel-cardbody">
                        <div class="icon-box">
                            <span class="dashicons dashicons-align-full-width"></span>
                        </div>
                        <div class="theme-pixel-text-wrap">
                            <h3 class="theme-pixel-heading"><?php esc_html_e( 'Frontpage Settings', 'medical-trauma-center' ); ?></h3>
                            <div class="theme-pixel-button">
                                <a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php?autofocus%5Bpanel%5D=general_settings' ) ); ?>" class="theme-pixel-btn">
                                    <?php esc_html_e( 'Customize', 'medical-trauma-center' ); ?>
                                    <span class="dashicons dashicons-arrow-right-alt"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="theme-pixel-cardbody">
                        <div class="icon-box">
                            <span class="dashicons dashicons-admin-page"></span>
                        </div>
                        <div class="theme-pixel-text-wrap">
                            <h3 class="theme-pixel-heading"><?php esc_html_e( 'Footer Settings', 'medical-trauma-center' ); ?></h3>
                            <div class="theme-pixel-button">
                                <a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php?autofocus%5Bsection%5D=footer_option' ) ); ?>" class="theme-pixel-btn">
                                    <?php esc_html_e( 'Customize', 'medical-trauma-center' ); ?>
                                    <span class="dashicons dashicons-arrow-right-alt"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }        

		public function medical_trauma_center_free_pro() {
            ?>
            <h3><?php esc_html_e( 'FREE VS PRO', 'medical-trauma-center' ); ?></h3>
            <div class="freeandpro">
                <table class="card table free-pro" cellspacing="0" cellpadding="0">
                    <tbody class="table-body">
                        <tr class="table-head">
                            <th class="large"><?php echo esc_html__( 'Features', 'medical-trauma-center' ); ?></th>
                            <th class="indicator"><?php echo esc_html__( 'Free theme', 'medical-trauma-center' ); ?></th>
                            <th class="indicator"><?php echo esc_html__( 'Pro Theme', 'medical-trauma-center' ); ?></th>
                        </tr>

                        <tr class="feature-row">
                            <td class="large">
                                <div class="feature-wrap">
                                    <h4><?php echo esc_html__( 'Responsive Design', 'medical-trauma-center' ); ?></h4>
                                </div>
                            </td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                        </tr>

                        <tr class="feature-row">
                            <td class="large">
                                <div class="feature-wrap">
                                    <h4><?php echo esc_html__( 'Site Logo upload', 'medical-trauma-center' ); ?></h4>
                                </div>
                            </td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                        </tr>

                        <tr class="feature-row">
                            <td class="large">
                                <div class="feature-wrap">
                                    <h4><?php echo esc_html__( 'Footer Copyright text', 'medical-trauma-center' ); ?></h4>
                                    <div class="feature-inline-row">
                                        <span class="info-icon dashicon dashicons dashicons-info"></span>
                                        <span class="feature-description">
                                            <?php echo esc_html__( 'Remove the copyright text from the Footer.', 'medical-trauma-center' ); ?>
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                        </tr>

                        <tr class="feature-row">
                            <td class="large">
                                <div class="feature-wrap">
                                    <h4><?php echo esc_html__( 'Easy Customization', 'medical-trauma-center' ); ?></h4>
                                </div>
                            </td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                        </tr>

                        <tr class="feature-row">
                            <td class="large">
                                <div class="feature-wrap">
                                    <h4><?php echo esc_html__( 'Lightweight & Fast Loading', 'medical-trauma-center' ); ?></h4>
                                </div>
                            </td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                        </tr>

                        <tr class="feature-row">
                            <td class="large">
                                <div class="feature-wrap">
                                    <h4><?php echo esc_html__( 'Global Color', 'medical-trauma-center' ); ?></h4>
                                </div>
                            </td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-no-alt" size="30"></span></td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                        </tr>

                        <tr class="feature-row">
                            <td class="large">
                                <div class="feature-wrap">
                                    <h4><?php echo esc_html__( 'Regular Bug Fixes', 'medical-trauma-center' ); ?></h4>
                                </div>
                            </td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                        </tr>
                        
                        <tr class="feature-row">
                            <td class="large">
                                <div class="feature-wrap">
                                    <h4><?php echo esc_html__( 'Premium Support', 'medical-trauma-center' ); ?></h4>
                                </div>
                            </td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                        </tr>

                        <tr class="feature-row">
                            <td class="large">
                                <div class="feature-wrap">
                                    <h4><?php echo esc_html__( 'Theme Sections', 'medical-trauma-center' ); ?></h4>
                                </div>
                            </td>
                            <td class="indicator"><span class="abc"><?php echo esc_html__( '2 Sections', 'medical-trauma-center' ); ?></span></td>
                            <td class="indicator"><span class="abc"><?php echo esc_html__( '15+ Sections', 'medical-trauma-center' ); ?></span></td>
                        </tr>

                        <tr class="feature-row">
                            <td class="large">
                                <div class="feature-wrap">
                                    <h4><?php echo esc_html__( 'Custom colors', 'medical-trauma-center' ); ?></h4>
                                    <div class="feature-inline-row">
                                        <span class="info-icon dashicon dashicons dashicons-info"></span>
                                        <span class="feature-description">
                                            <?php echo esc_html__( 'Choose a color for links, buttons, icons and so on.', 'medical-trauma-center' ); ?>
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-no-alt" size="30"></span></td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                        </tr>

                        <tr class="feature-row">
                            <td class="large">
                                <div class="feature-wrap">
                                    <h4><?php echo esc_html__( 'Google fonts', 'medical-trauma-center' ); ?></h4>
                                    <div class="feature-inline-row">
                                        <span class="info-icon dashicon dashicons dashicons-info"></span>
                                        <span class="feature-description">
                                            <?php echo esc_html__( 'You can choose and use over 600 different fonts, for the logo, the menu and the titles.', 'medical-trauma-center' ); ?>
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-no-alt" size="30"></span></td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                        </tr>

                        <tr class="feature-row">
                            <td class="large">
                                <div class="feature-wrap">
                                    <h4><?php echo esc_html__( 'Compatible with Popular Plugins', 'medical-trauma-center' ); ?></h4>
                                </div>
                            </td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-no-alt" size="30"></span></td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                        </tr>

                        <tr class="feature-row">
                            <td class="large">
                                <div class="feature-wrap">
                                    <h4><?php echo esc_html__( 'Translation & WPML Ready', 'medical-trauma-center' ); ?></h4>
                                </div>
                            </td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-no-alt" size="30"></span></td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                        </tr>

                        <tr class="feature-row">
                            <td class="large">
                                <div class="feature-wrap">
                                    <h4><?php echo esc_html__( 'SEO Optimized', 'medical-trauma-center' ); ?></h4>
                                </div>
                            </td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-no-alt" size="30"></span></td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                        </tr>

                        <tr class="feature-row">
                            <td class="large">
                                <div class="feature-wrap">
                                    <h4><?php echo esc_html__( 'Premium Support', 'medical-trauma-center' ); ?></h4>
                                </div>
                            </td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-no-alt" size="30"></span></td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                        </tr>

                        <tr class="feature-row">
                            <td class="large">
                                <div class="feature-wrap">
                                    <h4><?php echo esc_html__( 'Extensive Customization', 'medical-trauma-center' ); ?></h4>
                                </div>
                            </td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-no-alt" size="30"></span></td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                        </tr>

                        <tr class="feature-row">
                            <td class="large">
                                <div class="feature-wrap">
                                    <h4><?php echo esc_html__( 'Custom Post Types', 'medical-trauma-center' ); ?></h4>
                                </div>
                            </td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-no-alt" size="30"></span></td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                        </tr>

                        <tr class="feature-row">
                            <td class="large">
                                <div class="feature-wrap">
                                    <h4><?php echo esc_html__( 'High-Level Compatibility with Modern Browsers', 'medical-trauma-center' ); ?></h4>
                                </div>
                            </td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-no-alt" size="30"></span></td>
                            <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <?php
        }

        public function medical_trauma_center_faqs() {
            ?>
            <h3><?php esc_html_e( 'FAQs', 'medical-trauma-center' ); ?></h3>
            <div class="faq-container">
                <div class="accordion" id="MedicalTraumaCenterFaqAccordion">
                    <!-- FAQ 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="MedicalTraumaCenterHeadingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#MedicalTraumaCenterCollapseOne" aria-expanded="true" aria-controls="MedicalTraumaCenterCollapseOne">
                                <?php echo esc_html__('What is the difference between Free and Pro?', 'medical-trauma-center'); ?>
                            </button>
                        </h2>
                        <div id="MedicalTraumaCenterCollapseOne" class="accordion-collapse collapse show" aria-labelledby="MedicalTraumaCenterHeadingOne" data-bs-parent="#MedicalTraumaCenterFaqAccordion">
                            <div class="accordion-body">
                                <p>
                                    <?php echo esc_html__('The themes are well-made in both their free and premium versions. But there are a lot more features in the Pro edition.', 'medical-trauma-center'); ?>
                                </p>
                                <p>
                                    <?php echo esc_html__('You may quickly alter the appearance and feel of your website with the Pro version. You can alter your websites color and typeface with a few clicks. With more customization choices, the premium version gives you greater control over the theme. In addition, the theme offers more layout options and sections than the free version.', 'medical-trauma-center'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="MedicalTraumaCenterHeadingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#MedicalTraumaCenterCollapseTwo" aria-expanded="false" aria-controls="MedicalTraumaCenterCollapseTwo">
                                <?php echo esc_html__('What are the advantages of upgrading to the Premium version?', 'medical-trauma-center'); ?>
                            </button>
                        </h2>
                        <div id="MedicalTraumaCenterCollapseTwo" class="accordion-collapse collapse" aria-labelledby="MedicalTraumaCenterHeadingTwo" data-bs-parent="#MedicalTraumaCenterFaqAccordion">
                            <div class="accordion-body">
                                <p>
                                    <?php echo esc_html__('In addition to the additional features and regular upgrades, the Premium version comes with premium support. Compared to the free assistance, you will receive a much faster response if you encounter any theme problems.', 'medical-trauma-center'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="MedicalTraumaCenterHeadingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#MedicalTraumaCenterCollapseThree" aria-expanded="false" aria-controls="MedicalTraumaCenterCollapseThree">
                                <?php echo esc_html__('Upgrading to the Pro version- will I lose my changes?', 'medical-trauma-center'); ?>
                            </button>
                        </h2>
                        <div id="MedicalTraumaCenterCollapseThree" class="accordion-collapse collapse" aria-labelledby="MedicalTraumaCenterHeadingThree" data-bs-parent="#MedicalTraumaCenterFaqAccordion">
                            <div class="accordion-body">
                                <p>
                                    <?php echo esc_html__('Your posts, pages, media, categories, and other data will all be preserved when you upgrade to the Pro theme.', 'medical-trauma-center'); ?>
                                </p>
                                <p>
                                    <?php echo esc_html__('You will need to configure the extra features via the customizer, though, because the Pro edition has more features and options. It just takes a few minutes to complete this easy process.', 'medical-trauma-center'); ?>
                                </p>
                                <p>
                                    <?php echo esc_html__('There is a lot of flexibility in the Pro version to accommodate future updates. As a result, it differs slightly from the free theme yet is incredibly versatile and user-friendly.', 'medical-trauma-center'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="MedicalTraumaCenterHeadingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#MedicalTraumaCenterCollapseFour" aria-expanded="false" aria-controls="MedicalTraumaCenterCollapseFour">
                                <?php echo esc_html__('How do I change the copyright text?', 'medical-trauma-center'); ?>
                            </button>
                        </h2>
                        <div id="MedicalTraumaCenterCollapseFour" class="accordion-collapse collapse" aria-labelledby="MedicalTraumaCenterHeadingFour" data-bs-parent="#MedicalTraumaCenterFaqAccordion">
                            <div class="accordion-body">
                                <p>
                                    <?php echo esc_html__('You can change the copyright text going to Appearance > Customize > Footer Option > And here you can find (Edit Footer Copyright Text)', 'medical-trauma-center'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="MedicalTraumaCenterHeadingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#MedicalTraumaCenterCollapseFour" aria-expanded="false" aria-controls="MedicalTraumaCenterCollapseFour">
                                <?php echo esc_html__('Why is my theme not working well?', 'medical-trauma-center'); ?>
                            </button>
                        </h2>
                        <div id="MedicalTraumaCenterCollapseFour" class="accordion-collapse collapse" aria-labelledby="MedicalTraumaCenterHeadingFour" data-bs-parent="#MedicalTraumaCenterFaqAccordion">
                            <div class="accordion-body">
                                <p>
                                    <?php echo esc_html__('It could be a plugin conflict if your customizer is not loading correctly or if you are experiencing problems with the theme.', 'medical-trauma-center'); ?>
                                </p>
                                <p>
                                    <?php echo esc_html__('Deactivate every plugin first, with the exception of those the theme suggests, to resolve the problem. After that, use "Ctrl+Shift+R" on Windows to force a new page load. Once the problems have been resolved, begin turning on each plugin individually, then refresh and verify your website each time. This will assist you in identifying the problematic plugin.', 'medical-trauma-center'); ?>
                                </p>
                                <p>
                                    <?php echo esc_html__('Please get in touch with us if this was not helpful.', 'medical-trauma-center'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="MedicalTraumaCenterHeadingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#MedicalTraumaCenterCollapseFour" aria-expanded="false" aria-controls="MedicalTraumaCenterCollapseFour">
                                <?php echo esc_html__('How can I solve my issues quickly and get faster support?', 'medical-trauma-center'); ?>
                            </button>
                        </h2>
                        <div id="MedicalTraumaCenterCollapseFour" class="accordion-collapse collapse" aria-labelledby="MedicalTraumaCenterHeadingFour" data-bs-parent="#MedicalTraumaCenterFaqAccordion">
                            <div class="accordion-body">
                                <p>
                                    <?php echo esc_html__('Please make sure you have updated the theme to the most recent version before sending us a support ticket for any problems. The theme update may have resolved the issue.', 'medical-trauma-center'); ?>
                                </p>
                                <p>
                                    <?php echo esc_html__('Please try to include as much information as you can in your support ticket submission so that we can address your issue more quickly. We advise you to email us one or more screenshots that clearly illustrate the problems and include the URL of your website.', 'medical-trauma-center'); ?>
                                </p>
                                <p>
                                    <?php echo esc_html__('Please be patient with us as we may have a delayed response time during the weekend.', 'medical-trauma-center'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        
	}

}
new Medical_Trauma_Center_Welcome();
?>