<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
    <link rel="stylesheet" href="./index.css">
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

    <div class="container">
        <br><br><br>
        <h1> Registros de Ventas</h1>

        <table>
            <tr>
                <th>Codigo de venta</th>
                <th>Codigo de cliente</th>
                <th>Codigo de producto</th>
                <th>Cantidad</th>
                <th>Valor</th>
                <th>Descuento</th>
                <th>Total</th>
            </tr>
        
        <?php
        include("conexion.php");
        $consulta=("SELECT * FROM ventas");
        $enlazar=mysqli_query($conectar,$consulta);
        while($resultado=mysqli_fetch_array($enlazar))
        {
        ?>
            <tr>
                <td><?php echo $resultado['Idventa']?></td>
                <td><?php echo $resultado['Codcliente']?></td>
                <td><?php echo $resultado['Codproducto']?></td>
                <td><?php echo $resultado['ValorV']?></td>
                <td><?php echo $resultado['CantidadV']?></td>
                <td><?php echo $resultado['Descuento']?></td>
                <td><?php echo $resultado['Total']?></td>
            </tr>
        <?php
        } 
        ?> 
        </table>
    </div>
</body>
</html>