<?php

    include("conexion.php");

    if (isset($_POST['registrar'])) {
        if (strlen($_POST['codigoa']) >= 1 && strlen($_POST['nombre']) >= 1 && strlen($_POST['programa']) >= 1 && strlen($_POST['sexo']) >= 1) {
            $codigoa = trim($_POST['codigoa']);
            $nombre = trim($_POST['nombre']);
            $programa = trim($_POST['programa']);
            $sexo = trim($_POST['sexo']);

            $consulta = "INSERT INTO `alumnos`(`codigoa`, `nombres`, `programa`, `sexo`) VALUES ('$codigoa','$nombre','$programa','$sexo')";

            $resultado = mysqli_query($conexion,$consulta);

            if ($resultado) {
                ?> 
                    <h3 class="ok">¡Te has Registrado correctamente!</h3>
                    <button><a href="http://localhost/PROGRAMACION-SQL/colegio/alumnos.php">Regresar</a></button>
                <?php
            } else {
                ?> 
                    <h3 class="bad">¡Ups ha ocurrido un error!</h3>
                    <button><a href="http://localhost/PROGRAMACION-SQL/colegio/alumnos.php">Regresar</a></button>
                <?php
            }
        }else {
            ?> 
                <h3 class="bad">¡Por favor complete los campos!</h3>
                <button><a href="http://localhost/PROGRAMACION-SQL/colegio/alumnos.php">Regresar</a></button>
            <?php
        }
    }

?>