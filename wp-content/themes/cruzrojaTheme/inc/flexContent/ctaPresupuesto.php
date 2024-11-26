<?php 

$encabezado = get_sub_field('mensaje');
$boton = get_sub_field('botonSolicitar');

?>

<section class="budget" id="presupuesto">
    <div class="budget-container">
        <p><?php echo esc_html($encabezado); ?></p>
        <a href="<?php echo esc_url($url); ?>" target="<?php echo esc_html($boton['target']); ?>">
            <button><?php echo esc_html($boton['title']); ?></button>
        </a>
    </div>
</section>

