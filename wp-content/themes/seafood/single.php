<?php
/**
 * Single
 *
 * Loop container for single post content
 */
get_header(); ?>

<?php $m_image = get_field('post__header_image'); ?>
<section class="menu__intro"<?php bg($m_image); ?>>
    <div class="grid-container">
        <div class="menu__title--wrapper">
            <h3 class="menu__title"><?php the_title(); ?></h3>
        </div>
    </div>
</section>
<main class="main-content">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <!-- BEGIN of post content -->
            <div class="large-12 medium-8 small-12 cell">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="post__heading-wrapper">
                            <a href="<?php echo get_permalink(get_page_by_path('blog')) ?>">BACK TO LIST</a>
                            <p class="entry__meta"> <?php echo get_the_time(get_option('date_format')); ?></p>
                        </div>
                        <div class="entry__content clearfix">
                            <?php the_content('', true); ?>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <!-- END of post content -->

            <!-- BEGIN of sidebar -->

            <!-- END of sidebar -->
        </div>
    </div>
</main>

<?php get_footer(); ?>

















