<?php get_header(); ?>


<main class="Main">

    <?php if (have_rows('seccionesHome')): ?>
    
        <?php while (have_rows('seccionesHome')): 
            the_row(); ?>


        <section class="header-form">
            <picture>
                <source media="(min-width:1024px)" srcset="assets/images/Rectangle158-desktop-1440.webp">
                <source media="(min-width:750px)" srcset="assets/images/Rectangle158-desktop-1024.webp">
                <source media="(min-width:500px)" srcset="assets/images/Rectangle158-mobile.webp">
                <img src="assets/images/Rectangle158-mobile.webp" alt="Paciente sonriendo">
            </picture>          
            <div class="header-form-main-container">
                    
                <?php if (get_row_layout() == 'formulario'){ 
                    
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

                    <?php if (!empty($listaServicios)): ?>
                        <div class="insight">
                            <ul class="frame32">
                                <?php foreach($listaServicios as $servicio): ?>
                                    <li class="element-inisht">
                                        <div class="icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/check32x32.png" 
                                            alt="checklist">
                                        </div>
                                        <div class="frame30">
                                            <p><?php echo esc_html($servicio['titulo']) ?></p>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                                                                          
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

                <?php } ?> <!-- cierre de if (get_row_layout() == 'formulario') -->
            </div>
        </section>

        <?php if(get_row_layout() == 'servicios'): ?>
            <section class="skills">
                <div class="skills-header">
                    <p><?php echo get_sub_field('titulo'); ?></p>
                </div>
                <div class="skills-main-container">
                    <?php if(have_rows('skills')): ?>
                        <?php while(have_rows('skills')): the_row(); ?>
                            <div class="skill1">
                                <div class="frame63">
                                    <img src="<?php echo get_sub_field('icono')['url']; ?>" alt="<?php echo get_sub_field('icono')['alt']; ?>">
                                    <div class="frame62">
                                        <h3><?php echo get_sub_field('titulo'); ?></h3>
                                        <p><?php echo get_sub_field('descripcion'); ?></p>
                                        <a href="<?php echo get_sub_field('link'); ?>" target="_blank">Saber más</a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </section>
        <?php endif; ?>
        <section class="skills">
            <div class="skills-header">
                <p>Tu injerto capilar en Córdoba en manos del Hospital Cruz Roja</p>
            </div>
            <div class="skills-main-container">
                <div class="skill1">
                    <div class="frame63">
                        <img src="assets/images/diagnostico.png" alt="Diagnóstico">
                        <div class="frame62">
                            <h3>Diagnóstico</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet 
                                luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim 
                                praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi 
                                etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare 
                                quam viverra orci sagittis eu volutpat odio facilisis mauris sit amet massa</p>
                            <a href="" target="">Saber más</a>
                        </div>
                    </div>
                </div>
                <div class="skill2">
                    <div class="frame63">
                        <img src="assets/images/implante.png" alt="Injerto capilar">
                        <div class="frame62">
                            <h3>Injerto Capilar</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet 
                                luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim 
                                praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi 
                                etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare 
                                quam viverra orci sagittis eu volutpat odio facilisis mauris sit amet massa</p>
                            <a href="" target="">Saber más</a>
                        </div>
                    </div>
                </div>
                <div class="skill3">
                    <div class="frame63">
                        <img src="assets/images/mesoterapia.png" alt="Mesoterapia">
                        <div class="frame62">
                            <h3>Mesoterapia</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet 
                                luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim 
                                praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi 
                                etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare 
                                quam viverra orci sagittis eu volutpat odio facilisis mauris sit amet massa</p>
                            <a href="" target="">Saber más</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="seo-info" id="nosotros">
            <div class="main-container">
                <!-- <h3>Nuestro centro capilar en Córdoba</h3>
                <div class="frame91">
                    <img src="assets/images/CaretDown.png" alt="separator">
                    
                </div> -->
                <div class="acordeon">
                    <input type="checkbox" name="acordeon" id="btn-nosotros" class="btn-acordeon">
                    <label for="btn-nosotros">
                        <h3>Nuestro centro capilar en Córdoba</h3>
                        <div class="frame91">
                            <img src="assets/images/CaretDown.png" alt="separator">                            
                        </div>
                    </label>
                    <div class="contenido-acordeon">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id nulla eu libero 
                            laoreet eleifend vestibulum id metus. Pellentesque malesuada condimentum vulputate. 
                            Proin eleifend augue sed urna placerat vulputate. 
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id nulla eu libero 
                            laoreet eleifend vestibulum id metus. Pellentesque malesuada condimentum vulputate. 
                            Proin eleifend augue sed urna placerat vulputate. Interdum et malesuada fames ac 
                            ante ipsum primis in faucibus. Nullam interdum efficitur tortor
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="doctors">
            <div class="doctors-main-container">
                <picture>
                    <!--<source media="(min-width:1440px)" srcset="assets/images/draAboy-desktop.webp">-->
                    <source media="(min-width:700px)" srcset="assets/images/draAboy-desktop.webp">
                    <source media="(min-width:500px)" srcset="assets/images/draAboy-mobile.webp">
                    <img src="assets/images/draAboy-mobile.webp" alt="Dra. Pilar Aboy">
                </picture>
                <div class="text-container">
                    <div class="frame74">
                        <h3>Dra. Pilar Aboy</h3>
                        <p>Especialista en Medicina Estética</p>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus 
                        venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent 
                        elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim 
                        diam quis enim lobortis scelerisque fermentum dui faucibus in ornare quam viverra orci 
                        sagittis eu volutpat odio facilisis mauris sit amet massa,
                    </p>
                    <p>Vitae tortor condimentum lacinia quis vel eros donec ac odio tempor orci dapibus ultrices 
                        in iaculis nunc sed augue lacus, viverra vitae congue eu, consequat ac felis donec et odio 
                        pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus
                    </p>
                </div>
            </div>
        </section>

        <section class="budget" id="presupuesto">
            <div class="budget-container">
                <p>Solicita presupuesto y te informaremos de todo sobre tu transplante de pelo</p>
                <a href="#"><button>Solicitar</button></a>
            </div>
        </section>

        <section class="faq">
            <div class="faq-main-container">
                <div class="faq-header">
                    <p>Preguntas frecuentes sobre nuestro tratamiento de implante capilar</p>
                </div>
                <div class="faq-acordeon-container">
                    <div class="acordeon">
                        <input type="checkbox" name="acordeon" id="btn-acordeon1" class="btn-acordeon">
                        <label for="btn-acordeon1">
                            <p>¿En qué consiste el procedimiento?</p>
                            <img src="assets/images/CaretDown-red.png" alt="CaretDown-red">
                        </label>
                        <div class="contenido-acordeon">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id nulla eu libero 
                                laoreet eleifend vestibulum id metus. Pellentesque malesuada condimentum vulputate. 
                                Proin eleifend augue sed urna placerat vulputate. Interdum et malesuada fames ac 
                                ante ipsum primis in faucibus. Nullam interdum efficitur tortor, nec vehicula.
                            </p>
                        </div>
                    </div>
                    <div class="acordeon">
                        <input type="checkbox" name="acordeon" id="btn-acordeon2" class="btn-acordeon">
                        <label for="btn-acordeon2">
                            <p>¿Es doloroso el transplante capilar?</p>
                            <img src="assets/images/CaretDown-red.png" alt="CaretDown-red">
                        </label>
                        <div class="contenido-acordeon">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id nulla eu libero 
                                laoreet eleifend vestibulum id metus. Pellentesque malesuada condimentum vulputate. 
                                Proin eleifend augue sed urna placerat vulputate. Interdum et malesuada fames ac 
                                ante ipsum primis in faucibus. Nullam interdum efficitur tortor, nec vehicula.
                            </p>
                        </div>
                    </div>
                    <div class="acordeon">
                        <input type="checkbox" name="acordeon" id="btn-acordeon3" class="btn-acordeon">
                        <label for="btn-acordeon3">
                            <p>¿Existen riesgos en este tratamiento?</p>
                            <img src="assets/images/CaretDown-red.png" alt="CaretDown-red">
                        </label>
                        <div class="contenido-acordeon">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id nulla eu libero 
                                laoreet eleifend vestibulum id metus. Pellentesque malesuada condimentum vulputate. 
                                Proin eleifend augue sed urna placerat vulputate. Interdum et malesuada fames ac 
                                ante ipsum primis in faucibus. Nullam interdum efficitur tortor, nec vehicula.
                            </p>
                        </div>
                    </div>
                    <div class="acordeon">
                        <input type="checkbox" name="acordeon" id="btn-acordeon4" class="btn-acordeon">
                        <label for="btn-acordeon4">
                            <p>¿Cuánto va a costarme el implante de pelo?</p>
                            <img src="assets/images/CaretDown-red.png" alt="CaretDown-red">
                        </label>
                        <div class="contenido-acordeon">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id nulla eu libero 
                                laoreet eleifend vestibulum id metus. Pellentesque malesuada condimentum vulputate. 
                                Proin eleifend augue sed urna placerat vulputate. Interdum et malesuada fames ac 
                                ante ipsum primis in faucibus. Nullam interdum efficitur tortor, nec vehicula.
                            </p>
                        </div>
                    </div>
                    <div class="acordeon">
                        <input type="checkbox" name="acordeon" id="btn-acordeon5" class="btn-acordeon">
                        <label for="btn-acordeon5">
                            <p>¿A partir de cuándo veré los resultados?</p>
                            <img src="assets/images/CaretDown-red.png" alt="CaretDown-red">
                        </label>
                        <div class="contenido-acordeon">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id nulla eu libero 
                                laoreet eleifend vestibulum id metus. Pellentesque malesuada condimentum vulputate. 
                                Proin eleifend augue sed urna placerat vulputate. Interdum et malesuada fames ac 
                                ante ipsum primis in faucibus. Nullam interdum efficitur tortor, nec vehicula.
                            </p>
                        </div>
                    </div> 
                    <div class="acordeon">
                        <input type="checkbox" name="acordeon" id="btn-acordeon6" class="btn-acordeon">
                        <label for="btn-acordeon6">
                            <p>¿Se puede volver a caer el cabello pasado un tiempo?</p>
                            <img src="assets/images/CaretDown-red.png" alt="CaretDown-red">
                        </label>
                        <div class="contenido-acordeon">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id nulla eu libero 
                                laoreet eleifend vestibulum id metus. Pellentesque malesuada condimentum vulputate. 
                                Proin eleifend augue sed urna placerat vulputate. Interdum et malesuada fames ac 
                                ante ipsum primis in faucibus. Nullam interdum efficitur tortor, nec vehicula.
                            </p>
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        
        <section class="reviews-slider">
            <div class="reviews-header">                
                <p>Nuestros éxitos hablan por nosotros</p>                
            </div> 
            <div class="wrap-swiper">           
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" id="slide1">
                            <div class="new-review">
                                <div class="new-review-header">
                                    <p>P. Martínez</p>
                                    <ul class="stars">
                                        <li><img src="assets/images/Star.png" alt="Star"></li>
                                        <li><img src="assets/images/Star.png" alt="Star"></li>
                                        <li><img src="assets/images/Star.png" alt="Star"></li>
                                        <li><img src="assets/images/Star.png" alt="Star"></li>
                                        <li><img src="assets/images/Star.png" alt="Star"></li>
                                    </ul>
                                </div>
                                <div class="new-review-text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id nulla eu libero laoreet 
                                        eleifend vestibulum id metus. Pellentesque malesuada condimentum vulputate. Proin eleifend augue 
                                        sed urna placerat vulputate. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                                        Nullam interdum efficitur tortor, nec vehicula tellus dapibus eu.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" id="slide2">
                            <div class="new-review">
                                <div class="new-review-header">
                                    <p>E. García</p>
                                    <ul class="stars">
                                        <li><img src="assets/images/Star.png" alt="Star"></li>
                                        <li><img src="assets/images/Star.png" alt="Star"></li>
                                        <li><img src="assets/images/Star.png" alt="Star"></li>
                                        <li><img src="assets/images/Star.png" alt="Star"></li>
                                    </ul>
                                </div>
                                <div class="new-review-text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id nulla eu libero laoreet 
                                        eleifend vestibulum id metus. Pellentesque malesuada condimentum vulputate. Proin eleifend augue 
                                        sed urna placerat vulputate. 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" id="slide3">
                            <div class="new-review">
                                <div class="new-review-header">
                                    <p>P. Almodovar</p>
                                    <ul class="stars">
                                        <li><img src="assets/images/Star.png" alt="Star"></li>
                                        <li><img src="assets/images/Star.png" alt="Star"></li>
                                        <li><img src="assets/images/Star.png" alt="Star"></li>
                                        <li><img src="assets/images/Star.png" alt="Star"></li>
                                        <li><img src="assets/images/Star.png" alt="Star"></li>
                                    </ul>
                                </div>
                                <div class="new-review-text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id nulla eu libero laoreet 
                                        eleifend vestibulum id metus. Pellentesque malesuada condimentum vulputate. Proin eleifend augue 
                                        sed urna placerat vulputate. Interdum et malesuada.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

       
        <section class="contact" id="contacto">
            <div class="contact-main-container" id="frame42">                
                <form method="" action="" class="frame51">
                    <div class="header-text">
                        <h3>Te llamamos nosotros.</h3>
                        <p>Resuelve cualquier duda</p>
                    </div>
                    <div class="inputs-container">
                        <div class="inputs-text">
                            <input type="text" name="name" placeholder="Nombre*"/><br>
                            <input type="text" name="phone" placeholder="Teléfono*"/><br>
                        </div>
                        <div class="policy-checkbox">
                            <input type="checkbox" name="privacy-policy"> 
                            <p>He leído y Acepto las <span>condiciones Generales</span> y la <span>Política de privacidad</span></p>
                        </div>
                    </div>                    
                    <a href="#"><button type="submit">Llámame</button></a>  
                </form>
            </div>
        </section>

        <section class="pictures-results">
            <div class="pictures-main-container">                
                <div class="rectagle168">
                    <picture>
                        <source media="(min-width:1040px)" srcset="assets/images/Rectangle168-desktop.webp">
                        <source media="(min-width:850px)" srcset="assets/images/Rectangle168.webp">
                        <source media="(min-width:500px)" srcset="assets/images/Rectangle168.webp">
                        <img src="assets/images/Rectangle168.webp" alt="Paciente sonriendo">
                    </picture> 
                    
                </div>
                <div class="frame79">
                    <div class="frame78">
                        <picture>
                            <source media="(min-width:1040px)" srcset="assets/images/Rectangle172-desktop.webp">
                            <source media="(min-width:850px)" srcset="assets/images/Rectangle172-desktop.webp">
                            <source media="(min-width:500px)" srcset="assets/images/Rectangle172.webp">
                            <img src="assets/images/Rectangle172.webp" alt="Paciente sonriendo">
                        </picture> 
                        <picture>
                            <source media="(min-width:1040px)" srcset="assets/images/Rectangle170-desktop.webp">
                            <source media="(min-width:850px)" srcset="assets/images/Rectangle170-desktop.webp">
                            <source media="(min-width:500px)" srcset="assets/images/Rectangle170.webp">
                            <img src="assets/images/Rectangle170.webp" alt="Paciente sonriendo">
                        </picture> 
                        
                    </div>
                    <div class="rectangle171">
                        <picture>
                            <source media="(min-width:1040px)" srcset="assets/images/Rectangle171-desktop.webp">
                            <source media="(min-width:850px)" srcset="assets/images/Rectangle171-desktop.webp">
                            <source media="(min-width:500px)" srcset="assets/images/Rectangle171.webp">
                            <img src="assets/images/Rectangle171.webp" alt="Paciente sonriendo">
                        </picture> 
                        
                    </div>
                </div>    
            </div>
        </section> 

        <?php endwhile; ?>
        
    <?php endif; ?>  <!--endif (have_rows('seccionesHome'))-->

</main>



<?php get_footer(); ?>
