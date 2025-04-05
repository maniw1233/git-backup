<?php
/**
 * Site information display template section
 *
 * @package Medical Trauma Center
 */

?>

<div class="site-info">
	<?php
    $medical_trauma_center_footer_text = get_theme_mod('medical_trauma_center_footer_text', '');

	if (!empty($medical_trauma_center_footer_text)) {
        $medical_trauma_center_text = esc_html($medical_trauma_center_footer_text);
    } else {
		$theme = wp_get_theme();
		$medical_trauma_center_text = sprintf(
			/* translators: 1: Theme author with link, 2: Copyright year, 3: Theme name with link */
			esc_html__('Theme design by %1$s | Copyright @ %2$s %3$s', 'medical-trauma-center'),
			'<a href="' . esc_url($theme->get('AuthorURI')) . '" target="_blank">' . esc_html($theme->get('Author')) . '</a>',
			esc_html(date('Y')),
			'<a href="' . esc_url($theme->get('ThemeURI')) . '" target="_blank">' . esc_html($theme->get('Name')) . '</a>'
		);
    }
	?>
	<p><?php echo $medical_trauma_center_text; ?></p>
</div>