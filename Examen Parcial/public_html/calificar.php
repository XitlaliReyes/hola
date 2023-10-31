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
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vistas/PHPMailer/Exception.php';
    require 'vistas/PHPMailer/PHPMailer.php';
    require 'vistas/PHPMailer/SMTP.php';
    
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
$mail = new PHPMailer(true);

// Configuracion del servidor SMTP
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'sarahireyes700@gmail.com';                     //SMTP username
    $mail->Password   = 'vusf gfyk fqot vmzg';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;   // El puerto SMTP puede variar según tu proveedor de correo

//remitente
$mail->setFrom('sarahireyes700@gmail.com', 'Vexcode');

$mail->addAddress($_SESSION['email']); // Usamos el correo almacenado en la sesión

$mail->Subject = 'Resultado del examen';
if ($puntaje >= 70) {
    $mensaje = 'Estimado ' . $_SESSION['email'] . ',

Espero que te encuentres bien. ¡Tenemos buenas noticias para ti!

Después de revisar tus respuestas al examen de conocimientos, nos complace informarte que has aprobado con un puntaje de ' . $puntaje . '%. La calificación mínima requerida para este puesto era del 70%.

Tu desempeño en el examen ha sido impresionante y estamos interesados en seguir adelante en el proceso de selección contigo. Nuestro equipo de recursos humanos se pondrá en contacto contigo en breve para discutir los siguientes pasos, incluyendo una posible entrevista y los detalles del puesto.

Agradecemos tu interés en formar parte de nuestro equipo y valoramos el tiempo y esfuerzo que invertiste en el proceso. Esperamos que este sea el comienzo de una colaboración exitosa y productiva.

Nuevamente, felicidades por tu logro y esperamos hablar contigo pronto.

Atentamente,

Recursos Humanos
Vexcode ';

} else {
    $mensaje = 'Estimado ' . $_SESSION['usuario'] . ',

Queremos agradecerte por participar en nuestro proceso de selección y completar el examen de conocimientos.

Lamentablemente, después de revisar tus respuestas, tenemos que informarte que no has aprobado el examen. Tu puntaje fue ' . $puntaje . '%. La calificación mínima requerida para este puesto era del 70%.

Agradecemos tu interés en formar parte de nuestro equipo y valoramos el tiempo y esfuerzo que invertiste en el proceso. Te animamos a seguir desarrollando tus habilidades y conocimientos, ya que siempre hay oportunidades para aprender y crecer.

No obstante, este resultado no significa que no puedas aplicar a futuras oportunidades en nuestra organización. Te alentamos a mantener un ojo en nuestras futuras vacantes y a seguir trabajando en tu desarrollo profesional.

Te deseamos mucho éxito en tus futuros empeños y proyectos profesionales.

Atentamente,

Recursos Humanos
Vexcode
';

}
$mail->Body = $mensaje;

// Envía el correo
if ($mail->send()) {
    // El correo se envió con éxito
    echo 'El correo se ha enviado con éxito.';
} else {
    // Error al enviar el correo
    echo 'Hubo un error al enviar el correo: ' . $mail->ErrorInfo;
}

?>
<?php
    include "footer.html";    
?>

