<?php $m_images = get_sub_field('m_gallery'); ?>
<?php $g_title = get_sub_field('gallery_title'); ?>
<?php $g_subtext = get_sub_field('subtitle_text'); ?>
<?php $img_batches = array_chunk($m_images, 12); ?>

<section class="menu_gallery">
    <div class="grid-container">
        <div class="gallery__header">
            <div class="gtitle__wrapper">
                <h3><?php echo $g_title; ?></h3>
            </div>
            <?php echo $g_subtext; ?>
        </div>
        <?php if ($img_batches):
            foreach ($img_batches as $batches): ?>
                <div class="gallery__wrapper">
                    <?php $i = 0;
                    if ($batches): ?>
                        <?php foreach ($batches as $image): if ($i === 13) $i = 0; ?>
                            <div class="g__img-wrapper<?php echo $i++ ?>">
                                <a class="gridElem" href="<?php echo esc_url($image['url']); ?>">
                                    <img src="<?php echo($image['url']); ?>"
                                         alt="<?php echo esc_attr($image['alt']); ?>"/>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>