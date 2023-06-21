<?php
    include("conexion.php");

    //Funcion para restablecer la contraseña de un usuario
    if (isset($_POST['restablecer'])) {
        $nombre=$_POST['Nombre'];
        $correo=$_POST['Correo'];
        $password=sha1($_POST['Contraseña']);

        $consulta=mysqli_query($conexion, "UPDATE `usuarios` SET `Contraseña`='$password' WHERE  `Correo`='$correo' and `Nombre`='$nombre'");

        header("Location:index.php");
    }
    
?>