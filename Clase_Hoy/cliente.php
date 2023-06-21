<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="./clientes.css">
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
    <h1> Registro de Clientes</h1>

    <table>
        <tr>
            <th>Id de cliente</th>
            <th>Nombre de cliente</th>
            <th>Ciudad cliente</th>
            <th>Tipo cliente</th>
        </tr>
    
    <?php
    include("conexion.php");
    $consulta=("SELECT * FROM cliente");
    $enlazar=mysqli_query($conectar,$consulta);
    while($resultado=mysqli_Fetch_array($enlazar))
    {
    ?>

    <tr>
        <td><?php echo $resultado['Id cliente']?></td>
        <td><?php echo $resultado['Nombre C']?></td>
        <td><?php echo $resultado['Ciudad C']?></td>
        <td><?php echo $resultado['Tipo C']?></td>
        
    </tr>

    <?php
    } 
    ?>
    </table>

</body>
</html>