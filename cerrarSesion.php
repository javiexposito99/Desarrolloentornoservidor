<?php

    
    session_start(); //Abrimos session
    session_unset(); //Borramos los datos de sesion
    session_destroy(); //Cerramos sesion


    header("Location: index.php"); //Nos redireciona a nuestro inicio de sesion

?>