<?php
/*
* Template Name: Fees Page Template
*/
?>

<?php get_header('service'); ?>

<header class="fees">
    <div class="intro">
        <?php the_field('header_area'); ?>
    </div>
    <div class="scroll"><a href="#intro"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/scroll.svg" /></a></div>
</header>

<div class="row" id="intro">
    <div class="fees-section">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; else: ?>
        <?php endif; ?>
    </div>

    <div class="fees-documents">
        <h3>Relevent <strong>Documents</strong></h3>
        <?php if( have_rows('relevent_documents') ): ?>
            <?php while( have_rows('relevent_documents') ): the_row(); ?>
                <div class="document">
                    <h3><a href="<?php the_sub_field('document_link'); ?>"><?php the_sub_field('document_title'); ?></a></h3>
                    <?php the_sub_field('document_information'); ?>
                </div>
        <?php endwhile; endif; ?>
    </div>

</div>

<?php get_footer(); ?>