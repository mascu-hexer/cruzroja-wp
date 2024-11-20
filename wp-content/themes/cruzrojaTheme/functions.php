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

if ( class_exists('ACF') ) {
    // Importa el archivo de configuración de ACF
    require_once get_template_directory() . '/inc/acf-fields.php';
}

function add_personalizedtheme_menus()
{
    register_nav_menus(
        array(
            'menu-principal' => __('Principal')
        )
    );
}
add_action('init', 'add_personalizedtheme_menus');

function add_file_types_to_uploads( $mimes = array() ) {
    if (current_user_can('administrator')) {
        $mimes['svg'] = 'image/svg+xml';
        $mimes['svgz'] = 'image/svg+xml';
        $mimes['webp'] = 'image/webp';        
    }
    error_log(print_r($mimes, true)); // Añade esta línea para depuración
    return $mimes;
}
add_filter( 'upload_mimes', 'add_file_types_to_uploads' );

    

