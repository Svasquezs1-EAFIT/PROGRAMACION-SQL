<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer contraseña</title>
    <link rel="stylesheet" href="./pasword.css">
</head>
<body>

    <div class="form-container login-container">
        <form action="data_proveedor.php" method="post" id="todo">
            <h1>Realizar encargos a los proveedores</h1>
            <input type="text" placeholder="Nombre del Cliente" name="Nombre">
            <input type="text" placeholder="Nombre del Producto" name="Producto">
            <input type="text" placeholder="Cantidad" name="Cantidad">
            <br>
            <button name="Solicitar" >Solicitar</button>
            <button name="Regresar" ><a href="./database.php">Regresar</a></button>
        </form>
    </div>

</body>
</html>