<?php
    session_start();
    require 'header3.php';

?>

<body>
<?php

$archivo = 'vistas/Login_form/archivo1.txt'; // Nombre del archivo
$codigo_ingresado = $_POST["codigo"]; // Código que deseas eliminar
$usuario = $_SESSION['usuario']; // Usuario de la sesión

// Lee el contenido del archivo en un arreglo de líneas
$lineas = file($archivo);

if ($lineas !== false) {
    $line_modificada = false; // Bandera para controlar si se ha realizado la modificación

    foreach ($lineas as $indice => $linea) {
        $aux = preg_split("/[\s,]+/", $linea);
        $user = $aux[0];
        $codigo = $aux[1];
        $correo = $aux[2];
        $bandera = $aux[3];

        if ($codigo_ingresado === $codigo && $user === $usuario && $bandera === 'false') {
            // La línea cumple las condiciones, no se agrega al nuevo arreglo
            unset($lineas[$indice]);
            $line_modificada = true; // Marca que se ha realizado una modificación
            break; // Puedes detener el bucle si ya encontraste la línea a eliminar
        }
    }

    if ($line_modificada) {
        require 'examen.php';
        file_put_contents($archivo, implode("", $lineas)); //Se elimina del codigo
    } else {?>
    <div class="alert alert-danger" role="alert" style="margin:200px;">
    Error usted no tiene permitido realizar este examen <a href="vacantes.php" class="alert-link">Regresar</a>
    </div>
    <?php  
    }
} else {
    echo "<a href='vacantes.php'>Regresar</a>";
}
?>
</body>

<?php
require 'footer.html';
?>




