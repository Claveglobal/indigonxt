<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

    if (mail($to, $subject, $message, $headers)) {
        echo "ok";
    } else {
        echo "Hubo un error al enviar el formulario. Por favor, intenta nuevamente.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
