
    
    
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
                    <p>000 000 000</p>
                </div>
                <div class="address">
                    <p>P.º de la Victoria, s/n, 14004 Córdoba</p> 
                </div>
                <div class="rrss">
                    <h3>Síguenos</h3>
                    <div class="rrss">
                        <div class="logo">
                        <?php
                            // Verificar si el repetidor "Mensaje Top Header" tiene filas
                            if (have_rows('iconoRRSS', 'option')) {
                                echo '<div class="top-header-messages">';
                                
                                // Recorrer las filas del repetidor
                                while (have_rows('iconoRRSS', 'option')) {
                                    the_row();
                                    
                                    // Obtener el valor del subcampo "Linea1"
                                    $icono1 = get_sub_field('iconoRRSS1');
                                    
                                    // Mostrar el contenido
                                    if ($icono1) {
                                        echo '<p>' . esc_html($icono1) . '</p>';
                                    }
                                }
                                
                                echo '</div>';
                            }
                            ?>
                        </div>
                        <div class="logo"><a href="#" target=""><img src="wp-content/themes/cruzrojaTheme/assets/images/youtube-ico.png" alt="youtube icon"></a></div>
                        <div class="logo"><a href="#" target=""><img src="wp-content/themes/cruzrojaTheme/assets/images/facebook-ico.png" alt="facebook icon"></a></div>
                        <div class="logo"><a href="#" target=""><img src="wp-content/themes/cruzrojaTheme/assets/images/instagram-ico.png" alt="instagram icon"></a></div>
                        
                        
                        
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