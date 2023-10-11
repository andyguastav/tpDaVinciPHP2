<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



// Incluir la biblioteca PHPMailer
require './PHPMailer/Exception.php';
require './PHPMailer/PHPMailer.php';
require './PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopilar datos del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    // Destinatario del correo
    $destinatario = "guastavino.andres.daviinci@gmail.com";

    // Asunto del correo
    $asunto = "Mensaje de contacto de $nombre";

    // Mensaje del correo
    $mensajeCorreo = "Nombre: $nombre\n";
    $mensajeCorreo .= "Correo: $correo\n\n";
    $mensajeCorreo .= "Mensaje:\n$mensaje";

    // Configuración SMTP
    $smtpServidor = "sandbox.smtp.mailtrap.io"; // Servidor SMTP de mailtrap
    
    $smtpPuerto = 587; // Puerto SMTP

    // Nombre de usuario y contraseña de tu cuenta de mailtrap
    $smtpUsuario = "87039a7b64d7a1";
    $smtpContraseña = "7ce74e9d4ba19e"; 

    // Crear una instancia de PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor SMTP
        $mail->SMTPDebug = 0; // Activa el modo depuración si es necesario (cambia a 2 para obtener más detalles)
        // Opción para deshabilitar la verificación del certificado
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->isSMTP();
        $mail->Host = $smtpServidor;
        $mail->SMTPAuth = true;
        $mail->Username = $smtpUsuario;
        $mail->Password = $smtpContraseña;
        $mail->Port = $smtpPuerto;

        // Destinatario y asunto
        $mail->setFrom($correo, $nombre);
        $mail->addAddress($destinatario);
        $mail->Subject = $asunto;

        // Contenido del mensaje
        $mail->Body = $mensajeCorreo;

        // Enviar el correo
        $mail->send();

        // Correo enviado con éxito
        echo "Gracias por tu mensaje. Nos pondremos en contacto contigo pronto.";
    } catch (Exception $e) {
        // Error al enviar el correo
        echo "Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
    }
} else {
    // Si no se recibió una solicitud POST, redirige a la página de inicio o muestra un mensaje de error
    header("Location: index.php?seccion=home");
    exit;
}
?>
