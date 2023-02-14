<section class="section-about grid grid-cols-1 px-8 lg:px-0 lg:grid-cols-12 mb-24 lg:mr-7">
	<?php
	$image = get_field( 'about_us_section_image' );
	if ( ! empty( $image ) ) :
		echo '<div class="image-wrapper col-span-1 mb-16 relative lg:mb-0 lg:col-span-7"><span class="overlay absolute top-0 left-0 right-0 bottom-0 bg-main-green/75 mix-blend-screen"></span><img class="w-full object-cover max-h-[650px]" src=" '. esc_url( $image['url'] ) . '" alt="' . esc_attr( $image['alt'] ) . '" /></div>';
	endif;
	?>
	<div class="about-content col-span-1 lg:col-start-9 lg:col-span-3">
		<h2 class="text-3xl font-bold mb-12"><?php the_field( 'about_us_section_title' ); ?></h2>
		<p class="text-sm font-light leading-8 tracking-wider mb-12"><?php the_field( 'about_us_section_description' ); ?></p>
		<a href="<?php the_field( 'about_us_section_button_url' ); ?>" class="block text-sm text-center font-normal tracking-widest uppercase py-4 border border-main-beige w-full transition-all duration-500 ease-in-out hover:bg-main-green hover:border-main-green hover:text-main-beige"><?php the_field( 'about_us_section_button_name' ); ?></a>
	</div>
</section>
