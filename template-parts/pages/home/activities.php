<section class="section-activities lg:pt-20 lg:pb-40 flex flex-col px-8 lg:px-0">
	<div class="lg:container mx-auto grid  grid-cols-1 lg:grid-cols-12 pb-20 order-2 lg:order-1">
		<div class="col-span-1 lg:col-start-2 lg:col-span-3">
			<h2 class="text-3xl font-bold text-main-green mb-12"><?php the_field( 'activities_section_title' ); ?></h2>
			<a href="<?php the_field( 'activities_section_button_url' ); ?>" class="block text-sm text-center font-normal tracking-widest uppercase py-4 border border-main-beige w-full transition-all duration-500 ease-in-out hover:bg-main-green hover:border-main-green hover:text-main-beige hidden lg:block"><?php the_field( 'activities_section_button_name' ); ?></a>
		</div>
		<div class="col-span-1 lg:col-start-6 lg:col-span-6">
			<p class=" text-main-green text-sm font-light leading-8 tracking-wider mb-12 lg:mb-0"><?php the_field( 'activities_section_description' ); ?></p>
			<a href="<?php the_field( 'activities_section_button_url' ); ?>" class="inline-block text-sm text-center font-normal tracking-widest uppercase py-4 px-16 lg:px-0 border border-main-beige lg:w-full transition-all duration-500 ease-in-out hover:bg-main-green hover:border-main-green hover:text-main-beige lg:hidden"><?php the_field( 'activities_section_button_name' ); ?></a>
		</div>

	</div>
	<div class="lg:container mx-auto grid grid-cols-1 lg:grid-cols-12 items-center order-1 lg:order-2 pb-10 lg:pb-0">
		<?php
		$image = get_field( 'activities_section_image' );
		if ( ! empty( $image ) ) :
			echo '<div class="image-wrapper col-start-2 col-span-10 relative"><span class="overlay absolute top-0 left-0 right-0 bottom-0 bg-main-green/75 mix-blend-lighten"></span><img class="w-full object-cover max-h-[650px]" src="' . esc_url( $image['url'] ) . '" alt="' . esc_attr( $image['alt'] ) . '" /></div>';
		endif;
		?>
	</div>
</section>
