<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
    <link rel="stylesheet" href="./alumnos.css">
</head>
<body>

    <div class="form-container login-container">
        <form action="alumnodata.php" method="post" id="todo">
            <h1>Datos del Alumno</h1>
            <input type="text" placeholder="Documento del alumno" name="codigoa">
            <input type="text" placeholder="Nombre Completo" name="nombre">
            <input type="text" placeholder="Programa" name="programa">
            <input type="text" placeholder="Ingresa tu sexo" name="sexo">
            <br>
            <button name="registrar" >Registrar</button>
            <button name="regresar" ><a href="http://localhost/PROGRAMACION-SQL/colegio/index.php">Regresar al Inicio</a></button>
        </form>
    </div>
    
    <?php 
        include("./alumnodata.php");
    ?>
    
</body>
</html>