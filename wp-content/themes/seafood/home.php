<?php
/**
 * Home
 *
 * Standard loop for the blog-page
 */
get_header(); ?>

<?php if (have_rows('main')): ?>
    <?php while (have_rows('main')): the_row(); ?>

        <?php if (get_row_layout()): ?>
            <?php get_template_part('parts/flexible/' . get_row_layout());?>
        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>