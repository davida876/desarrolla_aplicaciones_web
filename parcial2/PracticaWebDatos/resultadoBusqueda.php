<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>
    <?php 
    include 'conexion.php';
    include 'menu.php';
    if($_GET["termino"] ==""){´
        

    ?>

    <div class="alert alert-danger">No existen registros con ese termino de busqueda</div>

    <?php } else {
    $sql = "SELECT * from usuarios WHERE nombre LIKE '" . $_GET["termino"];
    ?>

    <?php } ?>
    <script src="js/bootstrap.js"></script>
</body>
</html>