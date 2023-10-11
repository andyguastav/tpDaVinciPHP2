
<?php
ini_set("SMTP", "smtp.gmail.com");
ini_set("smtp_port", "587");
ini_set("sendmail_from", "andyguastav@gmail.com"); // Debe ser una dirección de correo válida de Gmail



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopilar datos del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    // Destinatario del correo 
    $destinatario = "andyguastav@gmail.com"; 

    // Asunto del correo
    $asunto = "Mensaje de contacto de $nombre";

    // Mensaje del correo
    $mensajeCorreo = "Nombre: $nombre\n";
    $mensajeCorreo .= "Correo: $correo\n\n";
    $mensajeCorreo .= "Mensaje:\n$mensaje";

    // Cabeceras del correo
    $cabeceras = "From: $correo";

    // Intenta enviar el correo
    if (mail($destinatario, $asunto, $mensajeCorreo, $cabeceras)) {
        // Correo enviado con éxito
        echo "Gracias por tu mensaje. Nos pondremos en contacto contigo pronto.";
    } else {
        // Error al enviar el correo
        echo "Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
    }
} else {
    // Si no se recibió una solicitud POST, redirige a la página de inicio o muestra un mensaje de error
    header("Location: index.php?seccion=home");
    exit;
}
?>