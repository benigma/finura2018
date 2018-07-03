<?php
/*
* Template Name: Technology Page Template
*/
?>

<?php get_header('service'); ?>

<header class="technology">
    <div class="intro">
        <?php the_field('header_area'); ?>
    </div>
    <div class="scroll"><a href="#intro"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/scroll.svg" /></a></div>
</header>

<div class="row" id="intro">
    <div class="mywealth">
        <?php the_field('my_wealth'); ?>
    </div>
</div>

<div class="row">
    <div class="tech-lifestyle-img"></div>
    <div class="tech-lifestyle">
        <?php the_field('lifestyle_modelling'); ?>
    </div>
</div>

<div class="row">
    <div class="tech-behaviour">
        <?php the_field('behavioural_finance'); ?>
    </div>
</div>

<?php get_footer(); ?>