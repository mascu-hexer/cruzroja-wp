<section class="header-form">
    <picture>
        <source media="(min-width:1024px)" srcset="assets/images/Rectangle158-desktop-1440.webp">
        <source media="(min-width:750px)" srcset="assets/images/Rectangle158-desktop-1024.webp">
        <source media="(min-width:500px)" srcset="assets/images/Rectangle158-mobile.webp">
        <img src="assets/images/Rectangle158-mobile.webp" alt="Paciente sonriendo">
    </picture>          
    <div class="header-form-main-container">
        
        <?php             
            $titulo = get_sub_field('formulario')['titulo'];
            $subtitulo = get_sub_field('formulario')['subtitulo'];
            $listaServicios = get_sub_field('formulario')['listaServicios'];
            $info = get_sub_field('formulario')['+info'];
            $datosFormulario = get_sub_field('formulario')['datosFormulario'];
        ?>
                                
        <div class="form-box">
            <div class="titular">
                <div class="frame33">
                    <p><?php echo esc_html($titulo); ?></p> 
                    <span><?php echo esc_html($subtitulo); ?></span>
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
                                                                    
            <div class="frame93">
                <form method="" action="blank">
                    <div class="frame37">
                        <div class="frame36">
                            <?php 
                                echo do_shortcode($datosFormulario); 
                            ?>
                            <!-- <input type="text" name="name" placeholder="Nombre*"/>
                            <input type="text" name="phone" placeholder="Teléfono*"/>
                            <input type="text" name="mail" placeholder="Email*"/>
                            <div class="policy-checkbox">
                                <input type="checkbox" name="privacy-policy"> 
                                <p>He leído y Acepto las <a href="#">condiciones Generales</a> y la <a href="#">Política de privacidad</a></p>
                            </div> -->
                        </div>
                        <a href="#"><button type="submit">Enviar</button></a>  
                    </div>
                </form>
            </div>    
        </div>
    </div>
</section>