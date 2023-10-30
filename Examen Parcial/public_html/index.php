<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../public_html/css/estylos.css">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon_io/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>Inicio</title>
</head>
<body>
    
    <?php 
    if (!empty($_SESSION["usuario"])) {
        require 'header3.php';
    }else{
        require 'header2.php';
    }
    require 'vistas/inicio.html';
    //Configura la zona horaria adecuada en tu script PHP
    date_default_timezone_set('America/Mexico_City'); // Configura la zona horaria

    $archivo_actual = __FILE__; // Obtiene el nombre del archivo actual
    $ultimaActualizacion = date('d/m/Y H:i:s', filemtime($archivo_actual));
    echo "<p style='background:black; color:white; margin:0px; padding-left:10px;'>Fecha de última actualización: $ultimaActualizacion</p>";
    require 'footer.html';
    ?>
</body>
</html>