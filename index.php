

    <?php get_header(); ?>

 
            <!-- Secciones para single page -->
    <section id="inicio">
    <!-- Hero Carousel Start -->
    <div class="container-fluid px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel hero-carousel">
            <!-- Slide 1 -->
            <div class="hero-slide position-relative" style="height: 85vh; background-image: url('<?php echo get_template_directory_uri(); ?>/img/carrousel_1.jpg'); background-size: cover; background-position: center;">
                <div class="container h-100 d-flex align-items-center">
                    <div class="row g-5">
                        <div class="col-lg-7 col-md-12">
                            <h1 style="background: rgba(0,0,0,0.5); border-radius: 20px; padding: 3px; display: inline-block;" class="mb-3 text-primary fw-bold">Bienvenidos a Casa Nido</h1>
                            <h2 style="background: rgba(0,0,0,0.5); border-radius: 20px; padding: 3px; display: inline-block;" class="mb-5 display-2 text-white">Un lugar para aprender, jugar y crecer</h2>
                            <a href="#contacto" class="btn btn-primary px-4 py-3 px-md-5 me-4 btn-border-radius">Contáctanos</a>
                            <a href="#programas" class="btn btn-primary px-4 py-3 px-md-5 btn-border-radius">Saber más</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="hero-slide position-relative" style="height: 85vh; background-image: url('<?php echo get_template_directory_uri(); ?>/img/carrousel_2.jpg'); background-size: cover; background-position: center;">
                <div class="container h-100 d-flex align-items-center">
                    <div class="row g-5">
                        <div class="col-lg-7 col-md-12">
                            <h1 style="background: rgba(0,0,0,0.5); border-radius: 20px; padding: 3px; display: inline-block;" class="mb-3 text-primary fw-bold">Explora y aprende</h1>
                            <h2 style="background: rgba(0,0,0,0.5); border-radius: 20px; padding: 3px; display: inline-block;" class="mb-5 display-2 text-white">Un espacio seguro para crecer</h2>
                            <a href="#contacto" class="btn btn-primary px-4 py-3 px-md-5 me-4 btn-border-radius">Contáctanos</a>
                            <a href="#programas" class="btn btn-primary px-4 py-3 px-md-5 btn-border-radius">Saber más</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="hero-slide position-relative" style="height: 85vh; background-image: url('<?php echo get_template_directory_uri(); ?>/img/carrousel_3.jpg'); background-size: cover; background-position: center;">
                <div class="container h-100 d-flex align-items-center">
                    <div class="row g-5">
                        <div class="col-lg-7 col-md-12">
                            <h1 style="background: rgba(0,0,0,0.5); border-radius: 20px; padding: 3px; display: inline-block;" class="mb-3 text-primary fw-bold">Juega con alegría</h1>
                            <h2 style="background: rgba(0,0,0,0.5); border-radius: 20px; padding: 3px; display: inline-block;" class="mb-5 display-2 text-white">Momentos felices todos los días</h2>
                            <a href="#contacto" class="btn btn-primary px-4 py-3 px-md-5 me-4 btn-border-radius">Contáctanos</a>
                            <a href="#programas" class="btn btn-primary px-4 py-3 px-md-5 btn-border-radius">Saber más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
    <!-- Hero Carousel End -->
</section>

        <section id="sobre-nosotros">
            <!-- About Start -->
            <div class="container-fluid py-5 about bg-light">
                <div class="container py-5">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                            <div class="video border">
                                <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                    <span></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-7 wow fadeIn" data-wow-delay="0.3s">
                            <h1 class="display-6 text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Sobre Nosotros</h1>
                            <h4 class="text-dark mb-4 display-5">Construimos juntos un futuro brillante para tus hijos</h4>
                            <p class="text-dark mb-4">Casa Nido nace cómo un lugar de apoyo a las familias en el cuidado de sus hijos(as) en su primera infancia, con la finalidad de ayudar a los padres a criar niños y niñas felices y que las vivencias que experimenten aquí queden impregnadas de una manera global en todo su ser.</p>
                            <div class="row mb-4">
                                <div class="col-lg-6">
                                    <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Actividades deportivas</h6>
                                    <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Juegos al aire libre</h6>
                                    <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-secondary"></i>Estimulación temprana</h6>
                                </div>
                                <div class="col-lg-6">
                                    <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Alta seguridad</h6>
                                    <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Ambiente amigable</h6>
                                    <h6><i class="fas fa-check-circle me-2 text-secondary"></i>Docentes calificados</h6>
                                </div>
                            </div>
                            <a href="#contacto" class="btn btn-primary px-5 py-3 btn-border-radius">Más detalles</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Video -->
            <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content rounded-0">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Video de Youtube</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                        </div>
                        <div class="modal-body">
                            <!-- 16:9 aspect ratio -->
                            <div class="ratio ratio-16x9">
                                <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                    allow="autoplay"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->
        </section>

                <section id="programas">
            <!-- Programs Start -->
            <div class="container-fluid program  py-5">
                <div class="container py-5">
                    <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                        <h1 class="display-6 text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Nuestros Programas</h1>
                        <h4 class="mb-5 display-4">Ofrecemos dos programas exclusivos para niños y niñas</h4>
                    </div>
                    <div class="row g-5 justify-content-center">
       
                        <div class="col-md-6 col-lg-6 col-xl-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="program-item rounded">
                                <div class="program-img position-relative">
                                    <div class="overflow-hidden img-border-radius">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/escuela_lenguaje.jpg" class="img-fluid w-100" alt="Image">
                                    </div>
                                    <div class="px-2 py-2 bg-primary text-white program-rate">Lunes a viernes</div>
                                </div>
                                <div class="program-text bg-white px-4 pb-3">
                                    <div class="program-text-inner">
                                        <a href="#" class="h4">Casa Nido Escuela de Lenguaje</a>
                                        <p class="mt-3 mb-0">Desde el 2025, La escuela de Lenguaje Casa Nido opera en modalidad Particular, contando con Reconocimiento Oficial, <strong>RBD 42382</strong>, que autoriza a impartir enseñanza en educación parvularia, modalidad educación especial y trastorno específico del lenguaje.</p>
                                    </div>
                                </div>
                                <div class="program-teacher d-flex align-items-center border-top border-primary bg-white px-4 py-3">
                                    <div class="ms-3">
                                          <h6 class="mb-0 text-primary">Yolanda Palma</h6>
                                        <small>Directora</small>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between px-4 py-2 bg-primary rounded-bottom">
                                    <small class="text-white"><i class="fas fa-users me-1"></i> 30 cupos</small>
                                    <small class="text-white"><i class="fas fa-clock me-1"></i> Jornada 08:15 - 12:15 hrs (hasta las 14:00 hrs horario extendido)</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="program-item rounded">
                                <div class="program-img position-relative">
                                    <div class="overflow-hidden img-border-radius">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/after_school.jpg" class="img-fluid w-100" alt="Image">
                                    </div>
                                    <div class="px-2 py-2 bg-primary text-white program-rate">Lunes a viernes</div>
                                </div>
                                <div class="program-text bg-white px-4 pb-3">
                                    <div class="program-text-inner">
                                        <a href="#" class="h4">Casa Nido Afterschool</a>
                                        <p class="mt-3 mb-0">Desde el 2022, funcionamos como una red de apoyo para las familias que por trabajo u otra obligación necesitan ayuda en el cuidado y educación de sus hijos (as) en un ambiente familiar, seguro, afectivo y confiable.</p>
                                    
                                    </div>
                                </div>
                                <div class="program-teacher d-flex align-items-center border-top border-primary bg-white px-4 py-3">
                                    <div class="ms-3">
                                        <h6 class="mb-0 text-primary">Yolanda Palma</h6>
                                        <small>Directora</small>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between px-4 py-2 bg-primary rounded-bottom">
                                    <small class="text-white"><i class="fas fa-users me-1"></i> 30 cupos</small>
                                    <small class="text-white"><i class="fas fa-clock me-1"></i> Jornada 14:00 - 19:00 hrs</small>
                                </div>
                            </div>
                        </div>
                
                    </div> 
                </div>
            </div>
            <!-- Program End -->
        </section>


        <section id="servicios">
            <!-- Service Start -->
            <div class="container-fluid service py-5">
                <div class="container py-5">
                    <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                        <h1 class="display-6 text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">¿Qué hacemos?</h1>
                        <h4 class="mb-5 display-4">Gracias por comenzar con nuestra escuela</h4>
                    </div>
                    <div class="row g-5">
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                            <div class="text-center border-primary border bg-white service-item">
                                <div class="service-content d-flex align-items-center justify-content-center p-4">
                                    <div class="service-content-inner">
                                        <div class="p-4"><i class="fas fa-gamepad fa-6x text-primary"></i></div>
                                        <a href="#" class="h4">Estudio y Juego</a>
                                        <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, culpa qui officiis animi Lorem ipsum dolor sit amet, 
                                            consectetur adipisicing elit.</p>
                                        <a href="#" class="btn btn-primary text-white px-4 py-2 my-2 btn-border-radius">Leer más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                            <div class="text-center border-primary border bg-white service-item">
                                <div class="service-content d-flex align-items-center justify-content-center p-4">
                                    <div class="service-content-inner">
                                        <div class="p-4"><i class="fas fa-sort-alpha-down fa-6x text-primary"></i></div>
                                        <a href="#" class="h4">Programas de la A a la Z</a>
                                        <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, culpa qui officiis animi Lorem ipsum dolor sit amet, 
                                            consectetur adipisicing elit.</p>
                                        <a href="#" class="btn btn-primary text-white px-4 py-2 my-2 btn-border-radius">Leer más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                            <div class="text-center border-primary border bg-white service-item">
                                <div class="service-content d-flex align-items-center justify-content-center p-4">
                                    <div class="service-content-inner">
                                        <div class="p-4"><i class="fas fa-users fa-6x text-primary"></i></div>
                                        <a href="#" class="h4">Docentes Expertos</a>
                                        <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, culpa qui officiis animi Lorem ipsum dolor sit amet, 
                                            consectetur adipisicing elit.</p>
                                        <a href="#" class="btn btn-primary text-white px-4 py-2 my-2 btn-border-radius">Leer más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                            <div class="text-center border-primary border bg-white service-item">
                                <div class="service-content d-flex align-items-center justify-content-center p-4">
                                    <div class="service-content-inner">
                                        <div class="p-4"><i class="fas fa-user-nurse fa-6x text-primary"></i></div>
                                        <a href="#" class="h4">Salud Mental</a>
                                        <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, culpa qui officiis animi Lorem ipsum dolor sit amet, 
                                            consectetur adipisicing elit.</p>
                                        <a href="#" class="btn btn-primary text-white px-4 py-2 my-2 btn-border-radius">Leer más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service End -->
        </section>

<section id="galeria">
    <!-- Events Start -->
    <div class="container-fluid events py-5 bg-light">
        <div class="container py-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="mx-auto text-center" style="max-width: 700px;">
                <h1 class="display-6 text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Nuestra Galería</h1>
                <h4 class="mb-5 display-4">Momentos únicos</h4>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-12 text-center text-primary">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">Todos</li>
                        <li class="mx-2" data-filter=".first">Escuela de Lenguaje</li>
                        <li class="mx-2" data-filter=".second">Afterschool</li>
                    </ul>
                </div>
            </div>

            <?php
                $textosGaleria = [
                    1 => "Fiesta de aniversario",
                    2 => "Campaña navideña",
                    3 => "Visita a terreno",
                    4 => "Capacitación 2024",
                    5 => "Actividad al aire libre",
                    6 => "Evento en la planta",
                    7 => "Nueva sucursal",
                    8 => "", // Sin texto
                    9 => "Entrega de reconocimientos",
                    10 => "Entrega de reconocimientos",
                    11 => "Entrega de reconocimientos",
                ];

                $clasesGaleria = [
                1 => 'first',
                2 => 'second',
                3 => 'first',
                4 => 'second',
                5 => 'first',
                6 => 'second',
                7 => 'first',
                8 => 'second',
                9 => 'first',
                10 => 'second',
                11 => 'first',
                12 => 'second',
                13 => 'first',
                14 => 'second',
                15 => 'first',
                16 => 'second',
                17 => 'first',
                18 => 'second',
                19 => 'first',
                20 => 'second',
                21 => 'first',
                22 => 'second',
                23 => 'first',
                24 => 'second',
            ];
            ?>

            <div class="row g-5 justify-content-center portfolio-container">
                <?php for ($i = 1; $i <= 24; $i++) : 
                    
                    if ($i != 23) {
                    ?>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow portfolio-item <?php echo $clasesGaleria[$i]; ?>" data-wow-delay="0.5s">
                        <div class="events-item bg-primary rounded">
                            <div class="events-inner position-relative">
                                <div class="events-img overflow-hidden rounded position-relative">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/gallery_<?php echo $i; ?>.jpg" class="img-fluid w-100" alt="Galería <?php echo $i; ?>">
                                    <div class="event-overlay">
                                        <a href="<?php echo get_template_directory_uri(); ?>/img/gallery_<?php echo $i; ?>.jpg" data-lightbox="galeria">
                                            <i class="fas fa-search-plus text-white fa-2x"></i>
                                        </a>
                                         <p class="overlay-text">
                                            <?php echo !empty($textosGaleria[$i]) ? $textosGaleria[$i] : ""; ?>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php   }
            endfor; ?>
            </div>

        </div>
    </div>
    <!-- Events End-->
</section>

        <section id="contacto">
            <!-- Contact Start -->
            <div class="container-fluid py-5">
                <div class="container py-5">
                    <div class="p-5 bg-light rounded">
                        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                            <h1 class="text-primary display-6 mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Contáctanos</h1>
                            <h4 class="display-4">¿Tienes preguntas? Estamos aquí para escucharte</h4>
                        </div>
                        <div class="row g-5 mb-5 mt-5">
                            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex w-100 border border-primary p-4 rounded bg-white"> 
                                    <div class="">
                                        <h4><i class="fas fa-map-marker-alt text-primary me-4"></i>Dirección</h4>
                                        <p class="mb-2">Francisco Bilbao 320, Curicó</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex w-100 border border-primary p-4 rounded bg-white">
                                    
                                    <div class="">
                                        <h4><i class="fas fa-envelope text-primary me-2"></i> Escríbenos</h4>
                                        <p class="mb-2">mpalma@casanidoguarderia.cl</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="d-flex w-100 border border-primary p-4 rounded bg-white">
                                   
                                    <div class="">
                                        <h4><i class="fa fa-phone-alt text-primary me-4"></i>Teléfono</h4>
                                        <p class="mb-2">+569 82718947</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-5">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                                <form action="">
                                    <input type="text" class="w-100 form-control py-3 mb-5 border-primary" placeholder="Nombre">
                                    <input type="email" class="w-100 form-control py-3 mb-5 border-primary" placeholder="Correo Electrónico">
                                    <textarea class="w-100 form-control mb-5 border-primary" rows="8" cols="10" placeholder="Tu Mensaje"></textarea>
                                    <button class="w-100 btn btn-primary form-control py-3 border-primary text-white bg-primary" type="submit">Enviar</button>
                                </form>
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="border border-primary h-100 rounded">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3381.5952136804854!2d-71.2322638913725!3d-34.98762937365073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x966457ae4b09530d%3A0xcd7fda7d0fa84ba5!2sFrancisco%20Bilbao%20320%2C%203341895%20Curic%C3%B3%2C%20Maule!5e1!3m2!1ses!2scl!4v1752247588021!5m2!1ses!2scl" 
                                    class="w-100 h-100 rounded" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact End -->
        </section>



    <!-- Testimonial End -->
     <?php get_footer(); ?>
