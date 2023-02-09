<header id="main-header" class="main-header fixed w-full z-40 pt-10 pb-5" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navbar fixed-top navbar-expand-lg" role="navigation" aria-label="<?php esc_attr_e( 'Main navigation', 'parsberg' ); ?>">
		<div class="container mx-auto">
			<div class="columns-3 flex justify-between items-start">
				<button class="text-main-beige text-sm button" type="button">
					<?php esc_html_e( 'Menu', 'parsberg' ); ?>
				</button>
				<a class="site-logo absolute top-10 left-1/2 -translate-x-2/4" href="<?php echo esc_url( get_bloginfo( 'url' ) ); ?>"><?php get_template_part( 'template-parts/main-logo' ); ?></a>
				<button class="bg-main-green text-main-beige text-sm font-normal tracking-widest uppercase no-underline py-3.5 px-5 button" type="button">
					<?php esc_html_e( 'Jetzt Buchen', 'parsberg' ); ?>
				</button>
				<!--<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<?php
					/*wp_nav_menu(
						array(
							'theme_location' => 'main',
							'container'      => false,
							'menu_class'     => '',
							'items_wrap'     => '<ul id="%1$s" class="navbar-nav align-items-center %2$s">%3$s</ul>',
							'fallback_cb'    => '__return_false',
							'detph'          => 2,
							'walker'         => new parsberg_bs5_nav_walker(),
						),
					);*/
					?>
				</div><!-- .navbar-collapse -->
			</div>
		</div>
	</nav>
</header>
