<?php
    require 'header3.php';
?>

<head>
    <style>
        body{
            margin-top: 100px;
            margin-left: 150px;
            margin-right: 150px;
        }
        fieldset {
            border:solid;
            border-radius: 4%;
            padding:70px;
            padding-top:0px;
        }
        legend {
            text-align:center;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 2em;
            font-weight: bold;
            color: #07373E;
        }
        td{
            text-align: center;
        }
        .info{
            text-align: justify;
        }
        .warn{
            font-weight: bold;
            color: maroon;
            font-size: larger;
        }
    </style>
</head>

<body>
<form method="post" action="calificar.php">
<?php
$examen = array(
    "¿Qué es un IDE en el desarrollo de software?" => array("Un entorno de desarrollo integrado", "Un compilador de código", "Una base de datos", "Un sistema operativo"),
    "¿Qué es Git?" => array("Un sistema de control de versiones", "Un lenguaje de programación", "Un servidor web", "Una base de datos relacional"),
    "¿Qué significa DRY?" => array("Dont Repeat Yourself", "Data Rendering Yearly", "Database Reliability Yield", "Development Requirement Year"),
    "¿Qué es un framework en el desarrollo web?" => array("Un conjunto de herramientas y reglas para el desarrollo web", "Una plantilla de diseño", "Un motor de búsqueda", "Un sistema operativo"),
    "¿Qué es un lenguaje de programación orientado a objetos?" => array("Un lenguaje que utiliza objetos para representar datos y comportamiento", "Un lenguaje diseñado solo para bases de datos", "Un lenguaje que solo utiliza variables", "Un lenguaje de programación obsoleto"),
    "¿Qué significa el acrónimo HTML?" => array("Hyper Transfer Markup Language", "High-Level Text Markup Language", "Hyper Text Markup Link", "Home Tool Markup Language"),
    "¿Cuál de los siguientes no es un lenguaje de programación?" => array("Python", "HTML", "Java", "C"),
    "¿Cuál de las siguientes no es una metodología ágil de desarrollo de software?" => array("Scrum", "Waterfall", "Kanban", "Extreme Programming (XP)"),
    "¿Qué es un bug en el contexto del desarrollo de software?" => array("Un error o defecto en el código que causa un comportamiento no deseado", "Un componente de hardware defectuoso", "Un virus informático", "Un archivo de registro del sistema"),
    "¿Qué es la programación concurrente?" => array("Un enfoque para escribir programas que pueden realizar múltiples tareas al mismo tiempo", "Un enfoque para escribir programas de una sola tarea", "Una técnica para depurar código", "Un tipo de lenguaje de marcado")
);

$preguntas = array_keys($examen); // Extraer las preguntas
$indices = range(0, count($preguntas) - 1); // Crear un arreglo de índices
shuffle($indices); // Mezclar los índices

?>
<fieldset>
<legend>Examen de Conocimientos</legend>
<?php
$cont=1;
echo "<br>";
echo "<table>";
echo "<tr>";
echo "<td> Fecha de presentacion del examen : ".date('d/m/Y'); " </td>";
echo "</tr>";
echo "<tr>";
echo "<td> INDICACIONES: </td>";
echo "</tr>";
echo "<tr>";
echo "<td class='info'> En el siguiente examen apareceran 10 preguntas, donde debes elegir la opcion correcta 
de cuatro opciones disponibles de cada pregunta. La calificacion minima aprobatoria es de 
7, lo que quiere decir que debes tener correctas al menos 7 preguntas. </td>";
echo "</tr>";
echo "<tr>";
echo "<td class='warn'><br> Recuerda que solo puedes responder el examen una vez </td>";
echo "</tr>";
echo "</table>";

foreach ($indices as $indice) {
    $pregunta = $preguntas[$indice];
    $respuestas = $examen[$pregunta];
    echo "<br><br>";
    echo "<h5>".$cont.".-".$pregunta."</h5>";
    
    // Puedes mezclar las respuestas aquí si lo deseas
    shuffle($respuestas);
    $cont++;
    foreach ($respuestas as $respuesta) {
        ?>

    
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="<?php echo $pregunta; ?>" id="<?php echo $pregunta . '-' . $respuesta; ?>" value="<?php echo $respuesta; ?>">
        <label class="form-check-label" for="<?php echo $pregunta . '-' . $respuesta; ?>"><?php echo $respuesta;?></label>
    </div>
        
<?php 
    }
}
echo "<br><br>";
?>
<button type="submit" class="btn" style="background:#07373E; color:white;">Enviar</button>
</fieldset>
</form>
</body>
