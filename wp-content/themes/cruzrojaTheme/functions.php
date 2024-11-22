<?php

add_action( 'wp_enqueue_scripts', 'add_assets' );

function add_assets(){
    // Encolar el archivo CSS del tema
    wp_enqueue_style(
        'cruzrojaTheme-style', 
        get_template_directory_uri() . '/assets/styles/styles.css');
    
    // Encolar el archivo JS del tema
    wp_enqueue_script(
        'cruzrojaTheme-script', 
        get_template_directory_uri() . '/assets/scripts/script.js', 
        array(), 
        null, 
        true);
    
    // Encolar el archivo CSS de Swiper
    wp_enqueue_style(
        'swiper-style', 
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    
    // Encolar el archivo JS de Swiper
    wp_enqueue_script(
        'swiper-script', 
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', 
        array(), 
        null, 
        false);
    
}

// Importa el archivo de configuración de ACF
if ( class_exists('ACF') ) {
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
    error_log(print_r($mimes, true)); // línea para depuración
    return $mimes;
}
add_filter( 'upload_mimes', 'add_file_types_to_uploads' );

/* FUNCIONES PARA MOSTRAR SECCIONES FLEXIBLES (Home) */
function mostrar_secciones_flexibles ( $objetoPost ){
// check if the flexible content field has rows of data

if( have_rows('seccionesHome', $objetoPost) ) {
    // loop through the rows of data
    while ( have_rows('seccionesHome') ) {
    the_row();
    $id = get_sub_field('id');
    $imgurl = get_sub_field('fondo_imagen');
    switch (get_row_layout()) {
        case 'tira_seo':
        if (get_field('tiene_seo')) { ?>
            <section id="<?php echo get_row_layout() ?>" class="<?php echo get_row_layout() ?>" <?php if ( !empty($imgurl) ){ ?> style="background-image:url(<?php echo $imgurl; ?>)" <?php } ?>>
            <div class="seccion-inicio <?php echo $id; if (!get_sub_field('ancho_completo')) {?> cuerpo<?php }?>">
                <div class="content">
                <div class="titulo-seo">
                    <?php $tag = 'div';
                    if (!get_field('titulo_seo')){
                    $tag = 'h2';
                    } ?>
                    <<?php echo $tag; ?> class="tit2"> <?php the_sub_field('titulo'); ?> </<?php echo $tag; ?>>
                </div>
                <button id="interruptor-seo" class="interruptor-seo" type="button" name="button" aria-label="<?php _e('Mostrar más texto','mitema'); ?>"><i class="wpr-icon-arrow-down2" role="button" aria-label="<?php _e('Leer más contenido','mitema'); ?>"></i></button>
                <div class="contenido-extensible">
                    <?php if (get_field('titulo_seo')) { ?>
                    <h1><?php the_field('titulo_seo'); ?></h1>
                    <?php } ?>
                    <?php the_field('texto_seo'); ?>
                </div>
                </div>
            </div>
            </section>
        <?php }
        break;
        default:
        # code...
        break;
    }
    }
}
else {
    // no layouts found
}
}


    

