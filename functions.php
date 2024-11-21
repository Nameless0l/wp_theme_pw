<?php
// Activation des fonctionnalités du thème
function theme_setup() {
    add_theme_support('woocommerce');
    add_theme_support('title-tag');
    //Comment ici
    add_theme_support('post-thumbnails');

    // Enregistrement des menus
    register_nav_menus([
        'primary' => __('Menu Principal', 'ecommerce'),
        'footer' => __('Menu Pied de Page', 'ecommerce')
    ]);
}
add_action('after_setup_theme', 'theme_setup');

// Chargement des scripts et styles
function theme_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'theme_scripts');

// Personnalisation du nombre de produits par page
add_filter('loop_shop_per_page', function() {
    return 12; // 12 produits par page
});

// Widgets
function theme_widgets_init() {
    register_sidebar([
        'name' => 'Sidebar Boutique',
        'id' => 'shop-sidebar',
        'description' => 'Widgets affichés sur les pages de boutique'
    ]);
}
add_action('widgets_init', 'theme_widgets_init');