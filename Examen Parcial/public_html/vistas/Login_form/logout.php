<?php
session_start();

 
$_SESSION['usuario']="";
session_destroy();

# Finalmente lo redireccionamos al inicio
header("Location: ../../index.php");
?>
