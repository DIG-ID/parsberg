<?php
/**
 * Template Name: Home Page Template
 */

get_header( 'home' );
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/home/hero' );
		get_template_part( 'template-parts/pages/home/intro' );
		get_template_part( 'template-parts/pages/home/direct-booking' );
		get_template_part( 'template-parts/pages/home/location' );
		get_template_part( 'template-parts/pages/home/services' );
		get_template_part( 'template-parts/pages/home/activities' );
		get_template_part( 'template-parts/pages/home/about' );
	do_action( 'after_main_content' );
get_footer();
