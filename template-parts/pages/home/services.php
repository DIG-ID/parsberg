<section class="section-services grid grid-cols-12 pt-36 pb-20">
	<div class="services-content col-start-2 col-span-5 ml-7">
		<h2 class="text-3xl font-bold text-main-green mb-12"><?php the_field( 'services_section_title' ); ?></h2>
		<p class="text-main-green text-sm font-light leading-8 tracking-wider mb-14"><?php the_field( 'services_section_description' ); ?></p>
		<?php
		if ( have_rows( 'services_section_services_list' ) ) :
			echo '<ul class="mb-20">';
			while ( have_rows( 'services_section_services_list' ) ) :
				the_row();
				$text = get_sub_field( 'text' );
				echo '<li class="text-main-green text-sm font-light leading-8 tracking-wider">' . $text . '</li>';
			endwhile;
			echo '</ul>';
		endif;
		?>
		<a href="<?php the_field( 'services_section_button_url' ); ?>" class="block-inline text-sm text-center font-normal tracking-widest uppercase py-4 px-16 border border-main-beige transition-all duration-500 ease-in-out hover:bg-main-green hover:border-main-green hover:text-main-beige"><?php the_field( 'services_section_button_name' ); ?></a>
	</div>
	<?php
	$image = get_field( 'services_section_image' );
	if ( ! empty( $image ) ) :
		echo '<div class="image-wrapper col-span-6 relative"><span class="overlay absolute top-0 left-0 right-0 bottom-0 bg-main-green/75 mix-blend-screen"></span><img class="w-full object-cover max-h-[650px]" src="' . esc_url( $image['url'] ) . '" alt="' . esc_attr( $image['alt'] ) . '" /></div>';
	endif;
	?>
</section>
