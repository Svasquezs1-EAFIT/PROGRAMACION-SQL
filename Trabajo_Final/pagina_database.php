<?php

$conexion = mysqli_connect("localhost","root","","database"); 

if (isset($_POST['agregar'])) {
    $nombre = trim($_POST['Nombre']);
	$producto = trim($_POST['Producto']);
	$precio = sha1($_POST['Valor']);

	$consulta = "INSERT INTO compras(Nombre, Producto, Valor) VALUES ('$nombre','$producto','$precio')";

	$resultado = mysqli_query($conexion,$consulta);
}

?>