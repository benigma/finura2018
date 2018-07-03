<?php
/*
* Template Name: Service Template
*/
?>

<?php get_header('service'); ?>

<header <?php body_class(); ?>>
    <div class="intro">
        <?php the_field('header_area'); ?>
    </div>
    <div class="scroll"><a href="#intro"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/scroll.svg" /></a></div>
</header>

<div class="row" id="intro">

    <div class="service-sidebar">
        <h3>What <strong>Sets us apart</strong></h3>
        <p>Our clients are those of Finura and not the individual adviser. We provide clients with direct access to our specialist advisers and our client support team, so that you can get the information you need, when you need it, by the most qualified person.</p>
        
        <a class="button orange" href="#contact"><span>Get in <strong>touch</strong></span> <img src="<?php echo get_template_directory_uri(); ?>/img/svg/arrow-right-small.svg" /></a>

        <a class="button jellybean" href="http://www.finurapartners.com/download/brochure/?wpdmdl=2510&masterkey=5b37c77e20fe9" download><span>Download our <strong>Brochure</strong></span> <img src="<?php echo get_template_directory_uri(); ?>/img/svg/arrow-right-small.svg" /></a>
    </div>

    <div class="service-content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; else: ?>
        <?php endif; ?>
    </div>

</div>

<div class="row" id="services">
    <div class="what-services-new">
        <div class="services__list--test">
        <?php if( have_rows('services', 2404) ): ?>
            <?php while( have_rows('services', 2404) ): the_row(); ?>
                <div class="services__list--test--item">
                    <?php the_sub_field('service_information'); ?>
                    <p><a href="<?php the_sub_field('service_link'); ?>">Read More</a></p>
                </div>
        <?php endwhile; endif; ?>
        </div>
    </div>
</div>

<div class="row how-work no-border">
    <div class="how__work--section">
        <?php the_field('how_we_work', 2407); ?>
        <a class="button gold" href="<?php echo get_site_url(); ?>/how"><span>See <strong>How We Work</strong></span> <img src="<?php echo get_template_directory_uri(); ?>/img/svg/arrow-right-small.svg" /></a>
    </div>
</div>

<div class="row" id="contact">
    <div class="contact-intro">
        <?php the_field('contact_information', 2417); ?>
    </div>

    <div class="contact__form">
        <?php echo do_shortcode('[contact-form-7 id="1249" title="Contact Us"]'); ?>
    </div>
</div>

<?php get_footer(); ?>