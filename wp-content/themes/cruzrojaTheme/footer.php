<?php $datos = get_field('datos', 'option'); ?>    
    
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
                    <a href="tel:+34<?php echo get_field('datos', 'option')['telefono']; ?>" class="phone-number">
                        <?php echo esc_html( get_field('datos', 'option')['telefono']); ?>
                    </a>
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
                                        <a href="<?php echo $iconoRS['urlRedSocial'];?>" target="blank">
                                            <img src="<?php echo $iconoRS['iconoRS']['url']; ?>" alt="<?php echo $iconoRS['iconoRS']['alt'];?>" title="<?php echo $iconoRS['iconoRS']['title']; ?>" />
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
                        <?php $menuLinks = wp_nav_menu('footerMenu');?>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    <!-- <script src="wp-content/themes/cruzrojaTheme/assets/scripts/script.js"></script> -->
</body>
</html>