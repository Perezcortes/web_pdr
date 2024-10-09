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
                                                    <h1 class="slider-title font-60">
                                                        La red legal más grande <br>
                                                        de México
                                                    </h1>
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
                        <a type="button" class="subtitle s2 wow fadeInUp mb-3" id="filtrarEstado" style="display: none;">Filtrar por estado</a>
                        <select class="form-select" aria-label="Default select example" id="filtroEstados" style="display: block;">
                            <option value="" selected>Selecciona un estado...</option>
                            <option value="todos">Mostrar todos</option>
                        </select>
                    </div>
                </div>

                <!-- Section para mostrar sucursal mediante API -->
                <section id="branches" class="">
                    <div class="container">
                        <div class="row" id="officeContainer">
                            <!-- Aquí se agregarán las sucursales dinámicamente -->
                        </div>
                    </div>
                </section>

                <script>
                    fetch('https://app.polizaderentas.com/api/offices')
                        .then(response => response.json())
                        .then(data => {
                            // Función para generar las opciones del select
                            const uniqueStatesSet = new Set();
                            const selectElement = document.getElementById('filtroEstados');

                            // Recopilar estados únicos
                            data.forEach(office => {
                                uniqueStatesSet.add(office.estado);
                            });

                            // Convertir el Set a un array y ordenar los estados alfabéticamente
                            const uniqueStates = Array.from(uniqueStatesSet).sort((a, b) => a.localeCompare(b));

                            // Crear y agregar las opciones al select
                            uniqueStates.forEach(state => {
                                const option = document.createElement('option');
                                option.value = state.toLowerCase().replace(/ /g, '-');
                                option.textContent = state;
                                selectElement.appendChild(option);
                            });

                            // Función para generar las tarjetas de las sucursales
                            const officeContainer = document.getElementById('officeContainer');
                            data.forEach(office => {
                                const cardDiv = document.createElement('div');
                                cardDiv.className = 'col-lg-4 col-md-6 mb-4 office-card';
                                cardDiv.setAttribute('data-estado', office.estado.toLowerCase().replace(/ /g, '-'));
                                cardDiv.style.display = 'none';

                                const card = `
                    <div class="card">
                        <div class="card-body">
                            <iframe 
                    src="https://www.openstreetmap.org/export/embed.html?bbox=${encodeURIComponent(parseFloat(office.lng) - 0.005)}%2C${encodeURIComponent(parseFloat(office.lat) - 0.005)}%2C${encodeURIComponent(parseFloat(office.lng) + 0.005)}%2C${encodeURIComponent(parseFloat(office.lat) + 0.005)}&layer=mapnik&marker=${encodeURIComponent(parseFloat(office.lat))}%2C${encodeURIComponent(parseFloat(office.lng))}" 
                    width="100%" 
                    height="400" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
                            <h5 class="card-title">${office.nombre_suc}</h5>
                            <p class="card-text">
                                <strong>Dirección:</strong> ${office.calle} ${office.numExt}, ${office.colonia}, ${office.municipio}, ${office.estado}, CP ${office.cp}<br>
                                <strong>Email:</strong> ${office.email_suc}<br>
                                <strong>Teléfono:</strong> ${office.telefono_suc}<br>
                            </p>
                            <a class="btn-main mb10" href="sucursal.php?id=${office.id}">Ver más</a>
                        </div>
                    </div>
                `;
                                cardDiv.innerHTML = card;
                                officeContainer.appendChild(cardDiv);
                            });
                        })
                        .catch(error => console.error('Error al obtener los datos de la API:', error));

                    document.getElementById('mostrarEstados').addEventListener('click', function() {
                        document.querySelectorAll('.office-card').forEach(function(card) {
                            card.style.display = 'block';
                        });
                    });

                    document.getElementById('filtrarEstado').addEventListener('click', function() {
                        document.getElementById('filtroEstados').style.display = 'block';
                    });

                    document.getElementById('filtroEstados').addEventListener('change', function() {
                        const selectedState = this.value;
                        document.querySelectorAll('.office-card').forEach(function(card) {
                            if (selectedState === 'todos' || card.getAttribute('data-estado') === selectedState) {
                                card.style.display = 'block';
                            } else {
                                card.style.display = 'none';
                            }
                        });
                    });
                </script>
            </section>


            <section class="bg-dark-1 text-light">
                <div class="container">
                    <div class="row align-items-center gx-5">
                        <div class="col-lg-6 mb-sm-20 position-relative">
                            <div class="images-deco-1">
                                <img src="images/misc/1.png" class="d-img-1 wow zoomIn" data-wow-delay="0s" alt="quienes somos">
                                <img src="images/misc/2.png" class="d-img-2 wow zoomIn" data-wow-delay=".5s" data-jarallax-element="100" alt="logo">
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
                                        <a class="btn-main btn-fullwidth btn-white" href="arrendamiento.php">Read
                                            Story</a>
                                    </div>
                                </div>
                                <img src="images/study-case/card1.png" class="img-fluid" alt="card1">
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
                                        <a class="btn-main btn-fullwidth btn-white" href="protege.php">Read
                                            Story</a>
                                    </div>
                                </div>
                                <img src="images/study-case/card2.png" class="img-fluid" alt="card2">
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
                                        <a class="btn-main btn-fullwidth btn-white" href="contrato-exclusividad.php">Read
                                            Story</a>
                                    </div>
                                </div>
                                <img src="images/study-case/card3.png" class="img-fluid" alt="card3">
                            </div>
                        </div>
                        <div class="col-lg-12 d-flex justify-content-center">
                            <a class="btn-main mt-5" href="blog.php">Ver más artículos</a>
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