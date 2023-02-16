<?php 
$bgi = get_field( 'hero_section_image' );
if ( $bgi ) :
	$hbg = wp_get_attachment_image_url( $bgi, 'full' );
endif;
?>
<section class="section-hero flex items-center justify-center min-h-screen relative bg-center bg-no-repeat bg-cover" style="background-image: linear-gradient(0, rgb(46 86 89 / 50%), rgb(46 86 89 / 50%)), url('<?php echo $hbg; ?>')">
	<span class="section-hero-mask flex items-center justify-center absolute top-0 right-0 bottom-0 left-0 z-40 clip-square bg-main-green">
		<svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 150 235.9" class="section-hero-symbol fill-main-beige w-[110px]" width="150" height="235.9" x="0" y="0" version="1.1">
			<path id="draw-me" d="m75 110.3-9.9-10.1-11.7 12.2v48h43.1v-48l-11.7-12.2-9.8 10.1zm-2 46.1H57.4v-42.5l7.8-8.1 7.9 8.1v42.5zm19.6 0H77v-42.5l7.9-8.1 7.8 8.1v42.5z""/><path id="draw-me" d="M75 0C33.6 0 0 33.6 0 75v85.9c0 41.4 33.6 75 75 75s75-33.6 75-75V75c0-41.4-33.6-75-75-75zm0 4c38.8 0 70.4 31.3 71 70L76 29.9h-2.1L4 73.9C4.6 35.3 36.2 4 75 4zM9.6 75.1 75 33.8l65.4 41.3H9.6zm101.2 4v21.2L89.6 79.1h21.2zm-50.4 0-21.2 21.2V79.1h21.2zM4 160.9V79.1h31.3v95.6h-30c-.9-4.5-1.3-9.1-1.3-13.8zm69 71c-32.2-.9-59.1-23.3-66.8-53.3h42.5L73 202.9v29zm0-34.6-18.7-18.7H73v18.7zm-33.8-22.7v-68.7L66 79.1h18l26.8 26.8v68.7H39.2zm56.5 4L77 197.3v-18.7h18.7zM77 231.9v-29l24.3-24.3h42.5c-7.7 30-34.6 52.4-66.8 53.3zm69-71c0 4.7-.5 9.3-1.3 13.7h-29.9V79.1H146v81.8z"/>
		</svg>
	</span>
	<h1 class="section-hero-title font-sans font-semibold text-5xl text-center text-main-beige tracking-widest"><?php the_field( 'hero_section_title' ); ?></h1>
	<a href="#next-section" class="section-hero-scroll absolute flex justify-center bottom-20 left-2/4 -translate-x-2/4 border-2 w-[40px] h-[65px] pt-4 border-main-beige text-main-beige rounded-full"><span class="block w-1 h-3 bg-main-beige rounded-full animate-bounce"></span></a>
</section>
