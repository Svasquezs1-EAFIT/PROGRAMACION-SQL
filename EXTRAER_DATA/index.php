<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXTRAER DATOS SQL</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>

    <h1>Extraer datos de MySQL almacen -> empleados</h1>
    <form action="" method="post">
        <label for="campo">Buscar: </label>
        <input type="text" name="campo" id="campo">
    </form>

    <p></p>

    <table>
        <thead>
            <th>Num. Empleados</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha de Nacimiento</th>
            <th>Fecha de Ingreso</th>
            <th></th>
            <th></th>
        </thead>

        <tbody id="content">

        </tbody>
    </table>
    
</body>
</html>