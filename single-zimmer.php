<?php
get_header();
	do_action( 'before_main_content' );
	if ( have_posts() ) :
		do_action( 'before_post_content' );
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/posts/zimmer/gallery' );
			get_template_part( 'template-parts/posts/zimmer/description' );
			get_template_part( 'template-parts/posts/zimmer/amenities' );
			get_template_part( 'template-parts/posts/zimmer/notes' );
		endwhile;
		do_action( 'after_post_content' );
	endif;
	do_action( 'after_main_content' );
get_footer();
