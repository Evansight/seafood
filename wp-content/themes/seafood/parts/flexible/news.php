<?php $n_title = get_sub_field('news_title'); ?>
<?php $n_link = get_sub_field('sub_title_link'); ?>
<?php $n_posts = get_sub_field('news_posts'); ?>
<section class="news">
    <div class="grid-container">
        <div class="news__heading">
            <h3 class="news__title"><?php echo $n_title; ?></h3>
            <a href="<?php echo $n_link; ?>" class="news__link-btn">SEE ALL</a>
        </div>
        <?php $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'post_per_page' => -1,
            'category_name' => 'news'
        );
        $the_query = new WP_Query($args); ?>

        <div class="post__wrapper grid-margin-x grid-x">
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="news__post-item cell large-4 medium-4 small-12">
                        <h3 class="post__title"><?php the_title(); ?></h3>
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                        <?php $date = get_the_date(); ?>
                        <div class="news__date"><?php echo $date ?></div>
                    </div>
                <? endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>

    </div>
</section>