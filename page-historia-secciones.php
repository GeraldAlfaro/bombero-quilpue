<?php
/*
Template Name: Historia Secciones
*/
?>

<?php get_header(); ?>

<main>
    <div class="historia-secciones">
        <?php if (is_page('imagenes')): ?>
            <!-- Estructura específica para "Imágenes" -->
            <p>Contenido para Voluntarios.</p>
        <?php elseif (is_page('martires')): ?>
            <!-- Estructura específica para "Mártires" -->
            <section class="container martires-content">
                <h1 class="my-5">Mártires</h1>
                <div class="row">
                    <article class="col-lg-4 col-md-6 col-sm-12">
                        <div>
                            <img src="<?php echo get_theme_file_uri("img/martir-edwin.png") ?>" alt="Edwin Guajardo Sanhueza">
                            <h4 class="my-2">Edwin Guajardo Sanhueza</h4>
                            <span>QEPD desde el 7 de enero de 1931.</span>
                            <p class="my-3 parrafo-martires">“El 6 de enero de 1931, sonó la bocina del Cuerpo de Bomberos, dando como sitio amagado el edificio de la Fábrica de pólvora. El establecimiento dada su construcción de material ligero, ardió rápidamente, produciéndose una serie de explosiones de la pólvora, almacenada en las bodegas.
                            Los voluntarios de la Primera Compañía de Bomberos, acudieron rápidamente con su material, asumiendo, que toda labor a desarrollar, era un peligro para todos.
                            El fuego seguía un curso demoledor y amenazante. Se trabajaba para evitar que el fuego hiciera presa de la bodega principal, donde había grandes cantidades de pólvora. Las llamas cada vez se tornaban más violentas, por lo que se dio la orden de retirar al personal a un sitio menos peligroso.
                            En esos instantes apareció Edwin Guajardo Sanhueza, en un intento de evitar el peligro que se avecinaba, sacaba los barriles de pólvora… logró sacar dos barriles, y, en un nuevo intento, lo sorprendió una gran explosión… Su cuerpo quedó envuelto en llamas, es por ello que es trasladado raudamente en un camión hasta Viña del Mar, para que fuese atendido de sus graves quemaduras. Pese a los esfuerzos desplegados por el personal médico y los avances de la ciencia médica de la época, murió veinticuatro horas más tarde.” 
                            <span>(Texto extraído del libro “Quilpué, tierra del sol” 1960)</span>
                            </p>
                            <button class="boton-martires">Leer más</button>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 col-sm-12">
                        <div>
                            <img src="<?php echo get_theme_file_uri("img/martir-eladio.png") ?>" alt="Eladio Leiva Bastias">
                            <h4 class="my-2">Eladio Leiva Bastias</h4>
                            <span>QEPD desde el 11 de febrero de 1967.</span>
                            <p class="my-3 parrafo-martires">Corría el verano de 1967 cuando se cita a Academia de cuartel; una vez más Eladio participa como era su costumbre. Este  9 de Febrero sería un día inolvidable para su Compañía.
                            En momentos en que se realizaba dicha academia con ejercicios de trabajos en altura, se produce un lamentable accidente, donde el voluntario Leiva cae desde una escala, sufriendo graves lesiones en su cabeza afectándolo gravemente.
                            Fue trasladado de inmediato a un recinto hospitalario, pero los esfuerzos médicos fueron infructuosos y, luego de una corta agonía el voluntario Eladio Leiva Bastidas deja de existir el día 11 de Febrero de 1967. El golpe sufrido le ocasionó una hemorragia cerebral lo que ocasionó finalmente su muerte.
                            Durante su permanencia en la Primera Compañía manifestó un serio compromiso institucional, formando parte importante de su historia bomberil. Ocupó el cargo de Teniente 2º y alcanzó a recibir el premio de constancia por cinco años de servicio de Compañía por lo tanto los correspondientes de servicio del Cuerpo de Bomberos de Quilpué. 
                            <span>(Antología Poética Bomberil, s. f.)</span>
                            </p>
                            <button class="boton-martires">Leer más</button>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 col-sm-12">
                        <div>
                            <img src="<?php echo get_theme_file_uri("img/martir-nicolas.png") ?>" alt="Nicolás Campalans Leiva">
                            <h4 class="my-2">Nicolás Campalans Leiva</h4>
                            <span>QEPD desde el 30 de junio de 2010.</span>
                            <p class="my-3 parrafo-martires">Pasadas las 00:30 horas del 25 de junio, mientras la Unidad de Rescate de la Primera Compañía se dirigía a la Ruta F-50 por un volcamiento de un vehículo menor con una persona atrapada en su interior. Durante el trayecto Nicolás Capalans inicio una serie de convulsiones, por lo que el personal que tripulaba la unidad rápidamente le prestó la atención necesaria hasta llegar a la emergencia, dada la cercanía con el lugar, donde fue atendido por el resto de personal de la compañía y profesionales de la salud que habían concurrido para atender a la víctima del accidente.
                            Desde el lugar fue trasladado en ambulancia hacia el Hospital de Quilpué, para luego ser enviado al Hospital Gustavo Fricke de Viña del Mar, donde posterioremente fue trasladado a diferentes centro hospitalarios en donde fue sometido a diferentes intervenciones quirúrgicas. El lunes 29 de junio durante horas de la mañana, sufrió un infarto cerebral masivo en el hemisferio derecho, lo que provocó un agravamiento de su condición y posterior deceso.

                            En reunión realizada el miércoles 30 de junio, el Directorio General del Cuerpo de Bomberos de Quilpué, ratificó declarar como mártir de la institución al Secretario de la Primera Compañía, Nicolás Rafael Campalans Leiva (Q.E.P.D.).  
                            <span>(Antología Poética Bomberil, s. f.)</span>
                            </p>
                            <button class="boton-martires">Leer más</button>
                        </div>
                    </article>
                </div>
            </section>
        <?php elseif (is_page('museo-historico')): ?>
            <!-- Estructura específica para "Museo Histórico" -->
            <p>Contenido para Casino La Primera.</p>
        <?php elseif (is_page('hitos-historicos')): ?>
            <!-- Estructura específica para "Hitos Históricos" -->
            <p>Contenido para Centro Cultural.</p>
        <?php endif; ?>

        <?php the_content(); ?>
    </div>
</main>

<?php get_footer(); ?>
