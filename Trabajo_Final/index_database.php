<?php

$conexion = mysqli_connect("localhost","root","","database"); 

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1) {
	    $nombre = trim($_POST['nombre']);
	    $email = trim($_POST['email']);
	    $password = sha1($_POST['password']);

	    $consulta = "INSERT INTO usuarios(Nombre, Correo, Contraseña) VALUES ('$nombre','$email','$password')";

	    $resultado = mysqli_query($conexion,$consulta);

		if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has Registrado correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }else {
		?> 
		<h3 class="bad">¡Por favor complete los campos!</h3>
	   <?php
	}
}

if (isset($_POST['login'])) {
    if (strlen($_POST['correo']) >= 1 && strlen($_POST['contra']) >= 1) {
	    $correo = trim($_POST['correo']);
	    $contra = sha1($_POST['contra']);
		
		$consulta = "SELECT * FROM usuarios WHERE Correo = '$correo' and Contraseña = '$contra'";

		$resultado = mysqli_query($conexion,$consulta);

		$filas = mysqli_num_rows($resultado);

		if($filas){
			if($correo == "Admin@gmail.com" && $contra = "Admin"){
				header("Location:database.php");
			}else{
				header("location:pagina.php");
			}
		}else{
			?>
			<h3>¡Ups ha ocurrido un error!</h3>
			<?php
		}
		mysqli_free_result($resultado);
		mysqli_close($conexion);
    }else {
		?> 
		<h3 class="bad">¡Por favor complete los campos!</h3>
	   <?php
	}
}

?>
