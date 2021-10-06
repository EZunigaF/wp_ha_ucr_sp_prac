<?php get_header(); ?>

<?php while( have_posts() ) : the_post(); ?>


<h1>
<?php the_field('titulo_diagrama_organizacion'); ?>
</h1>

<img class="d-block w-100 p-5"
              src="
              <?php the_field('multimedia_imagen_diagrama_de_la_organizacion'); ?>"
              alt="Diagrama Organizacional UCR-SP"
            />

<p>
<?php the_field('texto_adicional_diagrama'); ?>
</p>



<?php endwhile;