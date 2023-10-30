<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vistas/PHPMailer/Exception.php';
require 'vistas/PHPMailer/PHPMailer.php';
require 'vistas/PHPMailer/SMTP.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["username"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $msj = $_POST["msj"];
    
    $mail = new PHPMailer(true);

    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'sarahireyes700@gmail.com';                     //SMTP username
    $mail->Password   = 'vusf gfyk fqot vmzg';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;  
    
    $mail->setFrom('sarahireyes700@gmail.com', $nombre);
    $correo_empresa = 'xitlalireyes70@gmail.com';
     $mail->addAddress($correo_empresa);
    $mail->Subject = "Mensaje de contacto";
    $mail->msgHTML($msj);
    $mail->Body    = $msj;
    $mail->Body = "<h3>Nombre: $nombre<br>Email: $correo<br>Telefono: $telefono<br>Mensaje: $msj<br>Se paciente, atenderemos tu solicitud lo más pronto posible.</h3>";
    $mail->AltBody = "Nombre: $nombre<br>Email: $correo<br>Mensaje: $msj<br>Se paciente, atenderemos tu solicitud lo más pronto posible.";
    
    if ($mail->send()) {
        echo '<p style="text-align:center; margin-top: 20px;"><a href="contactanos.php">Regresar</a></p>';
        echo '<h1 style="color:#6CD6E7;font-family:Lucida Sans; text-align:center; margin:20%;">El mensaje ha sido enviado correctamente<br>Sé paciente '.$nombre.', atenderemos tu solicitud lo más pronto posible</h1>';
    } else {
        echo "Error al enviar el correo: " . $mail->ErrorInfo;
    }
}


?>