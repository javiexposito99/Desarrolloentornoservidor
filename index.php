<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Tienda de Deporte" content="Desarrollo de Web Entorno Servidor">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/scripts.js"></script>
    
    <title>Fco. Javier Exposito Davila</title>

</head>
<body>

    <form action="iniciarSesion.php" method="post">
        <div class="inicio">
            <h1>INICIO SESION</h1>
                <?php
                    if(isset($_GET['error'])){
                    ?> 
                    <p class="error">
                        <?php
                            print $_GET['error'];
                        ?>
                    </p>
                <?php    
                    }

                ?>
            <hr>
            <div class="inicioSesion">
                <p><label class="u">Usuario: </label></p>
                <p><input type="text" id="usuario" name="usuario"></p>
                <p><label>Contraseña: </label></p>
                <p><input type="password" id="contraseña" name="contraseña"></p>
                <p><a class="registro" href="html/formulario_registro.php">Crear Cuenta</a><input class="botonEnviar" type="submit" value="Enviar"></p>
            </div>
        </div>    
    </form>    
    
</body>
</html>