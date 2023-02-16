<?php
$images = get_field( 'gallery' );
if ( $images ) : ?>
	<section class="section-gallery pt-[120px]">
		<div class="swiper zimmer-swiper w-full mx-auto h-[80vh]">
			<div class="swiper-wrapper">
				<?php foreach ( $images as $image ) : ?>
					<a class="swiper-slide" data-fancybox="gallery" href="<?php echo esc_url( $image['url'] ); ?>" data-caption="<?php echo esc_html($image['caption']); ?>" >
						<img class="block w-full h-full max-auto object-cover" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
					</a>
				<?php endforeach; ?>
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
		<div thumbsSlider="" class="swiper zimmer-thumb-swiper w-full max-auto h-[20vh]">
			<div class="swiper-wrapper">
				<?php foreach ( $images as $image ) : ?>
					<div class="swiper-slide hover:cursor-pointer">
						<img class="block w-full h-full max-auto object-cover" src="<?php echo esc_url( $image['sizes']['thumbnail'] ); ?>" alt="Thumbnail of <?php echo esc_url( $image['alt'] ); ?>" />
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php endif;
