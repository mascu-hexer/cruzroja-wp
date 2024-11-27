<?php 
$doctores = get_sub_field('profesionales');
?>

<section class="doctors">
    <div class="doctors-main-container">
        <!-- <picture>            
            <source media="(min-width:700px)" srcset="assets/images/draAboy-desktop.webp">
            <source media="(min-width:500px)" srcset="assets/images/draAboy-mobile.webp">
            <img src="assets/images/draAboy-mobile.webp" alt="Dra. Pilar Aboy">
        </picture> -->
        <div class="picture">
            <?php $imagen = $doctores['imagen'];

                if( !empty($imagen) ){
                    $title = $imagen['title'];
                    $alt = $imagen['alt'];
                    $alt = ($alt)?$alt:$title; ?>
                    <img src="<?php echo $imagen['url']; ?>" 
                        alt="<?php echo $alt; ?>" 
                        title="<?php echo $title; ?>" />
                <?php }                 
            ?>
        </div>

        <div class="text-container">
            <div class="doctorInfo">
                <h3><?php echo esc_html($doctores['nombre']); ?></h3>
                <p><?php echo esc_html($doctores['especialidad']); ?></p>
            </div>
            <p><?php echo $doctores['descripcion']; ?></p>
        </div>
    </div>
</section>
