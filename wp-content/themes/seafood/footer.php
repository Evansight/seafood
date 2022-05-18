<?php
/**
 * Footer
 */
?>

<!-- BEGIN of footer -->
<footer class="footer">
    <div class="footer__sponsors">
        <div class="grid-container">
            <div class="sponsors__wrapper">
                <?php
                if (have_rows('sponsors', 'options')):
                    while (have_rows('sponsors', 'options')) : the_row();
                        $sub_name = get_sub_field('sponsor_logo', 'options');
                        $sub_link = get_sub_field('sponsors_link', 'options');
                        ?>
                        <a href="<?php echo $sub_link ['url']; ?>"><img src="<?php echo $sub_name['url']; ?>"
                                                                        alt=""></a>
                    <?php
                    endwhile;
                endif; ?>
            </div>
        </div>
    </div>
    <div class="footer__subscribe">
        <div class="grid-container">
            <div class="sub__wrapper">
                <div class="sub_info-wrapper">
                    <?php the_field('subscribe_info', 'options'); ?>
                </div>
                <?php $sub_form = get_field('footer_form', 'options'); ?>
                <?php echo gravity_form($sub_form['id']); ?>
            </div>
        </div>
    </div>
    <div class="footer__bg">
        <div class="grid-container">
            <div class="footer-wrapper">
                <div class="pax">
                    <div class="footer__logo">
                        <?php if ($footer_logo = get_field('footer_logo', 'options')):
                            echo wp_get_attachment_image($footer_logo['id'], 'medium');
                        else:
                            show_custom_logo();
                        endif; ?>
                    </div>
                </div>
                <div class="footer__contact pax">
                    <h3 class="contact__title"><?php the_field('contact_title', 'options'); ?></h3>
                    <p> <?php the_field('address', 'options'); ?></p>
                    <p> <?php the_field('phone', 'options'); ?></p>
                    <?php get_template_part('parts/socials'); // Social profiles ?>
                </div>
                <div class="hours__wrapper pax">
                    <h3 class="hours__title"><?php the_field('hours_work', 'options'); ?></h3>
                    <?php the_field('time_table', 'options'); ?>
                </div>
                <div class="main__menu-wrapper pax footer__sp">
                    <h3 class="menu__title"><?php the_field('menu_title', 'options'); ?></h3>
                    <?php
                    if (has_nav_menu('footer-menu')) {
                        wp_nav_menu(array('theme_location' => 'footer-menu', 'menu_class' => 'footer-menu', 'depth' => 1));
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php if ($copyright = get_field('copyright', 'options')): ?>
        <div class="footer__copy">
            <div class="grid-container">
                <div class="grid-x grid-margin-x">
                    <div class="cell ">
                        <?php echo $copyright; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</footer>
<!-- END of footer -->

<?php wp_footer(); ?>
</body>
</html>
