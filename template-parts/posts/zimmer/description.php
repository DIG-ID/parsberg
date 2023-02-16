<section class="section-intro pt-24 pb-16">
	<div class="container mx-auto grid grid-cols-1 lg:grid-cols-12">
		<div class="title col-span-1 lg:col-span-4">
			<h1 class="text-3xl font-semibold mb-5"><?php echo esc_html( wp_strip_all_tags( get_the_title() ) ); ?></h1>
			<p class="text-2xl text-main-green font-normal mb-10">
				<?php
				$zimmer_cat = get_the_terms( get_the_ID(), 'zimmerkategorie' );
				echo esc_html( $zimmer_cat[0]->name );
				?>
			</p>
		</div>
		<div class="description col-span-1 lg:col-span-5">
			<p class="text-main-green text-sm font-light leading-8 tracking-wider mr-8">
				<?php echo esc_html( wp_strip_all_tags( get_the_content() ) ); ?>
			</p>
		</div>
		<div class="description col-span-1 lg:col-span-3">
		<a href="<?php the_field( 'booking_button_url' ); ?>" class="col-span-1 lg:col-start-10 lg:col-span-3 bg-main-green text-main-beige block text-sm text-center font-normal tracking-widest uppercase py-4 w-full"><?php esc_html_e( 'Jetzt buchen', 'parsberg' ); ?></a>
		</div>
	</div>
</section>
