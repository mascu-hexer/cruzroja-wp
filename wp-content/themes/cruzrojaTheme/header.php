<!DOCTYPE html>
<html lang="ES_es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cruz Roja - Tu centro capilar en Córdoba</title>
    <link rel="icon" type="image/x-icon" href="wp-content/themes/cruzrojaTheme/assets/images/cruz_roja.ico">
    <?php wp_head(); ?>    
    
</head>
<body>
    <header class="sticky-header">        
        <div class="tirilla-header hidden-header">
            <div class="info">
                <p class="hidden-text"><?php echo esc_html(get_field('topHeader', 'option')['topHeaderLine1']); ?></p>
                <!-- <h3> Te informamos gratis <a href="tel:+34957000000">957 000 000</a></h3> -->
                <h3>
                    <?php echo esc_html( get_field('topHeader', 'option')['topHeaderLine2']); ?>
                    <span>
                        <a href="tel:<?php the_field('datos', 'option')['telefono']; ?>">
                            <?php echo esc_html( get_field('datos', 'option')['telefono']); ?>
                        </a>
                    </span>
                </h3>
            </div>
        </div>
        <div class="menu-header hidden-header">
            <div class="frame39">
                <div class="logo-hospital">
                    <?php $image = get_field('logo', 'option');
                        if( !empty($image) )
                        {
                        $title = $image['title'];
                        $alt = $image['alt'];
                        $alt = ($alt)?$alt:$title; ?>
                        <a href="<?php bloginfo( 'url' ) ?>" aria-label="Volver al inicio">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" />
                        </a>
                    <?php } ?>
                </div>
                <div class="frame86">
                    <p><?php echo esc_html(get_field('bannerLogo', 'option')['eslogan']); ?></p>
                    <!-- <a href="#"><button class="secondary-button">Contacta</button></a> --> 
                    <a class="secondary-button" href="<?php echo esc_attr( get_field('botonContacta', 'option') ); ?>">
                        <button><?php echo esc_html( get_field('botonContacta', 'option') ); ?></button>
                    </a>
                </div>
            </div>
        </div>
    
        
    </header>