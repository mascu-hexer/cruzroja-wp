<?php 
$doctores = get_sub_field('profesionales');
?>

<section class="doctors">
    <div class="doctors-main-container">
        <picture>            
            <source media="(min-width:700px)" srcset="assets/images/draAboy-desktop.webp">
            <source media="(min-width:500px)" srcset="assets/images/draAboy-mobile.webp">
            <img src="assets/images/draAboy-mobile.webp" alt="Dra. Pilar Aboy">
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
