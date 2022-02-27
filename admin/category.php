<?php

// variables de navegacion
$home = "";
$carta = "";
$category = "active";
$breadcum = "Category";
$title = "Dashboard - Category"

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
                    <?php include ('popus/category.html') ?>
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
                        <th>Fecha de creacion</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>categorias</td>
                        <td>25-03-22</td>
                        <td>
                            <a href="#" class="action"><i class='bx bxs-edit-alt'></i></a>
                            <a href="#" class="action"><i class='bx bxs-trash-alt'></i></a>
                         </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>categorias</td>
                        <td>25-03-22</td>
                        <td>
                            <a href="#" class="action"><i class='bx bxs-edit-alt'></i></a>
                            <a href="#" class="action"><i class='bx bxs-trash-alt'></i></a>
                         </td>
                    </tr>
                   
                       
                
                </tbody>
            </table>
        </div>
    </div>

    <script src="../assets/js/modal.js"></script>
    
</body>
</html>
