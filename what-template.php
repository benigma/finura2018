<?php
/*
* Template Name: What Page Template
*/
?>

<?php get_header('service'); ?>

<header class="what">
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

<div class="row no-border lightgold" id="apart">
    <div class="what-intro">
        <?php the_field('sets_apart'); ?>
    </div>
</div>

<div class="row border-top-lb" id="services">
    <div class="what-services-new">
        <div class="services__list--test">
        <?php if( have_rows('services') ): ?>
            <?php while( have_rows('services') ): the_row(); ?>
                <div class="services__list--test--item">
                    <?php the_sub_field('service_information'); ?>
                    <p><a href="<?php the_sub_field('service_link'); ?>">Read More</a></p>
                </div>
        <?php endwhile; endif; ?>
        </div>
    </div>
</div>

<div class="row lifestyle" id="lifestyle">
    <div class="lifestyle-content">
        <?php the_field('lifestyle_modelling'); ?>
    </div>
</div>

<div class="row behavioural" id="behavioural">
    <div class="behavioural-content">
        <?php the_field('behavioural_finance'); ?>
    </div>
</div>

<?php get_footer(); ?>