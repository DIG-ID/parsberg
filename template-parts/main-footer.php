<footer class="main-footer">
	<div class="main-footer__content">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-12">
					<h4 class="footer-title">Connect with us</h4>
					<?php do_action( 'socials' ); ?>
					<div class="footer-left-bottom">
						<p class="copyright">
							<?php
							$y = date( 'Y' );
							printf(
								esc_html__( 'Copyright &copy; %d Parsberg', 'parsberg' ),
								esc_html( $y ),
							);
							?>
						</p>
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
				</div><!--  .footer-left -->

			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .footer-content -->
</footer><!-- .main-footer -->
