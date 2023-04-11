<?php

while( have_posts() ): the_post();
                
    the_title('<h1 class="text-center text-primary">','</h1>');
    if(has_post_thumbnail()){ //Si tiene imagen destacada, has esto...
        the_post_thumbnail('full', array('class' => 'imagen-destacada'));
    }                 //Tamaño de img

    $hora_inicio = get_field('hora_inicio');
    $hora_fin = get_field('hora_fin');
?>
    <p class="informacion-clase">
        <?php the_field('dias__clase'); ?> - <?php echo $hora_inicio . " a " . $hora_fin; ?>
    </p>
<?php
    the_content();
endwhile;
?>