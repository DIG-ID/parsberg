<section class="section-intro pt-52 lg:pt-80 pb-10 lg:pb-24 px-8 xl:px-0 overflow-hidden">
	<div class="xl:container mx-auto grid grid-cols-1 lg:grid-cols-12 xl:px-8 xl:gap-7">
		<div class="col-span-1 lg:col-span-3 flex flex-col lg:block">
			<h1 class="section-intro-title text-5xl text-main-green font-extrabold mb-8 lg:mb-12 order-2 lg:order-1 invisible"><?php the_field( 'zimmer_intro_title', 'zimmer_archive' ); ?></h1>
			<p class="section-intro-small-title flex items-center text-sm text-main-green font-semibold tracking-wider uppercase order-1 lg:order-2 mb-8 lg:mb-0 invisible"><span class="block w-20 h-px bg-main-green mr-5"></span><?php the_archive_title(); ?></p>
		</div>
		<div class="col-span-1 lg:col-span-4">
			<p class="section-intro-description text-sm text-main-green leading-8 tracking-wider invisible">
				<?php the_field( 'zimmer_intro_description_1', 'zimmer_archive' ); ?>
			</p>
		</div>
		<div class="col-span-1 lg:col-span-4"">
			<p class="section-intro-description text-sm text-main-green leading-8 tracking-wider invisible">
			<?php the_field( 'zimmer_intro_description_2', 'zimmer_archive' ); ?>
			</p>
		</div>
	</div>
</section>
