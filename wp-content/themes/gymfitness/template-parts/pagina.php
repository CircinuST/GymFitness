<?php

while( have_posts() ): the_post();
                
    the_title('<h1 class="text-center text-primary">','</h1>');
    if(has_post_thumbnail()){ //Si tiene imagen destacada, has esto...
        the_post_thumbnail('full', array('class' => 'imagen-destacada'));
    }                 //Tamaño de img

    the_content();
endwhile;
?>