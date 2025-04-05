<?php
/**
 * Medical Trauma Center Theme Customizer
 *
 * @package Medical Trauma Center
 */

/**
 * Provide postMessage support for the Theme Customizer's site title and description.
 */
function medical_trauma_center_customize_register( $wp_customize ) {

	// Header Settings Panel.
	$wp_customize->add_panel( 'medical_trauma_center_header_settings_panel',
		array(
			'title'      => esc_html__( 'Header Settings', 'medical-trauma-center' ),
			'priority'   => 2,
			'capability' => 'edit_theme_options',
		)
	);

	// Frontpage Sections Settings Panel.
	$wp_customize->add_panel( 'medical_trauma_center_frontpage_sections_settings_panel',
		array(
			'title'      => esc_html__( 'Frontpage Sections Settings', 'medical-trauma-center' ),
			'priority'   => 3,
			'capability' => 'edit_theme_options',
		)
	);

	// Footer Settings Panel.
	$wp_customize->add_panel( 'medical_trauma_center_footer_settings_panel',
		array(
			'title'      => esc_html__( 'Footer Settings', 'medical-trauma-center' ),
			'priority'   => 3,
			'capability' => 'edit_theme_options',
		)
	);
	

	// Topbar Option

	$wp_customize->add_section(
		'medical_trauma_center_topbar_section',
		array(
			'panel'      => 'medical_trauma_center_header_settings_panel',
			'title'    => esc_html__( 'Topbar Option', 'medical-trauma-center' ),
		)
	);

	$wp_customize->add_setting(
        'medical_trauma_center_text1',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

	$wp_customize->add_control(
        'medical_trauma_center_text1',
        array(
            'label'           => sprintf( esc_html__( 'Add Topbar Text 1', 'medical-trauma-center' ), ),
            'section'         => 'medical_trauma_center_topbar_section',
            'settings'        => 'medical_trauma_center_text1' ,
            'type'            => 'text',
        )
    );

    $wp_customize->add_setting(
        'medical_trauma_center_link1',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

	$wp_customize->add_control(
        'medical_trauma_center_link1',
        array(
            'label'           => sprintf( esc_html__( 'Add Topbar Link 1', 'medical-trauma-center' ), ),
            'section'         => 'medical_trauma_center_topbar_section',
            'settings'        => 'medical_trauma_center_link1' ,
            'type'            => 'url',
        )
    );

    $wp_customize->add_setting(
        'medical_trauma_center_text2',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

	$wp_customize->add_control(
        'medical_trauma_center_text2',
        array(
            'label'           => sprintf( esc_html__( 'Add Topbar Text 2', 'medical-trauma-center' ), ),
            'section'         => 'medical_trauma_center_topbar_section',
            'settings'        => 'medical_trauma_center_text2' ,
            'type'            => 'text',
        )
    );

    $wp_customize->add_setting(
        'medical_trauma_center_link2',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

	$wp_customize->add_control(
        'medical_trauma_center_link2',
        array(
            'label'           => sprintf( esc_html__( 'Add Topbar Link 2', 'medical-trauma-center' ), ),
            'section'         => 'medical_trauma_center_topbar_section',
            'settings'        => 'medical_trauma_center_link2' ,
            'type'            => 'url',
        )
    );

	$wp_customize->add_setting(
        'medical_trauma_center_emergency_contact',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

	$wp_customize->add_control(
        'medical_trauma_center_emergency_contact',
        array(
            'label'           => sprintf( esc_html__( 'Add Emergency Contact', 'medical-trauma-center' ), ),
            'section'         => 'medical_trauma_center_topbar_section',
            'settings'        => 'medical_trauma_center_emergency_contact' ,
            'type'            => 'text',
        )
    );

	$wp_customize->add_setting(
        'medical_trauma_center_email_address',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

	$wp_customize->add_control(
        'medical_trauma_center_email_address',
        array(
            'label'           => sprintf( esc_html__( 'Add Email Address', 'medical-trauma-center' ), ),
            'section'         => 'medical_trauma_center_topbar_section',
            'settings'        => 'medical_trauma_center_email_address' ,
            'type'            => 'text',
        )
    );

	// Header Option

	$wp_customize->add_section(
		'medical_trauma_center_header_section',
		array(
			'panel'      => 'medical_trauma_center_header_settings_panel',
			'title'    => esc_html__( 'Header Option', 'medical-trauma-center' ),
		)
	);

	$wp_customize->add_setting(
        'medical_trauma_center_phone_number',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

	$wp_customize->add_control(
        'medical_trauma_center_phone_number',
        array(
            'label'           => sprintf( esc_html__( 'Add Phone Number', 'medical-trauma-center' ), ),
            'section'         => 'medical_trauma_center_header_section',
            'settings'        => 'medical_trauma_center_phone_number' ,
            'type'            => 'text',
        )
    );

    $wp_customize->add_setting(
        'medical_trauma_center_opening_time',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

	$wp_customize->add_control(
        'medical_trauma_center_opening_time',
        array(
            'label'           => sprintf( esc_html__( 'Add Opening Time', 'medical-trauma-center' ), ),
            'section'         => 'medical_trauma_center_header_section',
            'settings'        => 'medical_trauma_center_opening_time' ,
            'type'            => 'text',
        )
    );

    $wp_customize->add_setting(
        'medical_trauma_center_address',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

	$wp_customize->add_control(
        'medical_trauma_center_address',
        array(
            'label'           => sprintf( esc_html__( 'Add Address', 'medical-trauma-center' ), ),
            'section'         => 'medical_trauma_center_header_section',
            'settings'        => 'medical_trauma_center_address' ,
            'type'            => 'text',
        )
    );

	// Social Option

	$wp_customize->add_section(
		'medical_trauma_center_social_section',
		array(
			'panel'      => 'medical_trauma_center_header_settings_panel',
			'title'    => esc_html__( 'Social Option', 'medical-trauma-center' ),
		)
	);

    $wp_customize->add_setting(
        'medical_trauma_center_facebook_url',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

	$wp_customize->add_control(
        'medical_trauma_center_facebook_url',
        array(
            'label'           => sprintf( esc_html__( 'Add Facebook Link', 'medical-trauma-center' ), ),
            'section'         => 'medical_trauma_center_social_section',
            'settings'        => 'medical_trauma_center_facebook_url' ,
            'type'            => 'url',
        )
    );

	$wp_customize->add_setting(
        'medical_trauma_center_twitter_url',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

	$wp_customize->add_control(
        'medical_trauma_center_twitter_url',
        array(
            'label'           => sprintf( esc_html__( 'Add Twitter Link', 'medical-trauma-center' ), ),
            'section'         => 'medical_trauma_center_social_section',
            'settings'        => 'medical_trauma_center_twitter_url' ,
            'type'            => 'url',
        )
    );

    $wp_customize->add_setting(
        'medical_trauma_center_instagram_url',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

	$wp_customize->add_control(
        'medical_trauma_center_instagram_url',
        array(
            'label'           => sprintf( esc_html__( 'Add Instagram Link', 'medical-trauma-center' ), ),
            'section'         => 'medical_trauma_center_social_section',
            'settings'        => 'medical_trauma_center_instagram_url' ,
            'type'            => 'url',
        )
    );

    $wp_customize->add_setting(
        'medical_trauma_center_youtube_url',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

	$wp_customize->add_control(
        'medical_trauma_center_youtube_url',
        array(
            'label'           => sprintf( esc_html__( 'Add Youtube Link', 'medical-trauma-center' ), ),
            'section'         => 'medical_trauma_center_social_section',
            'settings'        => 'medical_trauma_center_youtube_url' ,
            'type'            => 'url',
        )
    );

	$wp_customize->add_setting(
        'medical_trauma_center_whatsapp_url',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

	$wp_customize->add_control(
        'medical_trauma_center_whatsapp_url',
        array(
            'label'           => sprintf( esc_html__( 'Add Whatsapp Link', 'medical-trauma-center' ), ),
            'section'         => 'medical_trauma_center_social_section',
            'settings'        => 'medical_trauma_center_whatsapp_url' ,
            'type'            => 'url',
        )
    );
	
	// Banner Option

	$wp_customize->add_section(
		'medical_trauma_center_banner_section',
		array(
			'panel'      => 'medical_trauma_center_frontpage_sections_settings_panel',
			'title'    => esc_html__( 'Banner Option', 'medical-trauma-center' ),
		)
	);

	$wp_customize->add_setting(
	    'medical_trauma_center_slider',
	    array(
	        'default'           => '',
	        'sanitize_callback' => 'medical_trauma_center_sanitize_number',
	    )
	);

	$wp_customize->add_control(
	    'medical_trauma_center_slider',
	    array(
	        'label'       => esc_html__( 'No of banner', 'medical-trauma-center' ),
	        'section'     => 'medical_trauma_center_banner_section',
	        'settings'    => 'medical_trauma_center_slider',
	        'type'        => 'number',
	        'input_attrs' => array(
	            'min' => 1,
	            'max' => 3,
	        ),
	    )
	);

	$medical_trauma_center_banner = get_theme_mod( 'medical_trauma_center_slider');
	for ( $i = 1; $i <= $medical_trauma_center_banner; $i++ ){
		$wp_customize->add_setting(
			'medical_trauma_center_banner_heading'.$i,
			array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			'medical_trauma_center_banner_heading'.$i,
			array(
				'label'           => sprintf( esc_html__( 'Banner Heading 0', 'medical-trauma-center' ).$i, ),
				'section'         => 'medical_trauma_center_banner_section',
				'settings'        => 'medical_trauma_center_banner_heading'.$i,
				'type'            => 'text',
			)
		);

		$wp_customize->add_setting(
			'medical_trauma_center_banner_content'.$i,
			array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			'medical_trauma_center_banner_content'.$i,
			array(
				'label'           => sprintf( esc_html__( 'Banner Content 0', 'medical-trauma-center' ).$i, ),
				'section'         => 'medical_trauma_center_banner_section',
				'settings'        => 'medical_trauma_center_banner_content'.$i,
				'type'            => 'text',
			)
		);

        $wp_customize->add_setting(
            'medical_trauma_center_banner_btn'.$i,
            array(
                'default'           => '',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );

        $wp_customize->add_control(
            'medical_trauma_center_banner_btn'.$i,
            array(
                'label'           => sprintf( esc_html__( 'Banner Button 0', 'medical-trauma-center' ).$i, ),
                'section'         => 'medical_trauma_center_banner_section',
                'settings'        => 'medical_trauma_center_banner_btn'.$i,
                'type'            => 'text',
            )
        );

		$wp_customize->add_setting(
			'medical_trauma_center_banner_button_link'.$i,
			array(
				'default'           => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);

		$wp_customize->add_control(
			'medical_trauma_center_banner_button_link'.$i,
			array(
				'label'           => sprintf( esc_html__( 'Banner Button Link 0', 'medical-trauma-center' ).$i, ),
				'section'         => 'medical_trauma_center_banner_section',
				'settings'        => 'medical_trauma_center_banner_button_link'.$i,
				'type'            => 'url',
			)
		);
		
		$wp_customize->add_setting(
			'medical_trauma_center_banner_image'.$i,
			array(
	        	'default'           => '',
	        	'sanitize_callback' => 'medical_trauma_center_sanitize_image',

	    	)
	    );
	    
	    $wp_customize->add_control(
	     	new WP_Customize_Image_Control(
	    		$wp_customize, 'medical_trauma_center_banner_image'.$i, 
	    		array(
	    			'label'           => sprintf( esc_html__( 'Banner Image 0', 'medical-trauma-center' ).$i, ),
			        'settings'  => 'medical_trauma_center_banner_image'.$i,
			        'section'   => 'medical_trauma_center_banner_section'
	    		) 
	    	)
	    );
	}

    // Team Option

	$wp_customize->add_section(
		'medical_trauma_center_team_section',
		array(
			'panel'      => 'medical_trauma_center_frontpage_sections_settings_panel',
			'title'    => esc_html__( 'Team Options', 'medical-trauma-center' ),
		)
	);

	$wp_customize->add_setting(
        'medical_trauma_center_team_title',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

	$wp_customize->add_control(
        'medical_trauma_center_team_title',
        array(
            'label'           => sprintf( esc_html__( 'Team Heading', 'medical-trauma-center' ), ),
            'section'         => 'medical_trauma_center_team_section',
            'settings'        => 'medical_trauma_center_team_title' ,
            'type'            => 'text',
        )
    );

    $wp_customize->add_setting(
        'medical_trauma_center_team_short_title',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

	$wp_customize->add_control(
        'medical_trauma_center_team_short_title',
        array(
            'label'           => sprintf( esc_html__( 'Team Short Content', 'medical-trauma-center' ), ),
            'section'         => 'medical_trauma_center_team_section',
            'settings'        => 'medical_trauma_center_team_short_title' ,
            'type'            => 'text',
        )
    );

    $wp_customize->add_setting(
	    'medical_trauma_center_team_count',
	    array(
	        'default'           => '',
	        'sanitize_callback' => 'medical_trauma_center_sanitize_number',
	    )
	);

	$wp_customize->add_control(
	    'medical_trauma_center_team_count',
	    array(
	        'label'       => esc_html__( 'No of Team', 'medical-trauma-center' ),
	        'section'     => 'medical_trauma_center_team_section',
	        'settings'    => 'medical_trauma_center_team_count',
	        'type'        => 'number',
	        'input_attrs' => array(
	            'min' => 1,
	            'max' => 8,
	        ),
	    )
	);

	$medical_trauma_center_team = get_theme_mod( 'medical_trauma_center_team_count');
	for ( $i = 1; $i <= $medical_trauma_center_team; $i++ ){

		$wp_customize->add_setting(
			'medical_trauma_center_team_image'.$i,
			array(
	        	'default'           => '',
	        	'sanitize_callback' => 'medical_trauma_center_sanitize_image',

	    	)
	    );
	    
	    $wp_customize->add_control(
	     	new WP_Customize_Image_Control(
	    		$wp_customize, 'medical_trauma_center_team_image'.$i, 
	    		array(
	    			'label'           => sprintf( esc_html__( 'Team Member Image 0', 'medical-trauma-center' ).$i, ),
			        'settings'  => 'medical_trauma_center_team_image'.$i,
			        'section'   => 'medical_trauma_center_team_section'
	    		) 
	    	)
	    );

		$wp_customize->add_setting(
			'medical_trauma_center_team_name'.$i,
			array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			'medical_trauma_center_team_name'.$i,
			array(
				'label'           => sprintf( esc_html__( 'Team Member Name 0', 'medical-trauma-center' ).$i, ),
				'section'         => 'medical_trauma_center_team_section',
				'settings'        => 'medical_trauma_center_team_name'.$i,
				'type'            => 'text',
			)
		);

		$wp_customize->add_setting(
			'medical_trauma_center_team_designation'.$i,
			array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			'medical_trauma_center_team_designation'.$i,
			array(
				'label'           => sprintf( esc_html__( 'Team Member Designation 0', 'medical-trauma-center' ).$i, ),
				'section'         => 'medical_trauma_center_team_section',
				'settings'        => 'medical_trauma_center_team_designation'.$i,
				'type'            => 'text',
			)
		);

	    $wp_customize->add_setting(
	        'medical_trauma_center_team_facebook_url'.$i,
	        array(
	            'default'           => '',
	            'sanitize_callback' => 'esc_url_raw',
	        )
	    );

		$wp_customize->add_control(
	        'medical_trauma_center_team_facebook_url'.$i,
	        array(
	            'label'           => sprintf( esc_html__( 'Add Facebook Link 0', 'medical-trauma-center' ).$i, ),
	            'section'         => 'medical_trauma_center_team_section',
	            'settings'        => 'medical_trauma_center_team_facebook_url'.$i,
	            'type'            => 'url',
	        )
	    );

		$wp_customize->add_setting(
	        'medical_trauma_center_team_twitter_url'.$i,
	        array(
	            'default'           => '',
	            'sanitize_callback' => 'esc_url_raw',
	        )
	    );

		$wp_customize->add_control(
	        'medical_trauma_center_team_twitter_url'.$i,
	        array(
	            'label'           => sprintf( esc_html__( 'Add Twitter Link 0', 'medical-trauma-center' ).$i, ),
	            'section'         => 'medical_trauma_center_team_section',
	            'settings'        => 'medical_trauma_center_team_twitter_url'.$i,
	            'type'            => 'url',
	        )
	    );

	    $wp_customize->add_setting(
	        'medical_trauma_center_team_instagram_url'.$i,
	        array(
	            'default'           => '',
	            'sanitize_callback' => 'esc_url_raw',
	        )
	    );

		$wp_customize->add_control(
	        'medical_trauma_center_team_instagram_url'.$i,
	        array(
	            'label'           => sprintf( esc_html__( 'Add Instagram Link 0', 'medical-trauma-center' ).$i, ),
	            'section'         => 'medical_trauma_center_team_section',
	            'settings'        => 'medical_trauma_center_team_instagram_url'.$i,
	            'type'            => 'url',
	        )
	    );

	    $wp_customize->add_setting(
	        'medical_trauma_center_team_youtube_url'.$i,
	        array(
	            'default'           => '',
	            'sanitize_callback' => 'esc_url_raw',
	        )
	    );

		$wp_customize->add_control(
	        'medical_trauma_center_team_youtube_url'.$i,
	        array(
	            'label'           => sprintf( esc_html__( 'Add Youtube Link 0', 'medical-trauma-center' ).$i, ),
	            'section'         => 'medical_trauma_center_team_section',
	            'settings'        => 'medical_trauma_center_team_youtube_url'.$i,
	            'type'            => 'url',
	        )
	    );

		$wp_customize->add_setting(
	        'medical_trauma_center_team_whatsapp_url'.$i,
	        array(
	            'default'           => '',
	            'sanitize_callback' => 'esc_url_raw',
	        )
	    );

		$wp_customize->add_control(
	        'medical_trauma_center_team_whatsapp_url'.$i,
	        array(
	            'label'           => sprintf( esc_html__( 'Add Whatsapp Link 0', 'medical-trauma-center' ).$i, ),
	            'section'         => 'medical_trauma_center_team_section',
	            'settings'        => 'medical_trauma_center_team_whatsapp_url'.$i,
	            'type'            => 'url',
	        )
	    );
	}

	// Footer Option

	$wp_customize->add_section(
		'medical_trauma_center_footer_section',
		array(
			'panel'      => 'medical_trauma_center_footer_settings_panel',
			'title'    => esc_html__( 'Footer Copyright Options', 'medical-trauma-center' ),
		)
	);

	$wp_customize->add_setting(
        'medical_trauma_center_footer_text',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

	$wp_customize->add_control(
        'medical_trauma_center_footer_text',
        array(
            'label'           => sprintf( esc_html__( 'Edit Footer Copyright Text', 'medical-trauma-center' ), ),
            'section'         => 'medical_trauma_center_footer_section',
            'settings'        => 'medical_trauma_center_footer_text' ,
            'type'            => 'text',
        )
    );
}
add_action( 'customize_register', 'medical_trauma_center_customize_register' );

/**
 * Create the site title for the partial selective refresh.
 *
 * @return void
 */
function medical_trauma_center_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Create the website's slogan for the partial selective refresh.
 *
 * @return void
 */
function medical_trauma_center_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Medical_Trauma_Center_Customize_Buttons {
	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function Medical_Trauma_Center_get_instance() {

		static $medical_trauma_center_instance = null;

		if ( is_null( $medical_trauma_center_instance ) ) {
			$medical_trauma_center_instance = new self;
			$medical_trauma_center_instance->Medical_Trauma_Center_setup_actions();
		}

		return $medical_trauma_center_instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function Medical_Trauma_Center_setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $medical_trauma_center_manager
	 * @return void
	*/
	public function sections( $medical_trauma_center_manager ) {
		load_template( trailingslashit( get_template_directory() ) . '/inc/medical-trauma-center-section-pro.php' );

		$medical_trauma_center_manager->register_section_type( 'Medical_Trauma_Center_Customize_Section_Pro' );

		$medical_trauma_center_manager->add_section( new Medical_Trauma_Center_Customize_Section_Pro( $medical_trauma_center_manager,'medical_trauma_center_buy_now', array(
			'priority'   => 1,
			'title'    => esc_html__( 'Buy Medical Trauma Center Pro', 'medical-trauma-center' ),
			'pro_text' => esc_html__( 'Buy Pro Theme', 'medical-trauma-center' ),
			'pro_url'    => esc_url( MEDICAL_TRAUMA_CENTER_BUY_NOW ),
		) )	);

		$medical_trauma_center_manager->add_section( new Medical_Trauma_Center_Customize_Section_Pro( $medical_trauma_center_manager, 'medical_trauma_center_live_demo', array(
		    'priority'   => 1,
		    'title'      => esc_html__( 'Preview Pro Theme', 'medical-trauma-center' ),
		    'pro_text'   => esc_html__( 'View Live Demo', 'medical-trauma-center' ),
		    'pro_url'    => esc_url( MEDICAL_TRAUMA_CENTER_LIVE_DEMO ),
		) ) );	
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'medical-trauma-center-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'medical-trauma-center-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}
Medical_Trauma_Center_Customize_Buttons::Medical_Trauma_Center_get_instance();