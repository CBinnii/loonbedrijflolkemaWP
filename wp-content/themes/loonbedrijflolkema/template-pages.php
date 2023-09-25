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

				<div class="hexagon swiper-button-prev-slider-geral mobile">
					<div class="hexagon-inner">
						<div class="hexagon-inner-in primary">
							<svg xmlns="http://www.w3.org/2000/svg" width="21" height="22" viewBox="0 0 21 22" fill="none">
								<path d="M6.57227 9.86974L11.8848 4.28483C12.252 3.89882 12.8457 3.89882 13.209 4.28483L14.0918 5.21291C14.459 5.59893 14.459 6.22312 14.0918 6.60503L10.3262 10.5637L14.0918 14.5225C14.459 14.9085 14.459 15.5327 14.0918 15.9146L13.2129 16.8509C12.8457 17.2369 12.252 17.2369 11.8887 16.8509L6.57617 11.266C6.20508 10.8799 6.20508 10.2558 6.57227 9.86974Z" fill="white"/>
							</svg>
						</div>
					</div>
				</div>
				<div class="hexagon swiper-button-next-slider-geral mobile">
					<div class="hexagon-inner">
						<div class="hexagon-inner-in primary">
							<svg xmlns="http://www.w3.org/2000/svg" width="21" height="22" viewBox="0 0 21 22" fill="none">
								<path d="M14.4277 12.0231L9.11523 17.608C8.74805 17.994 8.1543 17.994 7.79102 17.608L6.9082 16.6799C6.54102 16.2939 6.54102 15.6697 6.9082 15.2878L10.6738 11.3291L6.9082 7.37037C6.54102 6.98435 6.54102 6.36016 6.9082 5.97825L7.78711 5.04195C8.1543 4.65594 8.74805 4.65594 9.11133 5.04195L14.4238 10.6269C14.7949 11.0129 14.7949 11.6371 14.4277 12.0231Z" fill="white"/>
							</svg>
						</div>
					</div>
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