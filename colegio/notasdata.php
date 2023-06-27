<?php
    include("conexion.php");

    if (isset($_POST['calcular'])) {
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];

        if($nota1<0 || $nota1>5){
            echo "EL valor de la nota 1 es errada";
        }else if($nota2<0 || $nota2>5){
            echo "EL valor de la nota 2 es errada";
        }else if($nota3<0 || $nota3>5){
            echo "EL valor de la nota 2 es errada";
        }else{
            $prom = ($nota1 + $nota2 + $nota3)/3;
            echo "El promedio es de: ".$prom. "<br/>";

            if($prom>=3){
                echo "Gana la materia";
            }else{
                echo "Pierde la materia";
            }

        }
            
    }

    if (isset($_POST['registrar'])) {
        if (strlen($_POST['alumno']) >= 1 && strlen($_POST['materia']) >= 1 && strlen($_POST['nota1']) >= 1 && strlen($_POST['nota2']) >= 1 && strlen($_POST['nota3']) >= 1) {
            $alumno = trim($_POST['alumno']);
            $materia = trim($_POST['materia']);
            $nota1 = trim($_POST['nota1']);
            $nota2 = trim($_POST['nota2']);
            $nota3 = trim($_POST['nota3']);
            $definitiva = ($nota1 + $nota2 + $nota3)/3;

            $consulta = "INSERT INTO `notas`(`codigoa`, `codigom`, `nota1`, `nota2`, `nota3`, `definitiva`) VALUES ('$alumno','$materia','$nota1','$nota2','$nota3','$definitiva')";

            $resultado = mysqli_query($conexion,$consulta);

            if ($resultado) {
                ?> 
                    <h3>¡Los datos se registraron correctamente!</h3>
                    <button><a href="http://localhost/PROGRAMACION-SQL/colegio/notas.php">Regresar</a></button>
                <?php
            } else {
                ?> 
                    <h3>¡Ups ha ocurrido un error!</h3>
                    <button><a href="http://localhost/PROGRAMACION-SQL/colegio/notas.php">Regresar</a></button>
                <?php
            }
        }else {
            ?> 
                <h3>¡Por favor complete los campos!</h3>
                <button><a href="http://localhost/PROGRAMACION-SQL/colegio/notas.php">Regresar</a></button>
            <?php
        }
    }

?>