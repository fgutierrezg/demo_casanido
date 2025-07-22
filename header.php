<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Casa Nido</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="guardería, escuela de lenguaje, Casa Nido, cuidado infantil, educación preescolar, estimulación temprana, desarrollo infantil, aprendizaje, niños, maternal, jardín de niños, actividades educativas, juegos, curico" name="keywords">
        <meta content="Casa Nido es una guardería y escuela de lenguaje dedicada al cuidado, educación y desarrollo integral de los niños, ofreciendo programas de estimulación temprana, aprendizaje y actividades educativas en un ambiente seguro y amoroso." name="description">

        <?php wp_head(); ?>

    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid border-bottom bg-light wow fadeIn" data-wow-delay="0.1s">
            <div class="container topbar bg-primary d-none d-lg-block py-2" style="border-radius: 0 40px">
                <div class="d-flex justify-content-between">
                    <div class="top-info ps-2">
                        <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#" class="text-white">Francisco Bilbao 320, Curicó</a></small>
                        <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="mailto:mpalma@casanidoguarderia.cl" class="text-white">mpalma@casanidoguarderia.cl</a></small>
                    </div>
                    <div class="top-link pe-2">
                        <a href="https://www.instagram.com/casanido_afterschool" title="Afterschool" target="_blank" class="btn btn-light btn-sm-square rounded-circle"><i class="fab fa-instagram text-secondary"></i></a>
                        <a href="https://www.instagram.com/casanido_escuela_de_lenguaje" title="Escuela de Lenguaje" target="_blank" class="btn btn-light btn-sm-square rounded-circle"><i class="fab fa-instagram text-secondary"></i></a>
                    </div>
                </div>
            </div>
            <div class="container px-0">
                <nav class="navbar navbar-light navbar-expand-xl py-3">
                    <a href="#inicio" class="navbar-brand d-flex align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/LOGO_CASA_NIDO.png" alt="Logo Casa Nido" class="img-fluid" style="height: 90px; width: auto; max-width: 100%;">
                        <h2 class="fw-bold mt-3"><span class="text-primary mb-0">Casa</span><span class="text-secondary">Nido</span></h2>
                    </a>
                    <button class="navbar-toggler ms-2 px-6" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-label="Menú">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
    <?php
    wp_nav_menu(array(
        'theme_location'  => 'menu-principal',
        'container'       => 'div',
        'menu_class'      => 'navbar-nav',
        'fallback_cb'     => false,
        'depth'           => 1,
        'walker' => new WP_Bootstrap_Navwalker(),
    ));
    ?>
    
    <div class="d-flex ms-auto align-items-center" style="gap: 1rem;">
        <div id="phone-tada" class="d-flex align-items-center justify-content-center">
            <a href="" class="position-relative wow tada" data-wow-delay=".9s">
                <i class="fa fa-phone-alt text-primary fa-2x me-4"></i>
                <div class="position-absolute" style="top: -7px; left: 20px;">
                    <span><i class="fa fa-comment-dots text-secondary"></i></span>
                </div>
            </a>
        </div>
        <div class="d-flex flex-column pe-3">
            <span class="text-primary">Llámanos</span>
            <a href="#"><span class="text-secondary">+569 82718947</span></a>
        </div>
    </div>
</div>

                </nav>
            </div>
        </div>
        <!-- Navbar End -->
