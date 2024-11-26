<?php 

$encabezado = get_sub_field('mensaje');
$boton = get_field('botonSolicitar');
$url = $boton['url'];
$textoEnlace = $boton['title'];
$target = $boton['target']; // Obtener el target del enlace si está definido

?>

<section class="budget" id="presupuesto">
    <div class="budget-container">
        <p><?php echo esc_html($encabezado); ?></p>
        <a href="<?php echo esc_url($url); ?>" target="<?php echo esc_attr($target); ?>"><button><?php echo esc_html($textoEnlace); ?></button></a>
    </div>
</section>