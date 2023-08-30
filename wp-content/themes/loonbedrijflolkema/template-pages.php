<?php 
/**
 * Template Name: Pages
 *
 **/
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
        <div class="section-about-service">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 left">
                        <div class="text-box">
                            <?php echo apply_filters('the_content', $post->post_content); ?>
                        </div>

                        <div class="button mt-4">
                            <?php 
                                $button_link = get_field('button_link');
                                $button_text = get_field('button_text');

                                if ($button_link != '' && $button_text != '') :
                            ?>
                                <a href="<?php echo esc_html( get_field('button_link') ); ?>" class="button-default button-no-hexagon"><?php echo esc_html( get_field('button_text') ); ?></a>
                            <?php 
                                endif;
                                $link_phone_button = get_field('link_phone_button');
                                $text_phone_button = get_field('text_phone_button');

                                if  ($link_phone_button != '' && $text_phone_button != '') :
                            ?>
                                <a href="<?php echo esc_html( get_field('link_phone_button') ); ?>" class="button-default button-no-hexagon"><?php echo esc_html( get_field('text_phone_button') ); ?></a>
                            <?php 
                                endif;
                                $link_whatsapp_button = get_field('link_whatsapp_button');
                                $text_whatsapp_button = get_field('text_whatsapp_button');

                                if  ($link_whatsapp_button != '' && $text_whatsapp_button != '') :
                            ?>
                                <a href="<?php echo esc_html( get_field('link_whatsapp_button') ); ?>" class="button-default button-no-hexagon"><?php echo esc_html( get_field('text_whatsapp_button') ); ?></a>
                            <?php endif; ?>
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
        ?>
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
        <?php 
            endwhile;
        endif;
        ?>
    </div>
<?php
	get_footer();
?>