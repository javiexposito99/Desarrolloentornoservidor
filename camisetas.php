<!--Esta seria la pagina de camisetas-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Tienda de Deporte (Pagina principal)" content="Desarrollo de Web Entorno Servidor">
    <link rel="stylesheet" type="text/css" href="css/stylo_camisetas.css">
    <script src="js/añadir.js"></script>

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
                        <div class="camisetaMalaga">
                            <img src="img/malaga.jpg">
                                <div class="camiseta_malaga">
                                    <h3><a href="camisetas.php" id="comprarMalaga" onclick="comprarCamiseta();">Málaga CF</a></h3>
                                </div>
                        </div>
                    </div>
                    <div class="opciones_cartas">
                        <div class="camisetaUnited">
                            <img src="img/camiseta_macheterunaiter.png">
                                <div class="camiseta_united">
                                    <h3><a href="#" id="camisetaMachesterunited">Manchester United</a></h3>
                                </div>
                        </div>
                    </div>
                    <div class="opciones_cartas">
                        <div class="camisetaMiami">
                            <img src="img/camiseta_miami.png">
                                <div class="camiseta_miami">
                                    <h3><a href="#">Inter de Miami</a></h3>
                                </div>
                        </div>
                    </div>
                </div>
            </li>
            
            <li>
                <div class="opciones">
                    <div class="opciones_cartas">
                        <div class="camisetaPsg">
                            <img src="img/camiseta_psg.png">
                                <div class="camiseta_psg">
                                    <h3><a href="#">Paris Saint-Germain</a></h3>
                                </div>
                        </div>
                    </div>
                    <div class="opciones_cartas">
                        <div class="camisetaRealsociedad">
                            <img src="img/camiseta_realsociedad.png">
                                <div class="camiseta_realsociedad">
                                    <h3><a href="#">Real Sociedad</a></h3>
                                </div>
                        </div>
                    </div>
                    <div class="opciones_cartas">
                        <div class="camisetaAtleti">
                            <img src="img/camiseta_ahtleti.png">
                                <div class="camiseta_atleti">
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