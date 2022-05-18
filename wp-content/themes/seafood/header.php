<?php
/**
 * Header
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Set up Meta -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=yes">
	<!-- Remove Microsoft Edge's & Safari phone-email styling -->
	<meta name="format-detection" content="telephone=no,email=no,url=no">

	<!-- Add external fonts below (GoogleFonts / Typekit) -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap">

	<?php wp_head(); ?>
</head>

<body <?php body_class('no-outline'); ?>>
<?php wp_body_open(); ?>

<!-- <div class="preloader hide-for-medium">
	<div class="preloader__icon"></div>
</div> -->

<!-- BEGIN of header -->
<div class="relative">
<header class="header">
	<div class="grid-container menu-grid-container">
		<div class="header__wrapper">
            <div class="logo__wrap">
                <div class="logo text-center medium-text-left">
                    <h1><?php show_custom_logo(); ?><span class="css-clip"><?php echo get_bloginfo( 'name' ); ?></span></h1>
                </div>
            </div>
			<div class="menu_wrapper">
				<?php if ( has_nav_menu( 'header-menu' ) ) : ?>
					<div class="title-bar hide-for-medium" data-responsive-toggle="main-menu" data-hide-for="medium">
						<button class="menu-icon" type="button" data-toggle aria-label="Menu" aria-controls="main-menu"><span></span></button>

					</div>
					<nav class="top-bar" id="main-menu">
						<?php wp_nav_menu( array(
							'theme_location' => 'header-menu',
							'menu_class'     => 'menu header-menu',
							'items_wrap'     => '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown" data-submenu-toggle="true" data-multi-open="false" data-close-on-click-inside="false">%3$s</ul>',
							'walker'         => new Foundation_Navigation()
						) ); ?>
                        <div class="order block__wrapper">
                            <a href="#" class="order__button"><span class="order__text">ORDER NOW</span></a>
                            <span class="order__phone">(248)540-5900</span>
                        </div>
					</nav>
				<?php endif; ?>
			</div>
            <div class="block__wrapper">
                <a href="#" class="order__button"><span class="order__text">ORDER NOW</span></a>
                <span class="order__phone">(248)540-5900</span>
            </div>
		</div>
	</div>
</header>
</div>
<!-- END of header -->
