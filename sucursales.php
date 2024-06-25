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
                                <div class="swiper-inner" data-bgimage="url(images/slider/banner-sucursales.jpg)">
                                    <div class="sw-caption">
                                        <div class="container">
                                            <div class="row gx-5 align-items-center">

                                                <div class="col-lg-10 mb-sm-30">
                                                    <h2 class="slider-title font-60">
                                                        La red legal más grande <br>
                                                        de México
                                                    </h2>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="subtitle s2 mb-4">
                                                        <p>Póliza de Rentas cuenta con más de 30 sucursales alrededor <br>
                                                            de todo México, trabajando de la mano con las mejores <br>
                                                            inmobiliarias y asesores en la contratación de pólizas jurídicas
                                                            <br>
                                                            de arrendamiento.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="spacer-10"></div>
                                                    <a class="btn-main mb10" href="#mapa">Ubica tu sucursal</a>
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
                        <!-- <div class="swiper-button-prev d-block d-lg-none" style="margin-top: 60%"></div>
                        <div class="swiper-button-next d-block d-lg-none" style="margin-top: 60%"></div>

                        <div class="swiper-button-prev d-none d-lg-block"></div>
                        <div class="swiper-button-next d-none d-lg-block"></div> -->

                        <!-- If we need scrollbar -->
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </section>

            <section id="mapa">
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
                            <option value="mexico">Ciudad de Méxio</option>
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
                                    <h4>Póliza de Rentas <span class="dorado">CdMx Capital</span></h4>
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
                                    <h4>Póliza de Rentas <span class="dorado">CdMx Capital</span></h4>
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
                                    <h4>Póliza de Rentas <span class="dorado">Veracruz Jurista</span></h4>
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
                                    <h4>Póliza de Rentas <span class="dorado">Xalapa Jurista</span></h4>
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
                                    <h4>Póliza de Rentas <span class="dorado">de los Ángeles</span></h4>
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
                                    <h4>Póliza de Rentas <span class="dorado">Puebla Capital</span></h4>
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
                                    <h4>Póliza de Rentas <span class="dorado">CdMx Capital</span></h4>
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
                                    <h4>Póliza de Rentas <span class="dorado">CdMx Capital</span></h4>
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
                                    <h4>Póliza de Rentas <span class="dorado">Baja California Norte</span></h4>
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
                                    <h4>Póliza de Rentas <span class="dorado">Baja California Norte</span></h4>
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
                                    <h4>Póliza de Rentas <span class="dorado">Chihuahua</span></h4>
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
                                    <h4>Póliza de Rentas <span class="dorado">Chihuahua</span></h4>
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
                                    <h4>Póliza de Rentas <span class="dorado">Sinaloa</span></h4>
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
                                    <h4>Póliza de Rentas <span class="dorado">Sinaloa</span></h4>
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
                                    <h4>Póliza de Rentas <span class="dorado">Durango</span></h4>
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
                                    <h4>Póliza de Rentas <span class="dorado">Nuevo Leon</span></h4>
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
                                    <h4>Póliza de Rentas <span class="dorado">Nuevo Leon</span></h4>
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
                                    <h4>Póliza de Rentas <span class="dorado">San Luis Potosi</span></h4>
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
                                    <h4>Póliza de Rentas <span class="dorado">San Luis Potosi</span></h4>
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
                                    <h4>Póliza de Rentas <span class="dorado">Guanajuato</span></h4>
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
                                    <h4>Póliza de Rentas <span class="dorado">Jalisco</span></h4>
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
                                    <h4>Póliza de Rentas <span class="dorado">Queretaro</span></h4>
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
                                    <h4>Póliza de Rentas <span class="dorado">Queretaro</span></h4>
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
                                    <h4>Póliza de Rentas <span class="dorado">Distrito Federal</span></h4>
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
                                    <h4>Póliza de Rentas <span class="dorado">Distrito Federal</span></h4>
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
                                    <h4>Póliza de Rentas <span class="dorado">Morelos</span></h4>
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
                                    <h4>Póliza de Rentas <span class="dorado">Morelos</span></h4>
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
                                    <h4>Póliza de Rentas <span class="dorado">Guerrero</span></h4>
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
                                    <h4>Póliza de Rentas <span class="dorado">Tabasco</span></h4>
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
                                    <h4>Póliza de Rentas <span class="dorado">Tabasco</span></h4>
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
                                    <h4>Póliza de Rentas <span class="dorado">Yucatán</span></h4>
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
                                    elemento.style.display = 'none';
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
                            <a class="btn-main mb10" href="franquicias.php#conoce">Conoce más</a>
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

            <?php
            $url = 'https://app.polizaderentas.com/api/offices';
            $response = file_get_contents($url);
            $data = json_decode($response, true);
            ?>

            <!-- Section para mostrar sucursal mediante API -->
            <section id="branches">
                <div class="container">
                    <h2>Nuestras Sucursales</h2>
                    <div class="row">
                        <?php if (!empty($data)) : ?>
                            <?php foreach ($data as $office) : ?>
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="card">
                                        <!-- <img src="<?php echo 'https://app.polizaderentas.com/'.$office['img_suc']; ?>"  class="card-img-top" alt="<?php echo $office['nombre_suc']; ?>"> -->
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $office['nombre_suc']; ?></h5>
                                            <p class="card-text">
                                                <strong>Dirección:</strong> <?php echo $office['calle'] . ' ' . $office['numExt'] . ', ' . $office['colonia'] . ', ' . $office['municipio'] . ', ' . $office['estado'] . ', CP ' . $office['cp']; ?><br>
                                                <strong>Email:</strong> <?php echo $office['email_suc']; ?><br>
                                                <strong>Teléfono:</strong> <?php echo $office['telefono_suc']; ?><br>
                                            </p>
                                            <!-- <a href="mailto:<?php echo $office['email_suc']; ?>" class="btn btn-primary">Contactar</a> -->
                                            <a href="#" class="btn btn-primary">Ver mas</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <p>No hay sucursales disponibles.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </section>

            <?php include 'footer.php'; ?>

        </div>

        <!-- Javascript Files
    ================================================== -->
        <script src="js/plugins.js"></script>
        <script src="js/designesia.js"></script>
        <script src="js/swiper.js"></script>
        <script src="js/custom-marquee.js"></script>
        <script src="js/custom-swiper-1.js"></script>

        <!-- <script>
            fetch('https://app.polizaderentas.com/api/offices')
                .then(response => response.json())
                .then(data => console.log(data));
        </script> -->

</body>

</html>