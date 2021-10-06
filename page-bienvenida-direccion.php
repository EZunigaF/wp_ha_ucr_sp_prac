<?php get_header(); ?>

<?php while( have_posts() ) : the_post(); ?>


<h1>
<?php the_field('titulo_bienvenida'); ?>
</h1>

<p>
<?php the_field('cuerpo_bienvenida'); ?>
</p>


<?php endwhile;