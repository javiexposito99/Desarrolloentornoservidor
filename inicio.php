
<!--Esta seria la pagina principal-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Tienda de Deporte (Pagina principal)" content="Desarrollo de Web Entorno Servidor">
    <link rel="stylesheet" type="text/css" href="css/style_inicio.css">
    <script src="js/func.js"></script>

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
        <div class="opciones">
            <div class="opciones_cartas">
                <div class="camisetas">
                    <img src="img/malaga.jpg">
                        <div class="texto_carta_camiseta">
                            <h3><a href="./camisetas.php">Camisetas</a></h3>
                        </div>
                </div>
            </div>
            <div class="opciones_cartas">
                <div class="pantalones">
                    <img src="img/bundesliga.png">
                        <div class="texto_carta_pantalon">
                            <h3><a href="./pantalones.php">Pantalones</a></h3>
                        </div>
                </div>
            </div>
            <div class="opciones_cartas">
                <div class="materiales">
                    <img src="img/barcabalon.png">
                        <div class="texto_carta_material">
                            <h3><a href="./material.php">Materiales</a></h3>
                        </div>
                </div>
            </div>
        </div>
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