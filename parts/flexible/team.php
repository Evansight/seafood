<?php get_sub_field('team_slider'); ?>
<?php $t_title = get_sub_field('team_title'); ?>
<section class="team">
    <div class="grid-container">
        <h3 class="team__title"><?php echo $t_title; ?></h3>
    </div>
    <div class="team__slider">
        <?php
        while (have_rows('team_slider')) : the_row();
            $sl_img = get_sub_field('slider_image');
            $sl_name = get_sub_field('slider_name');
            ?>
            <div class="team__item">
                <img src="<?php echo($sl_img ['url']); ?>" data-no-lazy="1" alt="">
                <h3 class="item__name"> <?php echo $sl_name; ?></h3>
            </div>
        <?php
        endwhile;
        ?>
    </div>

</section>