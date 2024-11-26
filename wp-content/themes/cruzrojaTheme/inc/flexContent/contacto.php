<?php 
$encabezado = get_sub_field('encabezado');
$formulario = get_sub_field('shortcodeFormulario');
?>
<section class="contact">
    <div class="contact-main-container" id="frame42">                
        <form method="" action="" class="frame51">
            <div class="header-text">
                <h3><?php echo esc_html($encabezado['line1']); ?></h3>
                <p><?php echo esc_html($encabezado['line2']); ?></p>
            </div>
            <div class="inputs-container">
                <?php echo do_shortcode($formulario); ?>
                <a href="#"><button type="submit">Llámame</button></a>  
            </div>                    
        </form>
    </div>
</section>