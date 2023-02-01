<?php
/**
 * Register theme customizer
 */

function parsberg_theme_customizer_register( $wp_customize ) {
	// New panel for the theme options.
	$wp_customize->add_panel(
		'parsberg_theme_panel',
		array(
			'priority'       => 20,
			'capability'     => 'edit_theme_options',
			'theme_supports' => '',
			'title'          => __( 'Parsberg Theme Options', 'parsberg' ),
			'description'    => __( 'Theme options for the Parsberg Theme', 'parsberg' ),
		)
	);

	require get_parent_theme_file_path( '/inc/customizer/socials.php' );

}

add_action( 'customize_register', 'parsberg_theme_customizer_register' );
