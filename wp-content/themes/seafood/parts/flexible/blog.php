<?php $blogs = get_sub_field('our_blog'); ?>
<?php $b_title = get_sub_field('blog_title'); ?>
<?php $b_see = get_sub_field('see_all'); ?>
<?php $args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'post_per_page' => -1,
    'category_name' => 'blog'
);
$the_query = new WP_Query($args); ?>

<section class="out_blog">
    <div class="grid-container">
            <div class="our__blog-header">
                <h3 class="our__blog-title"><?php echo $b_title ?></h3>
                <a href="<?php echo $b_see ?>">SEE ALL</a>
            </div>
        <div class="post__position">
            <div class="grid-x grid-margin-x">
                <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="blog__item cell large-4 medium-4 ">
                        <img src="<?php echo get_the_post_thumbnail_url($blogs->ID, 'full'); ?>" alt="">
                        <div class="content__wrapper">
                            <h3><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                            <div class="bfooter__wrapper">
                                <a href="<?php the_permalink(); ?>">READ MORE</a>
                                <?php $date = get_the_date(); ?>
                                <span><?php echo $date ?></span>
                            </div>
                        </div>
                    </div>
                <? endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
