<?php
/**
 * Template Name: Home Page Template
 */

get_header();
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/home/hero' );
		get_template_part( 'template-parts/pages/home/intro' );
		get_template_part( 'template-parts/modules/direct-booking' );
		get_template_part( 'template-parts/pages/home/zimmer' );
		get_template_part( 'template-parts/pages/home/location' );
		get_template_part( 'template-parts/modules/services' );
		get_template_part( 'template-parts/pages/home/activities' );
		get_template_part( 'template-parts/pages/home/about' );
	do_action( 'after_main_content' );
get_footer();
