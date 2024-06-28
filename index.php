<?php
include ("conexion.php");
$con = conectar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FrontEnd Store</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-JlB1Z7vHuA6+sp+NK6wUZ9Uv5bO/OG7DwhA04XbI74g9tltIc9JSipJRkyVXbhrtmyLHgyfA1O2eH2c4CLOk1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="header">
        <a href="index.php">
            <img class="header__logo" src="img/logo.png" alt="Logotipo">
        </a>
    </header>

    <nav class="navegacion">
    <a class="navegacion__enlace navegacion__enlace--activo" href="index.php">Tienda</a>
    <a class="navegacion__enlace" href="nosotros.html">Nosotros</a>
    <a class="navegacion__enlace" href="carrito.php">Carrito</a>
</nav>


    <main class="contenedor">
        <h1>Nuestros Productos</h1>

        <div class="grid">
            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="img/1.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">VueJS</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="img/2.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">AngularJS</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="img/3.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">ReactJS</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="img/4.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Redux</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="img/5.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Node.js</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="img/6.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">SASS</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="img/7.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">HTMdffL5</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="img/8.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Github</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="img/10.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">BulmaCSS</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="img/9.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">TypeScript</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="img/11.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Drupal</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="img/12.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">JavaScript</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="img/13.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">GraphQL</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="img/14.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">WordPress</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->

            <div class="grafico grafico--camisas"></div>
            <div class="grafico grafico--node"></div>
        </div>
    </main>

    <footer class="footer">
        <p class="footer__texto">Front End Store - Todos los derechos Reservados 2022.</p>
    </footer>
    
</body>
</html>