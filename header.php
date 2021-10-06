<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    /> -->

    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/0f5da7a719.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <title><?php if (is_home()) {
                echo get_bloginfo('name');
            } ?></title><!-- title -->

    <?php wp_head(); ?>

  </head>
  <body>
    <header class="container-fluid sticky-top bg-light">
      <div class="row">
        <!-- HEADER de la pagina (logo y el buscador) -->
        <div class="col-6 col-lg-12 d-flex justify-content-between px-1 px-md-5 py-2">
          <a class="logo" href="https://www.srp.ucr.ac.cr/">
            <img
              src="<?php bloginfo('template_url'); ?>/assets/logo-header-version-2.1.png"
              alt="Logo de la UCR"
            />
          </a>
          <form class="d-none d-lg-flex buscador-container">
            <input
              type="search"
              class="form-control buscador"
              placeholder="Search"
              aria-label="Search"
            />
            <span
              class="input-group-text buscador-icon"
              id="inputGroup-sizing-default"
              ><i class="fas fa-search"></i
            ></span>
          </form>
        </div>
        <!-- Fin del HEADER -->

        <!-- NAV de la pagina -->

        <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
            
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
              <span class="navbar-toggler-icon"></span>
          </button>

          <a class="navbar-brand" href="#">Navbar</a>
              <?php
              wp_nav_menu( array(
                  'theme_location'    => 'primary',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse',
                  'container_id'      => 'bs-example-navbar-collapse-1',
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'            => new WP_Bootstrap_Navwalker(),
              ) );
              ?>
          </div>
      </nav>
        <!-- fin NAV de la pagina -->
      </div>
    </header>




    