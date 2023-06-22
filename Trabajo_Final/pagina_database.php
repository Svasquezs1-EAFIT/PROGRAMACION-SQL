<?php

$conexion = mysqli_connect("localhost","root","","database"); 

if (isset($_POST['compras'])) {
    $nombre = ['Nombre'];
	$Producto = ['Producto'];
	$Valor = ['Valor'];

	$consulta = "INSERT INTO `compras`(`Nombre`, `Producto`, `Valor`) VALUES ('$nombre','$Producto','$Valor')";

	$resultado = mysqli_query($conexion,$consulta);
}

?>