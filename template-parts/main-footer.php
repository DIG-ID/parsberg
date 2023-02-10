<footer class="main-footer bg-main-green text-main-beige">
	<div class="container mx-auto pt-16 pb-8 px-8 grid grid-cols-2 lg:grid-cols-12 lg:px-0">
		<div class="footer-logo max-w-[175px] mx-auto mb-8 col-span-2 lg:max-w-[120px] lg:mx-0">
			<?php get_template_part( 'template-parts/main-logo' ); ?>
		</div>
		<div class="contacts-wrapper mb-8 flex col-span-2 lg:flex-col lg:col-start-4 lg:col-span-2"">
			<div class="address basis-1/2 lg:basis-0 mb-8">
				<h4 class="text-xs font-normal tracking-widest uppercase mb-4">Adresse</h4>
				<p>Hotel Parsberg
					Augsburger Strasse 1
					D-82178 Puchheim</p>
			</div>
			<div class="contacts basis-1/2 lg:basis-0">
				<h4 class="text-xs font-normal tracking-widest uppercase mb-4">Kontakt</h4>
				<a class="block" href="tel:">132 465 789</a>
				<a class="block" href="mailto:">dig@dig.id</a>
			</div>
		</div>
		<div class="menu-siten mb-8 cols-span-1 lg:col-start-8 lg:col-span-1">
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
		<div class="menu-info mb-8 col-span-1 lg:col-start-11 lg:col-span-2">
			<h4 class="text-xs font-normal tracking-widest uppercase mb-4">RECHTLICHE HINWEISE</h4>
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
	</div>
	<hr>
	<div class="copyright container mx-auto py-8 px-8 lg:px-0">
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
