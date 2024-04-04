<!DOCTYPE html>
<html lang="en">

<head>
    <title>Póliza de Rentas</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Nuestra tecnología revoluciona la protección jurídica en el arrendamiento inmobiliario. Forma parte del futuro de la seguridad para propietarios e inquilinos." name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/swiper.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/coloring.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

    <div id="wrapper">
        <!-- page preloader begin -->
        <div id="de-loader"></div>
        <!-- page preloader close -->

        <!-- header begin -->
        <?php include 'menu.php'; ?>
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

            <section class="text-light no-top no-bottom position-relative z-1000">
                <div class="v-center">
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide" data-jarallax-element="150">
                                <div class="swiper-inner" data-bgimage="url(images/slider/banner-2.jpg)">
                                    <div class="sw-caption">
                                        <div class="container">
                                            <div class="row gx-5 align-items-center">

                                                <div class="col-lg-10 mb-sm-30">
                                                    <h2 class="slider-title">
                                                        La red legal más grande <br>
                                                        de México
                                                    </h2>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="subtitle s2 mb-4">
                                                        Póliza de Rentas cuenta con más de 30 sucursales al rededor <br>
                                                        de todo México, trabajando de la mano con las mejores <br>
                                                        inmobiliarias y asesores en la contratación de pólizas jurídicas
                                                        <br>
                                                        de arrendamiento.
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="spacer-10"></div>
                                                    <a class="btn-main mb10" href="">Ubica tu sucursal</a>
                                                    <a class="btn-main mb10" href="">Contrata ahora
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sw-overlay s2"></div>
                                </div>
                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                        <!-- If we need scrollbar -->
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="map-container d-flex justify-content-center">

                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <?php include 'mapa.php'; ?>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-8">
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Nuestras Sucursales</h2>
                    </div>
                    <div class="col-lg-4">
                        <a type="button" class="subtitle s2 wow fadeInUp mb-3" id="mostrarEstados">Ver todas las sucursales</a>
                        <a type="button" class="subtitle s2 wow fadeInUp mb-3" id="filtrarEstado">Filtrar por estado</a>
                        <select class="form-select" aria-label="Default select example" id="filtroEstados" style="display: none;">
                            <option value="todos" selected>Selecciona un estado...</option>
                            <option value="baja-california">Baja California Norte</option>
                            <option value="chihuahua">Chihuahua</option>
                            <option value="sinaloa">Sinaloa</option>
                            <option value="durango">Durango</option>
                            <option value="nuevo-leon">Nuevo Leon</option>
                            <option value="san-luis">San Luis Potosi</option>
                            <option value="guanajuato">Guanajuato</option>
                            <option value="jalisco">Jalisco</option>
                            <option value="queretaro">Queretaro</option>
                            <option value="veracruz">Veracruz</option>
                            <option value="puebla">Puebla</option>
                            <option value="distrito">Distrito Federal</option>
                            <option value="mexico">Méxio</option>
                            <option value="morelos">Morelos</option>
                            <option value="guerrero">Guerrero</option>
                            <option value="tabasco">Tabasco</option>
                            <option value="yucatan">Yucatán</option>
                        </select>
                    </div>
                </div>
                <section id="estados" style="display: none">
                    <div class="container">
                        <div class="row g-3">
                            <div class="col-lg-3 col-md-6 wow fadeInRight" id="mexico1" data-estado="mexico" data-wow-delay="0s">
                                <div class="p-4 pb-2 bg-grey h-100">
                                    <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                        Ciudad de México</div>
                                    <h4>Póliza de Rentas CdMx Capital</h4>
                                    <hr class="s2">
                                    <p>Moliere, No. 310, Polanco II sección, Miguel Hidalgo. Ciudad de México <br><br>

                                        55 3760 0883 <br><br>

                                        capital@polizaderentas.com
                                    </p>
                                    <div class="row justify-content-between">
                                        <div class="col-lg-12">
                                            <a class="btn-main mb10" href="ver_sucursal.php?ciudad=Ciudad de México">Ver sucursal</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 wow fadeInRight" id="mexico2" data-estado="mexico" data-wow-delay=".2s">
                                <div class="p-4 pb-2 bg-grey h-100">
                                    <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                        Ciudad de México</div>
                                    <h4>Póliza de Rentas CdMx Capital</h4>
                                    <hr class="s2">
                                    <p>Moliere, No. 310, Polanco II sección, Miguel Hidalgo. Ciudad de México <br><br>

                                        55 3760 0883 <br>

                                        capital@polizaderentas.com
                                    </p>
                                    <div class="row justify-content-between">
                                        <div class="col-lg-12">
                                            <a class="btn-main mb10" href="ver_sucursal.php?ciudad=Ciudad de México">Ver sucursal</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 wow fadeInRight" id="veracruz1" data-estado="veracruz" data-wow-delay=".2s">
                                <div class="p-4 pb-2 bg-grey h-100">
                                    <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                        Veracruz</div>
                                    <h4>Póliza de Rentas Veracruz Jurista</h4>
                                    <hr class="s2">
                                    <p>Antón de Alaminos, No. 626, Reforma, Veracruz. Veracruz <br><br>

                                        55 3760 0883 <br>

                                        capital@polizaderentas.com
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="spacer-10"></div>
                                        <a class="btn-main mb10" href="ver_sucursal.php?ciudad=Veracruz">Ver sucursal</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 wow fadeInRight" id="veracruz2" data-estado="veracruz" data-wow-delay=".2s">
                                <div class="p-4 pb-2 bg-grey h-100">
                                    <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                        Veracruz</div>
                                    <h4>Póliza de Rentas Xalapa Jurista</h4>
                                    <hr class="s2">
                                    <p>Av. Araucarias, No. 190, Fracc. Indeco Ánimas, Xalapa. Veracruz <br><br>

                                        55 3760 0883 <br>

                                        capital@polizaderentas.com
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="spacer-10"></div>
                                        <a class="btn-main mb10" href="ver_sucursal.php?ciudad=Veracruz">Ver sucursal</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 wow fadeInRight" id="puebla1" data-estado="puebla" data-wow-delay=".2s">
                                <div class="p-4 pb-2 bg-grey h-100">
                                    <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                        Puebla</div>
                                    <h4>Póliza de Rentas de los Ángeles</h4>
                                    <hr class="s2">
                                    <p>Camino Real a Cholula, No. 4405, Exhacienda Concepción Buena Vista, San Andrés
                                        Cholula. Puebla<br><br>

                                        55 3760 0883 <br>

                                        capital@polizaderentas.com
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="spacer-10"></div>
                                        <a class="btn-main mb10" href="ver_sucursal.php?ciudad=Puebla">Ver sucursal</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 wow fadeInRight" id="puebla2" data-estado="puebla" data-wow-delay=".2s">
                                <div class="p-4 pb-2 bg-grey h-100">
                                    <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                        Puebla</div>
                                    <h4>Póliza de Rentas Puebla Capital</h4>
                                    <hr class="s2">
                                    <p>Olivos, No. 506, Santa Cruz Buenavista, Puebla. Puebla<br><br>

                                        55 3760 0883 <br>

                                        capital@polizaderentas.com
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="spacer-10"></div>
                                        <a class="btn-main mb10" href="ver_sucursal.php?ciudad=Puebla">Ver sucursal</a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-3 col-md-6 wow fadeInRight" id="mexico3" data-estado="mexico" data-wow-delay=".2s">
                                <div class="p-4 pb-2 bg-grey h-100">
                                    <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                        Ciudad de México</div>
                                    <h4>Póliza de Rentas CdMx Capital</h4>
                                    <hr class="s2">
                                    <p>Moliere, No. 310, Polanco II sección, Miguel Hidalgo. Ciudad de México<br><br>

                                        55 3760 0883 <br>

                                        capital@polizaderentas.com
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="spacer-10"></div>
                                        <a class="btn-main mb10" href="ver_sucursal.php?ciudad=Ciudad de México">Ver sucursal</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 wow fadeInRight" id="mexico4" data-estado="mexico" data-wow-delay=".2s">
                                <div class="p-4 pb-2 bg-grey h-100">
                                    <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                        Ciudad de México</div>
                                    <h4>Póliza de Rentas CdMx Capital</h4>
                                    <hr class="s2">
                                    <p>Moliere, No. 310, Polanco II sección, Miguel Hidalgo. Ciudad de México<br><br>

                                        55 3760 0883 <br>

                                        capital@polizaderentas.com
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="spacer-10"></div>
                                        <a class="btn-main mb10" href="ver_sucursal.php?ciudad=Ciudad de México">Ver sucursal</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 wow fadeInRight" id="baja-california1" data-estado="baja-california" data-wow-delay=".2s">
                                <div class="p-4 pb-2 bg-grey h-100">
                                    <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                        Baja California Norte</div>
                                    <h4>Póliza de Rentas Baja California Norte</h4>
                                    <hr class="s2">
                                    <p>Moliere, No. 310, Polanco II sección, Miguel Hidalgo. Ciudad de México<br><br>

                                        55 3760 0883 <br>

                                        capital@polizaderentas.com
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="spacer-10"></div>
                                        <a class="btn-main mb10" href="ver_sucursal.php?ciudad=Baja California Norte">Ver sucursal</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 wow fadeInRight" id="baja-california2" data-estado="baja-california" data-wow-delay=".2s">
                                <div class="p-4 pb-2 bg-grey h-100">
                                    <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                        Baja California Norte</div>
                                    <h4>Póliza de Rentas Baja California Norte</h4>
                                    <hr class="s2">
                                    <p>Moliere, No. 310, Polanco II sección, Miguel Hidalgo. Baja California Norte<br><br>

                                        55 3760 0883 <br>

                                        capital@polizaderentas.com
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="spacer-10"></div>
                                        <a class="btn-main mb10" href="ver_sucursal.php?ciudad=Baja California Norte">Ver sucursal</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 wow fadeInRight" id="chihuahua1" data-estado="chihuahua" data-wow-delay=".2s">
                                <div class="p-4 pb-2 bg-grey h-100">
                                    <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                        Chihuahua</div>
                                    <h4>Póliza de Rentas Chihuahua</h4>
                                    <hr class="s2">
                                    <p>Moliere, No. 310, Polanco II sección, Miguel Hidalgo. Ciudad de México<br><br>

                                        55 3760 0883 <br>

                                        capital@polizaderentas.com
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="spacer-10"></div>
                                        <a class="btn-main mb10" href="ver_sucursal.php?ciudad=Chihuahua">Ver sucursal</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 wow fadeInRight" id="chihuahua2" data-estado="chihuahua" data-wow-delay=".2s">
                                <div class="p-4 pb-2 bg-grey h-100">
                                    <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                        Chihuahua</div>
                                    <h4>Póliza de Rentas Chihuahua</h4>
                                    <hr class="s2">
                                    <p>Moliere, No. 310, Polanco II sección, Miguel Hidalgo. Chihuahua<br><br>

                                        55 3760 0883 <br>

                                        capital@polizaderentas.com
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="spacer-10"></div>
                                        <a class="btn-main mb10" href="ver_sucursal.php?ciudad=Chihuahua">Ver sucursal</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 wow fadeInRight" id="sinaloa1" data-estado="sinaloa" data-wow-delay=".2s">
                                <div class="p-4 pb-2 bg-grey h-100">
                                    <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                        Sinaloa</div>
                                    <h4>Póliza de Rentas Sinaloa</h4>
                                    <hr class="s2">
                                    <p>Moliere, No. 310, Polanco II sección, Miguel Hidalgo. Ciudad de México<br><br>

                                        55 3760 0883 <br>

                                        capital@polizaderentas.com
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="spacer-10"></div>
                                        <a class="btn-main mb10" href="ver_sucursal.php?ciudad=Sinaloa">Ver sucursal</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 wow fadeInRight" id="sinaloa2" data-estado="sinaloa" data-wow-delay=".2s">
                                <div class="p-4 pb-2 bg-grey h-100">
                                    <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                        Sinaloa</div>
                                    <h4>Póliza de Rentas Sinaloa</h4>
                                    <hr class="s2">
                                    <p>Moliere, No. 310, Polanco II sección, Miguel Hidalgo. Sinaloa<br><br>

                                        55 3760 0883 <br>

                                        capital@polizaderentas.com
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="spacer-10"></div>
                                        <a class="btn-main mb10" href="ver_sucursal.php?ciudad=Sinaloa">Ver sucursal</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 wow fadeInRight" id="durango1" data-estado="durango" data-wow-delay=".2s">
                                <div class="p-4 pb-2 bg-grey h-100">
                                    <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                        Durango</div>
                                    <h4>Póliza de Rentas Durango</h4>
                                    <hr class="s2">
                                    <p>Moliere, No. 310, Polanco II sección, Miguel Hidalgo. Durango<br><br>

                                        55 3760 0883 <br>

                                        capital@polizaderentas.com
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="spacer-10"></div>
                                        <a class="btn-main mb10" href="ver_sucursal.php?ciudad=Durango">Ver sucursal</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 wow fadeInRight" id="nuevo-leon1" data-estado="nuevo-leon" data-wow-delay=".2s">
                                <div class="p-4 pb-2 bg-grey h-100">
                                    <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                        Nuevo Leon</div>
                                    <h4>Póliza de Rentas Nuevo Leon</h4>
                                    <hr class="s2">
                                    <p>Moliere, No. 310, Polanco II sección, Miguel Hidalgo. Durango<br><br>

                                        55 3760 0883 <br>

                                        capital@polizaderentas.com
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="spacer-10"></div>
                                        <a class="btn-main mb10" href="ver_sucursal.php?ciudad=Durango">Ver sucursal</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 wow fadeInRight" id="nuevo-leon2" data-estado="nuevo-leon" data-wow-delay=".2s">
                                <div class="p-4 pb-2 bg-grey h-100">
                                    <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                        Nuevo Leon</div>
                                    <h4>Póliza de Rentas Nuevo Leon</h4>
                                    <hr class="s2">
                                    <p>Moliere, No. 310, Polanco II sección, Miguel Hidalgo. NUevo Leon<br><br>

                                        55 3760 0883 <br>

                                        capital@polizaderentas.com
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="spacer-10"></div>
                                        <a class="btn-main mb10" href="ver_sucursal.php?ciudad=NUevo Leon">Ver sucursal</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 wow fadeInRight" id="san-luis1" data-estado="san-luis" data-wow-delay=".2s">
                                <div class="p-4 pb-2 bg-grey h-100">
                                    <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                        San Luis Potosi</div>
                                    <h4>Póliza de Rentas San Luis Potosi</h4>
                                    <hr class="s2">
                                    <p>Moliere, No. 310, Polanco II sección, Miguel Hidalgo. San Luis<br><br>

                                        55 3760 0883 <br>

                                        capital@polizaderentas.com
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="spacer-10"></div>
                                        <a class="btn-main mb10" href="ver_sucursal.php?ciudad=San Luis">Ver sucursal</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 wow fadeInRight" id="san-luis2" data-estado="san-luis" data-wow-delay=".2s">
                                <div class="p-4 pb-2 bg-grey h-100">
                                    <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                        San Luis Potosi</div>
                                    <h4>Póliza de Rentas San Luis Potosi</h4>
                                    <hr class="s2">
                                    <p>Moliere, No. 310, Polanco II sección, Miguel Hidalgo. San Luis<br><br>

                                        55 3760 0883 <br>

                                        capital@polizaderentas.com
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="spacer-10"></div>
                                        <a class="btn-main mb10" href="ver_sucursal.php?ciudad=San Luis">Ver sucursal</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 wow fadeInRight" id="guanajuato1" data-estado="guanajuato" data-wow-delay=".2s">
                                <div class="p-4 pb-2 bg-grey h-100">
                                    <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                        Guanajuato</div>
                                    <h4>Póliza de Rentas Guanajuato</h4>
                                    <hr class="s2">
                                    <p>Moliere, No. 310, Polanco II sección, Miguel Hidalgo. Guanajuato<br><br>

                                        55 3760 0883 <br>

                                        capital@polizaderentas.com
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="spacer-10"></div>
                                        <a class="btn-main mb10" href="ver_sucursal.php?ciudad=Guanajuato">Ver sucursal</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 wow fadeInRight" id="jalisco" data-estado="jalisco" data-wow-delay=".2s">
                                <div class="p-4 pb-2 bg-grey h-100">
                                    <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                        Jalisco</div>
                                    <h4>Póliza de Rentas Jalisco</h4>
                                    <hr class="s2">
                                    <p>Moliere, No. 310, Polanco II sección, Miguel Hidalgo. Jalisco<br><br>

                                        55 3760 0883 <br>

                                        capital@polizaderentas.com
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="spacer-10"></div>
                                        <a class="btn-main mb10" href="ver_sucursal.php?ciudad=Jalisco">Ver sucursal</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 wow fadeInRight" id="queretaro1" data-estado="queretaro" data-wow-delay=".2s">
                                <div class="p-4 pb-2 bg-grey h-100">
                                    <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                        Queretaro</div>
                                    <h4>Póliza de Rentas Queretaro</h4>
                                    <hr class="s2">
                                    <p>Moliere, No. 310, Polanco II sección, Miguel Hidalgo. Queretaro<br><br>

                                        55 3760 0883 <br>

                                        capital@polizaderentas.com
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="spacer-10"></div>
                                        <a class="btn-main mb10" href="ver_sucursal.php?ciudad=Queretaro">Ver sucursal</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 wow fadeInRight" id="queretaro2" data-estado="queretaro" data-wow-delay=".2s">
                                <div class="p-4 pb-2 bg-grey h-100">
                                    <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                        Queretaro</div>
                                    <h4>Póliza de Rentas Queretaro</h4>
                                    <hr class="s2">
                                    <p>Moliere, No. 310, Polanco II sección, Miguel Hidalgo. Queretaro<br><br>

                                        55 3760 0883 <br>

                                        capital@polizaderentas.com
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="spacer-10"></div>
                                        <a class="btn-main mb10" href="ver_sucursal.php?ciudad=Queretaro">Ver sucursal</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 wow fadeInRight" id="distrito1" data-estado="distrito" data-wow-delay=".2s">
                                <div class="p-4 pb-2 bg-grey h-100">
                                    <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                        Distrito Federal</div>
                                    <h4>Póliza de Rentas Distrito Federal</h4>
                                    <hr class="s2">
                                    <p>Moliere, No. 310, Polanco II sección, Miguel Hidalgo. Distrito Federal<br><br>

                                        55 3760 0883 <br>

                                        capital@polizaderentas.com
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="spacer-10"></div>
                                        <a class="btn-main mb10" href="ver_sucursal.php?ciudad=Distrito Federal">Ver sucursal</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 wow fadeInRight" id="distrito2" data-estado="distrito" data-wow-delay=".2s">
                                <div class="p-4 pb-2 bg-grey h-100">
                                    <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                        Distrito Federal</div>
                                    <h4>Póliza de Rentas Distrito Federal</h4>
                                    <hr class="s2">
                                    <p>Moliere, No. 310, Polanco II sección, Miguel Hidalgo. Distrito Federal<br><br>

                                        55 3760 0883 <br>

                                        capital@polizaderentas.com
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="spacer-10"></div>
                                        <a class="btn-main mb10" href="ver_sucursal.php?ciudad=Distrito Federal">Ver sucursal</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 wow fadeInRight" id="morelos1" data-estado="morelos" data-wow-delay=".2s">
                                <div class="p-4 pb-2 bg-grey h-100">
                                    <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                        Morelos</div>
                                    <h4>Póliza de Rentas Morelos</h4>
                                    <hr class="s2">
                                    <p>Moliere, No. 310, Polanco II sección, Miguel Hidalgo. Morelos<br><br>

                                        55 3760 0883 <br>

                                        capital@polizaderentas.com
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="spacer-10"></div>
                                        <a class="btn-main mb10" href="ver_sucursal.php?ciudad=Morelos">Ver sucursal</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 wow fadeInRight" id="morelos2" data-estado="morelos" data-wow-delay=".2s">
                                <div class="p-4 pb-2 bg-grey h-100">
                                    <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                        Morelos</div>
                                    <h4>Póliza de Rentas Morelos</h4>
                                    <hr class="s2">
                                    <p>Moliere, No. 310, Polanco II sección, Miguel Hidalgo. Morelos<br><br>

                                        55 3760 0883 <br>

                                        capital@polizaderentas.com
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="spacer-10"></div>
                                        <a class="btn-main mb10" href="ver_sucursal.php?ciudad=Morelos">Ver sucursal</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 wow fadeInRight" id="guerrero" data-estado="guerrero" data-wow-delay=".2s">
                                <div class="p-4 pb-2 bg-grey h-100">
                                    <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                        Guerrero</div>
                                    <h4>Póliza de Rentas Guerrero</h4>
                                    <hr class="s2">
                                    <p>Moliere, No. 310, Polanco II sección, Miguel Hidalgo. Guerrero<br><br>

                                        55 3760 0883 <br>

                                        capital@polizaderentas.com
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="spacer-10"></div>
                                        <a class="btn-main mb10" href="ver_sucursal.php?ciudad=Guerrero">Ver sucursal</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 wow fadeInRight" id="tabasco1" data-estado="tabasco" data-wow-delay=".2s">
                                <div class="p-4 pb-2 bg-grey h-100">
                                    <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                        Tabasco</div>
                                    <h4>Póliza de Rentas Tabasco</h4>
                                    <hr class="s2">
                                    <p>Moliere, No. 310, Polanco II sección, Miguel Hidalgo. Tabasco<br><br>

                                        55 3760 0883 <br>

                                        capital@polizaderentas.com
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="spacer-10"></div>
                                        <a class="btn-main mb10" href="ver_sucursal.php?ciudad=Tabasco">Ver sucursal</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 wow fadeInRight" id="tabasco2" data-estado="tabasco" data-wow-delay=".2s">
                                <div class="p-4 pb-2 bg-grey h-100">
                                    <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                        Tabasco</div>
                                    <h4>Póliza de Rentas Tabasco</h4>
                                    <hr class="s2">
                                    <p>Moliere, No. 310, Polanco II sección, Miguel Hidalgo. Tabasco<br><br>

                                        55 3760 0883 <br>

                                        capital@polizaderentas.com
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="spacer-10"></div>
                                        <a class="btn-main mb10" href="ver_sucursal.php?ciudad=Tabasco">Ver sucursal</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 wow fadeInRight" id="yucatan" data-estado="yucatan" data-wow-delay=".2s">
                                <div class="p-4 pb-2 bg-grey h-100">
                                    <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                        Yucatán</div>
                                    <h4>Póliza de Rentas Yucatán</h4>
                                    <hr class="s2">
                                    <p>Moliere, No. 310, Polanco II sección, Miguel Hidalgo. Yucatán<br><br>

                                        55 3760 0883 <br>

                                        capital@polizaderentas.com
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="spacer-10"></div>
                                        <a class="btn-main mb10" href="ver_sucursal.php?ciudad=Yucatán">Ver sucursal</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        var botonMostrar = document.getElementById("mostrarEstados");
                        var seccionEstados = document.getElementById("estados");

                        var filtroEstados = document.getElementById("filtrarEstado");
                        var selectEstados = document.getElementById("filtroEstados");
                        var sucursales = document.querySelectorAll("[data-estado]");

                        botonMostrar.addEventListener("click", function() {
                            mostrarEstados();
                            selectEstados.style.display = "none";
                            seccionEstados.style.display = "block";
                            if (seccionEstados) {
                                seccionEstados.scrollIntoView({
                                    behavior: 'smooth'
                                });
                            }
                        });

                        filtroEstados.addEventListener("click", function() {
                            selectEstados.style.display = "block";
                        });

                        selectEstados.addEventListener("change", function() {


                            var estadoSeleccionado = selectEstados.value;
                            mostrarEstado(estadoSeleccionado);
                            seccionEstados.style.display = 'block';
                            if (seccionEstados) {
                                seccionEstados.scrollIntoView({
                                    behavior: 'smooth'
                                });
                            }

                        });

                        function mostrarEstado(estadoSeleccionado) {
                            if (estadoSeleccionado === 'todos') {
                                var elementosEstado = document.querySelectorAll('.row > .col-lg-3');
                                elementosEstado.forEach(function(elemento) {
                                    elemento.style.display = 'block';
                                });
                            } else {
                                // Ocultar todos los elementos de estado
                                var elementosEstado = document.querySelectorAll('.row > .col-lg-3');
                                elementosEstado.forEach(function(elemento) {
                                    elemento.style.display = 'none';
                                });

                                // Mostrar los elementos correspondientes al estado seleccionado
                                var elementosMostrar = document.querySelectorAll('[data-estado="' + estadoSeleccionado + '"]');
                                elementosMostrar.forEach(function(elemento) {
                                    elemento.style.display = 'block';
                                });

                            }
                        }

                        function mostrarEstados() {
                            // Ocultar todos los elementos de estado
                            var elementosEstado = document.querySelectorAll('.row > .col-lg-3');
                            elementosEstado.forEach(function(elemento) {
                                elemento.style.display = 'block';
                            });
                        }
                    });
                </script>
            </section>


            <section class="bg-dark-1 text-light">
                <div class="container">
                    <div class="row align-items-center gx-5">
                        <div class="col-lg-6 mb-sm-20 position-relative">
                            <div class="images-deco-1">
                                <img src="images/misc/1.png" class="d-img-1 wow zoomIn" data-wow-delay="0s" alt="">
                                <img src="images/misc/2.png" class="d-img-2 wow zoomIn" data-wow-delay=".5s" data-jarallax-element="100" alt="">
                                <div class="d-img-3 bg-color wow zoomIn" data-wow-delay=".6s" data-jarallax-element="-50">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="subtitle s2 wow fadeInUp mb-3">Quiénes somos</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Acerca de <br> Póliza de Rentas</h2>
                            <p class="wow fadeInUp">Somos una empresa dedicada a proteger el patrimonio de las personas,
                                nuestros servicios están destinados a propietarios, inmobiliarias o administradores de
                                inmuebles que buscan dar sus propiedades en arrendamiento.</p>
                            <hr class="s2">
                            <div class="spacer-10"></div>
                            <a class="btn-main mb10" href="">Conoce más</a>
                            <a class="btn-main mb10" href="">Nuestras sucursales</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bo-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="subtitle wow fadeInUp mb-3">Blog</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Blog y noticias</h2>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row sequence">
                        <div class="col-lg-4 col-sm-6 mb-sm-20 gallery-item">
                            <div class="de-item wow jarallax">
                                <div class="d-overlay">
                                    <div class="d-label">
                                    </div>
                                    <div class="d-text">
                                        <h4>Arrendamiento Inmobiliario en México: Navegando con Éxito la Ley de
                                            Extinción de Dominio</h4>
                                        <a class="btn-main btn-fullwidth btn-white" href="">Read
                                            Story</a>
                                    </div>
                                </div>
                                <img src="images/study-case/card1.png" class="img-fluid" alt="">
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 mb-sm-20 gallery-item">
                            <div class="de-item wow">
                                <div class="d-overlay">
                                    <div class="d-label">
                                    </div>
                                    <div class="d-text">
                                        <h4>Protege tu Inversión: Estafas Comunes en el Arrendamiento Inmobiliario y
                                            Cómo Resguardarte con Pólizas Jurídicas de Arrendamiento</h4>
                                        <a class="btn-main btn-fullwidth btn-white" href="">Read
                                            Story</a>
                                    </div>
                                </div>
                                <img src="images/study-case/card2.png" class="img-fluid" alt="">
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 mb-sm-20 gallery-item">
                            <div class="de-item wow">
                                <div class="d-overlay">
                                    <div class="d-label">
                                    </div>
                                    <div class="d-text">
                                        <h4>Contrato de exclusividad inmobiliaria-¿Qué debe incluir?¿Cuáles son las
                                            obligaciones y derechos del asesor?</h4>
                                        <a class="btn-main btn-fullwidth btn-white" href="">Read
                                            Story</a>
                                    </div>
                                </div>
                                <img src="images/study-case/card3.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-lg-12 d-flex justify-content-center">
                            <a class="btn-main mt-5" href="">Ver más artículos</a>
                        </div>
                    </div>
                </div>
            </section>

            <footer>
                <div class="container">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-sm-6">
                            <img src="images/logo.png" alt="" width="143">
                            <div class="spacer-20"></div>
                            <p>Somos una empresa dedicada a proteger el patrimonio de las personas,
                                nuestros servicios están destinados a propietarios, inmobiliarias o
                                administradores de inmuebles que buscan dar sus propiedades en arrendamiento.
                            </p>

                            <div class="widget">
                                <h5>Síguenos</h5>
                                <div class="social-icons">
                                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                                    <a href=""><i class="fa-brands fa-discord"></i></a>
                                    <a href=""><i class="fa-brands fa-tiktok"></i></a>
                                    <a href=""><i class="fa-brands fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 order-lg-1 order-sm-2">
                            <div class="row">
                                <div class="col-lg-8 col-sm-8">
                                    <div class="widget">
                                        <h5>Enlaces</h5>
                                        <ul>
                                            <li><a href="nosotros.html">Nosotros</a></li>
                                            <li><a href="">Servicios Jurídicos</a></li>
                                            <li><a href="">Póliza Jurídica</a></li>
                                            <li><a href="">Convenio de Prevención de Conflictos</a></li>
                                            <li><a href="">Convenio de Transacción</a></li>
                                            <li><a href="">Investigación de Inquilinos</a></li>
                                            <li><a href="">Sucursales</a></li>
                                            <li><a href="">Blog</a></li>
                                            <li><a href="">Contacto</a></li>
                                        </ul>


                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 order-lg-2 order-sm-1">
                            <h5>Contacto</h5>
                            <div class="widget">
                                <div class="de-icon-text">
                                    <img src="images/svg/email-address-svgrepo-com-white.svg" class="" alt="">
                                    <div class="d-text">
                                        Montes Urales 755 piso 5, oficina 5631, Lomas de Chapultepec, Miguel Hidalgo,
                                        CDMX, 11000
                                    </div>
                                </div>

                                <br>

                                <div class="de-icon-text mb20">
                                    <img src="images/svg/phone-svgrepo-com-white.svg" class="" alt="">
                                    <div class="d-text">
                                        <h4>Teléfono</h4>
                                        +52 5589469764
                                    </div>
                                </div>

                                <br>

                                <div class="de-icon-text mb20">
                                    <img src="images/svg/map-pin-svgrepo-com-white.svg" class="" alt="">
                                    <div class="d-text">
                                        <h4>Email</h4>
                                        info@polizaderentas.com
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-6 order-lg-2 order-sm-1 offset-lg-4">
                            <h5>Accesos</h5>

                            <div class="row">

                                <div class="col-lg-4">
                                    <a class="btn-main mb10" href="">Genera tu solicitud</a>
                                    </a>
                                    <a class="btn-main mb10" href="">Sistema Polizas
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="subfooter">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center">
                                2024 Póliza de Rentas |<a href="" class="mx-1">Aviso de privacidad</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer close -->
        </div>

        <!-- Javascript Files
    ================================================== -->
        <script src="js/plugins.js"></script>
        <script src="js/designesia.js"></script>
        <script src="js/swiper.js"></script>
        <script src="js/custom-marquee.js"></script>
        <script src="js/custom-swiper-1.js"></script>

</body>

</html>