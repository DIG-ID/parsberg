<section class="section-not-found">
	<div class="container">
		<div class="row align-items-center section__title--wrapper">
			<div class="col-1">
				<span class="section__title--line"></span>
			</div>
			<div class="col-11">
				<h1 class="section__title"><?php esc_html_e( 'Error 404', 'parsberg' ); ?></h1>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col-12 col-lg-5 offset-lg-1">
				<h2 class="section__subtitle"><span><?php esc_html_e( '404', 'parsberg' ); ?></span><br><?php esc_html_e( 'Ooops, page not found!', 'parsberg' ); ?></h2>
				<p class="section__description"><?php esc_html_e( 'The page you are looking for does not exist. You can click the button below to go back to the homepage.', 'parsberg' ); ?></p>
				<a class="section__btn" href="<?php echo esc_url( get_site_url( 'https' ) ); ?>"><?php esc_html_e( 'Go to website', 'parsberg' ); ?> <svg xmlns="http://www.w3.org/2000/svg" width="32.439" height="11.914"><path d="M1 22.934h29.82l-4.305 4.306.967.967 5.957-5.957-5.957-5.957-.967.967 4.305 4.305H1Z" transform="translate(-1 -16.293)"/></svg></a>
			</div>
			<div class="col-12 col-lg-5 text-end">

			</div>
		</div>
	</div>
</section>
