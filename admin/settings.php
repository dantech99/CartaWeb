<?php

// variables de navegacion
$home = "";
$carta = "";
$category = "";
$setings = "active";
$title = "Dashboard - Settings";
$breadcum = "Settings";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'head.php' ?>
    <title><?php echo $title ?></title>
</head>
<body>
    <?php include 'nav.php' ?>


    <div class="main">
    <div class="breadcum">
        <h2><i class='bx bx-chevron-right'></i> <?php echo $breadcum ?></h2>
    </div>

     <!-- jumbotron -->
        <div class="section_title">
            <div class="title">
                <h1><i class='bx bxs-cog'></i> Configuracion de la plataforma</h1>
            </div>
            <div class="info">
                <h4><i class='bx bxs-info-circle'></i> En esta seccion podras editar todos los datos de la plataforma, desde logos e imagenes de dashboard hasta los datos personales de propiedad</h4>
            </div>
        </div>

    <!-- secciones de configuracion -->
    <div class="factory">
        <div class="factory_header">
            <h1>Datos de Le empresa</h1>
            <?php include ('popus/settings.html') ?>
            <a href="#" class="factory_btn" id="btnModal">Editar</a>
        </div>

        <div class="factory_body">

        <!-- imgen o logo de la empresa  -->
            <div class="factory_body_title">
                <h3>Imagen/Logo</h3>

                <!-- linea divisora -->
                <div class="divider"></div>
            </div>
            <div class="factory_body_img">
                <img src="../assets/img/restaurante.jpg" alt="">
            </div>

            <!-- nombre o tilulo de la empresa -->
            <div class="factory_body_title">
                <h3>Nombre/Titulo Empresa</h3>

                <!-- linea divisora -->
                <div class="divider"></div>
            </div>
            <div class="factory_body_content">
                <h4>Restaurante</h4>
            </div>

            <!-- propietario  -->

            <div class="factory_body_title">
                <h3>Propietario</h3>

                <!-- linea divisora -->
                <div class="divider"></div>
            </div>
            <div class="factory_body_content">
                <h4>AntonioMcs</h4>
            </div>

        </div>
        
        
        <!-- datos de la web que se mostraran en la pagina principal  -->

        <div class="factory_header">
            <h1>Datos de la Web</h1>
        </div>

        <div class="factory_body">

        <!-- imagen o logo que aparecera en la pagina principal  -->
            <div class="factory_body_title">
                <h3>Imagen/Logo</h3>
                <!-- linea divisora -->
                <div class="divider"></div>
            </div>
            <div class="factory_body_img">
                <img src="../assets/img/restaurante.jpg" alt="">
            </div>


            <!-- Nombre de la web  -->
            <div class="factory_body_title">
                <h3>NombreWeb</h3>
                <!-- linea divisora -->
                <div class="divider"></div>
            </div>
            <div class="factory_body_content">
                <h4>Restaurante</h4>
            </div>

            <!-- header text, esta seccion es la que se encarga de editar la portada en la pagina principal  -->
            <div class="factory_body_title">
                <h3>HeaderText</h3>
                <!-- linea divisora -->
                <div class="divider"></div>
            </div>
            <div class="factory_body_content">
                <h4>Bienvenidos a el Restuarante</h4>
            </div>

        </div>
    </div>



    </div>

    <script src="../assets/js/modal.js"></script>
    
</body>
</html>