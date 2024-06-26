<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $url = 'https://app.polizaderentas.com/api/offices/find-by-id/' . $id;
    $response = file_get_contents($url);
    $data = json_decode($response, true);

    if ($data && !empty($data['office'])) {
        $office = $data['office'][0]; // La información de la sucursal
        $user = $data['users'][0]; // La información del usuario

        // // Mostrar los detalles de la sucursal
        // echo '<h2>' . $office['nombre_suc'] . '</h2>';
        // echo '<p><strong>Dirección:</strong> ' . $office['calle'] . ' ' . $office['numExt'] . ', ' . $office['colonia'] . ', ' . $office['municipio'] . ', ' . $office['estado'] . ', CP ' . $office['cp'] . '</p>';
        // echo '<p><strong>Email:</strong> ' . $office['email_suc'] . '</p>';
        // echo '<p><strong>Teléfono:</strong> ' . $office['telefono_suc'] . '</p>';
        // echo '<p><strong>Descripción:</strong> ' . $office['descripcion_suc'] . '</p>';

        // // Mostrar el mapa con OpenStreetMap
        // echo '<iframe src="https://www.openstreetmap.org/export/embed.html?bbox=' . ($office['lng'] - 0.005) . '%2C' . ($office['lat'] - 0.005) . '%2C' . ($office['lng'] + 0.005) . '%2C' . ($office['lat'] + 0.005) . '&layer=mapnik&marker=' . $office['lat'] . '%2C' . $office['lng'] . '" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';

        // // Mostrar los detalles del usuario
        // echo '<h3>Contacto</h3>';
        // echo '<p><strong>Nombre:</strong> ' . $user['name'] . '</p>';
        // echo '<p><strong>Email:</strong> ' . $user['email'] . '</p>';
        // echo '<p><strong>Teléfono:</strong> ' . $user['telefono_user'] . '</p>';
        // echo '<p><strong>WhatsApp:</strong> ' . $user['whatsapp'] . '</p>';
        if ($user['facebook_user']) {
            // echo '<p><strong>Facebook:</strong> <a href="' . $user['facebook_user'] . '" target="_blank">Perfil de Facebook</a></p>';
        }
        if ($user['linkedIn']) {
            // echo '<p><strong>LinkedIn:</strong> <a href="' . $user['linkedIn'] . '" target="_blank">Perfil de LinkedIn</a></p>';
        }
    } else {
        // echo '<p>No se encontraron detalles para esta sucursal.</p>';
    }
} else {
    // echo '<p>ID de sucursal no proporcionado.</p>';
}
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
                                                    <h2 class="slider-title font-50"><?php echo $office['nombre_suc']; ?>
                                                    </h2>
                                                    <!-- <p class="fs-4 wow fadeInRight">
                                                        <?php echo $office['descripcion_suc'] ?>
                                                    </p>
                                                    <a class="btn-main mb10 mt20" href="servicios.php">Nuestras Coberturas</a> -->
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
                        <div class="col-lg-8">
                            <p><?php echo $office['descripcion_suc'] ?></p>

                            <div class="spacer-single"></div>
                        </div>

                        <div class="col-lg-4">
                            <div class="p-4 pb-2 bg-grey">
                                <div class="subtitle wow fadeInUp mb-3" style="background-color: grey; color: white;">
                                    <?php echo $office['estado']?></div>
                                <h4><?php echo $office['nombre_suc']?></span></h4>
                                <hr class="s2">
                                <p><?php echo $office['calle'] . ' ' . $office['numExt'] . ', ' . $office['colonia'] . ', ' . $office['municipio'] . ', ' . $office['estado'] . ', CP ' . $office['cp']; ?> <br><br>

                                <?php echo $office['telefono_suc']?> <br><br>

                                <?php echo $office['email_suc']?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php include 'footer.php'; ?>
        </div>
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