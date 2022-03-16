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
                <?php
                    require_once "../config/conect.php";
                    $query = mysqli_query($conexion, "SELECT * FROM configuracion ORDER BY id DESC");
                    $data = mysqli_fetch_assoc($query);

                    if ($query) {
                     
                 ?>
                <img src="../assets/img/<?php echo $data['imagen_dash']; ?>" alt="restaurante">
               
            </div>
            <div class="about_info">
                <ul>
                    <li> <h1><?php echo  $data['nombre_e']; ?></h1></li>
                    <li><h3><?php echo  $data['propietario']; ?></h3></li>
                    <li><h3><?php echo  $data['descripcion']; ?></h3></li>
                </ul>
                <?php  } ?>
                <div class="about_btn">
                    <a href="../index.php" target="_blank" class="btn_one"><i class='bx bx-show'></i> Ver Tienda</a>
                    <a href="settings.php" class="btn_two"><i class='bx bxs-cog'></i> Configurar Tienda</a>
                </div>
            </div>
        </div>

    </div>
    
</body>
</html>