<?php
// variables de control
$home = "";
$carta = "active";
$category = "";
$title = "Dashboard - carta";
$breadcum = "Carta";

require_once "../config/conect.php";

if (isset($_POST)) {
    if (!empty($_POST)) {
        $nombre = $_POST['nombre_p'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $categoria = $_POST['categoria'];
        $imagen = $_FILES['imagen'];
        $name = $imagen['name'];
        $tmpname = $imagen['tmp_name'];
        $fecha = date("YmdHis");
        $foto = $fecha . ".jpg";
        $destino = "../assets/img/" . $foto;

        $query = mysqli_query($conexion, "INSERT INTO productos(nombre_p, descripcion, precio, imagen, id_categoria) VALUES ('$nombre', '$descripcion', '$precio', '$foto', $categoria)");

        if ($query) {
            if (move_uploaded_file($tmpname, $destino)) {
                echo'<script type="text/javascript">
                alert("registro guardado");
                window.location.href="carta.php";
                </script>';
            }
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
                <a href="#" class="btn" id="btnModal"><i class='bx bx-plus'></i> Agregar</a>
                </div>
        </div>
        <div class="container_tbl">   
            <!-- tabla  -->
            <table>
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Categorias</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $query = mysqli_query($conexion, "SELECT p.*, c.id AS id_cat, c.nombre_c FROM productos p INNER JOIN categorias c ON c.id = p.id_categoria ORDER BY p.id DESC");

                    while($data = mysqli_fetch_assoc($query)) {
                    ?>
                    <tr>
                        <td><img src="../assets/img/<?php echo $data['imagen']; ?>" alt="imagen del producto" class="img-post"></td>
                        <td><?php echo $data['nombre_p']; ?></td>
                        <td><?php echo $data['descripcion']; ?></td>
                        <td><?php echo $data['precio']; ?></td>
                        <td><?php echo $data['nombre_c']; ?></td>
                        <td>
                            <form method="post" action="eliminar.php?accion=pro&id=<?php echo $data['id']; ?>">
                            <button type="submit" class="action"><i class='bx bxs-trash-alt'></i></button>
                            <a href="#" class="action"></a>
                            </form>
                         </td>
                    </tr>
                    <?php } ?>
                </tbody>
               
            </table>
        </div>
    </div>

      <!-- vetana modal para agregar productos -->
    
<div id="myModal" class="modalContainer">
    <div class="modal-content">
        <span class="close">x</span>
        <h2>Agregar Productos</h2>

         <div class="forms-content">

            <form action="" method="POST" enctype="multipart/form-data">
            
                <div class="form-text">
                    <label for="nombre">Nombre del producto</label>
                    <input type="text" name="nombre_p" id="nombre_p" required>
                </div>


                <div class="form-text">
                    <label for="descripcion">Descripcion</label>
                    <textarea name="descripcion" id="mytextarea" placeholder="Descripcion del producto" required></textarea>
                </div>
                <div class="form-text">
                    <label for="precio">Precio</label>
                    <input type="text" name="precio" id="precio" required>
                </div>

                <div class="form-flex">
                <div class="form-flex-one">
                    <label for="file-2">Imagen</label>
                    <input type="file" name="imagen" id="imagen" class="file-input" required>
                </div>

                    <div class="form-flex-two">
                        <label for="categorias">Categorias</label>
                        <select name="categoria" id="categoria" class="select-input" required>
                            <?php 
                                $categorias = mysqli_query($conexion, "SELECT * FROM categorias");
                                foreach ($categorias as $cat) {?>
                            <option value="<?php echo $cat['id']; ?>"><?php echo $cat['nombre_c']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-btn">
                    <button type="submit">Registrar</button>
                    <button onclick="window.location.href='carta.php'">cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
  <script src="../assets/js/modal.js"></script>
 

</body>
</html>