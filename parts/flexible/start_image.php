<?php $m_image = get_sub_field('intro_bg');?>
<?php $m_title = get_sub_field('main_title');?>
<section class="menu__intro"<?php bg($m_image); ?>>
    <div class="grid-container">
        <div class="menu__title--wrapper">
            <h3 class="menu__title"><?php echo $m_title; ?></h3>
        </div>
    </div>
</section>
