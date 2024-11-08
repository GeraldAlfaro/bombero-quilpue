<?php
/*
Template Name: Prevención
*/
?>

<?php get_header(); ?>


<main>
    <section class="mb-5">
        <div class="altura-responsive-quienes">
            <div class="contenedor-tab">
                <input type="radio" class="quien input-soluciones" id="" name="bright" checked>
                <input type="radio" class="input-mision input-soluciones" id="toggle-lupa" name="bright">
                <input type="radio" class="vision input-soluciones" id="toggle-capacitacion" name="bright">
                <input type="radio" class="input-valores input-soluciones" id="toggle-soporte" name="bright">
                <input type="radio" class="reubicacion input-soluciones" id="toggle-reubicacion" name="bright">
                <div class="head">
                    <ul class="nav">
                        <li class="st st1 activo">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lista-de-verificacion-azul.png"
                                alt="verificacion">
                        </li>
                        <li class="st st2">
                            <label for="toggle-lupa" class="icon">
                                <img class="icono-normal lupa" src="<?php echo get_stylesheet_directory_uri(); ?>/img/lupa-inactiva.png"
                                alt="lupa inactiva">
                                <img class="icono-activo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/lupa-azul.png" alt="lupa activada">
                            </label>
                        </li>
                        <li class="st st3">
                            <label for="toggle-capacitacion" class="icon">
                                <img class="icono-normal" src="<?php echo get_stylesheet_directory_uri(); ?>/img/capacitacion-inactiva.png"
                                alt="capacitacion">
                                <img class="icono-activo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/capacitacion-azul.png" alt="capacitacion activo">
                            </label>
                        </li>
                        <li class="st st4">
                            <label for="toggle-soporte" class="icon">
                                <img class="icono-normal" src="<?php echo get_stylesheet_directory_uri(); ?>/img/soporte-inactivo.png"
                                alt="soporte">
                                <img class="icono-activo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/soporte-tecnico-azul.png" alt="soporte activo">
                            </label>
                        </li>
                        <li class="st st5">
                            <label for="toggle-reubicacion" class="icon">
                                <img class="icono-normal" src="<?php echo get_stylesheet_directory_uri(); ?>/img/reubicacion-inactiva.png"
                                alt="reubicacion">
                                <img class="icono-activo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/reubicacion-azul.png" alt="reubicacion activa">
                            </label>
                        </li>
                    </ul>
                    <div class="line">
                        <span></span>
                    </div>
                </div>
                <div class="content">
                    <section class="quien-section">
                        <h1>Evaluaciones</h1>
                        <div class="section-content">
                            <h5>Optimiza tu Selección de Ejecutivos de Ventas con Nuestras Herramientas y Métodos Avanzados</h5>
                            <p>Utilizamos evaluaciones psicométricas y psicotécnicas de última tendencia, incluyendo herramientas como Buk 4talent y otros software líderes en el mercado. Además, aprovechamos plataformas como LinkedIn para identificar talentos destacados que se alineen con tus necesidades específicas.</p>
                            <div class="accordion accordion-flush mt-5" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Pruebas psicométricas y psicotécnicas
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Las pruebas psicométricas y psicotécnicas son útiles para asegurar candidatos que no solo cumplen con tus requisitos técnicos, sino que también encajan perfectamente con la cultura de tu empresa.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Compromiso con la calidad
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Nuestro compromiso con la calidad y la confidencialidad garantiza resultados efectivos y discretos. Simplificamos tu proceso de contratación para que puedas concentrarte en lo que realmente importa: hacer crecer tu negocio.</div>
                                    </div>

                            </div>
                            
                        </div>
                    </section>
                    <section class="mision-section">
                        <h1>Selección</h1>
                        <div>
                            <p>En Prosellers, nos destacamos por encontrar líderes excepcionales para tu 
                                equipo comercial. Con un enfoque personalizado y una sólida experiencia en 
                                perfiles comerciales, aseguramos candidatos que no solo cumplen con tus 
                                requisitos técnicos, sino que también encajan perfectamente con la cultura 
                                de tu empresa. </p>
                            <p>Nuestro compromiso con la calidad y la confidencialidad garantiza 
                                    resultados efectivos y discretos. Simplificamos tu proceso de contratación 
                                    para que puedas concentrarte en lo que realmente importa: hacer crecer tu 
                                    negocio.</p>
                        </div>
                    </section>
                    <section class="vision-section">
                        <h1>Capacitaciones</h1>
                        <div class="section-content">
                            <p>Potencia tu éxito en ventas con nuestros cursos personalizados, ya sea en modalidad presencial u online.</p>
                            <p>En Prosellers, ofrecemos entrenamiento one to one diseñado para fortalecer tus habilidades comerciales. Aprende estrategias efectivas para cerrar ventas, manejar objeciones y construir relaciones duraderas con clientes. Nuestros instructores expertos te guiarán con técnicas probadas, adaptadas a tu industria y mercado.</p>      

                        </div>
                    </section>
                    <section class="valores-section">
                        <h1>Consultorías</h1>
                        <div class="section-content">
                            <p>Optimiza tu Estrategia Comercial con nuestra Consultoría Especializada</p>
                            <p>En Prosellers, ofrecemos consultorías comerciales personalizadas para potenciar tu negocio. Nuestro equipo experto en estrategia de mercado te ayudará a identificar oportunidades de crecimiento, mejorar la eficiencia operativa y fortalecer tu competitividad.</p>
                            <p>Nuestros servicios incluyen análisis de mercado, desarrollo de estrategias adaptadas, optimización de procesos y asesoría en ventas y marketing. Ya sea una startup en crecimiento o una empresa consolidada, estamos aquí para ayudarte a alcanzar el éxito.</p>
                            <p>Nuestros instructores expertos te guiarán con técnicas probadas, adaptadas a tu industria y mercado.</p>


                        </div>
                    </section>
                    <section class="reubicacion-section">
                        <h1>Reubicacion</h1>
                        <div class="section-content">
                            <p>Bienvenido a Prosellers, donde nos especializamos en acelerar tu éxito profesional a través de programas de outplacement diseñados a medida. Nuestro enfoque personalizado está diseñado para apoyarte en cada paso de tu transición laboral, asegurando que encuentres tu próximo desafío profesional de manera efectiva y con confianza.</p>
                            <div class="accordion accordion-flush mt-5" id="accordionFlushExample2">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTree" aria-expanded="false" aria-controls="flush-collapseTree">
                                        Optimización de Perfil y CV
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
                                        <div class="accordion-body">Destaca tus habilidades y experiencia de manera que capte la atención de los reclutadores.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        Estrategias Avanzadas de Búsqueda de Empleo
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
                                        <div class="accordion-body">Aprende técnicas probadas para identificar oportunidades y destacar entre otros candidatos.</div>
                                    </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                        Preparación Integral para Entrevistas
                                        </button>
                                    </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">Domina tus habilidades de entrevista y comunica tu valor de manera convincente.</div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="imagen-personas">
                    <img class="img-soluciones" src="<?php echo get_stylesheet_directory_uri(); ?>/img/personas.png" alt="Personas felices">
                </div>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>