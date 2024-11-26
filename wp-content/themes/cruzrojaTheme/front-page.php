<?php get_header(); ?>


<main class="Main">

    <?php
        if ( have_posts() )
        {
        while ( have_posts())
        {
            the_post();
            ?>
            <div class="home-content">
                <div class="the-content">
                    <?php the_content(); 
                    
                    include 'inc/flexContent/flexContentController.php';

                    ?>
                </div>
            </div>
            <?php
        }
        }
        ?>


    <?php /*
    
    <?php mostrar_secciones_flexibles( $post ); ?>

    

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

    */
    ?>
</main>



<?php get_footer(); ?>
