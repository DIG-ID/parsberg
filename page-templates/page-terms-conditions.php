<?php
/**
 * Template Name: Terms and Conditions Page Template
 */

get_header();
	do_action( 'before_main_content' );
	    get_template_part( 'template-parts/pages/terms-conditions/intro' );
        get_template_part( 'template-parts/pages/terms-conditions/content' );
	do_action( 'after_main_content' );
get_footer();