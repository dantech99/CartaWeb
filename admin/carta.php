<?php 

// variables de control
$home = "";
$carta = "active";
$category = "";
$title = "Dashboard - carta";
$breadcum = "carta";

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

    <div class="main">
        <div class="breadcum">
        <h2><i class='bx bx-chevron-right'></i> <?php echo $breadcum ?></h2>
        </div>

    </div>
</body>
</html>