<?php $ab_info = get_sub_field('about_info'); ?>
<?php $cont_img = get_sub_field('content_image'); ?>
<?php $dec_img = get_sub_field('decoration_image'); ?>
<section class="about">
    <div class="grid-container">
        <div class="about__wrapper">
            <div class="text__wrapper"> <?php echo($ab_info); ?> </div>
            <div class="img__wrapper">
                <div class="cont__img-wrapper">
                    <?php echo wp_get_attachment_image($cont_img['ID'], 'full'); ?>
                </div>
            </div>
            <div class="dec__img-wrapper">
                <?php echo wp_get_attachment_image($dec_img['ID'], 'full'); ?>
            </div>
        </div>

    </div>
</section>