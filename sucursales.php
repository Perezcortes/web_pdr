<?php
$url = 'https://app.polizaderentas.com/api/offices';
$response = file_get_contents($url);
$data = json_decode($response, true);
?>

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
                            <option value="" selected>Selecciona un estado...</option>
                            <option value="todos">Mostrar todos</option>
                            <?php foreach ($data as $office) : ?>
                                <?php
                                $estado = strtolower(str_replace(' ', '-', $office['estado']));
                                if (!in_array($estado, $estados)) {
                                    $estados[] = $estado;
                                    echo '<option value="' . $estado . '">' . $office['estado'] . '</option>';
                                }
                                ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <!-- Section para mostrar sucursal mediante API -->
                <section id="branches" class="">
                    <div class="container">
                        <div class="row">
                            <?php if (!empty($data)) : ?>
                                <?php foreach ($data as $office) : ?>
                                    <div class="col-lg-4 col-md-6 mb-4 office-card" data-estado="<?php echo strtolower(str_replace(' ', '-', $office['estado'])); ?>" style="display: none;">
                                        <div class="card">
                                            <div class="card-body">
                                                <?php
                                                $lat = $office['lat'];
                                                $lng = $office['lng'];
                                                echo '<iframe src="https://www.openstreetmap.org/export/embed.html?bbox=' . ($office['lng'] - 0.005) . '%2C' . ($office['lat'] - 0.005) . '%2C' . ($office['lng'] + 0.005) . '%2C' . ($office['lat'] + 0.005) . '&layer=mapnik&marker=' . $office['lat'] . '%2C' . $office['lng'] . '" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';
                                                ?>
                                                <h5 class="card-title"><?php echo $office['nombre_suc']; ?></h5>
                                                <p class="card-text">
                                                    <strong>Dirección:</strong> <?php echo $office['calle'] . ' ' . $office['numExt'] . ', ' . $office['colonia'] . ', ' . $office['municipio'] . ', ' . $office['estado'] . ', CP ' . $office['cp']; ?><br>
                                                    <strong>Email:</strong> <?php echo $office['email_suc']; ?><br>
                                                    <strong>Teléfono:</strong> <?php echo $office['telefono_suc']; ?><br>
                                                </p>

                                                <a class="btn-main mb10" href="sucursal.php?id=<?php echo $office['id']; ?>">Ver más</a>
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

                <script>
                    document.getElementById('filtrarEstado').addEventListener('click', function() {
                        document.getElementById('filtroEstados').style.display = 'block';
                    });

                    document.getElementById('filtroEstados').addEventListener('change', function() {
                        var estadoSeleccionado = this.value;
                        var cards = document.querySelectorAll('.office-card');

                        cards.forEach(function(card) {
                            if (estadoSeleccionado === 'todos' || card.getAttribute('data-estado') === estadoSeleccionado) {
                                card.style.display = 'block';
                            } else {
                                card.style.display = 'none';
                            }
                        });
                    });

                    document.getElementById('mostrarEstados').addEventListener('click', function() {
                        var cards = document.querySelectorAll('.office-card');

                        cards.forEach(function(card) {
                            card.style.display = 'block';
                        });

                        // Also hide the select dropdown if it is visible
                        document.getElementById('filtroEstados').style.display = 'none';
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