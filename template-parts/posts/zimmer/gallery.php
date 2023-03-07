<?php
$images = get_field( 'gallery' );
if ( $images ) : ?>
	<section class="section-gallery lg:pt-[120px]">
		<div class="swiper zimmer-swiper w-full mx-auto h-[60vh] lg:h-[80vh]">
			<div class="swiper-wrapper">
				<?php foreach ( $images as $image ) : ?>
					<a class="swiper-slide" data-fancybox="gallery" href="<?php echo esc_url( $image['url'] ); ?>" data-caption="<?php echo esc_html($image['caption']); ?>" >
						<span class="absolute top-0 right-0 bottom-0 left-0 block lg:hidden" style="background: linear-gradient(180deg, rgba(35,65,67,1) 0%, rgba(0,0,0,0) 40%);"></span>
						<img class="block w-full h-full max-auto object-cover" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
					</a>
				<?php endforeach; ?>
			</div>
			<div class="swiper-button-next"><svg width="18" height="32" viewBox="0 0 18 32" xml:space="preserve"><path d="m2.121 2.121 14.008 14.007m0 .001L2.121 30.136" style="fill:none;stroke-linecap:round;stroke-width:2px"/></svg></div>
			<div class="swiper-button-prev"><svg width="18" height="32" viewBox="0 0 18 32" xml:space="preserve"><path d="M16.13 30.137 2.122 16.13m0-.001L16.13 2.122" style="fill:none;stroke-linecap:round;stroke-width:2px"/></svg></div>
		</div>
	</section>
<?php endif;
