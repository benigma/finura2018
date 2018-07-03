<?php
/*
* Template Name: Why Page Template
*/
?>

<?php get_header('service'); ?>

<header class="why">
    <div class="intro">
        <?php the_field('header_area'); ?>
    </div>
    <div class="page__introduction">
        <?php if( have_rows('navigation_sections') ): ?>
            <?php while( have_rows('navigation_sections') ): the_row(); ?>
                <div class="page__introduction--item">
                    <a href="#<?php the_sub_field('section_anchor_link'); ?>">
                        <div class="introduction__item--number">
                            <?php the_field('section_number'); ?><span>.<?php the_sub_field('section_sub-number'); ?></span>
                        </div>
                        <div class="introduction__item--content">
                            <?php the_sub_field('section_information'); ?>
                        </div>
                    </a>
                </div>
        <?php endwhile; endif; ?>
    </div>
</header>

<div class="row lightblue" id="mission">
    <div class="why-intro">
        <?php the_field('mission_values'); ?>
    </div>
</div>

<div class="row" id="values">
    <div class="why-relationships-img"></div>
    <div class="why-relationships">
        <?php the_field('building_relationships'); ?>
        <a class="button purple" href="<?php echo get_site_url(); ?>/what"><span>Explore <strong>What we do</strong></span> <img src="<?php echo get_template_directory_uri(); ?>/img/svg/arrow-right-small.svg" /></a>
    </div>
</div>

<div class="row" id="thinking">
    <div class="why-thinking">
        <?php the_field('creative_thinking'); ?>
        <a class="button fountain-blue" href="<?php echo get_site_url(); ?>/how"><span>Discover <strong>How we work</strong></span> <img src="<?php echo get_template_directory_uri(); ?>/img/svg/arrow-right-small.svg" /></a>
    </div>
    <div class="why-thinking-img"></div>
</div>

<div class="awards-section">
    <div class="awards-section-intro">
        <?php the_field('awards_introduction', 2436); ?>
    </div>
    <div class="awards">
        <?php if( have_rows('awards', 2436) ): ?>
            <?php while( have_rows('awards', 2436) ): the_row(); ?>
                <div class="award">
                    <h3><?php the_sub_field('award_name'); ?></h3>
                    <p><?php the_sub_field('award_category'); ?></p>
                    <p><?php the_sub_field('award_position'); ?></p>
                </div>
        <?php endwhile; endif; ?>
    </div>

    <div class="awards-logos">
        <img src="<?php the_field('award_image', 2436); ?>" alt="Finuras' Awards and Recognition" />
    </div>
</div>

<?php get_footer(); ?>