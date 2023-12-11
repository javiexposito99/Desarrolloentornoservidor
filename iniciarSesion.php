
<?php

    session_start(); //Abrimos sesion

    //Incluimos la conexion con el documento php de conexion.
    include('conexion.php');
    //Funcion para poder trabajar con cualquier caracter para el usuario y la contraseña.
    if(isset($_POST['usuario']) && isset($_POST['contraseña'])){
        //Funcion para datos especiales. Esto smp sera igual.
        function validar($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        //Creamos nuestras variables que vamos a validar.
        $usuario = validar($_POST['usuario']);
        $contraseña = validar($_POST['contraseña']);

        //Comprobamos que si esta vacio (empty) da un error.
        if(empty($usuario)){
            header('Location: index.php?error=El usuario es obligatorio.');
            exit();
        }else if(empty($contraseña)){
            header('Location: index.php?error=La contraseña es obligatoria.');
            exit();
        }else{
            //En el caso de que no este vacio.
        //$contraseña = md5($contraseña);//Sera para encriptar la contraseña.

            //Variable sql que contendra la funcion para comparar los datos de nuestra bd con los datos introducidos.
            $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND pasword = '$contraseña'";
            $resultado = mysqli_query($conexion, $sql);//Resultado de la comprobacion.

            //-------//

            /*Recoge las fila 1 y lo guarda en la variable $row que a su vez compara el usuario y la contraseña de
            la fila 1 si coinciden con nuestras variables.*/
            if(mysqli_num_rows($resultado) === 1){
                $row = mysqli_fetch_assoc($resultado);
                if($row['usuario'] === $usuario && $row['pasword'] === $contraseña){
                    //Comprobamos el usuario y contraseña introducido con el de la bd.
                    $_SESSION['usuario'] = $row['usuario'];
                    $_SESSION['contraseña'] = $row['pasword'];
                    header("Location: inicio.php");
                    exit();
                }else{
                    header("Location: index.php?error=El usuario o la contraseña son incorrectas.");
                    exit();
                }
            }else{
                header("Location: index.php?error=El usuario o la contraseña son incorrectas.");
                exit();
            }

        }

        






    }else {
        header("Location: index.php");
        exit();
    }

    


?>