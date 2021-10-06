<?php get_header(); ?>

<?php while( have_posts() ) : the_post(); ?>

<h1>Principal </h1>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img class="d-block w-100"
              src="<?php the_field('carrusel_imagen_1'); ?>"
              alt="Hawaii 1"
              href="<div class=""><p><?php the_content(); ?></p></div>"
            />
    </div>
    <div class="carousel-item">
          <img
              class="d-block w-100"
              src="<?php the_field('carrusel_imagen_2'); ?>"
              alt="Hawaii 2"
            />
    </div>
    <div class="carousel-item">
    <img class="d-block w-100"
              src="<?php the_field('carrusel_imagen_3'); ?>"
              alt="Hawaii 1"
            />
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Principal
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">

         
        
    </div>
  </div>

<!-- <aside class="col-3 col-sm-6 col-lg-2 mt-sm-5 pt-5 enlaces">
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
        </aside> -->

        <div class=""><p><?php the_content(); ?></p></div>

<?php endwhile; 


