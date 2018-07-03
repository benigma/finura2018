<?php
/*
* Template Name: Awards Page Template
*/
?>

<?php get_header('service'); ?>

<header class="awards">
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

<div class="awards-section">
    <div class="awards-section-intro">
        <?php the_field('awards_introduction'); ?>
    </div>
    <div class="awards">
        <?php if( have_rows('awards') ): ?>
            <?php while( have_rows('awards') ): the_row(); ?>
                <div class="award">
                    <h3><?php the_sub_field('award_name'); ?></h3>
                    <p><?php the_sub_field('award_category'); ?></p>
                    <p><?php the_sub_field('award_position'); ?></p>
                </div>
        <?php endwhile; endif; ?>
    </div>

    <div class="awards-logos">
        <img src="<?php the_field('award_image'); ?>" alt="Finuras' Awards and Recognition" />
    </div>
</div>

<div class="row csr" id="csr">
    <div class="why-csr">
        <?php the_field('csr'); ?>
    </div>
</div>

<?php get_footer(); ?>