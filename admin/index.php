<?php

// variables de navegacion
$home = "active";
$carta = "";
$category = "";
$setings = "";
$title = "Dashboard - Home";
$breadcum = "Home";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php include 'head.php'; ?>
   <title><?php echo $title ?></title>
</head>
<body>
    <?php include 'nav.php' ?>
    <!-- seccion principal -->
    <div class="main">

        <!-- breadcum -->
        <div class="breadcum">
            <h2><i class='bx bx-chevron-right'></i> <?php echo $breadcum ?></h2>
        </div>

        <!-- jumbotron -->
        <div class="section_title">
            <div class="title">
                <h1><i class='bx bxs-dashboard'></i> Bienvenidos a el Dashboard administrativo</h1>
            </div>
            <div class="info">
                <h4><i class='bx bxs-info-circle'></i> Estas en la seccion principal en donde podras ver el estado de tu tienda</h4>
            </div>
        </div>


        <!-- section empresa -->
        <div class="section_about">
            <div class="about_img">
                <img src="../assets/img/restaurante.jpg" alt="restaurante">
            </div>
            <div class="about_info">
                <ul>
                    <li> <h1>Nombre de la Empresa</h1></li>
                    <li><h3>Propietario de la Empresa</h3></li>
                    <li><h3>Info de la Empresa</h3></li>
                </ul>
                <div class="about_btn">
                    <a href="../index.php" target="_blank" class="btn_one"><i class='bx bx-show'></i> Ver Tienda</a>
                    <a href="settings.php" class="btn_two"><i class='bx bxs-cog'></i> Configurar Tienda</a>
                </div>
            </div>
        </div>

    </div>
    
</body>
</html>