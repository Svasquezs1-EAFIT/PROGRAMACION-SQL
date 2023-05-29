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

            </table>

                <td><input type="submit" name="calcular"></td>
                <td><input type="reset" name="canselar"></td>  
        </form>
    </div>
    

    <?php

    if(isset($_POST['calcular'])){
        $longitud = $_POST['txtlog'];
        $ancho = $_POST['txtancho'];
        $valor_metro_cuadrado = 250000;
        
        // Calcular el área del terreno
        $area_terreno = $longitud * $ancho;
        
        // Calcular el costo del terreno
        $costo_terreno = $area_terreno * $valor_metro_cuadrado;
        
        // Imprimir el costo del terreno
        echo "<br> * El costo del terreno es: $", $costo_terreno;
    }
    
    ?>

</body>
</html>