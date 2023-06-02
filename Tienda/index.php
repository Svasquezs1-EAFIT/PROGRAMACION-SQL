<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OBREROS</title>
    <link rel="stylesheet" href="./styles.css">
    <a href="./producto.php" class="produc" target="_blank">IR A PRODUCTOS</a>
</head>

<body>

    <form method="post">
        <h1>Informacion del Obrero</h1>
        <input type="text" name="cedula" placeholder="Cedula">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="apellido" placeholder="Apellidos">
        <input type="text" name="edad" placeholder="Edad">
        <input type="text" name="sexo" placeholder="Sexo">
        <input type="text" name="estado" placeholder="Estado Civil">
        <input type="text" name="jornada" placeholder="Jornada">
        <input type="text" name="fecha" placeholder="Fecha de Ingreso">
        <input type="text" name="hijos" placeholder="Cantidad de Hijos">
        <input type="text" name="salario" placeholder="Salario">
        <input type="submit" name="register">
    </form>

    <?php 
        include("registrar.php");
    ?>

</body>
</html>