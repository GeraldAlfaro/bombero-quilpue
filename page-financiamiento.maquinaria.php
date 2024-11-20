<?php
/* Template Name: Financiamiento maquinaria */
get_header();
?>

<div class="prevencion">
    <div class="custom-content">
        <?php if (is_page('uniformes')): ?>

<!-- ------------------------------------------------------------- PAGINA UNIFORMES ---------------------------------------------------------------------------------------- -->

            <div class="tab-container container">
                <h1><?php the_title(); ?></h1>

                    <ul class="tab-menu">
                        <li class="tab-generico active"><a href="#incendio-estructural">Incendio Estructural</a></li>
                        <li class="tab-generico"><a href="#incendio-forestal">Incendio forestal</a></li>
                        <li class="tab-generico"><a href="#incidente-hazmat">Incidente Hazmat</a></li>
                        <li class="tab-generico"><a href="#rescate-vehicular">Rescate vehicular</a></li>
                        <li class="tab-generico"><a href="#rescate-tecnico-con-cuerdas">Rescate técnico</a></li>

                    </ul>

                    <div class="bg-blanco">
                    <div class="tab-panels">


                        <div id="incendio-estructural" class="panel">
                            <div class="prevencion-tabs-content row">

                                <!-- -------------------- ARTICULO 1 ------------------- -->
                                <div class="prevencion-tab-item col-md-12">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/incendio-estructural.png" alt="Prevencion Número 1">

                                </div>

                            </div>
                        </div>

<!-- ------------------------------------------------------------- TAB INCENDIO FORESTAL ---------------------------------------------------------------------------------------- -->
                        
                        <div id="incendio-forestal" class="panel">
                        <div class="prevencion-tabs-content row">

                                <!-- -------------------- ARTICULO 2 ------------------- -->
                                <div class="prevencion-tab-item col-md-12">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/incendio-forestal.png" alt="Prevencion Número 1">

                                </div>
                                
                            </div>
                        </div>

<!-- ------------------------------------------------------------- TAB INCIDENTE HAZMAT ---------------------------------------------------------------------------------------- -->

                        <div id="incidente-hazmat" class="panel">
                        <div class="prevencion-tabs-content row">

                                <!-- -------------------- ARTICULO 3 ------------------- -->
                                <div class="prevencion-tab-item col-md-12">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/incidente-hazmat.png" alt="Prevencion Número 1">

                                </div>
                                

                            </div>
                        </div>

<!-- ------------------------------------------------------------- TAB RESCATE VEHICULAR ---------------------------------------------------------------------------------------- -->

                        <div id="rescate-vehicular" class="panel">
                        <div class="prevencion-tabs-content row">

                                <!-- -------------------- ARTICULO 4 ------------------- -->
                                <div class="prevencion-tab-item col-md-12">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rescate-vehicular.png" alt="Prevencion Número 1">

                                </div>
                                

                            </div>
                        </div>

<!-- ------------------------------------------------------------- TAB RESCATE TÉCNICO CON CUERDAS ---------------------------------------------------------------------------------------- -->

                        <div id="rescate-tecnico-con-cuerdas" class="panel">
                        <div class="prevencion-tabs-content row">

                                <!-- -------------------- ARTICULO 5 ------------------- -->
                                <div class="prevencion-tab-item col-md-12">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rescate-tecnico.png" alt="Prevencion Número 1">

                                </div>
                                

                            </div>
                        </div>                        



                        </div>
                    </div>

                </div>
            </div>


        <?php elseif (is_page('maquinarias')): ?>

<!-- ------------------------------------------------------------- PAGINA MAQUINARIAS ---------------------------------------------------------------------------------------- -->

            <div class="container my-5">
                <h1><?php the_title(); ?></h1>
                <div class="row">
                    <div class="col-md-5">
                        <h4>Unidad 12 "Mártir Eladio Leiva Bastias"</h4>
                        <p>Corresponde a un carro Renault Midlum 210 Camiva Eurofire año 2004 el cual presta servicio como segunda máquina de combate a incendios estructurales en nuestra Compañía y presta apoyo en la dotación de unidades de combate a incendios forestales del Cuerpo de Bomberos de Quilpué.</p>

                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <h4>Unidad 11 "Mártir Edwin Guajardo"</h4>
                        <p>Destinada a combate de incendios estructurales y vehiculares Primera Compañía de Bomberos de Quilpué "Bomba Esteban Santic"</p>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/maquinaria-unidad1.png" alt="Imagen de Unidad 12 Mártir Eladio Leiva Bastias">

                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/maquinaria-unidad2.png" alt="Imagen de Unidad 11 Mártir Edwin Guajardo">

                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-8 mx-auto maquinaria-baja">
                        <h2>Valor de equipamiento de maquinarias</h2>
                        <iframe width="855" height="422" src="https://www.youtube.com/embed/jsVBZsH5JXI?si=r5EnXWZEokGTmbYc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <h4>Unidad 13 de Rescate CR-1, "Mártir Secretario Nicolás Campalans Leiva".</h4>
                        <p>Corresponde a un carro Renault midlum 240 DXI camiva, el cual presta servicio como segunda máquina de combate a incendios estructurales en nuestra Compañía y presta apoyo en la dotación de unidades de combate a incendios forestales del Cuerpo de Bomberos de Quilpué.</p>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/maquinaria-unidad3.png" alt="Imagen de Unidad 11 Mártir Edwin Guajardo">


                    </div>
                </div>

            </div>

        <?php endif; ?>

        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>
