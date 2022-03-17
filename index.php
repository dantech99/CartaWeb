<?php 

$title = "Restaurante || Carta";
require_once "config/conect.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>

    <!-- estilos css propios -->
    <link rel="stylesheet" href="assets/scss/client/main.css">

    <!-- google fonst -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;1,400&display=swap" rel="stylesheet"> 


    <!-- iconos boxicons  -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!-- script js -->
    <script src="assets/js/index.js" defer></script> 
    <script src="assets/js/index.js" defer></script>


</head>
<body>

    <!-- navegacion principal encabezado -->
    <header class="header">
    <?php 
            $query = mysqli_query($conexion, "SELECT * FROM configuracion ORDER BY id DESC");
            $data = mysqli_fetch_assoc($query);
            if ($query) {
                
            
            ?>
        <nav class="nav">
           <a href="admin/index.php" class="logo"><?php echo $data['nombre_e']; ?></a>
           <button class="toggle"><i class='bx bx-menu'></i></button>
           <ul class="menu">
               <li class="menu-item"><a href="#"><i class='bx bxs-food-menu' ></i> Ver Carta</a></li>
               <li class="menu-item"><a href="#"><i class='bx bxs-contact'></i> Contacto</a></li>
               <li class="menu-item"><a href="#" id="btnCar"><i class='bx bxs-cart'></i><span class="badge bg-success" id="carrito">0</span></a></li>
           </ul>
        </nav>
    </header>


    <section class="section-header">
        <div class="section-present">
            <h1 class="section-present-title"><?php echo $data['nombreweb']; ?></h1>
            <h4 class="section-present-subtitle"><?php echo $data['info_web']; ?></h4>
            <?php  }?>
        </div>
    </section>

    <section class="section-fill">
        <div class="section-fill-title">
            <h2>Nuestra Carta</h2>
        </div>

        <div class="section-fill-taks">
            <span>Categorias</span>
            <div class="task">
                <a href="#" class="task-link">Todos</a>
                <?php 
                    $query = mysqli_query($conexion, "SELECT * FROM categorias");
                    while($data = mysqli_fetch_assoc($query))
                    {
                ?>
                <a href="#" class="task-link"><?php echo $data['nombre_c']; ?></a>
                <?php }?>
            </div>
        </div>
    </section>

    <section class="section-card-product">

        <?php
        $query = mysqli_query($conexion, "SELECT p.*, c.id AS id_cat, c.nombre_c FROM productos p INNER JOIN categorias c ON c.id = p.id_categoria LIMIT 8");

        $result = mysqli_num_rows($query);
        if ($result > 0) {
            while ($data = mysqli_fetch_assoc($query)) {
        
        ?>
        <div class="section-card" categoria="<?php
        echo $data['nombre_c']; ?>">
            <div class="card">
                <div class="card-img">
                    <img src="assets/img/<?php echo $data['imagen']; ?>" alt="">
                </div>
                <div class="card-body">
                    <h2 class="card-body-title"><?php echo $data['nombre_p']; ?></h2>
                    <span class="card-price"><?php echo $data['precio']; ?></span>
                </div>
                <div class="card-btn">
                    <a href="#" class="card-btn-link"><button class="btn">Agregar al Carrito</button></a>
                    <a href="#" class="card-btn-link"><button class="btn">Detalles</button></a>
                </div>
            </div>
        </div>
        <?php } }else {
            echo "no hay nada aqui aun";
        }?>

    </section>



    <footer class="footer">
        <div class="foot">
            <h2>Restaurante</h2>
        </div>
        <div class="foot-social">
            <a href="">facebook</a>
            <a href="">WhatsApp</a>
        </div>
    </footer>
</body>
</html>