<section class="section-gym grid grid-cols-12 pb-24">
	<div class="col-start-2 col-span-3 ml-7 mr-20 flex flex-col justify-between">
		<p class="flex items-center text-sm text-main-greenfont-semibold tracking-wider uppercase"><span class="block w-20 h-px bg-main-green mr-5"></span><?php the_field( 'gym_small_title' ); ?></p>
		<p class="text-main-green text-sm font-light leading-8 tracking-wider"><?php the_field( 'gym_description' ); ?></p>
	</div>
	<div class="col-span-8">
		<h2 class="text-2xl font-bold mb-8"><?php the_field( 'gym_title' ); ?></h2>
		<?php
		$image = get_field( 'gym_image' );
		if ( ! empty( $image ) ) :
			echo '<div class="image-wrapper relative"><span class="overlay absolute top-0 left-0 right-0 bottom-0 bg-main-green/75 mix-blend-lighten"></span><img class="w-full object-cover max-h-[650px]" src="' . esc_url( $image['url'] ) . '" alt="' . esc_attr( $image['alt'] ) . '" /></div>';
		endif;
		?>
	</div>
</section>
