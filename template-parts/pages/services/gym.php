<section class="section-gym grid grid-cols-1 lg:grid-cols-12 pb-20 lg:pb-24 px-8 lg:px-0 overflow-hidden">
	<div class="col-span-1 lg:col-start-2 lg:col-span-3 lg:ml-7 lg:mr-20 flex flex-col justify-between mb-10 lg:mb-0">
		<p class="section-gym-small-title flex items-center text-sm text-main-green font-semibold tracking-wider uppercase invisible"><span class="block w-20 h-px bg-main-green mr-5"></span><?php the_field( 'gym_small_title' ); ?></p>
	</div>
	<div class="col-span-1 lg:col-span-8">
		<h2 class="section-gym-title text-xl lg:text-2xl font-bold mb-8 invisible"><?php the_field( 'gym_title' ); ?></h2>
	</div>
	<div class="section-gym__col1 relative col-span-1 lg:col-start-2 lg:col-span-3 lg:ml-7 lg:mr-20 order-2 lg:order-1">
		<p class="section-gym-description text-main-green text-sm leading-8 tracking-wider invisible"><?php the_field( 'gym_description' ); ?></p>
	</div>
	<div class="cols-span-1 lg:col-span-8 mb-8 lg:mb-0 order-1 lg:order-2">
	<?php 
	$gym_images = get_field('gym_gym_slider');
	if( $gym_images ): ?>
		<div id="gym-slider" class="swiper gym-swiper invisible">
			<div class="swiper-wrapper">
				<?php foreach ( $gym_images as $gym_image ) : ?>
					<a class="swiper-slide">
						<span class="overlay absolute top-0 left-0 right-0 bottom-0 bg-main-green/75 mix-blend-lighten"></span>
						<img class="w-full object-cover max-h-[650px]" src="<?php echo esc_url( $gym_image['url'] ); ?>" alt="<?php echo esc_attr( $gym_image['alt'] ); ?>" />
					</a>
				<?php endforeach; ?>
			</div>
			<div class="swiper-button-next g-swiper-button-next"><svg width="18" height="32" viewBox="0 0 18 32" xml:space="preserve"><path d="m2.121 2.121 14.008 14.007m0 .001L2.121 30.136" style="fill:none;stroke-linecap:round;stroke-width:2px"/></svg></div>
			<div class="swiper-button-prev g-swiper-button-prev"><svg width="18" height="32" viewBox="0 0 18 32" xml:space="preserve"><path d="M16.13 30.137 2.122 16.13m0-.001L16.13 2.122" style="fill:none;stroke-linecap:round;stroke-width:2px"/></svg></div>
		</div>
	<?php endif; ?>
	</div>
</section>
