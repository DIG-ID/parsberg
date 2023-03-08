<section class="section-environment grid gird-cols-1 lg:grid-cols-12 pb-20 lg:pb-40 px-8 xl:px-0 overflow-hidden">
	<div class="col-span-1 lg:col-span-5 xl:col-start-2 xl:col-span-3 lg:ml-7 lg:mr-20">
		<p class="section-environment-small-title flex items-center text-sm text-main-green font-semibold tracking-wider uppercase mb-8 invisible"><span class="block w-20 h-px bg-main-green mr-5"></span><?php the_field( 'activitities_environment_small_title', 'aktivitaten_archive' ); ?></p>
	</div>
	<div class="col-span-1 lg:col-span-7 xl:col-span-8">
		<h2 class="section-environment-title text-xl lg:text-2xl font-bold mb-8 invisible"><?php the_field( 'activitities_environment_title', 'aktivitaten_archive' ); ?></h2>
	</div>
	<div class="col-span-1 lg:col-span-5 xl:col-start-2 xl:col-span-3 lg:ml-7 lg:mr-20">
		<p class="section-environment-description text-main-green text-sm leading-8 tracking-wider mb-8 lg:mb-0 invisible"><?php the_field( 'activitities_environment_description', 'aktivitaten_archive' ); ?></p>	
	</div>
	<div class="section-environment-image col-span-1 lg:col-span-7 xl:col-span-8 invisible">
		<?php
		$image = get_field( 'activitities_environment_image', 'aktivitaten_archive' );
		if ( ! empty( $image ) ) :
			echo '<div class="image-wrapper relative"><span class="overlay absolute top-0 left-0 right-0 bottom-0 bg-main-green/75 mix-blend-lighten"></span><img class="w-full object-cover min-h-[300px] max-h-[650px]" src="' . esc_url( $image['url'] ) . '" alt="' . esc_attr( $image['alt'] ) . '" /></div>';
		endif;
		?>
	</div>
</section>
