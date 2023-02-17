<?php
/**
 * Template Name: Gallery Page Template
 */

get_header();
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/gallery/intro' );
		get_template_part( 'template-parts/pages/gallery/gallery' );
	do_action( 'after_main_content' );
get_footer();
