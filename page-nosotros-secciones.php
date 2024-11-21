<?php
/*
Template Name: Nosotros Secciones
*/
?>

<?php get_header(); ?>

<main>
    <div class="secciones-nosotros">
        <!-- Condicionales -->
        <?php if (is_page('voluntarios-de-la-compania')): ?>
            <!-- Estructura específica para "Voluntarios de la Compañía" -->
            <section class="bg-voluntarios">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="text-light">Voluntarios compañía</h1>
                        </div>
                        <div class="col-md-6">
                            <div class="buscador">
                                <input type="text" id="buscador" placeholder="Buscar...">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="container mt-5 seccion-voluntarios-tab">
                    <div class="col-md-10 mx-auto seccion-voluntarios-tab-botones">
                        <div class="tab-boton-voluntarios">
                            <input type="radio" id="voluntario-humano" name="tabs-voluntarios" checked>
                            <label class="tab" for="voluntario-humano">Humano</label>
                            <input type="radio" id="voluntario-animal" name="tabs-voluntarios">
                            <label class="tab" for="voluntario-animal">Animal</label>
                            <span class="slider"></span>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <div class="row tab-voluntarios-content">
                        </div>
                    </div>
            </section>
        <?php elseif (is_page('brigada-juvenil')): ?>
            <!-- Estructura específica para "Brigada Juvenil" -->
            <section class="container">
                <div class="row brigada-juvenil-seccion">
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-12">
                        <img class="logo-brigada" src="<?php echo get_theme_file_uri("img/brigada_juvenil.png") ?>" alt="logo brigada">
                    </div>
                    <div class="col-xl-10 col-lg-8 col-md-8 col-sm-12">
                        <h2>Brigada Juvenil</h2>
                        <p class="mt-3">En la Brigada se realizan capacitaciones, cursos y academias bomberiles enfocado en captar voluntarios jovenes de la zona principlmente escolares para intruirlos y que pertenezcan a la primera compañía de bomberos de Quilpué.
                        La Brigada Juvenil se encuentra a cargo del Instructor Sr. Mario Palavecino Rubio quien es el encargado de coordinar.</p>
                        <div class="links-brigada">
                            <a href="https://www.instagram.com/brigada_primera/" target="_blank"><img src="<?php echo get_theme_file_uri("img/nosotros-brigada-instagram.png") ?>" alt="instagram brigada">@brigada_primera</a>
                            <a href="https://web.facebook.com/brigadajuvenil.primeracompania/" target="_blank"><img src="<?php echo get_theme_file_uri("img/nosotros-brigada-facebook.png") ?>" alt="facebook brigada">Brigada Juvenil Primera Compañia Quilpué </a>
                        </div>
                    </div>
                </div>
            </section>
        <?php elseif (is_page('casino-la-primera')): ?>
            <!-- Estructura específica para "Casino La Primera" -->
            <section class="container">
                <div class="row casino-seccion">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12">
                        <img class="logo-brigada" src="<?php echo get_theme_file_uri("img/casino-logo.png") ?>" alt="logo brigada">
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 casino-content">
                        <h2>Casino de bomberos “La Primera”</h2>
                        <p class="mt-3">El casino de la primera de Quilpué está abierto a todo público donde los ingresos son destinados a la compañía y con esto tener ingresos extras para el cuartel.</p>
                        <div class="links-casino">
                            <a href="https://www.instagram.com/casino_bomberos_la_primera/" target="_blank"><img src="<?php echo get_theme_file_uri("img/nosotros-brigada-instagram.png") ?>" alt="instagram casino">@casino_bomberos_la_primera</a>
                            <a href="https://web.facebook.com/p/Casino-de-Bomberos-La-Primera-100063860993474/?_rdc=1&_rdr" target="_blank"><img src="<?php echo get_theme_file_uri("img/nosotros-brigada-facebook.png") ?>" alt="facebook casino">Casino de Bomberos "La Primera"</a>
                            <a href="mailto:casinodebomberoslaprimera@gmail.com" target="_blank"><img src="<?php echo get_theme_file_uri("img/nosotros-correo.png") ?>" alt="correo casino">casinodebomberoslaprimera@gmail.com</a>
                        </div>
                        <a class="boton-telefono-casino" href=""><img class="icono-boton me-3" src="<?php echo get_theme_file_uri("img/phone.png") ?>" alt="icono telefono"> (32) 363 2854</a>
                    </div>
                </div>
            </section>
            <section class="google-maps-casino">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3344.411857524566!2d-71.44093238718584!3d-33.04562225898355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9689d9ffac6eba53%3A0xc6e6b39c29cdfba0!2sCasino%20de%20Bomberos%20%22La%20Primera%22!5e0!3m2!1ses-419!2scl!4v1731628375328!5m2!1ses-419!2scl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
        <?php elseif (is_page('centro-cultural')): ?>
            <!-- Estructura específica para "Centro Cultural" -->
            <section class="container">
                <div class="row centro-cultural-seccion">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12">
                        <img class="logo-brigada" src="<?php echo get_theme_file_uri("/img/centro-cultural-logo.png") ?>" alt="logo centro cultural">
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 casino-content">
                        <h2>Centro Cultural Lorenzo Lubet </h2>
                        <p class="mt-3">Organización creada para colaborar en la gestión, promoción de la cultura y patrimonio de la Primera Compañía de Bomberos de Quilpué. Como medio de obtención de fondos</p>
                        <div class="links-casino">
                            <a href="" target="_blank"><img src="<?php echo get_theme_file_uri("img/nosotros-brigada-instagram.png") ?>" alt="instagram casino">@centroculturallorenzolubet</a>
                            <a href="" target="_blank"><img src="<?php echo get_theme_file_uri("img/nosotros-brigada-instagram.png") ?>" alt="facebook casino">Centro Cultural Lorenzo Lubet</a>
                            <a href="" target="_blank"><img src="<?php echo get_theme_file_uri("img/nosotros-correo.png") ?>" alt="correo casino">centrocultural@primeraquilpue.cl</a>
                        </div>
                        <a class="boton-donacion-centro" href="">Dona aquí!</a>
                    </div>
                </div>
            </section>
            <section class="tab-container container">
                <ul class="tab-menu">
                    <li class="tab-generico active"><a href="#gmc">GMC</a></li>
                    <li class="tab-generico"><a href="#uniformes">Uniformes</a></li>
                    <li class="tab-generico"><a href="#pabellon">Pabellón patrio</a></li>
                </ul>

                <div class="bg-blanco">
                    <div class="tab-panels">
                        <div id="gmc" class="panel">
                            <div class="prevencion-tabs-content row gmc-bg">
                                <div class="prevencion-tab-item col-md-12 col-lg-6">
                                    <h3 class="mb-4">Restauración Carro Reliquia GMC 1</h3>
                                    <p>Se debe mencionar que a través de nuestra organización comunitaria, se permitió la obtención de recursos financieros que permitió el éxito de la entrega de la destacada unidad, la cual no estuvo ajena a inconvenientes, según se expone en el documental “Renacido del Olvido”, pieza audiovisual que fue exhibida en dependencias del liceo artístico Guillermo Groyenmeyer y que fue introducción para el ejercicio demostrativo que se llevo a cabo el pasado sábado 01 de junio, en conjunto con las demás instituciones y empresas involucradas en el proceso.</p>
                                </div>
                            </div>
                        </div>
                        <div id="uniformes" class="panel">
                            <div class="prevencion-tabs-content row uniformes-bg">
                                <div class="prevencion-tab-item col-md-12 col-lg-6">
                                    <h3 class="mb-4">Recuperación indumentaria histórica de la Primera Compañía.(1925-2025)</h3>
                                    <p>Se financian 90 uniformes de parada con todos sus implementos. Costo por uniforme $500.000 por unidad. Presentación de más de 60 bomberos en el aniversario centenario con su uniforme de parada.</p>
                                </div>
                            </div>
                        </div>
                        <div id="pabellon" class="panel">
                            <div class="prevencion-tabs-content row pabellon-bg">
                                <div class="prevencion-tab-item col-md-12 col-lg-6">
                                    <h3 class="mb-4">Restauración Pabellón Patrio</h3>
                                    <p>Restauración del primer estandarte de la compañía, el cual data desde el año 1925 siendo este un regalo del voluntario Carlos Cavagnaro.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </section>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>