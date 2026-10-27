<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Mobile Off-canvas Navigation -->
    <nav
        id="offcanvas-navigation"
        class="offcanvas-navigation"
        aria-label="<?php esc_attr_e('Mobile Menu', 'yo-takahashi'); ?>"
        aria-hidden="true"
        inert>

        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class'     => 'offcanvas-menu',
            'container'      => false,
            'fallback_cb'    => false,
        ));
        ?>
    </nav>

    <!-- Mobile Overlay -->
    <button
        class="offcanvas-overlay"
        id="offcanvas-overlay"
        type="button"
        aria-label="<?php esc_attr_e('Close menu', 'yo-takahashi'); ?>"
        tabindex="-1"
        hidden></button>

    <div id="wrapper" class="hfeed">

        <header id="header" class="site-header">

            <?php if (get_header_image()) : ?>

                <div class="site-header-image">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <img
                            src="<?php echo esc_url(get_header_image()); ?>"
                            width="900"
                            height="150"
                            alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                    </a>
                </div><!-- .site-header-image -->

            <?php endif; ?>

            <!-- Mobile Hamburger -->
            <button
                class="menu-toggle"
                id="menu-toggle"
                type="button"
                aria-controls="offcanvas-navigation"
                aria-expanded="false"
                aria-label="<?php esc_attr_e('Open menu', 'yo-takahashi'); ?>">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <!-- Desktop Navigation -->
            <nav class="site-navigation" aria-label="<?php esc_attr_e('Primary Menu', 'yo-takahashi'); ?>">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'primary-menu',
                        'container'      => false,
                        'fallback_cb'    => false,
                    )
                );
                ?>
            </nav><!-- .site-navigation -->

        </header><!-- #header -->

        <main id="main" class="site-main">