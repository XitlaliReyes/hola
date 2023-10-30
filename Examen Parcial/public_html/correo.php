<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vistas/PHPMailer/Exception.php';
require 'vistas/PHPMailer/PHPMailer.php';
require 'vistas/PHPMailer/SMTP.php';


if(isset($_POST['submit'])){
    $nombre = $_POST["username"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $msj = $_POST["msj"];

    $mail = new PHPMailer(true);

    var_dump($nombre);
    var_dump($correo);
    var_dump($telefono);
    var_dump($msj);

    try {
    $mail->SMTPDebug = 0;                     
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;   
    //Accesar a la cuenta de Gmail                               
    $mail->Username   = 'sarahireyes700@gmail.com';                    
    $mail->Password   = 'vusf gfyk fqot vmzg';                             
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMPS;            
    $mail->Port       = 465;                                   
    //Recipients
    //Desde donde se va enviar
    $mail->setFrom('sarahireyes700@gmail.com', $nombre);
    //A que direccion se envia
    //En este caso a mi como parte de la empresa
    $correo_empresa = 'xitlalireyes70@gmail.com';
    $mail->addAddress($correo_empresa);     
    //Content
    $mail->isHTML(true);                                 
    $mail->Subject = 'Correo desde php';
    $mail->Body    = $msj;
    $mail->Body    = "<h3>Nombre: $nombre<br>Email: $correo<br>Telefono: $telefono<br>Mensaje: $msj<br>Se paciente, atenderemos tu solicitud lo más pronto posible.</h3>";
    $mail->AltBody = "Nombre: $nombre<br>Email: $correo<br>Mensaje: $msj<br>Se paciente, atenderemos tu solicitud lo más pronto posible.";

    $mail->send();
    echo '<h1 style="color:#6CD6E7;font-family:Lucida Sans; text-align:center; margin:20%;">El mensaje se envio correctamente<br>Se paciente '.$nombre.', atenderemos tu solicitud lo más pronto posible</h1>';
    } catch (Exception $e) {
    echo '<h1 style="color:red;font-family:Lucida Sans; text-align:center; margin:20%;">Mailer Error: '. $mail->ErrorInfo. ' <br>Por favor ingrese un correo valido</h1>';
    }
}
?>