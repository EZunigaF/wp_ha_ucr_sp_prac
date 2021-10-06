<?php get_header(); ?>

<?php while( have_posts() ) : the_post(); ?>

<h1>
<?php the_field('titulo_historia_ucrsp'); ?>
</h1>

<p>
<?php the_field('fechas_historia_ucrsp'); ?>
</p>

<p>
<?php the_field('cuerpo_de_texto_historia_ucrsp'); ?>
</p>


<?php endwhile;