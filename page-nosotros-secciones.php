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
                            <h1>Voluntarios compañía</h1>
                        </div>
                        <div class="col-md-6">
                            <div class="buscador">
                                <input type="text" id="buscador" placeholder="Buscar...">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="container mt-5">
                    <div class="col-md-10 mx-auto seccion-voluntarios-tab">
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
            <p>Contenido para Brigada Juvenil.</p>
        <?php elseif (is_page('casino-la-primera')): ?>
            <!-- Estructura específica para "Casino La Primera" -->
            <p>Contenido para Casino La Primera.</p>
        <?php elseif (is_page('centro-cultural')): ?>
            <!-- Estructura específica para "Centro Cultural" -->
            <p>Contenido para Centro Cultural.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>