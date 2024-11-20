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

function permitir_webp($mimes) {
    $mimes['webp'] = 'image/webp';
    return $mimes;
}
add_filter('mime_types', 'permitir_webp');

// Comprobar si el archivo WebP es procesable
function mostrar_webp($result, $path) {
    $info = @getimagesize($path);
    $mime = isset($info['mime']) ? $info['mime'] : '';
    if ($mime === 'image/webp') {
        $result = true;
    }
    return $result;
}
add_filter('file_is_displayable_image', 'mostrar_webp', 10, 2);
    
    

