<?php 
/**
 * Template Name: Pages
 *
 **/
	get_header();
?>

    <?php if( have_rows('slider_pages') ): ?>
		<div class="slider">
			<div class="swiper slider-geral">
				<div class="swiper-wrapper">
					<?php
						while( have_rows('slider_pages') ) : the_row();

						$image = get_sub_field('image');
						$option = get_sub_field('type');
                        $text = get_sub_field('text_on_slider');
					?>
						<div class="swiper-slide">
							<?php if( $option === "Image" ) { ?>
								<div class="slider-general" style="background-image: url('<?php echo $image ?>');">
                                    <div class="container">
                                        <div class="row row-slider">
                                            <div class="col-md-12 line-slider-text">
                                                <h1><?php echo $text ?></h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							<?php } else { ?>
								<div class="slider-general video">
									<video id="background-video" autoplay loop muted>
										<source src="<?php echo $image ?>" type="video/mp4">
									</video>
                                    <div class="container">
                                        <div class="row row-slider">
                                            <div class="col-md-12 line-slider-text">
                                                <h1><?php echo $text ?></h1>
                                            </div>
                                        </div>
                                    </div>
								</div>
							<?php } ?>
						</div>
					<?php endwhile; ?>
				</div>
			</div>

			<div class="swiper-pagination swiper-pagination-slider-geral"></div>
		</div>
	<?php endif; ?>

    <div class="section">
        <div class="section-about-service">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 left">
                        <div class="text-box">
                            <?php echo apply_filters('the_content', $post->post_content); ?>
                        </div>
                    </div>

                    <div class="col-md-6 right h-100">
                        <?php if( have_rows('layers_page') ): ?>
                            <div class="text-box">
                                <ul>
                                    <?php while( have_rows('layers_page') ) : the_row(); $titulo = get_sub_field('title'); ?>
                                        <li><span>></span> <?php echo $titulo ?></li>
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

	    <?php if( have_rows('layers_page') ):
            while( have_rows('layers_page') ) : the_row();
            
            $titulo = get_sub_field('title');
            $texto = get_sub_field('text');
            $imagem = get_sub_field('image');

            $index = get_row_index();
        ?>
            <?php if ($index % 2 == 0) {?>
                
				<div class="section-content">
					<div class="container">
						<div class="row">
							<div class="col-md-6 left">
								<div class="text-box">
									<h1 class="title primary"><?php echo $titulo ?></h1>
									<p><?php echo $texto ?></p>
								</div>
							</div>
							
							<div class="col-md-6 right h-100">
								<div class="image-box">
									<div class="hexagon-shape" style="background-image: url('<?php echo $imagem ?>');"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
            <?php } else { ?>
                <div class="section-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 right h-100">
                                <div class="image-box">
                                    <div class="hexagon-shape" style="background-image: url('<?php echo $imagem ?>');"></div>
                                </div>
                            </div>

                            <div class="col-md-6 left">
                                <div class="text-box">
                                    <h1 class="title primary"><?php echo $titulo ?></h1>
                                    <p><?php echo $texto ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php 
            endwhile;
        endif;
        ?>
    </div>
<?php
	get_footer();
?>