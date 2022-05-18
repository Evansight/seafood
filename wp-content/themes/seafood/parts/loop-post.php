<!-- BEGIN of Post -->

<section class="info__block">
        <div class="post__wrapper">
            <div class="post__item-content">
                <div class="img__wrap">
                    <?php
                    $image = get_field('post_image');
                    if (!empty($image)): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="">
                    <?php endif; ?>
                </div>
                <div class="text__wrap">
                    <?php the_field('post_text'); ?>
                </div>
            </div>
        </div>
</section>
<!-- END of Post -->
