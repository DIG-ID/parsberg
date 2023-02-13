<section class="section-activities pt-20 pb-40">
	<div class="container mx-auto grid grid-cols-12 pb-20">
		<div class="col-start-2 col-span-3">
			<h2 class="text-3xl font-bold text-main-green mb-12"><?php the_field( 'activities_section_title' ); ?></h2>
			<a href="<?php the_field( 'activities_section_button_url' ); ?>" class="block text-sm text-center font-normal tracking-widest uppercase py-4 border   border-main-beige w-full transition-all duration-400 ease-in-out hover:bg-main-green hover:border-main-green hover:text-main-beige"><?php the_field( 'activities_section_button_name' ); ?></a>
		</div>
		<p class="col-start-6 col-span-6 text-main-green text-sm font-light leading-8 tracking-wider"><?php the_field( 'activities_section_description' ); ?></p>
	</div>
	<div class="container mx-auto grid grid-cols-12 items-center ">
		<?php
		$image = get_field( 'activities_section_image' );
		if ( ! empty( $image ) ) :
			echo '<div class="image-wrapper col-start-2 col-span-10 relative"><span class="overlay absolute top-0 left-0 right-0 bottom-0 bg-main-green/75 mix-blend-screen"></span><img class="w-full object-cover max-h-[650px]" src="'. esc_url( $image['url'] ) . '" alt="' . esc_attr( $image['alt'] ) . '" /></div>';
		endif;
		?>
	</div>
</section>