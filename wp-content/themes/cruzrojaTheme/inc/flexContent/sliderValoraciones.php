<?php 
$encabezado = get_sub_field('encabezado');
$slider = get_sub_field('slider');

/* echo '<pre>';
echo var_dump($slider);
echo '</pre>'; */
?>

<section class="reviews-slider">
            <div class="reviews-header">                
                <p><?php echo esc_html($encabezado); ?></p>                
            </div> 
            <div class="wrap-swiper">           
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <?php 
                        if(!empty($slider)): 
                            foreach($slider as $index => $slide): ?>
                                <div class="swiper-slide" id="slide_<?php echo $index; ?>">
                                    <div class="new-review">
                                        <div class="new-review-header">
                                            <p><?php echo esc_html($slide['nombre']); ?></p>  
                                            <ul class="stars">
                                                <?php 
                                                $puntuacion = intval($slide['puntuacion']);
                                                for ($i = 0; $i < $puntuacion; $i++): ?>
                                                    <li><img src="<?php echo get_template_directory_uri();?>/assets/images/star.png"
                                                     alt="Puntuación"></li>
                                                <?php endfor; ?>
                                            </ul>
                                        </div>
                                        <div class="new-review-text">
                                            <p><?php echo $slide['valoracion']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;
                        endif; ?>
                    </div>
                    
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>