<?php $test_bg = get_sub_field('test_image'); ?>
<?php $test_title = get_sub_field('test_title'); ?>
<section class="testimonials" <?php bg($test_bg); ?>>
    <div class="testimonials__bgcolor">
        <div class="grid-container">
            <h3 class="testimonials__title"><?php echo $test_title; ?></h3>

            <?php $args = array(
                'post_type' => 'testimonials',
                'post_status' => 'publish',
                'post_per_page' => -1,
            );
            $the_query = new WP_Query($args); ?>
            <div class="testimonials__slider">
                <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="slider__item"><?php the_content(); ?></div>
                <?php endwhile; ?>
            </div>

        <?php wp_reset_postdata(); ?>
        <?php endif; ?>

            <div class="test__logo">
                <?php if ($test_logo = get_field('footer_logo', 'options')):
                    echo wp_get_attachment_image($test_logo['id'], 'medium');
                else:
                    show_custom_logo();
                endif; ?>
            </div>
        </div>
    </div>
</section>