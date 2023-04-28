<?php
extract($_POST);



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->isMail();                       //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`;
    $mail->CharSet = 'UTF-8';

    //Recipients
    $mail->setFrom($correo, $nombre.' '. $apellidos);
    $mail->addAddress('erika.munoz@mb.com.mx', 'Mexicana de Becas Web');     //Add a recipient 

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Solicitud de informacion';
    $mail->Body    = '<b>Hola mi nombre es:</b> '.ucfirst($nombre).' '.ucfirst($apellidos).'
                      <br><b>Mi correo es:</b> '.$correo.'
                      <br><b>Mi teléfono para contacto:</b> '.$tel.'
                      <br><b>Cuento con número de contrato:</b> '.$contrato.'
                      <br><b>Requiero:</b> '.$requiero.'
                      <br><b>Tengo un comentario:</b> '.ucfirst($comentarios);    

    $mail->send();
    echo '<script>
            alert("Mensaje Enviado");
            window.location = "soycliente";
          </script>';

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}