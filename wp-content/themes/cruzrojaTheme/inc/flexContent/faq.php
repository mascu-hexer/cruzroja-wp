<?php
$encabezado = get_sub_field('encabezado');
$acordeonFAQ = get_sub_field('acordeonFAQ');
?>

<section class="faq">
    <div class="faq-main-container">
        <div class="faq-header">
            <p><?php echo esc_html($encabezado); ?></p>
        </div>

        <?php
        if (!empty($acordeonFAQ)):
            foreach ($acordeonFAQ as $index => $question): ?>
                <div class="faq-acordeon-container">
                    <div class="acordeon">
                        <input type="checkbox" name="acordeon" id="acordeon-<?php echo $index; ?>" class="btn-acordeon">
                        <label for="acordeon-<?php echo $index; ?>">
                            <p><?php echo esc_html($question['pregunta']); ?></p>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/caretDownRed.png" alt="caretDownRed">
                        </label>
                        <div class="contenido-acordeon">
                            <p><?php echo esc_html($question['respuesta']); ?></p>
                        </div>
                    </div>            
                </div>
            <?php endforeach;
        endif; ?>
    </div>
</section>