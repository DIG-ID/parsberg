<section class="section section-about-intro">
	<div class="container-fluid g-0">
		<div class="about__image-container">
			<?php
			$header_image = get_field( 'header_image' );
			if ( $header_image ) :
				echo wp_get_attachment_image( $header_image, 'full', '', [ 'class' => 'about__header-image','alt' => 'About Header Image' ] );
			endif;
			?>
		</div>
		<div class="container about__container">
			<div class="row align-items-center section__title--wrapper">
				<div class="col-1">
					<span class="section__title--line"></span>
				</div>
				<div class="col-11">
					<h1 class="section__title"><?php the_title(); ?></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-lg-10 offset-lg-1">
					<h2 class="section__subtitle"><?php the_field( 'intro_title' ) ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-lg-5 offset-lg-1">
					<p class="section__description"><?php the_field( 'intro_description' ) ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
