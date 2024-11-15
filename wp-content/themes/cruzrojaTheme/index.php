<?php

get_header();

if(have_posts()){
    while(have_posts()){
        the_post();
        the_title();
        the_content();
    }    
}
else{
    echo "No se ha encontrado el contenido deseado.";
}

get_footer();






//echo "<h1>";
// the_title();
// echo "</h1>";

// $titulo = get_the_title();
// echo "<h1>".$titulo."</h1>" ;
// ?>

<!-- <div>
     <?php //the_content(); ?>
 </div> 
 -->

