<?php
    /*Establecemos los datos de la base de datos de mysql*/
    $host = "localhost";
    $User = "root";
    $pass = "";
    //Esta seria la bd a utilizar.
    $bd = "power_explosion";
    //Establecemos conexion con la bd.  
    $conexion = mysqli_connect($host, $User, $pass, $bd);

    if(!$conexion){
        print 'No es posible realizar la conexion.';
    }

    ?>