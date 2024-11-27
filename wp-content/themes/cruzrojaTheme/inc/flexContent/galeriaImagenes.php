<?php
$galeria = get_sub_field('galeria');

if ($galeria): 
?>
<section class="pictures-results">
    <div class="pictures-main-container">                
        <div class="rectangle168">                
            <picture>
                <source media="(min-width:1040px)" srcset="assets/images/Rectangle168-desktop.webp">
                <source media="(min-width:850px)" srcset="assets/images/Rectangle168.webp">
                <source media="(min-width:500px)" srcset="assets/images/Rectangle168.webp">
                <img src="assets/images/Rectangle168.webp" alt="Paciente sonriendo">
            </picture> 
        </div>
        <div class="frame79">
            <div class="frame78">
                <?php
                // Recorre las imágenes de la galería
                foreach ($galeria as $item): 
                    $imagen = $item['imagenes']; // Accede a la imagen
                ?>
                    <picture>
                        <source media="(min-width:1040px)" srcset="<?php echo esc_url($imagen['sizes']['medium_large']); ?>">
                        <source media="(min-width:850px)" srcset="<?php echo esc_url($imagen['sizes']['large']); ?>">
                        <source media="(min-width:500px)" srcset="<?php echo esc_url($imagen['sizes']['medium']); ?>">
                        <img src="<?php echo esc_url($imagen['url']); ?>" alt="<?php echo esc_attr($imagen['alt']); ?>">
                    </picture>
                <?php endforeach; ?>
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
<?php
endif; // Fin de la verificación de la galería
?>