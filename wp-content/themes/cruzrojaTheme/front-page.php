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
   
</main>


<?php get_footer(); ?>
