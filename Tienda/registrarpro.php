<?php

	include("con_db.php");

	if (isset($_POST['register'])) {
		if (strlen($_POST['referencia']) >= 1 && strlen($_POST['articulo']) >= 1 && strlen($_POST['marca']) >= 1 && strlen($_POST['talla']) >= 1 && strlen($_POST['color']) >= 1 && strlen($_POST['cantidad']) >= 1 && strlen($_POST['valor']) >= 1){

			$referencia = trim($_POST['referencia']);
			$articulo = trim($_POST['articulo']);
			$marca = trim($_POST['marca']);
			$talla = trim($_POST['talla']);
			$color = trim($_POST['color']);
			$cantidad = trim($_POST['cantidad']);
			$valor = trim($_POST['valor']);

			$consulta = "INSERT INTO productos(Referencia, Articulo, Marca, Talla, Color, Cantidad, Valor) VALUES ('$referencia','$articulo','$marca','$talla','$color','$cantidad','$valor')";

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