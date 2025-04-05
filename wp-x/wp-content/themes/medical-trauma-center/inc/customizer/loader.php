<?php
/**
* loads every component associated with the customizer. 
*
* @since Medical Trauma Center 1.0.0
*/

function medical_trauma_center_modify_default_settings( $wp_customize ){

	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

}
add_action( 'customize_register', 'medical_trauma_center_modify_default_settings' );