<?php 

if (isset($_GET)) {
    if (!empty($_GET['accion']) && !empty($_GET['id'])) {
        require_once "../config/conect.php";

        $id = $_GET['id'];
        if ($_GET['accion'] == 'pro') {
            $query = mysqli_query($conexion, "DELETE FROM productos WHERE id = $id");
            if ($query) {
                echo'<script type="text/javascript">
                alert("registro eliminado");
                window.location.href="carta.php";
                </script>';
            }
        }
        if ($_GET['accion'] == 'cli') {
            $query = mysqli_query($conexion, "DELETE FROM categorias WHERE id = $id");
            if ($query) {
                echo'<script type="text/javascript">
            alert("registro guardado");
            window.location.href="category.php";
            </script>';
            }
        }
    }
}


?>