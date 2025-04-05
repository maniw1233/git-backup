<div class="upper-header-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 align-self-center">
				<div class="header-info py-2">
					<?php
						$medical_trauma_center_link1 = get_theme_mod( 'medical_trauma_center_link1', '' );
						$medical_trauma_center_link2 = get_theme_mod( 'medical_trauma_center_link2', '' );
						$medical_trauma_center_text1 = get_theme_mod( 'medical_trauma_center_text1', '' );
						$medical_trauma_center_text2 = get_theme_mod( 'medical_trauma_center_text2', '' );
						if ( ! empty( $medical_trauma_center_text1 ) || ! empty( $medical_trauma_center_text2 ) ) {
		                 ?>
		                 <span>
		                 	<a href="<?php echo esc_url( $medical_trauma_center_link1 ); ?>"><?php echo esc_html( $medical_trauma_center_text1 ); ?></a> / 
		                 	<a href="<?php echo esc_url( $medical_trauma_center_link2 ); ?>"><?php echo esc_html( $medical_trauma_center_text2 ); ?></a>
		                 </span>
		            <?php } ?>
					<?php
						$medical_trauma_center_emergency_contact = get_theme_mod( 'medical_trauma_center_emergency_contact', '' );
						if ( ! empty( $medical_trauma_center_emergency_contact ) ) {
		                 ?>
		                <a href="tel:<?php echo esc_attr( $medical_trauma_center_emergency_contact ); ?>"><i class="fas fa-phone mr-2"></i> <?php esc_html_e('Emergency Contact','medical-trauma-center'); ?></a>
		            <?php } ?>
					<?php
						$medical_trauma_center_email_address = get_theme_mod( 'medical_trauma_center_email_address', '' );
						if ( ! empty( $medical_trauma_center_email_address ) ) {
		                 ?>
		                <a href="mailto:<?php echo esc_attr( $medical_trauma_center_email_address ); ?>"><i class="fas fa-envelope-open-text mr-2"></i> <?php echo esc_html( $medical_trauma_center_email_address ); ?></a>
		            <?php } ?>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 align-self-center">
				<div class="social-inner-box text-center text-md-right py-2">
					<?php
					    // Get social media URLs before checking if they are not empty
					    $medical_trauma_center_facebook_url = get_theme_mod( 'medical_trauma_center_facebook_url', '' );
					    $medical_trauma_center_twitter_url = get_theme_mod( 'medical_trauma_center_twitter_url', '' );
					    $medical_trauma_center_instagram_url = get_theme_mod( 'medical_trauma_center_instagram_url', '' );
					    $medical_trauma_center_youtube_url = get_theme_mod( 'medical_trauma_center_youtube_url', '' );
					    $medical_trauma_center_whatsapp_url = get_theme_mod( 'medical_trauma_center_whatsapp_url', '' );
					?>
				    <?php if ( ! empty( $medical_trauma_center_facebook_url ) ) { ?>
				        <a href="<?php echo esc_url( $medical_trauma_center_facebook_url ); ?>"><i class="fab fa-facebook-f mr-3"></i></a>
				    <?php } ?>

				    <?php if ( ! empty( $medical_trauma_center_twitter_url ) ) { ?>
				        <a href="<?php echo esc_url( $medical_trauma_center_twitter_url ); ?>"><i class="fab fa-twitter mr-3"></i></a>
				    <?php } ?>

				    <?php if ( ! empty( $medical_trauma_center_instagram_url ) ) { ?>
				        <a href="<?php echo esc_url( $medical_trauma_center_instagram_url ); ?>"><i class="fab fa-instagram mr-3"></i></a>
				    <?php } ?>

				    <?php if ( ! empty( $medical_trauma_center_youtube_url ) ) { ?>
				        <a href="<?php echo esc_url( $medical_trauma_center_youtube_url ); ?>"><i class="fab fa-youtube mr-3"></i></a>
				    <?php } ?>

				    <?php if ( ! empty( $medical_trauma_center_whatsapp_url ) ) { ?>
				        <a href="<?php echo esc_url( $medical_trauma_center_whatsapp_url ); ?>"><i class="fab fa-whatsapp"></i></a>
				    <?php } ?>
		        </div>
			</div>
		</div>
	</div>
</div>

<?php 
	$medical_trauma_center_has_header_image = has_header_image();
	$medical_trauma_center_header_image_url = $medical_trauma_center_has_header_image ? esc_url(get_header_image()) : '';
	$medical_trauma_center_header_style = '';
	if ($medical_trauma_center_has_header_image) {
		$medical_trauma_center_header_style = sprintf(
			'background-image: url(%s); background-position: center; background-attachment: fixed; background-size: cover;',
			$medical_trauma_center_header_image_url
		);
	}
?>
<div class="header-main-area py-2" <?php if ($medical_trauma_center_header_style) echo 'style="' . esc_attr($medical_trauma_center_header_style) . '";'; ?>>
	<div class="container">		
		<div class="row">
			<div class="col-lg-3 col-md-5 align-self-center">
				<?php get_template_part( 'template-parts/site', 'branding' ); ?>
			</div>
			<div class="col-lg-9 col-md-7 align-self-center">
				<header id="masthead" class="site-header header-one">
					<div class="bottom-header header-image-wrap">
						<div class="toggle-menu menu text-center text-md-right">
							<button onclick="medical_trauma_center_mobile_menu_open()" class="toggle p-2"><i class="fa-solid fa-bars"></i></button>
						</div>
						<div id="responsive" class="nav side_nav">
							<nav id="top_menu" class="nav_menu" role="navigation" aria-label="<?php esc_attr_e( 'Menu', 'medical-trauma-center' ); ?>">
								<?php
								    wp_nav_menu( array( 
										'theme_location' => 'menu-1',
										'container_class' => 'navigation clearfix' ,
										'menu_class' => 'clearfix',
										'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav m-0 px-0">%3$s</ul>',
										'fallback_cb' => 'wp_page_menu',
								    ) ); 
								?>
								<a href="javascript:void(0)" class="closebtn menu" onclick="medical_trauma_center_mobile_menu_close()"><i class="fa-solid fa-xmark"></i></a>
							</nav>
						</div>
					</div>
				</header>
			</div>
		</div>
	</div>
</div>

<div class="header-row-area">
	<div class="container">
		<div class="header-info py-3">
			<?php
				$medical_trauma_center_phone_number = get_theme_mod( 'medical_trauma_center_phone_number', '' );
				if ( ! empty( $medical_trauma_center_phone_number ) ) {
	             ?>
	            <p class="mb-0"><i class="fas fa-phone mr-2"></i> <span class="info-area mr-2"><?php esc_html_e('Call','medical-trauma-center'); ?></span> <?php echo esc_html( $medical_trauma_center_phone_number ); ?> </p>
	        <?php } ?>
			<?php
				$medical_trauma_center_opening_time = get_theme_mod( 'medical_trauma_center_opening_time', '' );
				if ( ! empty( $medical_trauma_center_opening_time ) ) {
	             ?>
	            <p class="mb-0"><i class="fas fa-clock mr-2"></i> <span class="info-area mr-2"><?php esc_html_e('Opening Hours','medical-trauma-center'); ?></span> <?php echo esc_html( $medical_trauma_center_opening_time ); ?></p>
	        <?php } ?>
			<?php
				$medical_trauma_center_address = get_theme_mod( 'medical_trauma_center_address', '' );
				if ( ! empty( $medical_trauma_center_address ) ) {
	             ?>
	            <p class="mb-0"><i class="fas fa-map-marker-alt mr-2"></i> <span class="info-area mr-2"><?php esc_html_e('Address','medical-trauma-center'); ?></span> <?php echo esc_html( $medical_trauma_center_address ); ?></p>
	        <?php } ?>
		</div>
	</div>
</div>