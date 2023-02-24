<section class="section-gym grid grid-cols-1 lg:grid-cols-12 pb-20 lg:pb-24 px-8 lg:px-0">
	<div class="col-span-1 lg:col-start-2 lg:col-span-3 lg:ml-7 lg:mr-20 flex flex-col justify-between mb-10 lg:mb-0">
		<p class="flex items-center text-sm text-main-green font-semibold tracking-wider uppercase"><span class="block w-20 h-px bg-main-green mr-5"></span><?php the_field( 'gym_small_title' ); ?></p>
	</div>
	<div class="col-span-1 lg:col-span-8">
		<h2 class="text-xl lg:text-2xl font-bold mb-8"><?php the_field( 'gym_title' ); ?></h2>
	</div>
	<div class="col-span-1 lg:col-start-2 lg:col-span-3 lg:ml-7 lg:mr-20 order-2 lg:order-1">
		<p class="text-main-green text-sm leading-8 tracking-wider"><?php the_field( 'gym_description' ); ?></p>
	</div>
	<div class="cols-span-1 lg:col-span-8 mb-8 lg:mb-0 order-1 lg:order-2">
		<?php
		$image = get_field( 'gym_image' );
		if ( ! empty( $image ) ) :
			echo '<div class="image-wrapper relative"><span class="overlay absolute top-0 left-0 right-0 bottom-0 bg-main-green/75 mix-blend-lighten"></span><img class="w-full object-cover max-h-[650px]" src="' . esc_url( $image['url'] ) . '" alt="' . esc_attr( $image['alt'] ) . '" /></div>';
		endif;
		?>
	</div>
</section>
