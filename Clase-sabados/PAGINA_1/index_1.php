<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

    <Style>

    </Style>

<body>
    <header>
        <div class="logo"><img src="./Logo_EPM.png" alt=""></div>
        <div class="texto">

            <h1> EMPRESA PUBLICA DE MEDELLIN</h1>
            <div class="one">
                <h2>pago servicios publicos</h2>
                <h2>calle 20#44b-32 NIT 1273684234</h2>
            </div>
            
        </div>

    </header>

    <nav>
        <a href="http://localhost/Clase-sabados/PAGINA_1/index_1.php">Liquidar Agua</a>
        <a href="http://localhost/Clase-sabados/PAGINA_2/index_2.php">Liquidar luz</a>
        <a href="#">Ejercicio_3</a>
        <a href="#">Ejercicio_4</a>
    </nav>

    <div class="formulario">
        <h1>Liquidar Factura</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td> Codigo Cliente</td>
                    <td> <input type="text" name="txtcod" size="Go" placeholder="Codigo Cliente"></td>
                </tr>

                <tr>
                    <td> Nombre Cliente</td>
                    <td> <input type="text" name="txtnom" size="Go" placeholder="Nombre Cliente"></td>
                </tr>

                <tr>
                    <td> Mes de Pago</td>
                    <td> <input type="text" name="txtmes" size="Go" placeholder="Mes de Pago"></td>
                </tr>

                <tr>
                    <td> Factura Actual</td>
                    <td> <input type="text" name="txtfac" size="Go" placeholder="Factura Actual"></td>
                </tr>

                <tr>
                    <td> Factura Anterior</td>
                    <td> <input type="text" name="txtfan" size="Go" placeholder="Factura Anterior"></td>
                </tr>

                <tr>
                    <td> Valor M3</td>
                    <td> <input type="text" name="txtvalor" size="Go" placeholder="Valor M3"></td>
                </tr>

            </table>

                <td><input type="submit" name="calcular"></td>
                <td><input type="reset" name="canselar"></td>  
        </form>
    </div>

    <?php

    if(isset($_POST['calcular'])){
        $cod=$_POST['txtcod'];
        $nom=$_POST['txtnom'];
        $mes=$_POST['txtmes'];
        $fac=$_POST['txtfac'];
        $fan=$_POST['txtfan'];

        $consumo = $fac - $fan;
        $valmetro = $_POST['txtvalor'];
        $total = $consumo * $valmetro;

        echo("<br> * USUARIO - " .$nom. " - CON EL CODIGO -" .$cod);
        echo("<br> * TIENE UN CONSUMO DE AGUA :: "  .$consumo. " M3");
        echo("<br> * DEBE PAGAR :: "  .$total);
    }
    
    ?>

</body>
</html>