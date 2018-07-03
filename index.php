<?php get_header(); ?>

<header>
    <?php the_field('header_area'); ?>
</header>
<div class="home__menu">
    <div class="home__menu--item">
        <div class="menu__item--number">01</div>
        <div class="menu__item--content">
            <?php the_field('section_one'); ?>
        </div>
    </div>
    <div class="home__menu--item">
        <div class="menu__item--number">02</div>
        <div class="menu__item--content">
            <?php the_field('section_two'); ?>
        </div>
    </div>
    <div class="home__menu--item">
        <div class="menu__item--number">03</div>
        <div class="menu__item--content">
            <?php the_field('section_three'); ?>
        </div>
    </div>
</div>

<?php get_footer('home'); ?>