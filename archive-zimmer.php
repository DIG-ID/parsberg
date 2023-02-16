<?php
get_header();
do_action( 'before_main_content' );
get_template_part( 'template-parts/archives/zimmer/intro' );
if ( have_posts() ) :
	$c = 0;
	while ( have_posts() ) :
		the_post();
		$c++;
		if ( $c % 2 === 0 ) :
			get_template_part( 'template-parts/components/card', 'zimmer-rev' );
		else :
			get_template_part( 'template-parts/components/card', 'zimmer' );
		endif;
	endwhile;
endif;
get_template_part( 'template-parts/modules/direct-booking' );
get_template_part( 'template-parts/modules/services' );
do_action( 'after_main_content' );
get_footer();
