<?php

$conexion = mysqli_connect("localhost","root","","database"); 

if($conexion){
    $consulta = "SELECT * FROM usuarios";
    $resultado = mysqli_query($conexion,$consulta);
    if($resultado){
        while($row = $resultado->fetch_array()){
            $id = $row["ID"];
            $nombre = $row["Nombre"];
            $email = $row["Correo"];
            $password = $row["Contraseña"];
            ?>
            <div>
                <h2> <?php echo $nombre ?> </h2>
                <div>
                    <p>
                        <b>ID: </b> <?php echo $id  ?> <br>
                        <b>Email: </b> <?php echo $email ?> <br>
                        <b>Password: </b> <?php echo $password ?>
                    </p>
                </div>
            </div>

            <?php
        }
    }
}

?>