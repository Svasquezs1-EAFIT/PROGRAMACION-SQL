<?php

    include("conexion.php");

    if (isset($_POST['registrar'])) {
        if (strlen($_POST['nombrem']) >= 1 && strlen($_POST['grado']) >= 1 && strlen($_POST['profesor']) >= 1) {
            $nombrem = trim($_POST['nombrem']);
            $grado = trim($_POST['grado']);
            $profesor = trim($_POST['profesor']);

            $consulta = "INSERT INTO `materias`(`nombrem`, `grado`, `profesor`) VALUES ('$nombrem','$grado','$profesor')";

            $resultado = mysqli_query($conexion,$consulta);

            if ($resultado) {
                ?> 
                    <h3 >¡Los datos se registraron correctamente!</h3>
                    <button><a href="http://localhost/PROGRAMACION-SQL/colegio/alumnos.php">Regresar</a></button>
                <?php
            } else {
                ?> 
                    <h3>¡Ups ha ocurrido un error!</h3>
                    <button><a href="http://localhost/PROGRAMACION-SQL/colegio/alumnos.php">Regresar</a></button>
                <?php
            }
        }else {
            ?> 
                <h3>¡Por favor complete los campos!</h3>
                <button><a href="http://localhost/PROGRAMACION-SQL/colegio/alumnos.php">Regresar</a></button>
            <?php
        }
    }
?>