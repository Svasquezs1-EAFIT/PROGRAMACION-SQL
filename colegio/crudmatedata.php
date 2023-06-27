<?php
    include("conexion.php");

    //Funcion para eliminar usuarios de la base de datos desde el perfil administrador
    if (isset($_POST['eliminarm'])) {
        $codigom=$_POST['codigom'];

        if($codigom == "") {
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
            mysqli_query($conexion, "DELETE FROM materias WHERE codigom=$codigom");
            header("Location:crud.php");
        }
    }

    //Funcion para actualizar la base de datos desde el perfil administrador
    if (isset($_POST['actualizarm'])) {
        $codigom=$_POST['codigom'];
        $nombrem=$_POST['nombrem'];
        $grado=$_POST['grado'];
        $profesor=($_POST['profesor']);
        
        if($codigom == "") {
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
            mysqli_query($conexion, "UPDATE `materias` SET `codigom`='$codigom',`nombrem`='$nombrem',`grado`='$grado',`profesor`='$profesor' WHERE `codigom`='$codigom'");
            header("Location:crud.php");
        }
    }

    //Funcion para Buscar en la base de datos un usuario
    if (isset($_POST['buscarm'])) {
        $codigom=$_POST['codigom'];
        $existe =0;

        if($codigom == "") {
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
            $resultado = mysqli_query($conexion, "SELECT * FROM `materias` WHERE  `codigom`=$codigom");
            while($consulta = mysqli_fetch_array($resultado)){
                ?>
                    <body>
                    <a href="http://localhost/PROGRAMACION-SQL/colegio/crud.php">Regresar</a>
                        <table>

                            <tr>
                                <th>Codigo de la Materia</th>
                                <th>NOMBRE</th>
                                <th>GRADO</th>
                                <th>PROFESOR</th>
                            </tr>

                            <tr>
                                <td><?php echo $consulta['codigom']?></td>
                                <td><?php echo $consulta['nombrem']?></td>
                                <td><?php echo $consulta['grado']?></td>
                                <td><?php echo $consulta['profesor']?></td>
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