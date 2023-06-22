<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATABASE</title>
    <link rel="stylesheet" href="./database.css">
</head>

<body>

    <header>

        <div class="close">
            <a href="./index.php" >Cerar Sesion</a>
        </div>
        
        <div class="close">
            <a href="./proveedor.php" >Proveedor</a>
        </div>

    </header>

    <div class="funciones">

        <form action="eliminar.php" method="POST" class="eliminar">
            <h3>Eliminar</h3>
            <input type="text" name="ID" placeholder="Ingresa el ID"> <br/>
            <input type="submit" value="Eliminar registro" name="eliminar" class="btn1"><br/>
        </form>

        <form action="eliminar.php" method="POST" class="actualizar">
            <h3>Actualizar</h3>
            <input type="text" name="ID" placeholder="Ingresa el ID"> <br/>
            <input type="text" name="Nombre" placeholder="Ingresa el Nombre"> <br/>
            <input type="text" name="Correo" placeholder="Ingresa el Correo"> <br/>
            <input type="text" name="Contraseña" placeholder="Ingresa la contraseña"> <br/>
            <input type="submit" value="Actualizar registro" name="actualizar" class="btn2"><br/>
        </form>

        <form action="eliminar.php" method="POST" class="buscar">
            <h3>Buscar</h3>
            <input type="text" name="ID" placeholder="Ingresa el ID"> <br/>
            <input type="submit" value="Buscar registro" name="buscar" class="btn2"><br/>
        </form>

    </div>
    

    <div class="container">
        <h1>Base de Datos Completa</h1>
        <table>
            
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>CORREO</th>
                <th>CONTRASEÑA</th>
            </tr>
        
            <?php
            
                $conexion = mysqli_connect("localhost","root","","database"); 
                $consulta=("SELECT * FROM usuarios");
                $enlazar=mysqli_query($conexion,$consulta);
                while($resultado=mysqli_fetch_array($enlazar)){
                    ?>
                        <tr>
                            <td><?php echo $resultado['ID']?></td>
                            <td><?php echo $resultado['Nombre']?></td>
                            <td><?php echo $resultado['Correo']?></td>
                            <td><?php echo $resultado['Contraseña']?></td>
                        </tr>
                    <?php
                } 
            ?> 
        </table>

    </div>

</body>
</html>