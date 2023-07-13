<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio</title>
    <link rel="stylesheet" href="./styles.csss">
</head>
<body>

    <header>
        <h1>Colegio San Juan</h1>
    </header>

    <nav>
        <a href="http://localhost/PROGRAMACION-SQL/colegio/alumnos.php">Alumnos</a>
        <a href="http://localhost/PROGRAMACION-SQL/colegio/notas.php">Notas</a>
        <a href="http://localhost/PROGRAMACION-SQL/colegio/materias.php">Materias</a>
        <a href="http://localhost/PROGRAMACION-SQL/colegio/crud.php">CRUD</a>
    </nav>

    <div class="container">
        <h1>Base de Datos Completa Notas</h1>
        <table>
            
            <tr>
                <th>NUMERO DE REGISTRO</th>
                <th>CODIGO DEL ALUMNO</th>
                <th>CODIGO DE LA MATERIA</th>
                <th>NOTA 1</th>
                <th>NOTA 2</th>
                <th>NOTA 3</th>
                <th>DEFINITIVA</th>
            </tr>
        
            <?php
            
                include("conexion.php");
                $consulta=("SELECT * FROM notas");
                $enlazar=mysqli_query($conexion,$consulta);
                while($resultado=mysqli_fetch_array($enlazar)){
                    ?>
                        <tr>
                            <td><?php echo $resultado['numeroregistro']?></td>
                            <td><?php echo $resultado['codigoa']?></td>
                            <td><?php echo $resultado['codigom']?></td>
                            <td><?php echo $resultado['nota1']?></td>
                            <td><?php echo $resultado['nota2']?></td>
                            <td><?php echo $resultado['nota3']?></td>
                            <td><?php echo $resultado['definitiva']?></td>
                        </tr>
                    <?php
                } 
            ?> 
        </table>

    </div>
    
</body>
</html>