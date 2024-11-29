<?php 
$encabezado = get_sub_field('encabezado');
?>

<section class="contact">
    <div class="contact-main-container" id="contact">                
        <form method="" action="" class="frame51">
            
            <div class="header-text">
                <h3><?php echo esc_html($encabezado['line1']); ?></h3>
                <p><?php echo esc_html($encabezado['line2']); ?></p>
            </div>
            
            <div class="inputs-container">
                <?php echo do_shortcode(get_sub_field('shortcodeFormulario')); ?>
                <a href="#"><button type="submit">Llámame</button></a>  
            </div>   

        </form>
    </div>
</section>