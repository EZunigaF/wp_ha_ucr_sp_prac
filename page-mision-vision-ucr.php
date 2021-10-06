<?php get_header(); ?>

<?php while( have_posts() ) : the_post(); ?>

<h2>Misión</h2>
<p><?php the_field('mision_ucr'); ?>"</p>

<h2>Visión</h2>
<p><?php the_field('vision_ucr'); ?>"</p>








<?php endwhile;