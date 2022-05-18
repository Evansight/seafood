<?php $c_form = get_sub_field('contact_form'); ?>
<?php $c_intro = get_sub_field('contact_intro'); ?>
<?php $phone_n = get_sub_field('phone_number'); ?>
<?php $alt_address = get_sub_field('alt_address'); ?>
<?php $bgs_img = get_sub_field('bgs_img'); ?>
<?php $dec_imgs = get_sub_field('decoration_images'); ?>
<section class="contact" <?php bg($bgs_img); ?>>
    <div class="grid-container">
        <div class="contact__wrapper">
            <div class="contact__info">
                <div class="contact__info-inner">
                    <?php echo $c_intro; ?>
                    <div class="decor__imgs">
                        <?php
                        $i = 1;
                        if (have_rows('decoration_images')):
                            while (have_rows('decoration_images')): the_row();
                                $sub_img = get_sub_field('decoration_image');
                                ?>
                                <img class="img<?php echo $i++; ?>" src="<?php echo($sub_img ['url']); ?>" alt="">
                            <?php endwhile;
                        else :
                        endif; ?>
                    </div>
                    <div class="contact__info-wrap">
                        <span class="email"><?php the_field('email', 'options'); ?></span>
                        <span class="phone__n"><?php echo $phone_n; ?></span>
                        <span class="alt__address"><?php echo $alt_address; ?></span>
                    </div>
                </div>
            </div>
            <div class="contact__form">
                <div class="contact__form-inner">
                    <?php echo gravity_form($c_form['id']); ?>
                </div>

            </div>
        </div>
    </div>
</section>
