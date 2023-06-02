<?php

include("con_db.php");

	if (isset($_POST['register'])) {
		if (strlen($_POST['cedula']) >= 1 && strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['edad']) >= 1 && strlen($_POST['sexo']) >= 1 && strlen($_POST['estado']) >= 1 && strlen($_POST['jornada']) >= 1 && strlen($_POST['fecha']) >= 1 && strlen($_POST['hijos']) >= 1  && strlen($_POST['salario']) >= 1) {

			$cedula = trim($_POST['cedula']);
			$nombre = trim($_POST['nombre']);
			$apellido = trim($_POST['apellido']);
			$edad = trim($_POST['edad']);
			$sexo = trim($_POST['sexo']);
			$estado = trim($_POST['estado']);
			$jornada = trim($_POST['jornada']);
			$fecha = trim($_POST['fecha']);
			$hijos = trim($_POST['hijos']);
			$salario = trim($_POST['salario']);

			$consulta = "INSERT INTO obreros(Cedula, Nombre, Apellidos, Edad, Sexo, Estado_Civil, Jornada, Fecha_de_Ingreso, Hijos, Salario) VALUES ('$cedula','$nombre','$apellido','$edad','$sexo','$estado','$jornada','$fecha','$hijos','$salario')";

			$resultado = mysqli_query($conex,$consulta);
			if ($resultado) {
				?> 
					<h3 class="ok">¡Se a llenado correctamente!</h3>
				<?php
			} else {
				?> 
					<h3 class="bad">¡Ups ha ocurrido un error!</h3>
				<?php
			}

		}else{
			?> 
				<h3 class="bad">¡Por favor complete los campos!</h3>
			<?php
		}
	}
?>