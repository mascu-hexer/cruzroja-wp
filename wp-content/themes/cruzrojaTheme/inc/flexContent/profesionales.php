<?php 
$doctores = get_sub_field('profesionales');
$foto = $doctores['imagen'];
?>

<section class="doctors">
    <div class="doctors-main-container">
        <picture>            
            <source media="(min-width:750px)" srcset="<?php echo esc_url($foto['desktop']['url']); ?>">
            <source media="(min-width:500px)" srcset="<?php echo esc_url($foto['mobile']['url']); ?>">
            <img src="<?php echo esc_url($foto['mobile']['url']); ?>" alt="<?php echo esc_url($foto['mobile']['alt']); ?>">
        </picture>
        

        <div class="text-container">
            <div class="doctorInfo">
                <h3><?php echo esc_html($doctores['nombre']); ?></h3>
                <p><?php echo esc_html($doctores['especialidad']); ?></p>
            </div>
            <p><?php echo $doctores['descripcion']; ?></p>
        </div>
    </div>
</section>
