<section class="section-zimmer lg:pt-24">
	<?php
	$args = array(
		'post_type' => 'zimmer',
	);
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) :
		$c = 0;
		while ( $the_query->have_posts() ) :
			$the_query->the_post();
			$c++;
			if ( $c % 2 === 0 ) :
				get_template_part( 'template-parts/components/card', 'zimmer-rev' );
			else :
				get_template_part( 'template-parts/components/card', 'zimmer' );
			endif;
		endwhile;
		wp_reset_postdata();
	endif;
	?>
</section>
