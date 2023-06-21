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
        <form action="restablece.php" method="post">
            <h1>Restablece tu Contraseña</h1>
            <input type="text" placeholder="Nombre" name="Nombre">
            <input type="text" placeholder="Correo" name="Correo">
            <input type="text" placeholder="Nueva Contraseña" name="Contraseña">
            <br>
            <button name="restablecer" >Restablecer</button>
            <button name="logi" ><a href="./index.php">Regresar al Login</a></button>
        </form>
    </div>

</body>
</html>