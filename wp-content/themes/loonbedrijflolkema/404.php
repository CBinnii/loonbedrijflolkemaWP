<?php 
	get_header();
?>
	<div class="slider">
		<div class="swiper slider-geral">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="slider-general" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id(), 'full');?>');">
						<div class="container">
							<div class="row row-slider">
								<div class="col-md-12 line-slider-text">
									<h1>404</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section">
		<div class="section-404">
			<div class="container">
				<h1>OEPS SORRY! =( <br/> DEZE PAGINA IS NIET GEVONDEN</h1>
			</div>
		</div>
	</div>
<?php
	get_footer();
?>