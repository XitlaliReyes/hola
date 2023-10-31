<?php
require 'header2.php';;
?>
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div style="margin:100px;">
<?php
     
    $usuario = $_POST["login"];
    $contra = $_POST["contra"];
    $email = $_POST["email"];
    $bandera = false;
     
    $file = fopen("vistas/Login_form/archivo.txt","a+");
    while (!feof($file)) {
        $linea = fgets($file);
        if ($linea != "") {
            $aux = preg_split("/[\s,]+/", $linea);  
            $user = $aux[0];
            $contrasena = $aux[1];

            if ($user === $usuario) {
                $bandera = true; 
                break;
            }
        }
    }
    
    if($bandera){
        echo "<br> Usuario ya registrado, por favor modifica tu nombre de Usuario <br>"; 
    }else{
        fwrite($file, $usuario." ".$contra." ".$email."\r\n");
        echo "<br> Cuenta dada de alta <br>";
    }
    fclose($file);
    echo "<br><a href='index.php'>Regresar</a>";

?>
</div>
</body>

