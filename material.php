<!--Esta seria la pagina de material-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Tienda de Deporte (Pagina principal)" content="Desarrollo de Web Entorno Servidor">
    <link rel="stylesheet" type="text/css" href="css/style_material.css">
    <script src=""></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Fco. Javier Exposito Davila</title>

</head>
<body>

    <header>
        <div class="barra-superior">
            <nav class="menu">
                <ul class="menu-horizontal">
                    <li>
                        <a href="./inicio.php">Inicio</a>
                    </li>
                    <li>
                        <a href="#">Camisetas</a>
                        <ul class="menu-vertical">    
                            <li><a href="./camisetas.php">Camisetas de fútbol</a></li>
                            <li><a href="#">Camisetas de baloncesto</a></li>
                            <li><a href="#">Camisetas de tenis</a></li>
                        </ul>    
                    </li>
                    <li>
                        <a href="#">Pantalones</a>
                        <ul class="menu-vertical">    
                            <li><a href="./pantalones.php">Pantalones de fútbol</a></li>
                            <li><a href="#">Pantalones de baloncesto</a></li>
                            <li><a href="#">Pantalones de tenis</a></li>
                        </ul>    
                    </li>
                    <li>
                        <a href="#">Materiales</a>
                        <ul class="menu-vertical">    
                            <li><a href="./material.php">Materiales de fútbol</a></li>
                            <li><a href="#">Materiales de baloncesto</a></li>
                            <li><a href="#">Materiales de tenis</a></li>
                        </ul>    
                    </li>
                </ul>
            </nav>

            <div class="buscador">
                <input type="text">
                <button onclick="">Buscar</button>
            </div>
        </div>    
    </header>

    <section>
        <ul class="container">
            <li>
                <div class="opciones">
                    <div class="opciones_cartas">
                        <div class="balonAzul">
                            <img src="img/balon_azul.png">
                                <div class="balon_azul">
                                    <h3><a href="#">Balon Nike Azul</a></h3>
                                </div>
                        </div>
                    </div>
                    <div class="opciones_cartas">
                        <div class="conos">
                            <img src="img/conos.png">
                                <div class="conos_conos">
                                    <h3><a href="#">Conos de colores</a></h3>
                                </div>
                        </div>
                    </div>
                    <div class="opciones_cartas">
                        <div class="guantesBlancos">
                            <img src="img/guantes_blancos.png">
                                <div class="guantes_blancos">
                                    <h3><a href="#">Guantes Addidas</a></h3>
                                </div>
                        </div>
                    </div>
                </div>
            </li>
            
            <li>
                <div class="opciones">
                    <div class="opciones_cartas">
                        <div class="balonAmarillo">
                            <img src="img/balon_amarillo.png">
                                <div class="balon_amarillo">
                                    <h3><a href="#">Balon Nike Amarillo</a></h3>
                                </div>
                        </div>
                    </div>
                    <div class="opciones_cartas">
                        <div class="miniPorteria">
                            <img src="img/porteria.png">
                                <div class="mini_porteria">
                                    <h3><a href="#">Mini-Porteria</a></h3>
                                </div>
                        </div>
                    </div>
                    <div class="opciones_cartas">
                        <div class="espinillerasNike">
                            <img src="img/espinilleras_Nike.png">
                                <div class="espinilleras_nike">
                                    <h3><a href="#">Espinilleras Nike</a></h3>
                                </div>
                        </div>
                    </div>
                </div>
            </li>   
        </ul>    
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <a href="cerrarSesion.php" class="cerrarSesion">Cerrar Sesion</a>
    

    

</body>
</html>