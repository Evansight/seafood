<?php $menu_list = get_sub_field('title_taxonomy'); ?>

<section class="menu__section">
    <div class="grid-container">
        <div class="mains__dish-heading">
            <?php
            if (have_rows('title_taxonomy')):
                while (have_rows('title_taxonomy')) :
                    the_row();
                    $sub_value = get_sub_field('title_item');
                    $mains_t = get_field('menus_title', $sub_value);
                    $title_d = get_field('title_description', $sub_value);
                    $title_img = get_field('title_image', $sub_value);
                    ?>
                    <?php $args_posts = array(
                    'post_type' => 'menu_taxonomy',
                    'post_status' => 'publish',
                    'post_per_page' => -1,
                    'tax_query' => array(
                        array(
                        'taxonomy' => 'dish_menu',
                        'field' => 'id',
                        'terms' => [$sub_value->term_id],
                        )
                    )
                ); ?>
                    <?php
                    $the_query = new WP_Query($args_posts); ?>

                        <h3><?php echo $mains_t; ?></h3>


                    <div class="mains__dish-text"><?php echo $title_d; ?></div>
                    <div class="mains__dish-image">
                        <img src="<?php echo($title_img ['url']); ?>" alt="">
                    </div>
                    <?php if ($the_query->have_posts()) : ?>

                    <div class="mains__posts-wrapper">
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="menu__post-item">
                            <div class="post__item-main">
                                <h2><?php the_title(); ?></h2>
                                <?php the_content(); ?>
                            </div>
                            <span class="post__item-price"><?php the_field('menu_price') ?></span>
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
