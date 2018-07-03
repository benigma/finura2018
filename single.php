<?php get_header('news'); ?>

<header class="post">
    <div class="intro">
        <h1><?php the_title(); ?></h1>
    </div>
    <div class="scroll"><a href="#intro"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/scroll.svg" /></a></div>
</header>

<div class="news__story" id="intro">

    <div class="news__story--content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; else: ?>
        <?php endif; ?>
    </div>

<div class="news__story--extras">
    <h3>Other <strong>News</strong></h3>
    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts('cat=4&posts_per_page=3&paged=' . $paged); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="news__story--item">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php the_excerpt(); ?>
            </div>
        <?php endwhile; endif; ?>
</div>

</div>

<?php get_footer(); ?>