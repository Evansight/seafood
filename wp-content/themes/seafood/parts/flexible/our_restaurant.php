<?php $a_text = get_sub_field('section_text'); ?>
<?php $menu_list = get_sub_field('section_image'); ?>
<?php $a_dec = get_sub_field('adec_image'); ?>
<section class="our__restaurant">
    <div class="grid-container">
            <div class="about__wrapper">
                <div class="text__wrapper">
                        <?php echo $a_text;?>
                    <img class="about__dec" src="<?php echo $a_dec['url'];?>" alt="">
                </div>
                <div class="restaurant__img-wrapper">
                    <img class="restaurant__img" src="<?php echo $menu_list['url'];?>" alt="">
                </div>
            </div>
    </div>
</section>
