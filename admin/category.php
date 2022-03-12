<?php

// variables de navegacion
$home = "";
$carta = "";
$category = "active";
$breadcum = "Category";
$title = "Dashboard - Category";

// conect data base

require_once "../config/conect.php";

if (isset($_POST)) {
    if (!empty($_POST)) {
        $nombre = $_POST['nombrec'];
        $query = mysqli_query($conexion, "INSERT INTO categoria(nombrec) VALUES ('$nombre')");
        if ($query) {
            // echo '<script> alert("dato ingresado")</script>';
            header('Location: category.php');
        }
    }
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'head.php' ?>

    <title><?php echo $title ?></title>
</head>
<body>
    <?php  include 'nav.php' ?>
    <div class="main">
    <div class="breadcum">
        <h2><i class='bx bx-chevron-right'></i> <?php echo $breadcum ?></h2>
    </div>


    <div class="tbl_poster">
                <div class="tbl_btn">
                    <?php include ('popus/category.html'); ?>
                    <a href="#" class="btn" id="btnModal"><i class='bx bx-plus'></i> Agregar</a>
                </div>
            </div>
        <div class="container_tbl">
           
            <!-- tabla  -->
            
            <table>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($conexion, "SELECT * FROM categoria ORDER BY id DESC");
                    while ($data = mysqli_fetch_assoc($query))
                    {
                    ?>
                    <tr>
                        <td><?php echo $data['id']; ?></td>
                        <td><?php echo $data['nombrec']; ?></td>
                        <td>
                            <a href="#" class="action"><i class='bx bxs-edit-alt'></i></a>
                            <a href="#" class="action"><i class='bx bxs-trash-alt'></i></a>
                         </td>
                    </tr>
                   
                    <?php } ?>
                
                </tbody>
            </table>
        </div>
    </div>


  

    <script src="../assets/js/modal.js"></script>
    
</body>
</html>
