<?php

add_action( 'wp_enqueue_scripts', 'add_assets' );

function add_assets(){
    // Encolar el archivo CSS del tema
    wp_enqueue_style('cruzrojaTheme-style', get_template_directory_uri() . '/assets/styles/styles.css');
    
    // Encolar el archivo JS del tema
    wp_enqueue_script('cruzrojaTheme-script', get_template_directory_uri() . '/assets/scripts/script.js', array(), null, true);
    
    // Encolar el archivo CSS de Swiper
    wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    
    // Encolar el archivo JS de Swiper
    wp_enqueue_script('swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, false);
    
}

