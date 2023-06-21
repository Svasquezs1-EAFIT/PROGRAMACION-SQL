<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./index.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet"/>
</head>
<body>
    
    <div class="container" id="container">

        <div class="form-container register-container">
            <form method="post">
                <h1>Iniciar Registro</h1>
                <input type="text" name="nombre" placeholder="Nombre">
                <input type="email" name="email" placeholder="Correo">
                <input type="password" name="password" placeholder="Contraseña">
                <button name="register" >Registrarme</button>
                <span>Sigueme en la cuentas</span>
                <div class="social-container">
                    <a href="https://github.com/Svasquezs1-EAFIT" class="social" target="_blank"><i class="lni lni-github-original"></i></a>
                    <a href="https://instagram.com/sebas_11m?igshid=OGQ5ZDc2ODk2ZA== " class="social" target="_blank"><i class="lni lni-instagram-fill" ></i></a>
                    <a href="https://www.facebook.com/sebastian.vasquezsaldarriaga?mibextid=LQQJ4d" class="social" target="_blank"><i class="lni lni-facebook-oval" ></i></a>
                </div>
            </form>
        </div>

        <div class="form-container login-container">
            <form method="post">
                <h1>Inicia Sesión</h1>
                <input type="email" placeholder="Correo" name="correo">
                <input type="password" placeholder="Contraseña" name="contra">
                <div class="content">
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox" id="checkbox">
                        <label>Recuerdame</label>
                    </div>
                    <div class="pass-link">
                        <a href="./password.php">Olvide mi Contraseña</a>
                    </div>
                </div>
                <button name="login" >Iniciar</button>
                <span>Sigueme en la cuentas</span>
                <div class="social-container">
                    <a href="https://github.com/Svasquezs1-EAFIT" class="social" target="_blank"><i class="lni lni-github-original"></i></a>
                    <a href="https://instagram.com/sebas_11m?igshid=OGQ5ZDc2ODk2ZA== " class="social" target="_blank"><i class="lni lni-instagram-fill"></i></a>
                    <a href="https://www.facebook.com/sebastian.vasquezsaldarriaga?mibextid=LQQJ4d" class="social" target="_blank"><i class="lni lni-facebook-oval"></i></a>
                </div>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1 class="title" >¡ Holaa ! <br></h1>
                    <p>Si tienes una cuenta, inicia sesión aquí y diviértete</p>
                    <button class="ghost" id="login"> Iniciar
                        <i class="lni lni-arrow-left login"></i>
                    </button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1 class="title" >Comienza a<br>Disfrutar</h1>
                    <p>Si aún no tienes una cuenta, únete a nosotros y comienza a disfrutar</p>
                    <button class="ghost" id="register" >Registrate
                        <i class="lni lni-arrow-right register"></i>
                    </button>
                </div>
            </div>
        </div>

    </div>

    <?php 
        include("./index_database.php");
    ?>
    
    <script src="./login.js"></script>

</body>
</html>