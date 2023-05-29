<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller php</title>
    <link rel="stylesheet" href="./Style.css">
</head>

<body>
    <header>

        <div class="logo">
            <img src="./image/php.png" alt="php">
        </div>

        <div class="texto">
            <h1>TALLER PHP FORMULARIO</h1>
            <div class="one">
                <h2>SEBASTIAN VASQUEZ SALDARRIAGA</h2>
                <h2>SABADOS</h2>
            </div>
        </div>

    </header>

    <nav>
        <a href="http://localhost/Taller_PHP/PUNTO_1/index.php">PUNTO #1</a>
        <a href="http://localhost/Taller_PHP/PUNTO_2/index.php">PUNTO #2</a>
        <a href="http://localhost/Taller_PHP/PUNTO_3/index.php">PUNTO #3</a>
        <a href="http://localhost/Taller_PHP/PUNTO_3/index.php">PUNTO #4</a>
        <a href="http://localhost/Taller_PHP/PUNTO_3/index.php">PUNTO #5</a>
    </nav>

    <div class="formulario">
        <h1>Liquidar Factura</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td> Longitud</td>
                    <td> <input type="text" name="txtlog" size="Go" placeholder="Ingresa la Longitud"></td>
                </tr>

                <tr>
                    <td> Ancho</td>
                    <td> <input type="text" name="txtancho" size="Go" placeholder="Ingresa el ancho"></td>
                </tr>
                
                <tr>
                    <td> Tipo de pago
                        <select>
                            <option disabled selected="">Seleccione tipo depago</option>
                            <option>Efectivo</option>
                            <option>Tarjeta</option>
                            <option>Cheque</option>
                        </select>
                    </td>
                </tr>

            </table>

                <td><input type="submit" name="calcular"></td>
                <td><input type="reset" name="canselar"></td>  
        </form>
    </div>
    

    <?php

    if(isset($_POST['calcular'])){
        // Definir los datos de las ventas en un arreglo
        $vendedor = $_POST['txtcod'];
        $tipo_venta = $_POST['txtnom'];
        $venta = $_POST['txtnuhi'];
        

        $ventas = array(
            array("vendedor" => 1, "tipo_venta" => 1, "venta" => 100000),
            array("vendedor" => 2, "tipo_venta" => 2, "venta" => 150000),
            array("vendedor" => 3, "tipo_venta" => 3, "venta" => 200000),
        );

        // Calcular la comisión y el total a pagar para cada venta
        foreach ($ventas as $venta) {
            $comision_venta = 0;

            // Calcular la comisión según el tipo de venta
            switch ($venta["tipo_venta"]) {
                case 1:
                    $comision_venta = $venta["venta"] * 0.15;
                    break;
                case 2:
                    $comision_venta = $venta["venta"] * 0.10;
                    break;
                case 3:
                    $comision_venta = $venta["venta"] * 0.05;
                    break;
            }

            // Calcular la comisión del 7% sobre toda venta
            $comision_total = $venta["venta"] * 0.07;

            // Calcular el total a pagar al vendedor (suma de ambas comisiones)
            $total_pagar = $comision_venta + $comision_total;

            // Imprimir los resultados para cada venta
            echo "Vendedor: " . $venta["vendedor"] . "\n";
            echo "Tipo de venta: " . $venta["tipo_venta"] . "\n";
            echo "Cuantía de la venta: $" . $venta["venta"] . "\n";
            echo "Comisión por tipo de venta: $" . $comision_venta . "\n";
            echo "Comisión del 7% sobre toda venta: $" . $comision_total . "\n";
            echo "Total a pagar: $" . $total_pagar . "\n\n";

        }
    }
    
    ?>

</body>
</html>