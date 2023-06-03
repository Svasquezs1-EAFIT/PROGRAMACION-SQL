<?php
/*
* Script: Cargar datos de lado del servidor con PHP y MySQL
* Autor: Marco Robles
* Team: Códigos de Programación
*/


require 'conexion_db.php';

/* Un arreglo de las columnas a mostrar en la tabla */
$columns = ['no_emp', 'nombre', 'apellido', 'fecha_nacimiento', 'fecha_ingreso'];

/* Nombre de la tabla */
$table = "empleados";



$campo = isset($_POST['campo']) ? $conn->real_escape_string($_POST['campo']) : null;

$sql= "SELECT" .implode(", ", $columns)."
FROM $table ";
$resultado = $conn->query($sql);
$num_rows = $resultado->$num_rows;
$html = '';

if ($num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $output['data'] .= '<tr>';
        $output['data'] .= '<td>' . $row['no_emp'] . '</td>';
        $output['data'] .= '<td>' . $row['nombre'] . '</td>';
        $output['data'] .= '<td>' . $row['apellido'] . '</td>';
        $output['data'] .= '<td>' . $row['fecha_nacimiento'] . '</td>';
        $output['data'] .= '<td>' . $row['fecha_ingreso'] . '</td>';
        $output['data'] .= '<td><a class="btn btn-warning btn-sm" href="editar.php?id=' . $row['no_emp'] . '">Editar</a></td>';
        $output['data'] .= "<td><a class='btn btn-danger btn-sm' href='elimiar.php?id=" . $row['no_emp'] . "'>Eliminar</a></td>";
        $output['data'] .= '</tr>';
    }
} else {
    $output['data'] .= '<tr>';
    $output['data'] .= '<td colspan="7">Sin resultados</td>';
    $output['data'] .= '</tr>';
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);