<?php

    include("conexion.php");

    if (isset($_POST['Solicitar'])) {
        if (strlen($_POST['Nombre']) >= 1 && strlen($_POST['Producto']) >= 1 && strlen($_POST['Cantidad']) >= 1) {
            $nombre = trim($_POST['Nombre']);
            $proveedor = trim($_POST['Producto']);
            $cantidad = trim($_POST['Cantidad']);

            $consulta = "INSERT INTO `proveedor`(`Nombre`, `Producto`, `Cantidad`) VALUES ('$nombre','$proveedor','$cantidad')";

            $resultado = mysqli_query($conexion,$consulta);

            if ($resultado) {
                ?> 
                    <a href="./proveedor.php"><h3 class="ok">¡El producto se registro correctamente!</h3></a>
                <?php
            } else {
                ?> 
                <a href="./proveedor.php"><h3 class="bad">¡Ups ha ocurrido un error!</h3></a>
            <?php
            }
        }else {
            ?> 
            <a href="./proveedor.php"><h3 class="bad">¡Por favor complete los campos!</h3></a>
        <?php
        }
    }

?>