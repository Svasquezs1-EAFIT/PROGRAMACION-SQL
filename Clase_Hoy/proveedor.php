<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Provedor</title>
    <link rel="stylesheet" href="./proveedor.css">
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
    <h1> Registro de proveedores</h1>
    <table>
        <tr>
            <th>Codigo de proveedor</th>
            <th>Nombre de proveedor</th>
            <th>Ciudad de proveedor</th>
        </tr>
    
    <?php
    include("conexion.php");
    $consulta=("SELECT * FROM proveedor");
    $enlazar=mysqli_query($conectar,$consulta);
    while($resultado=mysqli_Fetch_array($enlazar))
    {
    ?>

    <tr>
        <td><?php echo $resultado['Id proveedor']?></td>
        <td><?php echo $resultado['Nombre P']?></td>
        <td><?php echo $resultado['Ciudad P']?></td>
    </tr>

    <?php
    } 
    ?>
    </table>

</body>
</html>