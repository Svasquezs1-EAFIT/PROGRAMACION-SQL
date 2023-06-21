<?php
    include("conexion.php");

    //Funcion para eliminar usuarios de la base de datos desde el perfil administrador
    if (isset($_POST['eliminar'])) {
        $id=$_POST['ID'];

        if($id == "") {
            ?>

                <body>
                    <h1> <?php echo "El campo no puede estas vacio"; ?> </h1>
                    <a href="./database.php">Regresar</a>

                    <style>

                        a{
                            padding: 10px;
                            text-decoration: none;
                            background-color: white;
                            border-radius: 15px;
                        }
                        
                        a:hover{
                            cursor: pointer;
                            background-color: rgb(255, 166, 1);
                        }

                        body{
                            background-color: rgb(0, 0, 0);
                            color: rgb(255, 255, 255);
                        }
                    </style>

                </body>
                
            <?php

        }else{
            mysqli_query($conexion, "DELETE FROM usuarios WHERE ID=$id");
            header("Location:database.php");
        }
    }

    //Funcion para actualizar la base de datos desde el perfil administrador
    if (isset($_POST['actualizar'])) {
        $id=$_POST['ID'];
        $nombre=$_POST['Nombre'];
        $correo=$_POST['Correo'];
        $password=sha1($_POST['Contraseña']);
        
        if($id == "") {
            ?>
                <body>
                    <h1> <?php echo "El campo no puede estas vacio"; ?> </h1>
                    <a href="./database.php">Regresar</a>

                    <style>

                        a{
                            padding: 10px;
                            text-decoration: none;
                            background-color: white;
                            border-radius: 15px;
                        }
                        
                        a:hover{
                            cursor: pointer;
                            background-color: rgb(255, 166, 1);
                        }

                        body{
                            background-color: rgb(0, 0, 0);
                            color: rgb(255, 255, 255);
                        }

                    </style>

                </body>

            <?php

        }else{
            mysqli_query($conexion, "UPDATE `usuarios` SET `Nombre`='$nombre',`Correo`='$correo', `Contraseña`='$password' WHERE  ID=$id");
            header("Location:database.php");
        }
    }

    //Funcion para Buscar en la base de datos un usuario
    if (isset($_POST['buscar'])) {
        $id=$_POST['ID'];
        $existe =0;

        if($id == "") {
            ?>
                <body>
                    <h1> <?php echo "El campo no puede estas vacio"; ?> </h1>
                    <a href="./database.php">Regresar</a>

                    <style>

                        a{
                            padding: 10px;
                            text-decoration: none;
                            background-color: white;
                            border-radius: 15px;
                        }
                        
                        a:hover{
                            cursor: pointer;
                            background-color: rgb(255, 166, 1);
                        }

                        body{
                            background-color: rgb(0, 0, 0);
                            color: rgb(255, 255, 255);
                        }

                    </style>

                </body>

            <?php

        }else{
            $resultado = mysqli_query($conexion, "SELECT * FROM `usuarios` WHERE  ID=$id");
            while($consulta = mysqli_fetch_array($resultado)){
                ?>
                    <body>
                        <a href="./database.php">Regresar</a>
                        <table>

                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>CORREO</th>
                                <th>CONTRASEÑA</th>
                            </tr>

                            <tr>
                                <td><?php echo $consulta['ID']?></td>
                                <td><?php echo $consulta['Nombre']?></td>
                                <td><?php echo $consulta['Correo']?></td>
                                <td><?php echo $consulta['Contraseña']?></td>
                            </tr>

                        </table>
                            
                        <style>

                            a{
                                padding: 10px;
                                text-decoration: none;
                                background-color: white;
                                border-radius: 15px;
                            }

                            a:hover{
                                cursor: pointer;
                                background-color: rgb(255, 166, 1);
                            }

                            th{
                                padding: 10px;  
                                border: 2px solid white;
                            }

                            td{
                                padding: 10px;  
                                border: 2px solid white;
                            }

                            table{
                                justify-content: center;
                                display: flex;
                                align-items: center;
                            }

                            body{
                                background-color: rgb(0, 0, 0);
                                color: rgb(255, 255, 255);
                            }

                        </style>

                    </body>
                
                <?php
                $existe ++;

            }

            if($existe == 0){
                ?>
                    <a href="./database.php">Regresar</a><br><br>
                <?php
                echo "No existe";
            }
        }
    }
?>