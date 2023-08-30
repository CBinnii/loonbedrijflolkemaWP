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
                                    <h1><?php echo get_the_title(); ?></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="section-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 left">
                        <div class="text-box">
                            <?php echo apply_filters('the_content', $post->post_content); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
	get_footer();
?>