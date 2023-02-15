<?php
/**
 * Template Name: Contact Page Template
 */

get_header();
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/contact/intro' );
		get_template_part( 'template-parts/pages/contact/contact-form' );
	do_action( 'after_main_content' );
get_footer();
