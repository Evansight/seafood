<?php
/**
 * Template Name: Menu
 */
get_header(); ?>

<?php if (have_rows('main')): ?>
    <?php while (have_rows('main')): the_row(); ?>

        <?php if (get_row_layout() == 'intro'): ?>
            <?php get_template_part('parts/menu/menu-intro', get_row_layout()); // Flexible content row ?>
        <?php endif; ?>
        <?php if (get_row_layout() == 'intro'): ?>
            <?php get_template_part('parts/menu/menu-text', get_row_layout()); // Flexible content row ?>
        <?php endif; ?>

        <?php if (get_row_layout() == 'menu_page'): ?>
            <?php get_template_part('parts/menu/menu-main', get_row_layout()); // Flexible content row ?>
        <?php endif; ?>

        <?php if (get_row_layout() == 'menu_gallery'): ?>
            <?php get_template_part('parts/menu/menu-gallery', get_row_layout()); // Flexible content row ?>
        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>