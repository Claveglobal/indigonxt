<?php
require 'vendor/autoload.php';

if (!isset($_ENV['user_mail'])) {
    $lines = file(__DIR__ . '/.env');
    foreach ($lines as $line) {
        if (trim($line) && strpos($line, '=') !== false) {
            list($name, $value) = explode('=', trim($line), 2);
            putenv("$name=$value");
            $_ENV[$name] = $value;
            $_SERVER[$name] = $value;
        }
    }
}


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ((isset($_POST["email"])) && ($_POST["email"] != "")) {

        $nombre = htmlspecialchars($_POST['nombre']);
        $email = htmlspecialchars($_POST['email']);
        $telefono = htmlspecialchars($_POST['telefono']);
        $interes = htmlspecialchars($_POST['interes']);
        $contacto = htmlspecialchars($_POST['contacto']);

        // Simulate email sending logic
        $to = "nxt@somosnxt.com";
        $subject = "Nuevo contacto desde el formulario";
        $message = "Nombre: $nombre\nEmail: $email\nTeléfono: $telefono\nInterés: $interes\nContacto preferido: $contacto";
        $headers = "From: $email";

        $mail = new PHPMailer(true);

        try {

            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host = "email-smtp.us-east-1.amazonaws.com";                   //Set the SMTP server to send through
            $mail->SMTPAuth   = true;
            $mail->SMTPSecure = 'tls';                        //Enable SMTP authentication
            $mail->Username   = $_ENV['user_mail'];                     //SMTP username
            $mail->Password   = $_ENV['pass_mail'];                               //SMTP password
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            //Recipients
            $mail->setFrom('noresponder@somosnxt.com', 'NXT');
            $mail->addAddress('nxt@somosnxt.com', 'NXT');     //Add a recipient
            $mail->addAddress('instagram@somosnxt.com', 'NXT');     //Add a recipient

            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = nl2br($message);
            $mail->AltBody = $message;

            if ($mail->send()) {
                echo "ok";
            } else {
                echo "Hubo un error al enviar el formulario. Por favor, intenta nuevamente.";
            }
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Método de solicitud no permitido.";
    }
}
