<header id="main-header" class="group main-header fixed w-full z-40 pt-10 pb-5 px-4 lg:px-0" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navbar fixed-top navbar-expand-lg" role="navigation" aria-label="<?php esc_attr_e( 'Main navigation', 'parsberg' ); ?>">
		<div class="container mx-auto">
			<div class="columns-3 flex justify-between items-start group-[.main-header--scrolled]:items-center transition-all duration-500 ease-in-out">
				<button class="menu-button text-main-beige text-sm uppercase tracking-widest flex items-center hover:text-main-green focus:outline-none transition-all duration-500 ease-in-out" type="button">
					<span class="toggle w-7 h-7 mr-5 flex flex-col justify-around items-center box-border">
						<span class="bg-main-beige w-9/12 h-0.5 block transition-all duration-500 ease-in-out"></span>
						<span class="bg-main-beige w-full h-0.5 block transition-all duration-500 ease-in-out"></span>
						<span class="bg-main-beige w-9/12 h-0.5 block transition-all duration-500 ease-in-out"></span>
					</span>
					<?php esc_html_e( 'Menu', 'parsberg' ); ?>
				</button>
				<a class="site-logo absolute lg:relative left-1/2 lg:left-auto -translate-x-2/4 lg:transform-none mt-16 lg:mt-0" href="<?php echo esc_url( get_bloginfo( 'url' ) ); ?>">
					<div class="main-logo-wrapper group-[.main-header--scrolled]:hidden">
						<?php get_template_part( 'template-parts/main-logo' ); ?>
					</div>
					<svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 150 235.9" id="main-symbol" class="section-hero-symbol fill-main-green w-[55px] mx-auto hidden group-[.main-header--scrolled]:block h-auto" width="150" height="235.9" x="0" y="0" version="1.1">
						<path id="draw-me" d="m75 110.3-9.9-10.1-11.7 12.2v48h43.1v-48l-11.7-12.2-9.8 10.1zm-2 46.1H57.4v-42.5l7.8-8.1 7.9 8.1v42.5zm19.6 0H77v-42.5l7.9-8.1 7.8 8.1v42.5z""/><path id="draw-me" d="M75 0C33.6 0 0 33.6 0 75v85.9c0 41.4 33.6 75 75 75s75-33.6 75-75V75c0-41.4-33.6-75-75-75zm0 4c38.8 0 70.4 31.3 71 70L76 29.9h-2.1L4 73.9C4.6 35.3 36.2 4 75 4zM9.6 75.1 75 33.8l65.4 41.3H9.6zm101.2 4v21.2L89.6 79.1h21.2zm-50.4 0-21.2 21.2V79.1h21.2zM4 160.9V79.1h31.3v95.6h-30c-.9-4.5-1.3-9.1-1.3-13.8zm69 71c-32.2-.9-59.1-23.3-66.8-53.3h42.5L73 202.9v29zm0-34.6-18.7-18.7H73v18.7zm-33.8-22.7v-68.7L66 79.1h18l26.8 26.8v68.7H39.2zm56.5 4L77 197.3v-18.7h18.7zM77 231.9v-29l24.3-24.3h42.5c-7.7 30-34.6 52.4-66.8 53.3zm69-71c0 4.7-.5 9.3-1.3 13.7h-29.9V79.1H146v81.8z"/>
					</svg>
				</a>
				<button class="invisible lg:visible bg-main-green text-main-beige text-sm font-normal tracking-widest uppercase no-underline py-3.5 px-5 button" type="button">
					<?php esc_html_e( 'Jetzt Buchen', 'parsberg' ); ?>
				</button>
				<div class="offcanvas offcanvas-top fixed bottom-0 flex flex-col max-w-full bg-white invisible bg-clip-padding shadow-sm outline-none transition duration-300 ease-in-out text-gray-700 top-0 left-0 right-0 border-none h-1/3 max-h-full" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">

					<button type="button" data-drawer-hide="drawer-example" aria-controls="drawer-example" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
						<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
						<span class="sr-only">Close menu</span>
					</button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'main',
							'container'      => false,
							'menu_class'     => '',
							'items_wrap'     => '<ul id="%1$s" class="navbar-nav align-items-center %2$s">%3$s</ul>',
							'fallback_cb'    => '__return_false',
							'detph'          => 2,
							'walker'         => new parsberg_bs5_nav_walker(),
						),
					);
					?>
				</div>
			</div>
		</div>
	</nav>
</header>
