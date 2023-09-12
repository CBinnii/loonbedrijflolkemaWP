<?php 
/**
 * Template Name: Template Contact Page
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
                    <div class="col-12 left">
                        <div class="text-box text-center">
                            <?php echo apply_filters('the_content', $post->post_content); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 left">
                        <div class="form-box">
                            <?php echo do_shortcode( '[contact-form-7 id="e8cdba1" title="Contact form 1"]' ); ?>
                        </div>
                    </div>

                    <div class="col-md-6 right h-100">
                        <div class="image-box">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2399.2878095249125!2d5.963778577137244!3d53.033164572200086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c85984491acf55%3A0x4e66c55d206eb0f0!2sLoonbedrijf%20Lolkema%20Tijnje!5e0!3m2!1spt-BR!2sbr!4v1692498913894!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
            $text_contactform = get_field('text_contactform');
            $button_contact_form_text = get_field('button_contact_form_text');
            $button_contact_form_link = get_field('button_contact_form_link');
        ?>

        <?php if( !empty($text_contactform) || (!empty($button_contact_form_text) && !empty($button_contact_form_link)) ): ?>
            <div class="section-about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 left">
                            <div class="text-box">
                                <p><?php echo $text_contactform ?></p>

                                <div class="button">
                                    <a href="<?php echo $button_contact_form_link ?>" class="button-default">
                                        <?php echo $button_contact_form_text ?>
        
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
        <?php endif; ?>
    </div>
<?php
	get_footer();
?>