<?php
/*
* Template Name: How Page Template
*/
?>

<?php get_header('service'); ?>

<header class="how">
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

<div class="row" id="process">
    <div class="how-process">
        <?php the_field('process_introduction'); ?>
    </div>

    <div class="how-process-map"> 
            <div class="empty"></div>
            <div class="one"><img src="<?php echo get_template_directory_uri(); ?>/img/process/1.png" /></div>
            <div class="two"><img src="<?php echo get_template_directory_uri(); ?>/img/process/2.png" /></div>
            <div class="three"><img src="<?php echo get_template_directory_uri(); ?>/img/process/3.png" /></div>
            <div class="side-four"></div>

            <div class="point-one">
                <div class="map-item">
                    <div class="item-number">1</div>
                    <div class="item-description">
                        <?php the_field('process_flow_one'); ?>
                    </div>
                </div>
            </div>
            <div class="point-two">
                <div class="map-item">
                    <div class="item-number">2</div>
                    <div class="item-description">
                        <?php the_field('process_flow_two'); ?>
                    </div>
                </div>
            </div>
            <div class="point-three">
                <div class="map-item">
                    <div class="item-number">3</div>
                    <div class="item-description">
                        <?php the_field('process_flow_three'); ?>
                    </div>
                </div>
            </div>
            <div class="side-three"><img src="<?php echo get_template_directory_uri(); ?>/img/process/3-side.png" /></div>
            <div class="side-three-bottom"></div>
            <div class="four"><img src="<?php echo get_template_directory_uri(); ?>/img/process/4.png" /></div>
            <div class="five"><img src="<?php echo get_template_directory_uri(); ?>/img/process/5.png" /></div>
            <div class="six"><img src="<?php echo get_template_directory_uri(); ?>/img/process/6.png" /></div>
            <div class="side-six-top"></div>

            <div class="point-four">
                <div class="map-item">
                    <div class="item-number">4</div>
                    <div class="item-description">
                        <?php the_field('process_flow_four'); ?>
                    </div>
                </div>
            </div>
            <div class="point-five">
                <div class="map-item">
                    <div class="item-number">5</div>
                    <div class="item-description">
                        <?php the_field('process_flow_five'); ?>
                    </div>
                </div>
            </div>
            <div class="point-six">
                <div class="map-item">
                    <div class="item-number">6</div>
                    <div class="item-description">
                        <?php the_field('process_flow_six'); ?>
                    </div>
                </div>
            </div>

            <div class="side-six"><img src="<?php echo get_template_directory_uri(); ?>/img/process/6-side.png" /></div>
            <div class="side-six-bottom"></div>
            <div class="seven"><img src="<?php echo get_template_directory_uri(); ?>/img/process/7.png" /></div>
            <div class="eight"><img src="<?php echo get_template_directory_uri(); ?>/img/process/8.png" /></div>
            <div class="nine"><img src="<?php echo get_template_directory_uri(); ?>/img/process/9.png" /></div>

            <div class="side side-nine"><img src="<?php echo get_template_directory_uri(); ?>/img/process/9-side.png" /></div>
            <div class="side-nine-bottom"></div>

            <div class="point-seven">
                <div class="map-item">
                    <div class="item-number">9</div>
                    <div class="item-description">
                        <?php the_field('process_flow_nine'); ?>
                    </div>
                </div>
            </div>
            <div class="point-eight">
                <div class="map-item">
                    <div class="item-number">8</div>
                    <div class="item-description">
                        <?php the_field('process_flow_eight'); ?>
                    </div>
                </div>
            </div>
            <div class="point-nine">
                <div class="map-item">
                    <div class="item-number">7</div>
                    <div class="item-description">
                        <?php the_field('process_flow_seven'); ?>
                    </div>
                </div>
            </div>

            <div class="ten"><img src="<?php echo get_template_directory_uri(); ?>/img/process/10.png" /></div>
            <div class="eleven"><img src="<?php echo get_template_directory_uri(); ?>/img/process/11.png" /></div>
            <div class="twelve"><img src="<?php echo get_template_directory_uri(); ?>/img/process/12.png" /></div>
            <div class="side side-seven"><img src="<?php echo get_template_directory_uri(); ?>/img/process/7-side.png" /></div>
            <div class="side-twelve"></div>
        </div>
    </div>
</div>

<div class="row no-border technology" id="technology">
    <div class="how-technology">
        <?php the_field('technology'); ?>
        <a class="button fountain-blue" href="<?php echo get_site_url(); ?>/our-technology"><span>Our <strong>Leading Technology</strong></span> <img src="<?php echo get_template_directory_uri(); ?>/img/svg/arrow-right-small.svg" /></a>
    </div>
</div>

<div class="row" id="charging">
    <div class="how-relationships-img"></div>
    <div class="how-relationships">
        <?php the_field('charging_structure'); ?>
        <a class="button orange" href="<?php echo get_site_url(); ?>/how-we-charge"><span>See <strong>How we charge</strong></span> <img src="<?php echo get_template_directory_uri(); ?>/img/svg/arrow-right-small.svg" /></a>
    </div>
</div>

<?php get_footer(); ?>