<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTOS</title>
    <link rel="stylesheet" href="./stylespro.css">
</head>

<body>

    <form method="post">
        <h1>Informacion de los Productos</h1>
        <input type="text" name="referencia" placeholder="Referencia">
        <input type="text" name="articulo" placeholder="Articulo">
        <input type="text" name="marca" placeholder="Marca">
        <input type="text" name="talla" placeholder="Talla">
        <input type="text" name="color" placeholder="Color">
        <input type="text" name="cantidad" placeholder="Cantidad">
        <input type="text" name="valor" placeholder="Valor">
        <input type="submit" name="register">
    </form>

    <?php 
        include("registrarpro.php");
    ?>
    
</body>
</html>