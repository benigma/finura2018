<?php get_header('news'); ?>

<header class="news">
    <div class="intro">
        <h1>Your<br /><strong>News Results</strong></h1>
    </div>
    <?php get_search_form(); ?>
</header>

<div class="news__stories--grid" id="intro">

    <div class="main__stories--grid">
        <div class="main__story--top">
            <p>We have found <? echo $total_results = $wp_query->found_posts; ?> item(s) for your search <strong>"<? echo $_GET['s']; ?>"</strong>.</p>
        </div>
        <?php if ( have_posts() ) : $postCount = 0 ?>
            <?php while ( have_posts() ) : the_post(); $postCount++; ?>
                <div class="main__story--<?php if ($postCount % 2 == 0) { echo "right"; } else { echo "left"; } ?>">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php the_excerpt(); ?>
                </div>
            <?php endwhile; ?>
                            
        <?php else : ?>
            <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyeleven' ); ?></p>
        <?php endif; ?>
    </div>

    <div class="side__strories--grid">
        <h3><strong>Latest</strong> News</h3>
        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts('cat=4&posts_per_page=3&paged=' . $paged); ?>
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