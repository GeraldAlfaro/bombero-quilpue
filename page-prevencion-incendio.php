<?php
/* Template Name: Prevencion Incendio */
get_header();
?>

<div class="prevencion">
    <div class="custom-content">
        <?php if (is_page('incendio')): ?>


<!-- ------------------------------------------------------------- PAGINA INCENDIO ---------------------------------------------------------------------------------------- -->


            <div class="tab-container container">
                <h1><?php the_title(); ?></h1>

                    <ul class="tab-menu">
                        <li class="tab-generico active"><a href="#estructural">Estructural</a></li>
                        <li class="tab-generico"><a href="#forestal">Forestal</a></li>
                        <li class="tab-generico"><a href="#vehicular">Vehicular</a></li>
                    </ul>

                    <div class="bg-blanco">
                    <div class="tab-panels">


                        <div id="estructural" class="panel">
                            <div class="prevencion-tabs-content row">
                                <!-- -------------------- ARTICULO PREVENCION 1 ------------------- -->
                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/incendio1.png" alt="Prevencion Número 1">
                                <div class="prevencion-text">
                                    <h4>Sal del lugar</h4>
                                    <p>Debes salir de tu casa inmediatamente. Para hacerlo, agáchate, gatea y busca una salida.</p>
                                </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 2 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/incendio2.png" alt="Prevencion Número 2">
                                <div class="prevencion-text">
                                    <h4>No utilizar ascensores</h4>
                                    <p>Al momento de evacuar no utilices ascensores.</p>
                                </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 3 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/incendio3.png" class="img-fluid" alt="Prevencion Número 3">
                                <div class="prevencion-text">
                                    <h4>Cubre nariz y boca</h4>
                                    <p>Cubre tu nariz y boca con una prenda, de preferencia humedecida.</p>
                                </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 4 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/incendio4.png" alt="Prevencion Número 4">
                                    <div class="prevencion-text">
                                        <h4>Antes de abrir una puerta</h4>
                                        <p>Debes palparla con el dorso de la mano. Si está caliente, no la abras y sal por otro camino.</p>
                                    </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 5 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/incendio5.png" alt="Prevencion Número 5">
                                    <div class="prevencion-text">
                                        <h4>Al abrir una puerta</h4>
                                        <p>Apoya tu hombro contra la puerta y empuja lentamente. Si entra humo y calor, ciérrala y busca una vía de escape alternativa.</p>
                                    </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 6 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/incendio6.png" alt="Prevencion Número 6">
                                    <div class="prevencion-text">
                                        <h4>Al salir de la pieza</h4>
                                        <p>Asegúrate de que no quede nadie en su interior y cierra bien la puerta.</p>
                                    </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 7 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/incendio7.png" alt="Prevencion Número 7">
                                    <div class="prevencion-text">
                                        <h4>Llama al 132</h4>
                                        <p>O Solicita que alguien los llame. No regreses a tu hogar hasta que las autoridades te indiquen que es seguro hacerlo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

<!-- ------------------------------------------------------------- TAB FORESTAL ---------------------------------------------------------------------------------------- -->
                        <div id="forestal" class="panel">
                        <div class="prevencion-tabs-content row">
                                <!-- -------------------- ARTICULO PREVENCION 1 ------------------- -->
                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/forestal1.png" alt="Prevencion Número 1">
                                <div class="prevencion-text">
                                    <h4>Llama a emergencias</h4>
                                    <p>Si ves humo o fuego en zona de vegetación avisa a: CONAF (130), bomberos (132)</p>
                                </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 2 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/forestal2.png" alt="Prevencion Número 2">
                                <div class="prevencion-text">
                                    <h4>Comportamiento del viento</h4>
                                    <p>Pon atención al comportamiento del fuego y del viento, ya que el incendio puede cambiar de dirección e intensidad.</p>
                                </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 3 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/forestal3.png" class="img-fluid" alt="Prevencion Número 3">
                                <div class="prevencion-text">
                                    <h4>Cubre nariz y boca</h4>
                                    <p>Procura cubrir tu boca y nariz con un paño húmedo para no inhalar humo.</p>
                                </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 4 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/forestal4.png" alt="Prevencion Número 4">
                                    <div class="prevencion-text">
                                        <h4>Actua con calma</h4>
                                        <p>Sigue las indicaciones que proporcionen las autoridades.</p>
                                    </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 5 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/forestal5.png" alt="Prevencion Número 5">
                                    <div class="prevencion-text">
                                        <h4>Ahorra bateria</h4>
                                        <p>Raciona el uso de baterías para comunicarte en caso de emergencia.</p>
                                    </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 6 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/forestal6.png" alt="Prevencion Número 6">
                                    <div class="prevencion-text">
                                        <h4>Corta suministros</h4>
                                        <p>En caso de evacuar, corta la energía eléctrica de la vivienda y cierra la llave de paso de gas.</p>
                                    </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 7 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/forestal7.png" alt="Prevencion Número 7">
                                    <div class="prevencion-text">
                                        <h4>No vuelvas al incendio</h4>
                                        <p>No vuelvas al area del incendio, hasta que la autoridad lo disponga.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

<!-- ------------------------------------------------------------- TAB VEHICULAR ---------------------------------------------------------------------------------------- -->

                        <div id="vehicular" class="panel">
                        <div class="prevencion-tabs-content row">
                                <!-- -------------------- ARTICULO PREVENCION 1 ------------------- -->
                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/vehicular1.png" alt="Prevencion Número 1">
                                <div class="prevencion-text">
                                    <h4>Llama al 132</h4>
                                    <p>Lo primero que debes hacer es llamar a bomberos (132) si presencias o estas involucrado en la emergencia</p>
                                </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 2 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/vehicular2.png" alt="Prevencion Número 2">
                                <div class="prevencion-text">
                                    <h4>No entorpezcas el paso </h4>
                                    <p>Si no estas involucrado en el incidente pero estas en tu auto procura dejar libre el paso a autoridades y prende las luces de emergencia.</p>
                                </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 3 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/vehicular3.png" class="img-fluid" alt="Prevencion Número 3">
                                <div class="prevencion-text">
                                    <h4>Riesgos adicionales</h4>
                                    <p>Si el incidente ocurre en una carretera es necesario poner el chaleco reflectante y asegurarse que no existan factores que empeoren la situación.</p>
                                </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 4 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/vehicular4.png" alt="Prevencion Número 4">
                                    <div class="prevencion-text">
                                        <h4>Dejar actuar a autoridades</h4>
                                        <p>Procura mantenerte alejado de las llamas, objetos inflamables y evita grabar o fotografiar el accidente ya que tu vida puede correr riego y obtaculizar el trabajo de autoridades pertinentes.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        </div>
                    </div>

                </div>
            </div>

            
<!-- ------------------------------------------------------------- PAGINA MATERIAL PELIGROSO ---------------------------------------------------------------------------------------- -->

        <?php elseif (is_page('material-peligroso')): ?>

            <div class="tab-container container">
                <h1><?php the_title(); ?></h1>

                    <ul class="tab-menu">
                        <li class="tab-generico active"><a href="#gases">Gases</a></li>
                        <li class="tab-generico"><a href="#explosivos">Explosivos</a></li>
                        <li class="tab-generico"><a href="#inflamables">Inflamables</a></li>
                        <li class="tab-generico"><a href="#radiactivo">Radiactivo</a></li>

                    </ul>

                    <div class="bg-blanco">
                    <div class="tab-panels">


                        <div id="gases" class="panel">
                            <div class="prevencion-tabs-content row">
                                <!-- -------------------- ARTICULO PREVENCION 1 ------------------- -->
                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gases1.png" alt="Prevencion Número 1">
                                <div class="prevencion-text">
                                    <h4>Inflamables</h4>
                                    <p>Se encienden fácilmente y se queman rápidamente. Es el caso del Cloruro de Metilo, Gas Licuado de Petróleo, Acetileno e Hidrógeno.</p>
                                </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 2 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gases2.png" alt="Prevencion Número 2">
                                <div class="prevencion-text">
                                    <h4>Gases no inflamables</h4>
                                    <p>Material comprimido que no se quema y soporta la combustión. Por ejemplo Dióxido de Carbono, Argón Criogénico, Amoníaco, Anhidro.</p>
                                </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 3 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gases3.png" class="img-fluid" alt="Prevencion Número 3">
                                <div class="prevencion-text">
                                    <h4>Gases venenosos</h4>
                                    <p>Son tóxicos y constituyen un serio riesgo para la salud como el Cloro, Bromuro de Metilo y Fosgeno.</p>
                                </div>
                                </div>
                            </div>
                        </div>

<!-- ------------------------------------------------------------- TAB EXPLOSIVO ---------------------------------------------------------------------------------------- -->

                        <div id="explosivos" class="panel">
                        <div class="prevencion-tabs-content row">
                                <!-- -------------------- ARTICULO PREVENCION 1 ------------------- -->
                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/explosivos1.png" alt="Prevencion Número 1">
                                <div class="prevencion-text">
                                    <h4>TNT y dinamita</h4>
                                    <p>Con riesgo de explosión masiva, es decir instantáneamente explotaría toda la carga.</p>
                                </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 2 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/explosivos2.png" alt="Prevencion Número 2">
                                <div class="prevencion-text">
                                    <h4>Proyectiles y bengalas</h4>
                                    <p>Este tipo de explosivos tienen riesgo de proyección.</p>
                                </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 3 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/explosivos3.png" class="img-fluid" alt="Prevencion Número 3">
                                <div class="prevencion-text">
                                    <h4>Motores de cohetes</h4>
                                    <p>Además de artificios especiales, proyectiles y voladuras, estos explosivos tienen un alto riesgo de provocar un incendio.</p>
                                </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 4 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/explosivos4.png" alt="Prevencion Número 4">
                                    <div class="prevencion-text">
                                        <h4>Municiones y artificios comunes</h4>
                                        <p>Tienen un riesgo menor de explosión, estos son los fuegos artificiales de uso común y munición de armas pequeñas.</p>
                                    </div>
                                </div>

                            </div>
                        </div>

<!-- ------------------------------------------------------------- TAB INFLAMABLE ---------------------------------------------------------------------------------------- -->

                        <div id="inflamables" class="panel">
                        <div class="prevencion-tabs-content row">
                                <!-- -------------------- ARTICULO PREVENCION 1 ------------------- -->
                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/inflamable1.png" alt="Prevencion Número 1">
                                <div class="prevencion-text">
                                    <h4>Gasolina, Alcohol y Tolueno</h4>
                                    <p>Es un líquido que tiene un punto de inflamación bajo los 37ºC</p>
                                </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 2 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/inflamable2.png" alt="Prevencion Número 2">
                                <div class="prevencion-text">
                                    <h4>Aceites Combustibles</h4>
                                    <p>Líquido con punto de inflamación en o sobre los 37 ºC y bajo los 93 ºC, Ejemplo: Aceites Combustibles, Combustible, Diesel, Solventes, Líquido Pirofórico</p>
                                </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 3 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/inflamable3.png" class="img-fluid" alt="Prevencion Número 3">
                                <div class="prevencion-text">
                                    <h4>Se queman con facilidad</h4>
                                    <p>Arden incesantemente dificultándose la extinción; pueden ser explosivos humedecidos, materiales autorreactivos y sólidos de fácil combustibilidad.  pellets, virutas, cintas de Magnesio y Nitrocelulosa.</p>
                                </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 4 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/inflamable4.png" alt="Prevencion Número 4">
                                    <div class="prevencion-text">
                                        <h4>Inflamación instantanea</h4>
                                        <p>Pueden liberar gases inflamables o tóxicos al entrar en contacto con aire húmedo o con agua. Es el caso de Carburo de Calcio, Polvos de Magnesio e Hidruro de Sodio.</p>
                                    </div>
                                </div>

                                <!-- -------------------- ARTICULO PREVENCION 5 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/inflamable5.png" alt="Prevencion Número 4">
                                    <div class="prevencion-text">
                                        <h4>Oxidantes</h4>
                                        <p>Por su aporte de oxígeno pueden aumentar o causar la combustión de otros materiales, aún en ausencia de aire. Es el ejemplo del Nitrato de Amonio, Hipoclorito de Calcio y Peróxido de Hidrógeno</p>
                                    </div>
                                </div>

                                <!-- -------------------- ARTICULO PREVENCION 6 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/inflamable6.png" alt="Prevencion Número 4">
                                    <div class="prevencion-text">
                                        <h4>Peróxidos Orgánicos</h4>
                                        <p>Pueden sufrir una descomposición autoacelerada y pueden presentar  condiciones peligrosas por la facilidad de liberación de oxígeno, estas  sustancias reaccionan químicamente con una amplia variedad de productos</p>
                                    </div>
                                </div>

                            </div>
                        </div>
<!-- ------------------------------------------------------------- TAB RADIACTIVO ---------------------------------------------------------------------------------------- -->

                        <div id="radiactivo" class="panel">
                        <div class="prevencion-tabs-content row">
                                <!-- -------------------- ARTICULO PREVENCION 1 ------------------- -->
                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/radiactivo1.png" alt="Prevencion Número 1">
                                <div class="prevencion-text">
                                    <h4>Cobalto-60</h4>
                                    <p>Encontrado en centros de radioterapia para tratar el cáncer</p>
                                </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 2 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/radiactivo2.png" alt="Prevencion Número 2">
                                <div class="prevencion-text">
                                    <h4>Cesio-137</h4>
                                    <p>Empleado en equipos de medición industrial y en hospitales para equipos de radioterapias, también presente en residuos de antiguos usos industriales.</p>
                                </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 3 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/radiactivo3.png" class="img-fluid" alt="Prevencion Número 3">
                                <div class="prevencion-text">
                                    <h4>Radio-226</h4>
                                    <p>Antiguamente utilizado en relojes luminosos y equipos médicos.</p>
                                </div>
                                </div>


                            </div>
                        </div>
                        </div>
                        
                        
                    </div>

                </div>
            </div>


<!-- ------------------------------------------------------------- PAGINA RESCATE ---------------------------------------------------------------------------------------- -->

            <?php elseif (is_page('rescate')): ?>

                <div class="tab-container container">
                <h1><?php the_title(); ?></h1>

                    <ul class="tab-menu">
                        <li class="tab-generico active"><a href="#masivo">Masivo</a></li>
                        <li class="tab-generico"><a href="#rescate-vehicular">Vehicular</a></li>
                        <li class="tab-generico"><a href="#altura">Altura</a></li>
                        <li class="tab-generico"><a href="#confinados">Confinados</a></li>
                        <li class="tab-generico"><a href="#catastrofe">Catástrofe</a></li>


                    </ul>

                    <div class="bg-blanco">
                    <div class="tab-panels">


                        <div id="masivo" class="panel">
                            <div class="prevencion-tabs-content row">
                                <!-- -------------------- ARTICULO PREVENCION 1 ------------------- -->
                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/masivo1.png" alt="Prevencion Número 1">
                                <div class="prevencion-text">
                                    <h4>Llamar a las autoridades</h4>
                                    <p>Si estás presenciando un accidente, opta por llamar a las autoridades pertinentes en seguida </p>
                                </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 2 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/masivo2.png" alt="Prevencion Número 2">
                                <div class="prevencion-text">
                                    <h4>Mantén la calma </h4>
                                    <p>Al momento de evacuar trata de mantener la calma y no obstaculizar el paso.</p>
                                </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 3 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/masivo3.png" class="img-fluid" alt="Prevencion Número 3">
                                <div class="prevencion-text">
                                    <h4>No te acerques al accidente</h4>
                                    <p>No te acerques al lugar del accidente sin vigilancia de las autoridades ya que podrías salir lesionado. </p>
                                </div>
                                </div>

                                <!-- -------------------- ARTICULO PREVENCION 4 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/masivo3.png" class="img-fluid" alt="Prevencion Número 3">
                                <div class="prevencion-text">
                                    <h4>Si es seguro ayuda</h4>
                                    <p>Si ves personas heridas, ayúdales en lo posible, pero no intentes mover a los afectados o podrías empeorar sus lecciones.</p>
                                </div>
                                </div>
                            </div>
                        </div>

<!-- ------------------------------------------------------------- TAB VEHICULAR ---------------------------------------------------------------------------------------- -->

                        <div id="rescate-vehicular" class="panel">
                        <div class="prevencion-tabs-content row">
                                <!-- -------------------- ARTICULO PREVENCION 1 ------------------- -->
                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rescate-vehicular1.png" alt="Prevencion Número 1">
                                <div class="prevencion-text">
                                    <h4>Da aviso a emergencias</h4>
                                    <p>Identifica la cantidad de vehículos involucrados y si hay heridos, de forma que puedas informar a los servicios de emergencia para que envíen la atención necesario.</p>
                                </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 2 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rescate-vehicular2.png" alt="Prevencion Número 2">
                                <div class="prevencion-text">
                                    <h4>No te acerques al accidente</h4>
                                    <p>Prestar ayuda sin asegurar la zona podría provocar otro accidente vehicular.</p>
                                </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 3 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rescate-vehicular3.png" class="img-fluid" alt="Prevencion Número 3">
                                <div class="prevencion-text">
                                    <h4>Estaciona con precaución</h4>
                                    <p>Si ves un accidente y estás conduciendo, estaciona tu propio vehículo a una distancia prudente, donde no entorpezca a los vehículos de emergencia</p>
                                </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 4 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rescate-vehicular4.png" alt="Prevencion Número 4">
                                    <div class="prevencion-text">
                                        <h4>Usar chaleco reflectante</h4>
                                        <p>Una vez estacionado no olvides usar el chaleco reflectante, activar las luces intermitentes y colocar el triangulo a 50 mts de tu auto, para prevenir a los demás conductores.</p>
                                    </div>
                                </div>

                                <!-- -------------------- ARTICULO PREVENCION 5 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rescate-vehicular5.png" alt="Prevencion Número 4">
                                    <div class="prevencion-text">
                                        <h4>Si es seguro ayuda</h4>
                                        <p>Si ves personas heridas, ayúdales en lo posible, pero no intentes mover a los afectados o podrías empeorar sus lecciones.</p>
                                    </div>
                                </div>

                            </div>
                        </div>

<!-- ------------------------------------------------------------- TAB ALTURA ---------------------------------------------------------------------------------------- -->

                        <div id="altura" class="panel">
                        <div class="prevencion-tabs-content row">
                                <!-- -------------------- ARTICULO PREVENCION 1 ------------------- -->
                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/altura1.png" alt="Prevencion Número 1">
                                <div class="prevencion-text">
                                    <h4>Llamar a las autoridades</h4>
                                    <p>Si estás presenciando una persona en riesgo, opta por llamar a las autoridades pertinentes en seguida.</p>
                                </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 2 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/altura2.png" alt="Prevencion Número 2">
                                <div class="prevencion-text">
                                    <h4>Mantén la calma </h4>
                                    <p>Si eres la persona afectada procura mantener la calma.</p>
                                </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 3 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/altura3.png" class="img-fluid" alt="Prevencion Número 3">
                                <div class="prevencion-text">
                                    <h4>Calma a la victima</h4>
                                    <p>En caso de que te encuentres cerca intenta calmar a la victima sin ponerle presión para no aumentar el riesgo de que suceda un accidente, cuidando lo que dices y de que manera lo comunicas.</p>
                                </div>
                                </div>

                            </div>
                        </div>
<!-- ------------------------------------------------------------- TAB CONFINADOS ---------------------------------------------------------------------------------------- -->

                        <div id="confinados" class="panel">
                            <div class="prevencion-tabs-content row">
                                <!-- -------------------- ARTICULO PREVENCION 1 ------------------- -->
                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/altura1.png" alt="Prevencion Número 1">
                                <div class="prevencion-text">
                                    <h4>Llamar a las autoridades</h4>
                                    <p>Si estás presenciando una persona en riesgo, opta por llamar a las autoridades pertinentes en seguida.</p>
                                </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 2 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/confinados2.png" alt="Prevencion Número 2">
                                <div class="prevencion-text">
                                    <h4>Mantén la calma </h4>
                                    <p>Cuando ya hayas captado la atención de alguien maten la calma y da a conocer detalles importantes.</p>
                                </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 3 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/confinados3.png" class="img-fluid" alt="Prevencion Número 3">
                                <div class="prevencion-text">
                                    <h4>Espera a ser rescatado</h4>
                                    <p>Una vez las autoridades pertinentes estén ahí, colabora con ellos y sigue sus instrucciones para ser salvado.</p>
                                </div>
                                </div>


                            </div>
                        </div>

<!-- ------------------------------------------------------------- TAB CATASTROFE ---------------------------------------------------------------------------------------- -->

                        <div id="catastrofe" class="panel">
                            <div class="prevencion-tabs-content row">
                                <!-- -------------------- ARTICULO PREVENCION 1 ------------------- -->
                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/catastrofe1.png" alt="Prevencion Número 1">
                                <div class="prevencion-text">
                                    <h4>Mantén la calma</h4>
                                    <p>El papel más importante en una situación de emergencia es mantener la calma. Proteger a los niños y ancianos de la casa debe ser tu primera reacción; si los nervios te traicionan, ellos podrían asustarse más.</p>
                                </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 2 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/catastrofe2.png" alt="Prevencion Número 2">
                                <div class="prevencion-text">
                                    <h4>Planificar evacuación</h4>
                                    <p>Identifica todas las entradas y las salidas de tu casa, planea la forma más adecuada para evacuar a todos los miembros de la familia. Determina el lugar al que irás en caso de que no puedas quedarte en casa.</p>
                                </div>
                                </div>
                                <!-- -------------------- ARTICULO PREVENCION 3 ------------------- -->

                                <div class="prevencion-tab-item col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/catastrofe3.png" class="img-fluid" alt="Prevencion Número 3">
                                <div class="prevencion-text">
                                    <h4>Prepara un kit de emergencia</h4>
                                    <p>Si dispones de tiempo necesario prepara un kit de emergencia con cosas como; linternas, radio y baterías, agua potable y algunos alimentos no perecederos como comidas en lata y chocolates que te darán energía.</p>
                                </div>
                                </div>


                            </div>
                        </div>



                        </div>
                        
                        
                    </div>

                </div>
            </div>



        <?php endif; ?>

        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>
