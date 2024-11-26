<?php

// Check value exists.
if( have_rows('seccionesHome') ){
    while ( have_rows('seccionesHome') ) {
        the_row();
        
        switch(get_row_layout()){
            case 'formulario':
                include 'formulario.php';
                break;
            case 'servicios':
                include 'servicios.php';
                break;
            case 'nosotros':
                include 'nosotros.php';
                break;
            case 'profesionales':
                include 'profesionales.php';
                break;
            case 'bannerPresupuesto':
                include 'ctaPresupuesto.php';
                break;
            /* case 'faq':
                include 'faq.php';
                break;
            case 'reviewsSlider':
                include 'reviewsSlider.php';
                break;
            case 'contact':
                include 'contact.php';
                break;
            case 'galeriaImagenes':
                include 'galeriaImagenes.php'
                break; */
        }
    } 
}

else {

}

    