<?php $c_intro = get_sub_field('contact_intro'); ?>
<?php $phone_n = get_sub_field('phone_number'); ?>
<?php $alt_address = get_sub_field('alt_address'); ?>
<?php $c_form = get_sub_field('contact_form'); ?>

    <section class="contact__page">
        <div class="grid-container">
            <div class="contact__wrapper">
                <div class="contact__list">
                    <div>
                        <?php echo $c_intro; ?>
                        <div class="contact__list-inner">
                            <span class="email"><?php the_field('email', 'options'); ?></span>
                            <span class="phone__n"><?php echo $phone_n; ?></span>
                            <span class="alt__address"><?php echo $alt_address; ?></span>
                        </div>
                    </div>
                </div>
                <div class="contact__page-form">
                    <div class="contact__form-inner">
                        <?php echo gravity_form($c_form['id']); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php if (have_rows('location', 'options')): ?>
    <section class="acf-map">
        <?php while (have_rows('location', 'options')): the_row();
            $location = get_sub_field('map');
            ?>
            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"
                 data-marker-icon="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/map_marker.svg">
                <?php echo '<p>' . $location['address'] . '</p>'; ?>
            </div>
        <?php endwhile; ?>
    </section>
<?php endif; ?>