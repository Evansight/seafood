<?php $_slider = get_sub_field('home_slider'); ?>
<!--HOME PAGE SLIDER-->
<section class="main-slider">
    <?php $arg = array(
        'post_type' => 'Slider', /*<-- Enter name of Custom Post Type here*/
        'order' => 'ASC',
        'orderby' => 'menu_order',
        'posts_per_page' => -1,
//        'post__in' => get_sub_field('home_slider')
    );
    $the_query = new WP_Query($arg);
    if ($the_query->have_posts()) : ?>

        <?php while ($the_query->have_posts()) :
            $the_query->the_post();
            ?><!-- BEGIN of Post -->
    <div id="home-slider" class="slick-slider home-slide">
            <div class="home-slide__inner">
                <?php echo get_the_post_thumbnail(); ?>
                <div class="grid-container home-slide__caption">
                    <div class="grid-x">
                        <div class="cell">
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                            <div class="intro__smedia">
                                <div class="smedia__position">
                                    <?php get_template_part('parts/socials'); // Social profiles
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?><!-- END of Post -->
        <!-- END of .post-type -->
    <?php endif;
    wp_reset_query(); ?>
</section>
<!--END of HOME PAGE SLIDER-->