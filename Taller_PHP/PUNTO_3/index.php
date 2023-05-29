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
                    <td> Codigo</td>
                    <td> <input type="text" name="txtcod" size="Go" placeholder="Ingresa la Longitud"></td>
                </tr>

                <tr>
                    <td> Nombre</td>
                    <td> <input type="text" name="txtnom" size="Go" placeholder="Ingresa el ancho"></td>
                </tr>

                <tr>
                    <td> Numero de hijos</td>
                    <td> <input type="text" name="txtnuhi" size="Go" placeholder="Ingresa el ancho"></td>
                </tr>

                <tr>
                    <td> Salario por hora</td>
                    <td> <input type="text" name="txtsaho" size="Go" placeholder="Ingresa el ancho"></td>
                </tr>

                <tr>
                    <td> Horas por mes</td>
                    <td> <input type="text" name="txthome" size="Go" placeholder="Ingresa el ancho"></td>
                </tr>

            </table>

                <td><input type="submit" name="calcular"></td>
                <td><input type="reset" name="canselar"></td>  
        </form>
    </div>
    

    <?php

    if(isset($_POST['calcular'])){
        // Definir los datos de los empleados en un arreglo
        $cod = $_POST['txtcod'];
        $nom = $_POST['txtnom'];
        $nuhi = $_POST['txtnuhi'];
        $saho = $_POST['txtsaho'];
        $home = $_POST['txthome'];

        // Calcular devengado, retención, subsidio y total a pagar para cada empleado
        $devengado = $saho * $home;

        if ($devengado < 1000000) {
            if ($nuhi > 6) {
                    $retencion = 0;
            } else {
                $retencion = (6 - $nuhi) / 2;
            }
        } else {
            if ($nuhi < 3) {
                $retencion = 3;
            } else {
                $retencion = 10 / $nuhi;
            }
        }

        $subsidio = $nuhi * 1200;
        $total_pagar = $devengado - ($devengado * ($retencion / 100)) + $subsidio;

        // Imprimir los resultados para cada empleado
        echo "<br> * Código: " . $cod . "\n";
        echo "<br> * Nombres: " . $nom. "\n";
        echo "<br> * Devengado: $" . $devengado . "\n";
        echo "<br> * Retención: " . $retencion . "%\n";
        echo "<br> * Subsidio: $" . $subsidio . "\n";
        echo "<br> * Total a pagar: $" . $total_pagar . "\n\n";
    }
    
    ?>

</body>
</html>