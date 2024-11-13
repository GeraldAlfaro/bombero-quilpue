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
                            <a href=""><img src="<?php echo get_theme_file_uri("img/nosotros-brigada-instagram.png") ?>" alt="instagram brigada">@brigada_primera</a>
                            <a href=""><img src="<?php echo get_theme_file_uri("img/nosotros-brigada-instagram.png") ?>" alt="facebook brigada">Brigada Juvenil Primera Compañia Quilpué </a>
                        </div>
                    </div>
                </div>
            </section>
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