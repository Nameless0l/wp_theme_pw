<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <div class="logo">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    echo '<h1>' . get_bloginfo('name') . '</h1>';
                }
                ?>
            </div>

            <nav>
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'nav-menu'
                ]);
                ?>
            </nav>

            <?php if (class_exists('WooCommerce')) : ?>
            <div class="cart-section">
                <?php
                $cart_count = WC()->cart->get_cart_contents_count();
                echo '<a href="' . wc_get_cart_url() . '">';
                echo 'Panier (' . $cart_count . ')';
                echo '</a>';
                ?>
            </div>
            <?php endif; ?>
        </div>
    </header>