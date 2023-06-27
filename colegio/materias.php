<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias</title>
    <link rel="stylesheet" href="./materias.css">
</head>
<body>

    <div class="form-container login-container">
        <form action="materiasdata.php" method="post" id="todo">
            <h1>Datos de la Materia</h1>
            <input type="text" placeholder="Nombre de la materia" name="nombrem">
            <input type="text" placeholder="Grado" name="grado">
            <input type="text" placeholder="Nombre del docente" name="profesor">
            <br>
            <button name="registrar" >Registrar</button>
            <button name="regresar" ><a href="http://localhost/PROGRAMACION-SQL/colegio/index.php">Regresar al Inicio</a></button>
        </form>
    </div>

    <?php 
        include("./materiasdata.php");
    ?>
    
</body>
</html>