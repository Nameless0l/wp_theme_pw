<?php
// Personnalisation des templates WooCommerce

remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'theme_wrapper_end', 10);

function theme_wrapper_start() {
    echo '<div class="container woocommerce-content">';
}

function theme_wrapper_end() {
    echo '</div>';
}

// Personnalisation des éléments WooCommerce
add_filter('woocommerce_show_page_title', '__return_false');
