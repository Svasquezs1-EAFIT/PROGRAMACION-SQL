<?php
    include("conexion.php");

    //Funcion para eliminar usuarios de la base de datos desde el perfil administrador
    if (isset($_POST['eliminara'])) {
        $codigoa=$_POST['codigoa'];

        if($codigoa == "") {
            ?>
                <body>
                    <h1> <?php echo "El campo no puede estas vacio"; ?> </h1>
                    <a href="http://localhost/PROGRAMACION-SQL/colegio/crud.php">Regresar</a>

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
            mysqli_query($conexion, "DELETE FROM alumnos WHERE codigoa=$codigoa");
            header("Location:crud.php");
        }
    }

    //Funcion para actualizar la base de datos desde el perfil administrador
    if (isset($_POST['actualizara'])) {
        $codigoa=$_POST['codigoa'];
        $nombre=$_POST['nombre'];
        $programa=$_POST['programa'];
        $sexo=($_POST['sexo']);
        
        if($codigoa == "") {
            ?>
                <body>
                    <h1> <?php echo "El campo no puede estas vacio"; ?> </h1>
                    <a href="http://localhost/PROGRAMACION-SQL/colegio/crud.php">Regresar</a>

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
            mysqli_query($conexion, "UPDATE `alumnos` SET `codigoa`='$codigoa',`nombres`='$nombre',`programa`='$programa',`sexo`='$sexo' WHERE `codigoa`='$codigoa'");
            header("Location:crud.php");
        }
    }

    //Funcion para Buscar en la base de datos un usuario
    if (isset($_POST['buscara'])) {
        $codigoa=$_POST['codigoa'];
        $existe =0;

        if($codigoa == "") {
            ?>
                <body>
                    <h1> <?php echo "El campo no puede estas vacio"; ?> </h1>
                    <a href="http://localhost/PROGRAMACION-SQL/colegio/crud.php">Regresar</a>

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
            $resultado = mysqli_query($conexion, "SELECT * FROM `alumnos` WHERE  `codigoa`=$codigoa");
            while($consulta = mysqli_fetch_array($resultado)){
                ?>
                    <body>
                    <a href="http://localhost/PROGRAMACION-SQL/colegio/crud.php">Regresar</a>
                        <table>

                            <tr>
                                <th>Codigo Alumno</th>
                                <th>NOMBRE</th>
                                <th>PROGRAMA</th>
                                <th>SEXO</th>
                            </tr>

                            <tr>
                                <td><?php echo $consulta['codigoa']?></td>
                                <td><?php echo $consulta['nombres']?></td>
                                <td><?php echo $consulta['programa']?></td>
                                <td><?php echo $consulta['sexo']?></td>
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
                    <a href="http://localhost/PROGRAMACION-SQL/colegio/crud.php">Regresar</a>
                <?php
                echo "No existe";
            }
        }
    }
?>