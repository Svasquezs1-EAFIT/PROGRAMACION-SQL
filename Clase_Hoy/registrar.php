<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="./registrar.css">
</head>
<body>

    <header>
        <h1>Base de Datos</h1>
        <nav>
        <br>
            <a href="./index.php">Ventas</a>
            <a href="./cliente.php">Clientes</a>
            <a href="./proveedor.php">Proveedor</a>
            <a href="./producto.php">Producto</a>
            <a href="./registrar.php">Registrar</a>
        </nav>
    </header>

    <br><br><br>
    <div>
        <h1> Registros de Datos</h1>
    </div>

    <form method=post class="campo">
        <label for="">codigo venta:</label>
        <input type="text" name="codigov">
        <br>

        <label for="">codigo cliente:</label>
        <input type="text" name="codigoc">
        <br>

        <label for="">codigo producto:</label>
        <input type="text" name="codigop">
        <br>

        <label for="">cantidad:</label>
        <input type="text" name="cantidad">
        <br>

        <label for="">valor unitario:</label>
        <input type="text" name="valor">
        
        <input type="submit" name="agregar" value="agregar">
    </form>

    <?php
    include("conexion.php");
    if(isset($_POST['agregar']))
    {
        $codigov=$_POST['codigov'];
        $codigoc=$_POST['codigoc'];
        $codigop=$_POST['codigov'];
        $codigov=$_POST['codigop'];
        $cantidad=$_POST['cantidad'];
        $valor=$_POST['valor'];

        $consulta="INSERT INTO `cliente`(`Nombre C`, `Ciudad C`, `Tipo C`) VALUES ('$codigov', '$codigoc', '$codigop', '$cantidad', '$valor')";
        $resultado=mysqli_query($conectar, $consulta);
    }
    ?>
</body>
</html>