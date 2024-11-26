<?php     
    $nosotrosData = get_sub_field('nosotros');
?>

<section class="nosotros" id="nosotros">
    <div class="main-container">
        <div class="acordeon">
            <input type="checkbox" name="acordeon" id="btn-nosotros" class="btn-acordeon">
            <label for="btn-nosotros">
                <h3><?php echo esc_html($nosotrosData['titulo']); ?></h3>
                <div class="frame91">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/caretDown.png" alt="caretDown">                            
                </div>
            </label>
            <div class="contenido-acordeon">
                <p><?php echo $nosotrosData['texto']; ?></p>                  
            </div>
        </div>
    </div>
</section>