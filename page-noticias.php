<?php
get_header(); ?>

<h1>Etiqueta de Noticias en Visual studio</h1>





<?php
                        //get services preracion de consulta
                        $args = array(
                            'post_type' => 'page',
                            'posts_per_page' => -1,
                            'post_parent' => $post->ID,
                            'order' => 'ASC',
                            'orderby' => 'menu_order'
                        );

                        $the_query = new WP_Query($args);

                        if( $the_query->have_posts() ) :

                            while( $the_query-> have_posts() ) : $the_query->the_post();
                        ?>
        NOTICIA UCR

        <p><?php the_title(); ?></p>

        
        <?php endwhile;
                        else :
                            echo "<p>no content to show here</p>";
                        endif; ?>
        <!-- services -->

       