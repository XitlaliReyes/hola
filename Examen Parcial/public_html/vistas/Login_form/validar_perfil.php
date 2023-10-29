<?php
session_start();
$bandera = false; // Inicializamos la bandera

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"]) && !(empty($_FILES["file"]["tmp_name"]))) {
    $targetDir = "perfiles/";  // Directorio donde se guardarán las imágenes
    $targetFile = $targetDir . basename($_FILES["file"]["name"]);

    // Verificar si el archivo es una imagen real, si es asi se sube a la cerpeta perfiles y se prende
    // la bandera para generar su pdf
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if ($check !== false) {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
            $bandera = true;
        } else {
            echo "Hubo un problema al subir el archivo. Por favor intente de nuevo.";
        }
    } else {
        ?>
        <div class="alert alert-warning" role="alert">
            <strong>El archivo </strong> no es una imagen válida.
        </div>
        <?php
    }
}

if ($bandera) {
    require 'generarpdf_cc.php';
}else{
    echo 'Sube una imagen de tu perfil por favor';
}
?>

