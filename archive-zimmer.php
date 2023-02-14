<?php
get_header();
do_action( 'before_main_content' );
get_template_part( 'template-parts/archives/zimmer/intro' );
if ( have_posts() ) :
	$c = 0;
	do_action( 'before_post_content' );
	while ( have_posts() ) :
		the_post();
		$c++;
		if ( $c % 2 === 0 ) :
			get_template_part( 'template-parts/components/card', 'zimmer-rev' );
		else :
			get_template_part( 'template-parts/components/card', 'zimmer' );
		endif;
	endwhile;
	do_action( 'after_post_content' );
endif;
do_action( 'after_main_content' );
get_footer();
