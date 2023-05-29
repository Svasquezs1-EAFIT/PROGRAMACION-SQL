<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <Style>

    </Style>

<body>

    <h1>Calcular comision</h1>
    <form action="" method="post">

        <fieldset>

            <legend>comisiones</legend>
            <label for="cod"  name="codigo">codigo</label>
            <input type="text" name="txtcod" id="cod" placeholder="Codigo"></input>
            <label for="nom" name="nombre">nombre</label>
            <input type="text" name="txtnom" id="nom" placeholder="Nombre"></input>
            <label for="cant" name="cantidad">Cantidad</label>
            <input type="text" name="txtcant" id="cant" placeholder="Cantidad"></input>
            <label for="unit" name="unitario">Valor unitario</label>
            <input type="text" name="txtunit" id="unit" placeholder="Valor">

            <input type="submit" name="calcular" value="calcular">

        </fieldset>
    </form>
    <?php
    
        if(isset($_POST['calcular'])){
            $cod=$_POST['txtcod'];
            $nom=$_POST['txtnom'];
            $cant=$_POST['txtcant'];
            $valu=$_POST['txtunit'];
            $subtotal=$cant*$valu;
            echo("<br>Las " .$cant. " a " .$valu. " la unidad cuesta " .$subtotal);
            
            if($valu>40000){
                $comi = $subtotal * 0.1;
            }else{
                $comi = $subtotal * 0.05;
            }
            echo("<br><br>El vendedor " .$cod. " se gano " .$comi. " de comision" );
        }

    ?>

</body>
</html>