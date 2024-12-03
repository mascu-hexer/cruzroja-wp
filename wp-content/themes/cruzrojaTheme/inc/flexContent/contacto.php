<?php 
$encabezado = get_sub_field('encabezado');
?>

<section class="contact">
    <div class="contact-main-container" id="contact">                
        <div class="frame51">
            
            <div class="header-text">
                <h3><?php echo esc_html($encabezado['line1']); ?></h3>
                <p><?php echo esc_html($encabezado['line2']); ?></p>
            </div>
            
            <div class="inputs-container">
                <?php echo do_shortcode(get_sub_field('shortcodeFormulario')); ?>                
            </div>   

        </div>
    </div>
</section>