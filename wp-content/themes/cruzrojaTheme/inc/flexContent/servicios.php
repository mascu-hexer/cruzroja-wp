<?php             
    $encabezado = get_sub_field('encabezado');
    $listaServicios = get_sub_field('listaServicios');
    
?>

<section class="servicios">
    <div class="servicios-header">
        <p><?php echo esc_html($encabezado); ?></p> 
    </div>
    <div class="servicios-main-container">

    <?php 
    if(!empty($listaServicios)){   
        foreach($listaServicios as $servicio){ ?>
        
        <div class="servicio">
            <div class="servicioContent">
                <?php $imagen = $servicio['imagen'];

                    if( !empty($imagen) ){
                        $title = $imagen['title'];
                        $alt = $imagen['alt'];
                        $alt = ($alt)?$alt:$title; ?>
                        <img src="<?php echo $imagen['url']; ?>" 
                            alt="<?php echo $alt; ?>" 
                            title="<?php echo $title; ?>" />
                    <?php }                 
                ?>
            
                <div class="ServiceData">
                    <h3><?php echo esc_html($servicio['titulo']) ?></h3>
                    <p><?php echo esc_html($servicio['descripcion']); ?></p>

                    <?php $link = $servicio['linkSaberMas']; ?>

                    <a href="<?php echo esc_html($link['url']); ?>" target="blank">
                        <?php echo esc_html($link['title']) ?>                        
                    </a>
                </div>
            </div>
        </div>
        <?php 
        } 
    }    
    ?>
    </div>
</section>