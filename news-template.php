<?php
/*
* Template Name: News Page Template
*/
?>

<?php get_header('news'); ?>

<header class="news">
    <div class="intro">
        <?php the_field( 'header_area' ); ?>
    </div>
    <? get_search_form(); ?>
</header>

<div class="news__stories--grid" id="intro">

    <div class="main__stories--grid">
        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts('cat=4&posts_per_page=7&paged=' . $paged); ?>
            <?php if ( have_posts() ) : $postCount = 0; while ( have_posts() ) : the_post(); $postCount++; ?>
            <?php if($postCount == 1) { ?>
                <div class="main__story--top">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php the_excerpt(); ?>
                </div>
            <?php } else {} ?>
            <?php if($postCount >= 2) { ?>

            <div class="main__story--<?php if ($postCount % 2 == 0) { echo "left"; } else { echo "right"; } ?>">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php the_excerpt(); ?>
            </div>
            <?php } else {} ?>      
            <?php endwhile; endif; ?>
    </div>

    <div class="side__strories--grid">

        <h3><strong>Market</strong> Commentary</h3>
        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts('cat=5&posts_per_page=4&paged=' . $paged); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="side__story--item">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php the_excerpt(); ?>
                </div>
            <?php endwhile; endif; ?>

        <h3>Quarterly <strong>Reports</strong></h3>
        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts('cat=6&posts_per_page=4&paged=' . $paged); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="side__story--item">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php the_excerpt(); ?>
                </div>
            <?php endwhile; endif; ?>
    </div>

    <div class="total__stories--pagination">
        <?php if (function_exists("pagination")) {
                pagination($additional_loop->max_num_pages);
            } ?>

        <?php wp_reset_query(); ?>
    </div>

</div>

<?php get_footer(); ?>