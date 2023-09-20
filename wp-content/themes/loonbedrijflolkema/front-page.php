<?php 
	get_header();
?>
	<?php if( have_rows('image_slider_home') ): ?>
		<div class="slider">
			<div class="swiper slider-home">
				<div class="swiper-wrapper">
					<?php
						while( have_rows('image_slider_home') ) : the_row();

						$image = get_sub_field('image');
						$option = get_sub_field('option');

						$teste = preg_match("/[^\/]+$/", $image, $matches);
						$last_word = $matches[0];
					?>
						<div class="swiper-slide">
							<?php if( $option === "Image" ) { ?>
								<div class="slider-general" style="background-image: url('<?php echo $image ?>');"></div>
							<?php } else { ?>
								<div class="slider-general video">
									<video id="background-video" autoplay loop muted>
										<source src="<?php echo $image ?>" type="video/mp4">
									</video>
								</div>
							<?php } ?>
						</div>
					<?php endwhile; ?>
				</div>
			</div>

			<div class="swiper-pagination swiper-pagination-slider-home"></div>
		</div>
	<?php endif; ?>

	<div class="section">
		<div class="section-about">
			<div class="container">
				<div class="row">
					<div class="col-md-6 left">
						<div class="text-box">
							<p><?php echo esc_html( get_field('text_above_the_button') ); ?></p>

							<div class="button mob-mb-30">
								<a href="<?php echo esc_html( get_field('button_link_about') ); ?>" class="button-default">
									<?php echo esc_html( get_field('button_text_about') ); ?>

									<div class="hexagon">
										<div class="hexagon-inner">
											<div class="hexagon-inner-in">
												<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
													<path d="M12.2831 9.41547L7.89448 13.8114C7.59115 14.1153 7.10065 14.1153 6.80054 13.8114L6.07125 13.0809C5.76792 12.7771 5.76792 12.2858 6.07125 11.9852L9.18204 8.8692L6.07125 5.75324C5.76792 5.4494 5.76792 4.95808 6.07125 4.65748L6.79732 3.92051C7.10065 3.61667 7.59115 3.61667 7.89126 3.92051L12.2799 8.31647C12.5865 8.62031 12.5865 9.11163 12.2831 9.41547Z" fill="black"/>
												</svg>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="col-md-6 right">
						<p><?php echo esc_html( get_field('text_on_the_right') ); ?></p>
					</div>
				</div>
			</div>
		</div>

		<?php if( have_rows('services', 'option') ): ?>
			<div class="section-services">
				<div class="container">
					<div class="section-services-top">
						<h1 class="title white"><?php echo esc_html( get_field('title_layer', 'option') ); ?></h1>

						<div class="swiper-navigation-slider">
							<div class="hexagon swiper-button-prev">
								<div class="hexagon-inner">
									<div class="hexagon-inner-in primary">
										<svg xmlns="http://www.w3.org/2000/svg" width="21" height="22" viewBox="0 0 21 22" fill="none">
											<path d="M6.57227 9.86974L11.8848 4.28483C12.252 3.89882 12.8457 3.89882 13.209 4.28483L14.0918 5.21291C14.459 5.59893 14.459 6.22312 14.0918 6.60503L10.3262 10.5637L14.0918 14.5225C14.459 14.9085 14.459 15.5327 14.0918 15.9146L13.2129 16.8509C12.8457 17.2369 12.252 17.2369 11.8887 16.8509L6.57617 11.266C6.20508 10.8799 6.20508 10.2558 6.57227 9.86974Z" fill="white"/>
										</svg>
									</div>
								</div>
							</div>
							<div class="hexagon swiper-button-next">
								<div class="hexagon-inner">
									<div class="hexagon-inner-in primary">
										<svg xmlns="http://www.w3.org/2000/svg" width="21" height="22" viewBox="0 0 21 22" fill="none">
											<path d="M14.4277 12.0231L9.11523 17.608C8.74805 17.994 8.1543 17.994 7.79102 17.608L6.9082 16.6799C6.54102 16.2939 6.54102 15.6697 6.9082 15.2878L10.6738 11.3291L6.9082 7.37037C6.54102 6.98435 6.54102 6.36016 6.9082 5.97825L7.78711 5.04195C8.1543 4.65594 8.74805 4.65594 9.11133 5.04195L14.4238 10.6269C14.7949 11.0129 14.7949 11.6371 14.4277 12.0231Z" fill="white"/>
										</svg>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="box-hexagon">
						<div class="slider swiper-services">
							<div class="swiper-wrapper">
								<?php
									while( have_rows('services', 'option') ) : the_row();

									$image = get_sub_field('image');
									$title = get_sub_field('title');
									$link = get_sub_field('link');
								?>
									<div class="swiper-slide">
										<div class="poligono-slider" style="background-image: url('<?php echo $image ?>');">
											<a href="<?php echo $link ?>" class="box-hexagon-text" target="_blank">
												<p><?php echo $title ?></p>

												<div class="hexagon">
													<div class="hexagon-inner">
														<div class="hexagon-inner-in">
															<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
																<path d="M12.2831 9.41547L7.89448 13.8114C7.59115 14.1153 7.10065 14.1153 6.80054 13.8114L6.07125 13.0809C5.76792 12.7771 5.76792 12.2858 6.07125 11.9852L9.18204 8.8692L6.07125 5.75324C5.76792 5.4494 5.76792 4.95808 6.07125 4.65748L6.79732 3.92051C7.10065 3.61667 7.59115 3.61667 7.89126 3.92051L12.2799 8.31647C12.5865 8.62031 12.5865 9.11163 12.2831 9.41547Z" fill="black"/>
															</svg>
														</div>
													</div>
												</div>
											</a>
										</div>
									</div>
								<?php endwhile; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>

		<div class="section-about">
			<div class="container">
				<div class="row">
					<div class="col-md-12 left">
						<div class="text-box">
							<p><?php echo esc_html( get_field('text') ); ?></p>

							<div class="button">
								<a href="<?php echo esc_html( get_field('link_button_contact') ); ?>" class="button-default" target="_blank">
									<?php echo esc_html( get_field('button_text_contact') ); ?>

									<div class="hexagon">
										<div class="hexagon-inner">
											<div class="hexagon-inner-in">
												<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
													<path d="M12.2831 9.41547L7.89448 13.8114C7.59115 14.1153 7.10065 14.1153 6.80054 13.8114L6.07125 13.0809C5.76792 12.7771 5.76792 12.2858 6.07125 11.9852L9.18204 8.8692L6.07125 5.75324C5.76792 5.4494 5.76792 4.95808 6.07125 4.65748L6.79732 3.92051C7.10065 3.61667 7.59115 3.61667 7.89126 3.92051L12.2799 8.31647C12.5865 8.62031 12.5865 9.11163 12.2831 9.41547Z" fill="black"/>
												</svg>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
	get_footer();
?>