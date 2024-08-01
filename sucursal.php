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
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="wrapper">
        <?php include 'menu.php'; ?>
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

            <section class="text-light no-top no-bottom position-relative z-1000">
                <div class="v-center">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide" data-jarallax-element="150">
                                <div class="swiper-inner" data-bgimage="url(images/slider/sucursal.png)">
                                    <div class="sw-caption">
                                        <div class="container">
                                            <div class="row gx-5 align-items-center">
                                                <div class="col-lg-7 mb-sm-30 offset-lg-1">
                                                    <h2 class="slider-title font-50" id="nombre_sucursal"></h2>
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

                        <!-- If we need scrollbar -->
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-7">
                            <p id="descripcion_sucursal"></p>
                            <div class="row mt-5" id="usuarios">
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="p-4 pb-2 bg-grey">
                                <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;" id="officeState"></div>
                                <h4 id="officeFullName"></h4>
                                <hr class="s2">
                                <p id="officeAddress"></p>
                                <p id="numero_telefono"></p>
                                <p id="email"></p>
                            </div>
                            <br>

                            <div class="p-4 pb-2 bg-grey">
                                <h4>Envía tus datos y un asesor se pondrá en contacto contigo</h4>

                                <form class="formulario-informes" role="form" action="https://app.polizaderentas.com/sucursales" method="post">
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Nombre completo</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Correo electronico</label>
                                        <input type="email" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="numero" class="form-label">Whatsapp</label>
                                        <input type="number" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <!-- <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Capchat</label>
                                    </div> -->
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </form>
                            </div>
                            <br>

                            <iframe id="map" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </section>

            <?php include 'footer.php'; ?>
        </div>
    </div>
    <script>
        function getParameterByName(name, url) {
            if (!url) url = window.location.href;
            name = name.replace(/[\[\]]/g, '\\$&');
            var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
                results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, ' '));
        }

        // Obtener el id de la sucursal de la URL
        var idSucursal = getParameterByName('id');

        // URL de la API para obtener los detalles de la sucursal
        var apiUrl = 'https://app.polizaderentas.com/api/offices/find-by-id/' + idSucursal;

        // Realizar la solicitud AJAX
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                // Manipular los datos recibidos y actualizar el DOM con la información de la sucursal
                console.log(data); // Verifica la estructura de los datos recibidos

                // Ejemplo de cómo actualizar elementos en el DOM con los datos obtenidos
                document.getElementById('nombre_sucursal').textContent = data.office[0].nombre_suc;
                document.getElementById('officeFullName').textContent = data.office[0].nombre_suc;
                document.getElementById('descripcion_sucursal').innerHTML = data.office[0].descripcion_suc;
                document.getElementById('officeState').innerHTML = data.office[0].estado;
                document.getElementById('officeAddress').innerHTML = data.office[0].calle + ' No. ' + data.office[0].numExt + ', ' + data.office[0].municipio + ', ' + data.office[0].estado;
                document.getElementById('numero_telefono').textContent = data.office[0].telefono_suc;
                document.getElementById('email').textContent = data.office[0].email_suc;

                // Obtener las coordenadas de la sucursal
                var lat = parseFloat(data.office[0].lat);
                var lng = parseFloat(data.office[0].lng);

                // Construir la URL del iframe de OpenStreetMap
                var iframeUrl = `https://www.openstreetmap.org/export/embed.html?bbox=${encodeURIComponent(lng - 0.005)}%2C${encodeURIComponent(lat - 0.005)}%2C${encodeURIComponent(lng + 0.005)}%2C${encodeURIComponent(lat + 0.005)}&layer=mapnik&marker=${encodeURIComponent(lat)}%2C${encodeURIComponent(lng)}`;

                // Crear el elemento iframe dinámicamente
                var newIframe = document.createElement('iframe');
                newIframe.setAttribute('src', iframeUrl);
                newIframe.setAttribute('width', '100%');
                newIframe.setAttribute('height', '400');
                newIframe.setAttribute('style', 'border:0;');
                newIframe.setAttribute('allowfullscreen', '');
                newIframe.setAttribute('loading', 'lazy');

                // Obtener el contenedor donde se va a insertar el iframe
                var mapContainer = document.getElementById('map');

                // Reemplazar el iframe existente con el nuevo iframe
                mapContainer.parentNode.replaceChild(newIframe, mapContainer);

                // Ejemplo para mostrar los usuarios asociados a la sucursal
                var usersDiv = document.getElementById('usuarios');
                data.users.forEach((user, index) => {
                    // Crear un div con las clases col-lg-3 para cada usuario
                    var userDiv = document.createElement('div');
                    userDiv.classList.add('col-lg-3');

                    // Crear imagen y párrafo dentro del div
                    if ((user.img_user === null) || (user.img_user === "")) {
                        userDiv.innerHTML = ` <img src="images/storage/default.jpg" alt="user" class="img-fluid">
                    <p>${user.name}</p>`;
                    } else {
                        userDiv.innerHTML = ` <img src="https://app.polizaderentas.com/${user.img_user}" alt="user" class="img-fluid">
                    <p>${user.name}</p>`;
                    }


                    // Agregar el div al contenedor de usuarios
                    usersDiv.appendChild(userDiv);

                    // Agregar un clearfix después de cada cuarto usuario para mantener el diseño de columnas
                    if ((index + 1) % 4 === 0) {
                        var clearfixDiv = document.createElement('div');
                        clearfixDiv.classList.add('clearfix');
                        usersDiv.appendChild(clearfixDiv);
                    }
                });
            })
            .catch(error => {
                console.error('Error al obtener los datos de la sucursal:', error);
                // Manejo de errores, por ejemplo, mostrar un mensaje de error en la página
            });
    </script>

    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
    <script src="js/swiper.js"></script>
    <script src="js/custom-marquee.js"></script>
    <script src="js/custom-swiper-1.js"></script>

</body>

</html>