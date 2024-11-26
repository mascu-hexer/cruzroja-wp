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
                <?php $image = get_field(('imagen'));
                    if( !empty($image) ){
                        $title = $image['title'];
                        $alt = $image['alt'];
                        $alt = ($alt)?$alt:$title; ?>
                        <p>foto</p>
                        <img src="<?php echo $image['url']; ?>" 
                            alt="<?php echo $alt; ?>" 
                            title="<?php echo $title; ?>" />
                    <?php } 
                ?>
            
                <div class="ServiceData">
                    <h3><?php echo esc_html($servicio['titulo']) ?></h3>
                    <p><?php echo esc_html($servicio['descripcion']); ?></p>
                    <a href="<?php echo esc_html($servicio['linkSaberMas']); ?>" target="blank">Saber más</a>
                </div>
            </div>
        </div>
        <?php 
        } 
    }    
    ?>
    </div>
</section>