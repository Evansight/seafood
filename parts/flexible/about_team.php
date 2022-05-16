<section class="about_team">
    <div class="grid-container">

        <?php $args = array(
            'post_type' => 'about_team',
            'post_status' => 'publish',
            'post_per_page' => -1,
        );
        $the_query = new WP_Query($args); ?>
        <?php if ($the_query->have_posts()) : ?>
            <div class="about__team-wrapper grid-x">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="about__team-item">
                    <div class="about__block ">
                        <img class="about__team-img" src="<?php the_post_thumbnail_url();?>" alt="">
                        <div class="team__item-inner">
                            <h3 class="about__team-title"><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                            <div class="about__team-social"> <?php get_template_part('parts/team','socials'); // Social profiles ?></div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>
        <?php endif; ?>
    </div>
</section>






