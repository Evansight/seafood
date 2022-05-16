<?php $menu_title = get_sub_field('menu_title'); ?>
<?php $menu_link = get_sub_field('full_menu_link'); ?>
<?php $desc = get_sub_field('menu_description'); ?>
<?php $menu_list = get_sub_field('menu_list'); ?>
<?php $main_bg = get_sub_field('bag_image'); ?>
<?php $side_bg = get_sub_field('menu_img'); ?>
<section class="menu__sec">
    <div class="grid-container">
        <div class="menu__heading">
            <h3 class="menu__title"><?php echo($menu_title); ?></h3>
            <a href="<?php echo($menu_link); ?>" class="menu__link-btn">SEE FULL MENU</a>
        </div>
        <p class="menu__description"><?php echo($desc); ?></p>
        <div class="menu__wrapper">
            <div class="menu__list-wrapper" <?php bg($side_bg); ?>>
                <ul>
                    <?php
                    if (have_rows('menu_list')):
                        while (have_rows('menu_list')) : the_row();
                            $sub_value = get_sub_field('menu_items');
                            ?>
                            <li><a href=""><?php echo($sub_value->name); ?></a></li>
                        <?php endwhile;
                    else :
                    endif; ?>
                </ul>
            </div>
            <div class="menu__main-bg" <?php bg($main_bg); ?>></div>
        </div>
    </div>
</section>
