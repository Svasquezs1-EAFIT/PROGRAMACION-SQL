<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <link rel="stylesheet" href="./producto.css">
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
    <h1> Registro de Productos</h1>
    <table>
        <tr>
            <th>Id de producto</th>
            <th>Nombre de producto</th>
            <th>Presentacion</th>
            <th>Cantidad</th>
            <th>Valor pr</th>
            <th>Codigo de producto</th>
        </tr>
    
    <?php
    include("conexion.php");
    $consulta=("SELECT * FROM producto");
    $enlazar=mysqli_query($conectar,$consulta);
    while($resultado=mysqli_Fetch_array($enlazar))
    {
    ?>

    <tr>
        <td><?php echo $resultado['Id producto']?></td>
        <td><?php echo $resultado['Nombre Pr']?></td>
        <td><?php echo $resultado['Presentacion']?></td>
        <td><?php echo $resultado['Cantidad']?></td>
        <td><?php echo $resultado['Valor Pr']?></td>
        <td><?php echo $resultado['Cod Pr']?></td>
    </tr>

    <?php
    } 
    ?>
    </table>

</body>
</html>