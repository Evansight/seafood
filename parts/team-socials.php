<?php if ( have_rows( 'about_social' ) ): ?>
    <ul class="stay-tuned">
        <?php while ( have_rows( 'about_social' ) ): the_row(); ?>
            <?php $social_net = get_sub_field('social_net'); ?>
            <li class="stay-tuned__item">
                <a class="stay-tuned__link "
                   href="<?php the_sub_field( 'social_prof' ); ?>"
                   target="_blank"
                   aria-label="<?php echo $social_net['label']; ?>"
                   rel="noopener"><span aria-hidden="true" class="fab fa-<?php echo $social_net['value']; ?>"></span>
                </a>
            </li>
        <?php endwhile; ?>
    </ul>
<?php endif; ?>