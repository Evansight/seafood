<?php $blog_rep = get_sub_field('home_slider'); ?>
<section class="blog__posts">
    <div class="grid-container">
        <div class="blog__page-wrapper">
            <?php
            if (have_rows('blog_field')):
                while (have_rows('blog_field')) :
                    the_row();
                    $sub_v = get_sub_field('blog_item');
                    ?>
                    <?php $args_posts = array(
                    'post_type' => 'menu_taxonomy',
                    'post_status' => 'publish',
                    'post_per_page' => -1,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'dish_menu',
                            'field' => 'id',
                            'terms' => [$sub_v->term_id],
                        )
                    )
                ); ?>
                    <?php
                    $the_query = new WP_Query($args_posts); ?>

                    <?php if ($the_query->have_posts()) : ?>

                    <div class="posts__wrapper grid-x">
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="post__item small-12 medium-6 large-4">
                            <div class="cell">
                                <?php echo the_post_thumbnail();?>
                                <div class="post__item-inner">
                                    <div class="bfooter__wrapper">
                                        <?php $date = get_the_date(); ?>
                                        <span><?php echo $date ?></span>
                                    </div>
                                    <h2><?php the_title(); ?></h2>
                                    <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink(); ?>">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
                    </div>
                <?php endwhile;
            else :
            endif; ?>
        </div>
    </div>
</section>