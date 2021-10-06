<?php get_header(); ?>
<!-- banners -->
 <!-- banners -->
 <section class="container-fluid d-flex p-0 mt-3 mt-lg-4">
      <div
        id="carousel"
        class="carousel slide carousel-fade"
        data-ride="carousel"
        data-pause="false"
      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              class="d-block w-100"
              src="<?php bloginfo('template_url'); ?>/assets/banner_Facebook_portada.jpg"
              alt="Hawaii 1"
            />
          </div>
          <div class="carousel-item">
            <img
              class="d-block w-100"
              src="<?php bloginfo('template_url'); ?>/assets/banner_GalardonV2.png"
              alt="Hawaii 2"
            />
          </div>
          <div class="carousel-item">
            <img
              class="d-block w-100"
              src="<?php bloginfo('template_url'); ?>/assets/banner_JerusalemaBanner_0.jpg"
              alt="Hawaii 3"
            />
          </div>
          <div class="carousel-item">
            <img
              class="d-block w-100"
              src="<?php bloginfo('template_url'); ?>/assets/banner_noticia_barranca.png"
              alt="Hawaii 3"
            />
          </div>
        </div>
      </div>
    </section>
    <!-- fin banners -->

    <section class="container-fluid px-sm-5">
      <div class="row">
        <aside class="col-3 col-sm-6 col-lg-2 mt-sm-5 pt-5 enlaces">
          <ul class="list-group">
            <li class="list-group-item list-group-item-action alineado no-borde">
              <i class="fas fa-laptop mr-sm-2 fs-4 fs-sm-5"></i
              ><a href="#" class="d-none d-sm-inline">Información general de la Sede del Pacífico</a>
            </li>
            <li class="list-group-item list-group-item-action alineado">
              <i class="fas fa-laptop mr-sm-2 fs-4 fs-sm-5"></i><a href="#" class="d-none d-sm-inline">Oferta Académica</a>
            </li>
            <li class="list-group-item list-group-item-action alineado">
              <i class="fas fa-laptop mr-sm-2 fs-4 fs-sm-5"></i
              ><a href="#" class="d-none d-sm-inline">Instalaciones en Esparza</a>
            </li>
            <li class="list-group-item list-group-item-action alineado">
              <i class="fas fa-laptop mr-sm-2 fs-4 fs-sm-5"></i
              ><a href="#" class="d-none d-sm-inline">Normativas Universitarias</a>
            </li>
            <li class="list-group-item list-group-item-action alineado">
              <i class="fas fa-laptop mr-sm-2 fs-4 fs-sm-5"></i
              ><a href="#" class="d-none d-sm-inline">Comentarios y Sugerencias</a>
            </li>
          </ul>
        </aside>
        <article class="col-9 col-sm-6 col-lg-4 mt-3 mt-sm-5 noticia">
          <h2 class="titulo-seccion">Noticias</h2>
          <img
            src="<?php bloginfo('template_url'); ?>/assets/noticias_Jimmy.jpg"
            alt="noticias_Jimmy"
            class="noticia-img"
          />
        </article>
        <div class="col-3 d-sm-none"></div>
        <article class="col-9 col-sm-6 col-lg-4 mt-sm-5 actividad">
          <h2 class="titulo-seccion">Actividades</h2>
          <img
            src="<?php bloginfo('template_url'); ?>/assets/noticias_Jimmy.jpg"
            alt="noticias_Jimmy"
            class="actividad-img"
          />
        </article>
        <aside class="col-12 col-sm-6 col-lg-2 mt-3 mt-sm-5 enlaces">
          <h3>Calendario</h3>
          <ul class="list-group">
            <li class="list-group-item d-flex mb-4 actividad-contenedor">
              <div class="fecha"><span>24</span>Ago</div>
              <div class="actividad-texto text-wrap">Maestría Virtual</div>
            </li>
            <li class="list-group-item d-flex mb-4 actividad-contenedor">
              <div class="fecha"><span>03</span>Sep</div>
              <div class="actividad-texto text-wrap">Juramentación</div>
            </li>
            <li class="list-group-item d-flex mb-4 actividad-contenedor">
              <div class="fecha"><span>20</span>Oct</div>
              <div class="actividad-texto text-wrap">Congreso</div>
            </li>
            <li class="list-group-item d-flex mb-4 actividad-contenedor">
              <div class="fecha"><span>10</span>Nov</div>
              <div class="actividad-texto text-wrap">Charla</div>
            </li>
          </ul>
        </aside>
      </div>
    </section>

<?php get_footer(); ?>

<?php
                                wp_nav_menu( array(
                                    'theme_location'    => 'primary',
                                    'depth'             => 2,
                                    'container'         => 'div',
                                    'container_class'   => '',
                                    'container_id'      => '',
                                    'menu_class'        => 'navbar-nav mr-auto',
                                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker'            => new WP_Bootstrap_Navwalker()
                                ) );
                            ?>