<?php             
    $formulario = get_sub_field('formulario');
    $listaServicios = $formulario['listaServicios'];
    $fondo = $formulario['fondo'];
?>
<section class="header-form">
    <picture>
        <source media="(min-width:750px)" srcset="<?php echo esc_url($fondo['desktop']['url']); ?>">
        <source media="(min-width:500px)" srcset="<?php echo esc_url($fondo['mobile']['url']); ?>">
        <img src="<?php echo esc_url($fondo['mobile']['url']); ?>" alt="<?php echo esc_url($fondo['mobile']['alt']); ?>">
    </picture>          
    <div class="header-form-main-container">    
        <div class="form-box">
            <div class="titular">
                <div class="frame33">
                    <p><?php echo esc_html($formulario['titulo']); ?></p> 
                    <span><?php echo esc_html($formulario['subtitulo']); ?></span>
                </div>
            </div>

            <?php if (!empty($listaServicios)){ ?>
                <div class="insight">
                    <ul class="frame32">
                        <?php foreach($listaServicios as $servicio): ?>
                            <li class="element-inisht">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/check32x32.png" 
                                    alt="checklist">
                                </div>
                                <div class="frame30">
                                    <p><?php echo esc_html($servicio['descripcion']) ?></p>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php }?>
                                                                    
            <div class="inputsContainer">
                <?php echo do_shortcode($formulario['datosFormulario']); ?>
            </div>    
        </div>
    </div>
</section>