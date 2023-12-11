<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Tienda de Deporte (Formulario de registro)" content="Desarrollo de Web Entorno Servidor">
    <link rel="stylesheet" type="text/css" href="../css/style1.css">
    <script src="../js/scripts.js"></script>
    

    <title>Fco. Javier Exposito Davila</title>

</head>
<body>

    <form action="../iniciarSesion.php" method="post">
        <div class="inicio">
            <h1>REGISTRO DE USUARIO</h1>
            <hr>
            <div class="inicioSesion">
                <p class="nc"><label class="u">Nombre completo: </label></p>
                <p><input type="text" id="nombreCompleto" name="nombreCompleto" placeholder="Nombre completo"></p>
                <p class="e-mail"><label>Correo Electronico: </label></p>
                <p><input type="email" id="usuario" name="usuario" placeholder="Usuario"></p>
                <p class="pwd"><label>Contraseña: </label></p>
                <p><input type="password" id="contraseña" name="contraseña"></p>
                <p class="rc"><label>Repetir Contraseña: </label></p>
                <p><input type="password" id="repetirContraseña" name="repetirContraseña" placeholder="Repetir Contraseña"></p>
                <p><a class="registroUno" href="../index.php">Ya tienes cuenta?</a><input class="botonEnviar" type="submit" value="Enviar"></p>
            </div>
        </div>    
    </form>    
    
</body>
</html>