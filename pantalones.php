<!--Esta seria la pagina de pantalones-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Tienda de Deporte (Pagina principal)" content="Desarrollo de Web Entorno Servidor">
    <link rel="stylesheet" type="text/css" href="css/stylo_pantalones.css">
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
                        <div class="pantalonMalaga">
                            <img src="img/pantalonmalaga.png">
                                <div class="pantalon_malaga">
                                    <h3><a href="#">Málaga CF</a></h3>
                                </div>
                        </div>
                    </div>
                    <div class="opciones_cartas">
                        <div class="pantalonUnited">
                            <img src="img/pantalonmacheter.png">
                                <div class="pantalon_united">
                                    <h3><a href="#">Manchester United</a></h3>
                                </div>
                        </div>
                    </div>
                    <div class="opciones_cartas">
                        <div class="pantalonMiami">
                            <img src="img/pantalonmiami.jpg">
                                <div class="pantalon_miami">
                                    <h3><a href="#">Inter de Miami</a></h3>
                                </div>
                        </div>
                    </div>
                </div>
            </li>
            
            <li>
                <div class="opciones">
                    <div class="opciones_cartas">
                        <div class="pantalonPsg">
                            <img src="img/pantalonpsg.png">
                                <div class="pantalon_psg">
                                    <h3><a href="#">Paris Saint-Germain</a></h3>
                                </div>
                        </div>
                    </div>
                    <div class="opciones_cartas">
                        <div class="pantalonRealsociedad">
                            <img src="img/pantalonrealsociedad.png">
                                <div class="pantalon_realsociedad">
                                    <h3><a href="#">Real Sociedad</a></h3>
                                </div>
                        </div>
                    </div>
                    <div class="opciones_cartas">
                        <div class="pantalonAtleti">
                            <img src="img/pantalonbilbao.png">
                                <div class="pantalon_atleti">
                                    <h3><a href="#">Athletic Bilbao</a></h3>
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