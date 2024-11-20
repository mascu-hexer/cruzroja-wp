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
                <div id="logo-hospital">
                    <a href="#">
                        <?php if( get_field('logo', 'option') ): ?>
                            <img src="<?php echo esc_url( get_field('logo', 'option') ); ?>" />
                        <?php endif; ?>
                    </a>
                </div>
                <div class="frame86">
                    <p>Tu centro capilar en Córdoba</p>
                    <a href="#"><button class="secondary-button">Contacta</button></a>  
                </div>
            </div>
        </div>
    
        
    </header>