<?php
    session_start();
    if (empty($_SESSION["usuario"])) {
        include 'header2.php';
    }else{
        include 'header3.php';
    }
?>


<body>
<?php
$respuestas = array(
    "¿Qué es un IDE en el desarrollo de software?" => "Un entorno de desarrollo integrado",
    "¿Qué es Git?" => "Un sistema de control de versiones",
    "¿Qué significa DRY?" => "Dont Repeat Yourself",
    "¿Qué es un framework en el desarrollo web?" => "Un conjunto de herramientas y reglas para el desarrollo web",
    "¿Qué es un lenguaje de programación orientado a objetos?" => "Un lenguaje que utiliza objetos para representar datos y comportamiento",
    "¿Qué significa el acrónimo HTML?" => "Hyper Transfer Markup Language",
    "¿Cuál de los siguientes no es un lenguaje de programación?" => "HTML",
    "¿Cuál de las siguientes no es una metodología ágil de desarrollo de software?" => "Waterfall",
    "¿Qué es un bug en el contexto del desarrollo de software?" => "Un error o defecto en el código que causa un comportamiento no deseado",
    "¿Qué es la programación concurrente?" => "Un enfoque para escribir programas que pueden realizar múltiples tareas al mismo tiempo"
);

$respuestas_correctas = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica si el formulario ha sido enviado
    foreach ($_POST as $pregunta => $respuesta) {
        // echo "Pregunta: $pregunta, Respuesta: $respuesta<br>";
        foreach ($respuestas as $key => $value) {
            // echo "Pregunta respuesta: $key, Respuesta correcta: $value<br>";
            if($respuesta == $value){
                $respuestas_correctas += 1; 
                // echo "Respuestas correctas: $respuestas_correctas";
            }
        }
    }
}

$total_preguntas = 10;
$puntaje = ($respuestas_correctas / $total_preguntas) * 100;

// echo "<p>Has respondido $respuestas_correctas de $total_preguntas preguntas correctamente.</p>";
// echo "<p>Tu puntaje es: $puntaje%.</p>";
?>

<?php
if ($puntaje >= 70) {
?>
<div class="res">
<div style="margin:200px" class="alert alert-success" role="alert">
  <h4 class="alert-heading">Buen trabajo! Has aprobado el examen</h4>
  <p>Tu calificación es de:</p>
  <hr>
  <p class="mb-0"><?php echo $puntaje; ?></p>
</div>
<?php
} else {
?>
<div style="margin:200px" class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Lamentamos informarte que no has aprobado el examen</h4>
  <p>Tu calificación es de:</p>
  <hr>
  <p class="mb-0"><?php echo $puntaje; ?></p>
</div>
</div>
<?php
}
?>
<a href="vacantes.php">Regresar</a>
</body>

<?php
    include "footer.html";    
?>

