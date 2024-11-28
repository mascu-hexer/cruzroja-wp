<?php

$datos = get_field('datos', 'option');


?>
    
    
    <footer>
        <div class="more-info-container">
            <div class="more-info-content">
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
                
                <div class="phone">
                    <h3>Teléfono</h3>
                    <p><?php echo esc_html($datos['telefono']); ?></p>
                </div>
                <div class="address">
                    <p><?php echo esc_html($datos['direccion']); ?></p> 
                </div>
                <div class="rrss">
                    <h3>Síguenos</h3>
                    <div class="logosRRSS">
                        <div class="logo">
                            <?php 
                            $iconosRRSS = get_field('rrss', 'option'); 
                                if (have_rows('rrss', 'option')):                                     
                                    while (have_rows('rrss', 'option')): 
                                        the_row();
                                        $iconoRS = get_sub_field('iconoRS');
                                        ?>
                                        <a href="<?php echo esc_html($target);?>">
                                            <img src="<?php echo $iconoRS['url']; ?>" alt="<?php echo $iconoRS['alt']; ?>" title="<?php echo $title; ?>" />
                                        </a>
                                    <?php 
                                    endwhile;
                                endif;?>         
                        </div>
                        
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="condiciones-footer">
            <div class="policies-container">
                <div class="policies-content">
                    <div class="aviso-legal">
                        <a href="#">Aviso Legal</a>
                        <a href="#">Politica de privacidad</a>
                        <a href="#">Política de cookies</a>
                        <a href="#">Condiciones Generales</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    <!-- <script src="wp-content/themes/cruzrojaTheme/assets/scripts/script.js"></script> -->
</body>
</html>