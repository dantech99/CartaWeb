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
        $nombre = $_POST['nombre_c'];
        $query = mysqli_query($conexion, "INSERT INTO categorias(nombre_c) VALUES ('$nombre')");
        if ($query) {
            // echo '<script> alert("dato ingresado")</script>';
            echo'<script type="text/javascript">
            alert("registro guardado");
            window.location.href="category.php";
            </script>';
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
                        <th scope="col">nombre de la categoria</th>
                        <th scope="col">acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($conexion, "SELECT * FROM categorias ORDER BY id ASC");
                    while ($data = mysqli_fetch_assoc($query))
                    {
                    ?>
                    <tr>
                        <td><?php echo $data['id']; ?></td>
                        <td><?php echo $data['nombre_c']; ?></td>
                        <td>
                            <form method="post" action="eliminar.php?accion=cli&id=<?php echo $data['id']; ?>">
                            <button type="submit" class="action"><i class='bx bxs-trash-alt'></i></a>
                            </form>
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
