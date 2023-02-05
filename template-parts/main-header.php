<header id="main-header" class="main-header fixed w-full z-40 pt-10" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navbar fixed-top navbar-expand-lg" role="navigation" aria-label="<?php esc_attr_e( 'Main navigation', 'parsberg' ); ?>">
		<div class="container mx-auto">
			<div class="columns-3 flex justify-between items-center">
				<button class="" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<?php esc_html_e( 'Menu', 'parsberg' ); ?>
				</button>
				<div class="site-branding">
					<a class="site-logo" href="<?php echo esc_url( get_bloginfo( 'url' ) ); ?>"><?php get_template_part( 'template-parts/main-logo' ); ?></a>
				</div>
				<button><?php esc_html_e( 'Jetzt Buchen', 'parsberg' ); ?></button>
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
