<?php
get_header(); ?>
<?php while( have_posts() ) : the_post(); ?>


<img class="d-block w-100"
              src="
              <?php the_field('banner_superior_articulo'); ?>"
              alt="no hay imagen"
            />


<h1>Etiqueta de Articulos en Visual studio</h1>







<?php endwhile; 