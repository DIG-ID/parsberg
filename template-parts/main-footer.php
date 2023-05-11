<div class="book-button-wrapper">
	<?php
	$btn = get_field( 'direct_booking_section_button', 'option' );
	if ( $btn ) :
		$btn_url    = $btn['url'];
		$btn_title  = $btn['title'];
		$btn_target = $btn['target'] ? $btn['target'] : '_self';
		?>
		<a class="book-button-mobile" href="<?php echo esc_url( $btn_url ); ?>" target="<?php echo esc_attr( $btn_target ); ?>"><?php echo esc_html( $btn_title ); ?></a>
		<?php
	endif;
	?>
</div>
<footer class="main-footer bg-darker-green text-main-beige">
	<div class="container mx-auto pt-16 pb-8 px-8 grid grid-cols-2 lg:grid-cols-12 xl:px-0">
		<div class="footer-logo max-w-none mx-auto mb-8 col-span-2 lg:max-w-[120px] lg:mx-0">
			<?php get_template_part( 'template-parts/main-logo' ); ?>
		</div>
		<div class="contacts-wrapper mb-8 flex-col col-span-2 lg:flex-col lg:col-start-4 lg:col-span-2 px-2 lg:px-0 gap-4 lg:gap-0">
			<div class="address basis-0 lg:basis-0 mb-8">
				<h4 class="text-xs font-normal tracking-widest uppercase mb-4">Adresse</h4>
				<p class="leading-6">Hotel Parsberg<br>
					Augsburger Strasse 1<br>
					D-82178 Puchheim</p>
			</div>
			<div class="contacts basis-0 lg:basis-0">
				<h4 class="text-xs font-normal tracking-widest uppercase mb-4">Kontakt</h4>
				<a class="block leading-6" href="tel:0898009900">T: 089 / 80 09 90 - 0</a>
				<a class="block leading-6" href="mailto:post@hotel-parsberg.de">E: post@hotel-parsberg.de</a>
			</div>
		</div>
		<div class="menu-siten mb-8 col-span-2 lg:col-start-8 lg:col-span-2 px-2 lg:px-0 leading-6">
			<h4 class="text-xs font-normal tracking-widest uppercase mb-4">Seiten</h4>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'menu_class'     => 'footer-nav',
					'fallback_cb'    => false,
				),
			);
			?>
		</div>
		<div class="menu-info mb-8 col-span-2 lg:col-start-11 lg:col-span-2 px-2 lg:px-0 leading-6">
			<h4 class="text-xs font-normal tracking-widest uppercase mb-4">RECHTLICHE HINWEISE</h4>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer terms',
					'menu_class'     => 'footer-nav',
					'fallback_cb'    => false,
				),
			);
			?>
		</div>
	</div>
	<hr>
	<div class="copyright container mx-auto py-8 px-8 xl:px-0">
		<p class="copyright-text text-xs font-normal">
			<?php
			$y = date( 'Y' );
			printf(
				esc_html__( 'Copyright &copy; %d Parsberg', 'parsberg' ),
				esc_html( $y ),
			);
			?>
		</p>
	</div>
</footer><!-- .main-footer -->
