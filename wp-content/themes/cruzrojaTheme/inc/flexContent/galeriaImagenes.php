<section class="pictures-results">
    <div class="pictures-main-container">
        <?php
        if (have_rows('galeria')): 
            $imagenes = [];
            
            while (have_rows('galeria')): 
                the_row(); 
                $imagenes[] = get_sub_field('imagenes'); 
            endwhile; 
            
            // Verificar si hay imágenes suficientes para el diseño
            if (!empty($imagenes)): ?>
                <div class="rectangle168">
                    <picture>                        
                        <?php if (isset($imagenes[0])): ?>
                            <source media="(min-width:700px)" srcset="<?php echo esc_url($imagenes[0]['desktop']['url']); ?>">
                            <source media="(min-width:500px)" srcset="<?php echo esc_url($imagenes[0]['mobile']['url']); ?>">
                            <img src="<?php echo esc_url($imagenes[0]['mobile']['url']); ?>" alt="<?php echo esc_attr($imagenes[0]['desktop']['alt']); ?>">
                        <?php endif; ?>
                    </picture>
                </div>
                
                <div class="frame79">
                    <div class="frame78">
                        <picture>
                            <?php if (isset($imagenes[1])): ?>
                                <source media="(min-width:700px)" srcset="<?php echo esc_url($imagenes[1]['desktop']['url']); ?>">
                                <source media="(min-width:500px)" srcset="<?php echo esc_url($imagenes[1]['mobile']['url']); ?>">
                                <img src="<?php echo esc_url($imagenes[1]['mobile']['url']); ?>" alt="<?php echo esc_attr($imagenes[1]['desktop']['alt']); ?>">
                            <?php endif; ?>
                        </picture>
                        <picture>
                            <?php if (isset($imagenes[2])): ?>
                                <source media="(min-width:700px)" srcset="<?php echo esc_url($imagenes[2]['desktop']['url']); ?>">
                                <source media="(min-width:500px)" srcset="<?php echo esc_url($imagenes[2]['mobile']['url']); ?>">
                                <img src="<?php echo esc_url($imagenes[2]['mobile']['url']); ?>" alt="<?php echo esc_attr($imagenes[2]['desktop']['alt']); ?>">
                            <?php endif; ?>
                        </picture>
                    </div>
                    
                    <div class="rectangle171">
                        <picture>
                            <?php if (isset($imagenes[3])): ?>
                                <source media="(min-width:700px)" srcset="<?php echo esc_url($imagenes[3]['desktop']['url']); ?>">
                                <source media="(min-width:500px)" srcset="<?php echo esc_url($imagenes[3]['mobile']['url']); ?>">
                                <img src="<?php echo esc_url($imagenes[3]['mobile']['url']); ?>" alt="<?php echo esc_attr($imagenes[3]['desktop']['alt']); ?>">
                            <?php endif; ?>
                        </picture>
                    </div>
                </div>
            <?php endif; 
        endif; ?>
    </div>
</section>
