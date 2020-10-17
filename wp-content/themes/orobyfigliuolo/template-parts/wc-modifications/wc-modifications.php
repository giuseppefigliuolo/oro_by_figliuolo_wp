<?php

// Metodo alternativo per configurare woocommerce: trovare l'hook giusto di woocommerce e poi renderizzare tramite una funzione
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar');

function obf_open_container_wc() {
    if( is_shop() ) {
        echo '<div class="obf-container">';
    } else {
        echo '<div class="single-product-container">';
    }
}
add_action('woocommerce_before_main_content', 'obf_open_container_wc', 5);

function obf_close_container_wc() {
    echo '</div>';
}
add_action('woocommerce_after_main_content', 'obf_close_container_wc', 4);
