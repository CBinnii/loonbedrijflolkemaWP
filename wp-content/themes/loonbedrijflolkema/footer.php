        </section>
		
        <footer class="footer">
			<div class="sob-footer">
				<div class="container">
					<div class="logo">
						<a class="logo-footer" href="<?php echo get_home_url(); ?>">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-footer.png" alt="Logo">
						</a>

						<div class="social-media">
							<ul>
								<li><a href="<?php echo the_field('facebook', 'option'); ?>" target="blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/icon-facebook.svg" alt="Facebook"></a></li>
								<li><a href="<?php echo the_field('whatsapp', 'option'); ?>" target="blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/icon-whatsapp.svg" alt="Whatsapp"></a></li>
							</ul>
						</div>
					</div>

					<div class="contact-info">
						<ul>
							<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/icon-phone.svg" alt="Contact Phone"> <a href="<?php echo the_field('call_link', 'option'); ?>"><?php echo the_field('phone_number', 'option'); ?></a> </li>
							<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/icon-email.svg" alt="Contact Email"><a href="mailto:<?php echo the_field('email_address', 'option'); ?>"><?php echo the_field('email_address', 'option'); ?></a></li>
							<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/icon-address.svg" alt="Contact Address"><a href="<?php echo the_field('link_maps', 'option'); ?>" target="_blank"><?php echo the_field('address', 'option'); ?></a></li>
						</ul>
					</div>
					

					<?php 
						$contact = get_field('contact', 'option');
						$certificeringen = get_field('certificeringen', 'option');
					?>
					<div class="website-info">
						<div class="row">
							<div class="col-12 col-md-4">
								<h6 class="p-0">Onze diensten</h6>

								<?php
									wp_nav_menu(array(
										'theme_location' => '',
										'menu_id' 		 => 'menufooter', 
										'container' 	 => false,
										'menu_class' 	 => '',
										'items_wrap' 	 => '<ul id="%1$s" class="navbar-footer %2$s">%3$s</ul>',
										'depth' 		 => 2,
									));
								?>
							</div>
							<?php if( !empty($certificeringen) ): ?>
								<div class="col-12 col-md-4">
									<h6 class="p-0">Certificeringen</h6>

									<?php echo get_field('certificeringen', 'option') ?>
								</div>
							<?php endif; ?>
							<?php if( !empty($contact) ): ?>
								<div class="col-12 col-md-4">
									<h6 class="p-0">Contact</h6>

									<?php echo $contact ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="sub-footer">
				<div class="container">
					<div class="partner">
						<p>Wij zijn aangesloten bij:</p>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-cumela.png" alt="Cumela">
					</div>
	
					<p>Gerealiseerd door <a href="www.webwow.nl" target="_blank">WebWoW</a> © 2023 - Loonbedrijf Lolkema</p>
				</div>
			</div>
		</footer>

		<?php wp_footer(); ?>
		<!-- Bootstrap JS -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>
		<!-- Swiper JS -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
		<!-- App JS -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/app.js"></script>
	</body>
</html>