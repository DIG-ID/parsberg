<section class="section-about grid grid-cols-1 px-8 lg:px-0 lg:grid-cols-12 mb-24 lg:mr-7">
	<div class="image-wrapper col-span-1 mb-16 lg:mb-0 lg:col-span-7">
		<img class="w-full object-cover" src="https://via.placeholder.com/884x650" alt="about us image">
	</div>
	<div class="about-content col-span-1 lg:col-start-9 lg:col-span-3">
		<h2 class="text-3xl font-bold mb-12"><?php the_field( 'direct_booking_section_title' ); ?></h2>
		<p class="text-sm font-light leading-8 tracking-wider mb-12"><?php the_field( 'direct_booking_section_description' ); ?></p>
		<a href="<?php the_field( 'direct_booking_section_button_url' ); ?>" class="block text-sm text-center font-normal tracking-widest uppercase py-4 border border-main-beige w-full" href=""><?php the_field( 'direct_booking_section_button_name' ); ?></a>
	</div>
</section>
