<article id="post-<?php the_ID(); ?>" <?php post_class( 'grid grid-cols-12 mb-24 min-h-[560px] lg:ml-8 lg:gap-8' ); ?>>
	<div class="content col-start-2 col-span-3 flex flex-col justify-between h-full">
		<div class="details">
			<h2 class="text-3xl text-main-green font-bold mb-20"><?php the_title(); ?></h2>
			<p class="text-2xl text-main-green font-normal mb-10">
				<?php
				$zimmer_cat = get_the_terms( get_the_ID(), 'zimmerkategorie' );
				echo esc_html( $zimmer_cat[0]->name );
				?>
			</p>
			<p class="text-sm text-main-green font-light leading-8 tracking-wider"><?php echo get_the_excerpt(); ?></p>
		</div>
		<a class="block text-sm text-center font-normal tracking-widest uppercase py-4 border border-main-beige w-full transition-all duration-500 ease-in-out hover:bg-main-green hover:border-main-green hover:text-main-beige" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Zu den Zimmern', 'parsberg' ); ?></a>
	</div>
	<?php
	if ( has_post_thumbnail() ) :
		?>
		<div class="image-wrapper relative col-span-8">
			<span class="overlay absolute top-0 left-0 right-0 bottom-0 bg-main-green/75 mix-blend-lighten"></span>
			<img class="w-full object-cover max-h-[560px]" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_post_thumbnail_caption(); ?>">
		</div>
		<?php
	endif;
	?>
</article>
