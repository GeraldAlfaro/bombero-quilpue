<?php
/* Template Name: Prevencion Incendio */
get_header();
?>

<div class="nosotros-seccion">
    <h1><?php the_title(); ?></h1>
    <div class="custom-content">
        <?php if (is_page('incendio')): ?>
            <!-- Estructura específica para "Icendio" -->
            <div class="tab-container">

                    <ul class="tab-menu">
                        <li class="tab-generico active"><a href="#estructural">Estructural</a></li>
                        <li class="tab-generico"><a href="#forestal">Forestal</a></li>
                        <li class="tab-generico"><a href="#vehicular">Vehicular</a></li>
                    </ul>

                    <div class="bg-blanco">
                    <div class="tab-panels">
                        <div id="estructural" class="panel">
                            <div class="prevencion-tabs-content row">
                                <div class="prevencion-tab-item col-md-4">
                                <img src="tnt.png" alt="tnt">
                                <div class="prevencion-text">
                                    <h4>TNT y dinamita</h4>
                                    <p>Con riesgo de explosión masiva, es decir instantáneamente explotaría toda la carga.</p>
                                </div>
                                </div>
                                <div class="prevencion-tab-item col-md-4">
                                <img src="tnt.png" alt="tnt">
                                <div class="prevencion-text">
                                    <h4>TNT y dinamita</h4>
                                    <p>Con riesgo de explosión masiva, es decir instantáneamente explotaría toda la carga.</p>
                                </div>
                                </div>
                                <div class="prevencion-tab-item col-md-4">
                                <img src="tnt.png" alt="tnt">
                                <div class="prevencion-text">
                                    <h4>TNT y dinamita</h4>
                                    <p>Con riesgo de explosión masiva, es decir instantáneamente explotaría toda la carga.</p>
                                </div>
                                </div>
                                <div class="prevencion-tab-item col-md-4">
                                    <img src="tnt.png" alt="tnt">
                                    <div class="prevencion-text">
                                        <h4>TNT y dinamita</h4>
                                        <p>Con riesgo de explosión masiva, es decir instantáneamente explotaría toda la carga.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="forestal" class="panel">
                            <div class="prevencion-tabs-content row">
                                <div class="prevencion-tab-item col-md-4">
                                <img src="tnt.png" alt="tnt">
                                <div class="prevencion-text">
                                    <h4>TNT y dinamita</h4>
                                    <p>Con riesgo de explosión masiva, es decir instantáneamente explotaría toda la carga.</p>
                                </div>
                                </div>
                                <div class="prevencion-tab-item col-md-4">
                                <img src="tnt.png" alt="tnt">
                                <div class="prevencion-text">
                                    <h4>TNT y dinamita</h4>
                                    <p>Con riesgo de explosión masiva, es decir instantáneamente explotaría toda la carga.</p>
                                </div>
                                </div>
                                <div class="prevencion-tab-item col-md-4">
                                <img src="tnt.png" alt="tnt">
                                <div class="prevencion-text">
                                    <h4>TNT y dinamita</h4>
                                    <p>Con riesgo de explosión masiva, es decir instantáneamente explotaría toda la carga.</p>
                                </div>
                                </div>
                                <div class="prevencion-tab-item col-md-4">
                                    <img src="tnt.png" alt="tnt">
                                    <div class="prevencion-text">
                                        <h4>TNT y dinamita</h4>
                                        <p>Con riesgo de explosión masiva, es decir instantáneamente explotaría toda la carga.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="vehicular" class="panel">
                            <div class="prevencion-tabs-content row">
                                <div class="prevencion-tab-item col-md-4">
                                <img src="tnt.png" alt="tnt">
                                <div class="prevencion-text">
                                    <h4>TNT y dinamita</h4>
                                    <p>Con riesgo de explosión masiva, es decir instantáneamente explotaría toda la carga.</p>
                                </div>
                                </div>
                                <div class="prevencion-tab-item col-md-4">
                                <img src="tnt.png" alt="tnt">
                                <div class="prevencion-text">
                                    <h4>TNT y dinamita</h4>
                                    <p>Con riesgo de explosión masiva, es decir instantáneamente explotaría toda la carga.</p>
                                </div>
                                </div>
                                <div class="prevencion-tab-item col-md-4">
                                <img src="tnt.png" alt="tnt">
                                <div class="prevencion-text">
                                    <h4>TNT y dinamita</h4>
                                    <p>Con riesgo de explosión masiva, es decir instantáneamente explotaría toda la carga.</p>
                                </div>
                                </div>
                                <div class="prevencion-tab-item col-md-4">
                                    <img src="tnt.png" alt="tnt">
                                    <div class="prevencion-text">
                                        <h4>TNT y dinamita</h4>
                                        <p>Con riesgo de explosión masiva, es decir instantáneamente explotaría toda la carga.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>










            
        <?php elseif (is_page('brigada-juvenil')): ?>
            <!-- Estructura específica para "Brigada Juvenil" -->
            <p>Contenido para Brigada Juvenil.</p>
        <?php elseif (is_page('casino-la-primera')): ?>
            <!-- Estructura específica para "Casino La Primera" -->
            <p>Contenido para Casino La Primera.</p>
        <?php elseif (is_page('centro-cultural')): ?>
            <!-- Estructura específica para "Centro Cultural" -->
            <p>Contenido para Centro Cultural.</p>
        <?php endif; ?>

        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>
