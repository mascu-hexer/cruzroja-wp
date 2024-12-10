<?php get_header(); ?>


<main class="main">

    <?php
        if ( have_posts() )
        {?>
            <?php while ( have_posts())
                {
                    the_post(); 
                    the_content();                                 
                    include 'inc/flexContent/flexContentController.php';    
                }
                
        } ?>        
   
</main>


<?php get_footer(); ?>





