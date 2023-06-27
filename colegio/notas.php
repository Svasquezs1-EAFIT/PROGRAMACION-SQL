<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
    <link rel="stylesheet" href="./notas.css">
</head>
<body>

    <div class="form-container login-container" id="container">
        <form action="notasdata.php" method="post" id="todo">
            <h1>Datos de las Notas</h1>
            <select name="alumno">
                <?php
                    include("conexion.php");
                    $sql1 = "select * from alumnos";
                    $sql2 = mysqli_query($conexion,$sql1);
                    while($resultado=mysqli_fetch_array($sql2)){
                        echo "<option value='".$resultado['codigoa']."'>".$resultado['nombres']."</option>";
                    }
                ?>
            </select>

            <select name="materia">
                <?php
                    include("conexion.php");
                    $sql1 = "select * from materias";
                    $sql2 = mysqli_query($conexion,$sql1);
                    while($resultado=mysqli_fetch_array($sql2)){
                        echo "<option value='".$resultado['codigom']."'>".$resultado['nombrem']."</option>";
                    }
                ?>
            </select>
            
            <input type="text" placeholder="Nota 1" name="nota1">
            <input type="text" placeholder="Nota 2" name="nota2">
            <input type="text" placeholder="Nota 3" name="nota3">
            <br>
            <button name="registrar" >Registrar</button>
            <button name="calcular" >Calcular</button>
            <button name="regresar" ><a href="http://localhost/PROGRAMACION-SQL/colegio/index.php">Regresar al Inicio</a></button>
        </form>
    </div>

    <?php 
        include("./notasdata.php");
    ?>
    
</body>
</html>