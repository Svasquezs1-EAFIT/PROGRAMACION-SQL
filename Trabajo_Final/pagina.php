<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMPUTEC</title>
    <link rel="icon" type="imagen/icon" href="./breakfast.ico">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
    <header class="header">

        <img class="bg" src="./bg.png"  alt="">
        <div class="menu container">
            <a href="./index.php" class="logo">Cerar Sesion</a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="./menu.png" class="menu-icono" alt="">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#Inicio" id="inicio_1">INICIO</a></li>
                    <li><a href="#Servicios" id="servicios_1">SERVICIOS</a></l>
                    <li><a href="#Productos" id="productos_1">PRODUCTOS</a></li>
                    <li><a href="#Contactos" id="contactos_1">CONTACTOS</a></li>
                </ul>
            </nav>
            <div>
                <ul>
                    <li class="submenu">
                        <img src="./car.svg" id="img-carrito" alt="carrito">
                        <div id="carrito">
                            <table id="lista-carrito">
                                <thead>
                                    <tr>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <a href="#" id="vaciar-carrito" class="btn-3">Vaciar carrito</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="header-content container">
            <div class="header-txt">
                <h1 id="Inicio"> <span>Bienvenido</span> a computec </h1>
                <p>
                En nuestra tienda, encontrarás una amplia selección de equipos informáticos de última generación y accesorios para satisfacer todas tus necesidades tecnológicas. Ya sea que estés buscando una potente computadora para gaming, una laptop para trabajar o estudiar, componentes para armar tu propia PC o periféricos de alta calidad, estamos aquí para ayudarte a encontrar lo que necesitas.!
                </p>
                <a href="#Contactos" class="btn-1">Informacion</a>
            </div>
            <div class="header-img">
                <img src="./logo.png" alt="">
            </div>
        </div>

    </header>
    
    <section class="breakfast container">
        <a href="#inicio_1"><h2>PORTATILES</h2></a>
        <p>
            Descuentos de hasta el 10%
        </p>

        <div class="breakfast-content">

            <div class="breakfast-1">
                <img src="./HUAWEI.png" alt="">
                <h3>Portatil HUAWEI</h3>
            </div>

            <div class="breakfast-1">
                <img src="./HP.png" alt="">
                <h3>Portatil HP</h3>
            </div>

            <div class="breakfast-1">
                <img src="./LENOVO.png" alt="">
                <h3>Portatil LENOVO</h3>
            </div>

            <div class="breakfast-1">
                <img src="./ASUS.png" alt="">
                <h3>Portatil ASUS</h3>
            </div>

        </div>

    </section>

    <section class="info">
        <img class="bg-2" src="./bg-2.png" alt="">
        <div class="info-content container">

            <div class="info-img">
                <img src="./breakfast.png" alt="">
            </div>
    
            <div class="info-txt">
                <a href="#servicios_1"><h2 id="Servicios">La Mejor Calidad En los Productos</h2></a>
                <p>
                    Nuestro equipo de expertos está disponible para asesorarte y brindarte información detallada sobre nuestros productos. Nos enorgullece ofrecer productos de marcas reconocidas y de confianza, para garantizarte la mejor calidad y rendimiento.
                </p>
                <a href="#" class="btn-1">Informacion</a>
            </div>

        </div>

    </section>

    <main class="products container">
        <a href="#productos_1"><h2 id="Productos">Productos</h2></a>
        <div class="box-container" id="lista-1">

            <div class="box">
                <img class="img" src="./ASUS.png" id="asus">
                <div class="product-txt">
                    <h3>Portatil ASUS</h3>
                    <p>Calidad Precio</p>
                    <p class="precio">$1'900.000</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="1" name="Comprar">Agregar al Carrito</a>
                    <div class="rating">
                        <input type="radio" name="star" id="star5"><label for="star5"></label>
                        <input type="radio" name="star" id="star4"><label for="star4"></label>
                        <input type="radio" name="star" id="star3"><label for="star3"></label>
                        <input type="radio" name="star" id="star2"><label for="star2"></label>
                        <input type="radio" name="star" id="star1"><label for="star1"></label>
                    </div>
                </div>
            </div>

            <div class="box">
                
                    <img class="img" src="./HUAWEI.png" id="huawei">
                    <div class="product-txt">
                        <h3 name="producto">Portatil HUAWEI</h3>
                        <p>Calidad Precio</p>
                        <p class="precio" name="precio">$1'500.000</p>
                        <a href="#" class="agregar-carrito btn-3" data-id="2" name="agregar">Agregar al Carrito</a>
                        <div class="rating">
                            <input type="radio" name="star" id="star5"><label for="star5"></label>
                            <input type="radio" name="star" id="star4"><label for="star4"></label>
                            <input type="radio" name="star" id="star3"><label for="star3"></label>
                            <input type="radio" name="star" id="star2"><label for="star2"></label>
                            <input type="radio" name="star" id="star1"><label for="star1"></label>
                        </div>
                    </div>
                
            </div>

            <div class="box">
                
                    <img  class="img" src="./LENOVO.png" id="lenovo">
                    <div class="product-txt">
                        <h3>Portatil LENOVO</h3>
                        <p>Calidad Precio</p>
                        <p class="precio">$1'200.000</p>
                        <a href="#" class="agregar-carrito btn-3" data-id="3">Agregar al Carrito</a>
                        <div class="rating">
                            <input type="radio" name="star5" id="star5"><label for="star5"></label>
                            <input type="radio" name="star4" id="star4"><label for="star4"></label>
                            <input type="radio" name="star3" id="star3"><label for="star3"></label>
                            <input type="radio" name="star2" id="star2"><label for="star2"></label>
                            <input type="radio" name="star1" id="star1"><label for="star1"></label>
                        </div>
                    </div>
                
            </div>

            <div class="box">
                
                    <img class="img" src="./TECLADO.png" id="teclado">
                    <div class="product-txt">
                        <h3>Teclado Empresarial</h3>
                        <p>Calidad Precio</p>
                        <p class="precio">$500.000</p>
                        <a href="#" class="agregar-carrito btn-3" data-id="4">Agregar al Carrito</a>
                        <div class="rating">
                            <input type="radio" name="star" id="star5"><label for="star5"></label>
                            <input type="radio" name="star" id="star4"><label for="star4"></label>
                            <input type="radio" name="star" id="star3"><label for="star3"></label>
                            <input type="radio" name="star" id="star2"><label for="star2"></label>
                            <input type="radio" name="star" id="star1"><label for="star1"></label>
                        </div>
                    </div>
                
            </div>

            <div class="box">
                
                    <img class="img" src="./TECLADO2.png" id="teclado2">
                    <div class="product-txt">
                        <h3>Teclado Gamer</h3>
                        <p>Calidad Precio</p>
                        <p class="precio">$700.000</p>
                        <a href="#" class="agregar-carrito btn-3" data-id="5">Agregar al Carrito</a>
                        <div class="rating">
                            <input type="radio" name="star" id="star5"><label for="star5"></label>
                            <input type="radio" name="star" id="star4"><label for="star4"></label>
                            <input type="radio" name="star" id="star3"><label for="star3"></label>
                            <input type="radio" name="star" id="star2"><label for="star2"></label>
                            <input type="radio" name="star" id="star1"><label for="star1"></label>
                        </div>
                    </div>
                
            </div>

            <div class="box">
                
                    <img class="img" src="./TECLADO3.png" id="teclado3">
                    <div class="product-txt">
                        <h3>Teclado Flex</h3>
                        <p>Calidad Precio</p>
                        <p class="precio">$300.000</p>
                        <a href="#" class="agregar-carrito btn-3" data-id="6">Agregar al Carrito</a>
                        <div class="rating">
                            <input type="radio" name="star" id="star5"><label for="star5"></label>
                            <input type="radio" name="star" id="star4"><label for="star4"></label>
                            <input type="radio" name="star" id="star3"><label for="star3"></label>
                            <input type="radio" name="star" id="star2"><label for="star2"></label>
                            <input type="radio" name="star" id="star1"><label for="star1"></label>
                        </div>
                    </div>
                
            </div>

            <div class="box">
                
                    <img class="img" src="./MOUSE.png" id="mouse">
                    <div class="product-txt">
                        <h3>Mouse para Portatil inalambrico</h3>
                        <p>Calidad Precio</p>
                        <p class="precio">$500.000</p>
                        <a href="#" class="agregar-carrito btn-3" data-id="7">Agregar al Carrito</a>
                        <div class="rating">
                            <input type="radio" name="star" id="star5"><label for="star5"></label>
                            <input type="radio" name="star" id="star4"><label for="star4"></label>
                            <input type="radio" name="star" id="star3"><label for="star3"></label>
                            <input type="radio" name="star" id="star2"><label for="star2"></label>
                            <input type="radio" name="star" id="star1"><label for="star1"></label>
                        </div>
                    </div>
                
            </div>

            <div class="box">
                
                    <img class="img" src="./MOUSE2.png" id="mouse2">
                    <div class="product-txt">
                        <h3>Mouse para Portatil inalambrico</h3>
                        <p>Calidad Precio</p>
                        <p class="precio">$500.000</p>
                        <a href="#" class="agregar-carrito btn-3" data-id="8">Agregar al Carrito</a>
                        <div class="rating">
                            <input type="radio" name="star" id="star5"><label for="star5"></label>
                            <input type="radio" name="star" id="star4"><label for="star4"></label>
                            <input type="radio" name="star" id="star3"><label for="star3"></label>
                            <input type="radio" name="star" id="star2"><label for="star2"></label>
                            <input type="radio" name="star" id="star1"><label for="star1"></label>
                    </div>
                </div>
            </div>

        </div>

        <div class="btn-2" id="load-more">Cargar Mas</div>

    </main>

    <section class="app container">

        <div class="app-txt">

            <h2>¡Descarga nuestra aplicación móvil y lleva nuestra tienda de computec contigo!</h2>
            <p>
                Nuestra aplicación te ofrece una experiencia de compra conveniente y rápida desde la comodidad de tu dispositivo móvil. Ya sea que estés buscando un nuevo equipo, accesorios o simplemente quieras mantenerte al día con las últimas novedades tecnológicas, nuestra aplicación es tu puerta de entrada a todo lo relacionado con la tecnología.
            </p>
            <div class="descargar">
                <img src="./store1.png" id="store1">
                <img src="./store2.png" id="store2">
            </div>

        </div>

        <div class="app-img">
            <img src="./app.png" alt="">

        </div>

    </section>

    <footer class="footer">
        <div class="footer-content container">

            <div class="link">
                <a href="#inicio_1"><h3 id="Contactos">Contactanos</h3></a>
                <ul>
                    <li><a href="#">Telefono: (604)444444</a></li>
                    <li><a href="#">Celular: 3138982976</a></li>
                    <li><a href="#">Direccion: cr 80 #44-54</a></li>
                    <li><a href="#">Whatsapp:  3138982976</li>
</a></li>
                </ul>
            </div>

            <div class="link">
                <h3>Pregunta Por</h3>
                <ul>
                    <li><a href="#">Sebastian Vasquez Saldarriaga</a></li>
                    <li><a href="#">Basado en otras </a></li>
                    <li><a href="#">Paginas Web</a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>

            <div class="link">
                <h3>DESCARGANOS</h3>
                <div class="descargar">
                    <img src="./store1.png" id="store1">
                    <img src="./store2.png" id="store2">
                </div>
            </div>

        </div>
    </footer>

    <?php 
        include("./pagina_database.php");
    ?>

    <script src="./codigo.js"></script>

</body>
</html>