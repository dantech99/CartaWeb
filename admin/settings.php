<?php

// variables de navegacion
$home = "";
$carta = "";
$category = "";
$setings = "active";
$title = "Dashboard - Settings";
$breadcum = "Settings";

require_once "../config/conect.php";

if (isset($_POST)) {
    if (!empty($_POST)) {
        $nombre_e = $_POST['nombre_e'];
        $propietario = $_POST['propietario'];
        $descripcion = $_POST['descripcion'];
        $nombreWeb = $_POST['nombreweb'];
        $info_web = $_POST['info_web'];
        $imagen_dash = $_FILES['imagen_dash'];
        //guardado de imagenes
        $name = $imagen_dash['name'];
        $tmpname = $imagen_dash['tmp_name'];
        $fecha = date("YmdHis");
        $foto_dash = $fecha . ".jpg";
        $destino_imagen_dash = "../assets/img/" . $foto_dash;

        //guardando los datos en db
        $query = mysqli_query($conexion, "INSERT INTO configuracion( imagen_dash, nombre_e, propietario, descripcion,nombreweb, info_web) VALUES ('$foto_dash', '$nombre_e', '$propietario', '$descripcion', '$nombreWeb', '$info_web')");

        if ($query) {
            if (move_uploaded_file($tmpname, $destino_imagen_dash)) {
                header('Location: settings.php');
                
            }
        }

    }
}

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
            <?php
                $query = mysqli_query($conexion, "SELECT * FROM configuracion ORDER BY id DESC");
                $data = mysqli_fetch_assoc($query);
                if ($data) {
                    
             
            ?>
            <div class="factory_header">
                <h1>Datos de Le empresa</h1>
                <a href="#" class="factory_btn" id="btnModal">Editar</a>
            </div>

                <div class="factory_body">

                <!-- imgen o logo de la empresa  -->
                <div class="factory_body_title">
                    <h3>Logo</h3>

                    <!-- linea divisora -->
                    <div class="divider"></div>
                </div>
                <div class="factory_body_img">
                    <img src="../assets/img/<?php echo $data['imagen_dash']; ?>" alt="">
                </div>

                <!-- nombre o tilulo de la empresa -->
                <div class="factory_body_title">
                    <h3>Nombre/Titulo Empresa</h3>

                    <!-- linea divisora -->
                    <div class="divider"></div>
                </div>
                <div class="factory_body_content">
                    <h4><?php echo $data['nombre_e']; ?></h4>
                </div>

                <!-- propietario  -->

                <div class="factory_body_title">
                    <h3>propietario</h3>

                    <!-- linea divisora -->
                    <div class="divider"></div>
                </div>
                <div class="factory_body_content">
                    <h4><?php echo $data['propietario']; ?></h4>
                </div>

            </div>
        
        
            <!-- datos de la web que se mostraran en la pagina principal  -->

            <div class="factory_header">
                <h1>Datos de la Web</h1>
            </div>

            <div class="factory_body">

            <div class="factory_body_title">
                <h3>Descripcion</h3>
                <!-- linea divisora -->
                <div class="divider"></div>
            </div>
            <div class="factory_body_content">
                <h4><?php echo $data['descripcion']; ?></h4>
            </div>

            <!-- Nombre de la web  -->
            <div class="factory_body_title">
                <h3>NombreWeb</h3>
                <!-- linea divisora -->
                <div class="divider"></div>
            </div>
            <div class="factory_body_content">
                <h4><?php echo $data['nombreweb']; ?></h4>
            </div>

            <!-- header text, esta seccion es la que se encarga de editar la portada en la pagina principal  -->
            <div class="factory_body_title">
                <h3>HeaderText</h3>
                <!-- linea divisora -->
                <div class="divider"></div>
            </div>
            <div class="factory_body_content">
                <h4><?php echo $data['info_web']; ?></h4>
            </div>
            <?php } ?>
        </div>
    </div>
    </div>

    <div id="myModal" class="modalContainer">
    <div class="modal-content">
        <span class="close">x</span>
        <h2>Mi modal</h2>

         <div class="forms-content">

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-flex">
                <div class="form-flex-one">
                    <label for="file-2">Imagen Logo</label>
                    <input type="file" name="imagen_dash" id="imagen_dash" class="file-input">
                </div>
                </div>


                <div class="form-text">
                    <label for="nombre">Nombre/Titulo de la empresa</label>
                    <input type="text" name="nombre_e" id="nombre">
                </div>
                <div class="form-text">
                    <label for="nombre">Propietario</label>
                    <input type="text" name="propietario" id="nombre">
                </div>

                <div class="form-flex">
                    <div class="form-flex-one">
                        <label for="file-2">Descripcion</label>
                        <textarea name="descripcion" id="descripcion" cols="50" rows="10" ></textarea>
                    </div>
                    </div>
    
    
                    <div class="form-text">
                        <label for="nombre">NombreWeb</label>
                        <input type="text" name="nombreweb" id="nombre">
                    </div>
                    <div class="form-text">
                        <label for="nombre">Header Text</label>
                        <input type="text" name="info_web" id="nombre">
                    </div>
                    <div class="form-btn">
                       <button class="submit">registrar</button>
                        <a href="#">Cancelar</a>
                    </div>
            </form>
        </div>
    </div>
</div>

    <script src="../assets/js/modal.js"></script>
    
</body>
</html>