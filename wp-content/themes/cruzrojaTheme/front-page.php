<?php get_header(); ?>


<main class="Main">

    <?php
        if ( have_posts() )
        {
        while ( have_posts())
        {
            the_post();
            ?>
            <div class="home-content">
                <div class="the-content">
                    <?php the_content(); 
                    
                    include 'inc/flexContent/flexContentController.php';

                    ?>
                </div>
            </div>
            <?php
        }
        }
        ?>


    <?php /*
    
    <?php mostrar_secciones_flexibles( $post ); ?>

      
        
        

       
        

        <section class="pictures-results">
            <div class="pictures-main-container">                
                <div class="rectagle168">
                    <picture>
                        <source media="(min-width:1040px)" srcset="assets/images/Rectangle168-desktop.webp">
                        <source media="(min-width:850px)" srcset="assets/images/Rectangle168.webp">
                        <source media="(min-width:500px)" srcset="assets/images/Rectangle168.webp">
                        <img src="assets/images/Rectangle168.webp" alt="Paciente sonriendo">
                    </picture> 
                    
                </div>
                <div class="frame79">
                    <div class="frame78">
                        <picture>
                            <source media="(min-width:1040px)" srcset="assets/images/Rectangle172-desktop.webp">
                            <source media="(min-width:850px)" srcset="assets/images/Rectangle172-desktop.webp">
                            <source media="(min-width:500px)" srcset="assets/images/Rectangle172.webp">
                            <img src="assets/images/Rectangle172.webp" alt="Paciente sonriendo">
                        </picture> 
                        <picture>
                            <source media="(min-width:1040px)" srcset="assets/images/Rectangle170-desktop.webp">
                            <source media="(min-width:850px)" srcset="assets/images/Rectangle170-desktop.webp">
                            <source media="(min-width:500px)" srcset="assets/images/Rectangle170.webp">
                            <img src="assets/images/Rectangle170.webp" alt="Paciente sonriendo">
                        </picture> 
                        
                    </div>
                    <div class="rectangle171">
                        <picture>
                            <source media="(min-width:1040px)" srcset="assets/images/Rectangle171-desktop.webp">
                            <source media="(min-width:850px)" srcset="assets/images/Rectangle171-desktop.webp">
                            <source media="(min-width:500px)" srcset="assets/images/Rectangle171.webp">
                            <img src="assets/images/Rectangle171.webp" alt="Paciente sonriendo">
                        </picture> 
                        
                    </div>
                </div>    
            </div>
        </section> 

        <?php endwhile; ?>
        
    <?php endif; ?>  <!--endif (have_rows('seccionesHome'))-->

    */
    ?>
</main>



<?php get_footer(); ?>
