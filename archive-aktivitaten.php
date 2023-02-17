<?php
get_header();
do_action( 'before_main_content' );
get_template_part( 'template-parts/archives/activities/intro' );
get_template_part( 'template-parts/archives/activities/environment' );
get_template_part( 'template-parts/archives/activities/ourtips' );
get_template_part( 'template-parts/archives/activities/connection' );
do_action( 'after_main_content' );
get_footer();
