<?php $goal_img = get_sub_field('goal_image'); ?>
<?php $g_content = get_sub_field('goal_content'); ?>
<?php $g_dec = get_sub_field('goal_dec'); ?>
<section class="goals">
    <div class="grid-container">
        <div class="goals__wrapper">
            <img src="<?php echo esc_url($goal_img['url']); ?>" alt="">

            <div class="goals__contact">
                <div class="cont__wrapper"><?php echo $g_content ?></div>
                <img src="<?php echo esc_url($g_dec['url']); ?>" alt=""></div>
        </div>
    </div>
</section>
