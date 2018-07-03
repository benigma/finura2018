<?php
/*
* Template Name: Who Page Template
*/
?>

<?php get_header('service'); ?>

<header class="who">
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

<div class="row border-top-lb" id="advisers">
    <div class="leadership-team">
        <?php if( have_rows('finura_directors') ): ?>
            <?php while( have_rows('finura_directors') ): the_row(); ?>
                <div class="team-profile">
                    <div class="profile">
                        <h3><?php the_sub_field('name'); ?></h3>
                        <h4><?php the_sub_field('position'); ?></h4>
                        <div class="profile__contact">
                            <div class="profile__contact--details">
                                <?php the_sub_field('contact_information'); ?>
                            </div>
                        </div>
                    </div>
                </div>
        <?php endwhile; endif; ?>
    </div>
</div>

<div class="row who">
    <div class="advisers">
        <?php if( have_rows('finura_advisers') ): ?>
            <?php while( have_rows('finura_advisers') ): the_row(); ?>
                <div class="adviser">
                    <h3><?php the_sub_field('name'); ?></h3>
                    <h4><?php the_sub_field('position'); ?></h4>
                        <div class="adviser__contact">
                            <div class="adviser__contact--details">
                                <?php the_sub_field('contact_information'); ?>
                        </div>
                    </div>
                </div>
        <?php endwhile; endif; ?>
    </div>
    
    <div class="advisers-intro">
        <?php the_field('team_introduction'); ?>
        <a class="button jellybean" href="#contact"><span>Get <strong>in touch</strong></span> <img src="<?php echo get_template_directory_uri(); ?>/img/svg/arrow-right-small.svg" /></a>
    </div>
</div>

<div class="row support" id="support">
    <h3>Your <strong>Support Team</strong></h3>
    <?php if( have_rows('finura_support') ): ?>
        <?php while( have_rows('finura_support') ): the_row(); ?>
            <div class="support-team">
                <h3><?php the_sub_field('name'); ?></h3>
                <h4><?php the_sub_field('position'); ?></h4>
                    <div class="support__contact">
                        <div class="support__contact--details">
                            <?php the_sub_field('contact_information'); ?>
                    </div>
                </div>
            </div>
    <?php endwhile; endif; ?>
</div>

<div class="row" id="contact">
    <div class="contact-intro">
        <?php the_field('contact_information'); ?>
    </div>

    <div class="contact__form">
        <?php echo do_shortcode('[contact-form-7 id="1249" title="Contact Us"]'); ?>
    </div>
</div>

<?php get_footer(); ?>