<?php
/*
Template Name: Prevención
*/
?>

<?php get_header(); ?>


<main class="prevencion">

    <section class="container mb-5">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="row">
                    <div class="col-md-7">
                        <h1 class="mb-5">Emergencias</h1>
                        <p>Es un hecho que chile es reconocido por ser un país con varias emergencias de carácter natural, sin embargo las emergencias de todo indole son comunes, por lo que concideramos importante que estes preparado para cada una de estas y a su vez capacites a tus familiares con las instrucciones preventivas que se encuentran a continuación, dentro de cada uno de estos botones categorizados, encontraras información de una emergencia especifica. </p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/img-prevencion1.png" alt="Camión bomberos">
                    </div>

                </div>
                <div class="row mt-5 ">
                    <h2 class="mb-5">¿Cómo actuar?</h2>
                    <div class="col-md-4">

                        <a href="http://localhost/bomberos/prevencion/incendio/">
                            <div class="prevencion-background1">
                                <h3>Incendio</h3>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="http://localhost/bomberos/prevencion/material-peligroso/">
                            <div class="prevencion-background2">
                                <h3>Material peligroso</h3>

                            </div>

                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="http://localhost/bomberos/prevencion/rescate/">
                            <div class="prevencion-background3">
                                <h3>Rescate</h3>

                            </div>

                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12 mx-auto my-4">
                <div class="row">
                    <h1 class="pb-4">Capsulas informativas</h1>
                    <div class="col-md-4">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/jsVBZsH5JXI?si=r5EnXWZEokGTmbYc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-6">
                        <p>La Primera Compañía de Bomberos de Quilpué ha creado una serie de cápsulas informativas y capacitativas diseñadas especialmente para niños, con el objetivo de enseñarles sobre seguridad, prevención de incendios y el importante trabajo que realizan los bomberos en nuestra comunidad.</p>
                        <br>
                        <p>Estas cápsulas son recursos educativos que no solo buscan informar, sino también generar conciencia y fomentar una cultura de seguridad desde temprana edad. A continuación, podrás acceder a estos contenidos y compartirlos con tus alumnos, familiares o cualquier persona interesada en aprender sobre estos temas tan relevantes.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>