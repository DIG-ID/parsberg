<section class="section-direct-booking px-8 py-14 bg-main-green lg:px-0">
	<div class="container mx-auto grid grid-cols-1 lg:grid-cols-12 items-center">
		<h3 class="text-3xl font-bold text-main-beige col-span-1 mb-10 lg:self-start lg:col-span-3"><?php the_field( 'direct_booking_section_title', 'option' ); ?></h3>
		<p class="col-span-1 lg:col-span-5 text-main-beige text-lg font-light leading-8 tracking-wider mb-10 lg:mb-0 lg:border-l lg:border-main-beige lg:pl-4"><?php the_field( 'direct_booking_section_description', 'option' ); ?></p>
		<a href="<?php the_field( 'direct_booking_section_button_url', 'option' ); ?>" class="col-span-1 lg:col-start-10 lg:col-span-3 bg-main-beige font-main-beige block text-sm text-center font-normal tracking-widest uppercase py-4 w-full" href=""><?php the_field( 'direct_booking_section_button_name', 'option' ); ?></a>
	</div>
</section>