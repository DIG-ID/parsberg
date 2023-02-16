<section class="section-amenities py-28 bg-darker-green text-main-beige">
	<div class="container mx-auto flex flex-col lg:flex-row">
		<div class="equipments w-full lg:w-1/2 px-20">
			<h3 class="text-sm font-semibold tracking-wider uppercase mb-8"><?php esc_html_e( 'Ausstattung', 'parsberg' ); ?></h3>
			<p class="text-sm font-light leading-8 tracking-wider"><?php the_field( 'equipments_description' ); ?></p>
		</div>
		<hr class="bg-main-beige h-52 my-auto w-px">
		<div class="at-glance w-full lg:w-1/2 px-20">
			<h3 class="text-sm font-semibold tracking-wider uppercase mb-8"><?php esc_html_e( 'Auf einen Blick:', 'parsberg' ); ?></h3>
			<?php
			if ( have_rows( 'at_a_glance_items' ) ) :
				echo '<ul class="">';
				while ( have_rows( 'at_a_glance_items' ) ) :
					the_row();
					$text = get_sub_field( 'item' );
					echo '<li class="text-sm font-light leading-8 tracking-wider"><span class="mr-2">-</span> ' . $text . '</li>';
				endwhile;
				echo '</ul>';
			endif;
			?>
		</div>
	</div>
</section>
