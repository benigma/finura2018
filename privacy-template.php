<?php
/*
* Template Name: Privacy Page Template
*/
?>

<?php get_header('policy'); ?>

<header class="policy">
    <div class="intro">
        <?php the_field('header_area'); ?>
    </div>
    <div class="scroll"><a href="#intro"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/scroll.svg" /></a></div>
</header>

<div class="policy__information" id="intro">
    <div class="policy__information--content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; else: ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>