<?php
// variables de control
$home = "";
$carta = "active";
$category = "";
$title = "Dashboard - carta";
$breadcum = "Carta";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'head.php'; ?>
    <title><?php echo $title ?></title>
</head>
<body>
    <?php include 'nav.php' ?>

    <div class="main">
        <div class="breadcum">
        <h2><i class='bx bx-chevron-right'></i> <?php echo $breadcum ?></h2>
        </div>

        <div class="tbl_poster">
                <div class="tbl_btn">
                <a href="#" class="btn" id="btnModal">Abrir Modal</a>
                <?php include ('popus/modal.html') ?>
                </div>
        </div>
        <div class="container_tbl">   
            <!-- tabla  -->
            <table>
                <thead>
                    <tr>
                        <th scope="col">Imagen</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Describcion</th>
                        <th scope="col">Precio</th>
                        <th scope="col">cantidad</th>
                        <th scope="col">Categorias</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="../assets/img/hamburguesa1.png" alt="" class="img-post"></td>
                        <td>Producto</td>
                        <td> la descripion del producto en espesifico</td>
                        <td>15.000</td>
                        <td>200</td>
                        <td>categorias</td>
                        <td>
                            <a href="#" class="action"><i class='bx bxs-edit-alt'></i></a>
                            <a href="#" class="action"><i class='bx bxs-trash-alt'></i></a>
                         </td>
                    </tr>
                    <tr>
                        <td><img src="../assets/img/hamburguesa1.png" alt="" class="img-post"></td>
                        <td>Producto</td>
                        <td>la descripion del producto en espesifico</td>
                        <td>15.000</td>
                        <td>200</td>
                        <td>categorias</td>
                        <td>
                            <a href="#" class="action"><i class='bx bxs-edit-alt'></i></a>
                            <a href="#" class="action"><i class='bx bxs-trash-alt'></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="../assets/img/hamburguesa1.png" alt="" class="img-post"></td>
                        <td>Producto</td>
                        <td>la descripion del producto en espesifico</td>
                        <td>15.000</td>
                        <td>200</td>
                        <td>categorias</td>
                        <td>
                            <a href="#" class="action"><i class='bx bxs-edit-alt'></i></a>
                            <a href="#" class="action"><i class='bx bxs-trash-alt'></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="../assets/img/hamburguesa1.png" alt="" class="img-post"></td>
                        <td>Producto</td>
                        <td>la descripion del producto en espesifico</td>
                        <td>15.000</td>
                        <td>200</td>
                        <td>categorias</td>
                        <td>
                            <a href="#" class="action"><i class='bx bxs-edit-alt'></i></a>
                            <a href="#" class="action"><i class='bx bxs-trash-alt'></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="../assets/img/hamburguesa1.png" alt="" class="img-post"></td>
                        <td>Producto</td>
                        <td>la descripion del producto en espesifico</td>
                        <td>15.000</td>
                        <td>200</td>
                        <td>categorias</td>
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