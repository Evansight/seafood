<?php
/**
 * Template Name: Home Page
 */
get_header(); ?>

<?php if (have_rows('main')): ?>
    <?php while (have_rows('main')): the_row(); ?>

            <?php if (get_row_layout()): ?>
                <?php get_template_part('parts/flexible/' . get_row_layout());?>
            <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>

<!-- END of main content -->

<?php get_footer(); ?>


