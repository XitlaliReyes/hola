<?php
session_start();
ob_start(); //por si no funciona el header location (activa almacenamiento en buffer de salida)
$config['base_url'] = 'http://' . $_SERVER["SERVER_NAME"]; //nombre del servidor(dominio) en el que estas actualmente
require '../../header2.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/estylos.css">
    <link></link>
</head>

<body>

    <?php

    $usuario = $_POST["usuario"];
    $password = $_POST["palabra_secreta"];


    $file = fopen("archivo.txt", "r");
    $band = 0; //para saber si la cuenta y contrasena estan en el archivo
    while (!feof($file)) {
        $linea = fgets($file);
        if ($linea != "") {
            $aux = preg_split("/[\s,]+/", $linea);  
            $user = $aux[0];
            $contrasena = $aux[1];
            $correo = $aux[2];

            if ($user === $usuario && $contrasena === $password) {
                $email = $correo;
                $band = 1;
                break;
            }
        }
    }
    fclose($file);

    # Luego de haber obtenido los valores, ya podemos comprobar:
    if ($band == 1) {
        $_SESSION["usuario"] = $usuario;
        $_SESSION["email"] = $email;

        # Luego redireccionamos a la pagina "Secreta"
        # redireccionamiento con php
        header("Location: ../../vacantes.php");
        // require 'vacantes.php';
        //header("Location:".$base_url."secreta.php");

        # redireccionamiento con javascript   
        //echo '<script>window.location="'.$base_url.'secreta.php"</script>';
    } else {
        # No coinciden, asi  que simplemente imprimimos un
        # mensaje diciendo que es incorrecto
        echo '<div  style="width:50%; margin:100px;" class="alert alert-warning alert-dismissible fade show" role="alert">';
            echo "<p style='text-align:center;'>El usuario o la contrasena son incorrectos</p>";
            echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
            echo    '<span aria-hidden="true">&times;</span>';
            echo '</button>';
        echo "</div>";
    }
    require '../../footer.html';
?>