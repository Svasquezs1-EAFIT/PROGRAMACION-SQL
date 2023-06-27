<?php
    include("conexion.php");

    //Funcion para eliminar usuarios de la base de datos desde el perfil administrador
    if (isset($_POST['eliminarn'])) {
        $numeroregistro=$_POST['numeroregistro'];

        if($numeroregistro == "") {
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
            mysqli_query($conexion, "DELETE FROM notas WHERE numeroregistro=$numeroregistro");
            header("Location:crud.php");
        }
    }

    //Funcion para Buscar en la base de datos un usuario
    if (isset($_POST['buscarn'])) {
        $numeroregistro=$_POST['numeroregistro'];
        $existe =0;

        if($numeroregistro == "") {
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
            $resultado = mysqli_query($conexion, "SELECT * FROM `notas` WHERE  `numeroregistro`=$numeroregistro");
            while($consulta = mysqli_fetch_array($resultado)){
                ?>
                    <body>
                    <a href="http://localhost/PROGRAMACION-SQL/colegio/crud.php">Regresar</a>
                        <table>

                            <tr>
                                <th>Codigo de Registro</th>
                                <th>Codigo del Alumno</th>
                                <th>Codigo de la Materia</th>
                                <th>Nota 1</th>
                                <th>Nota 2</th>
                                <th>Nota 3</th>
                                <th>Nota Definitiva</th>
                            </tr>

                            <tr>
                                <td><?php echo $consulta['numeroregistro']?></td>
                                <td><?php echo $consulta['codigoa']?></td>
                                <td><?php echo $consulta['codigom']?></td>
                                <td><?php echo $consulta['nota1']?></td>
                                <td><?php echo $consulta['nota2']?></td>
                                <td><?php echo $consulta['nota3']?></td>
                                <td><?php echo $consulta['definitiva']?></td>
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