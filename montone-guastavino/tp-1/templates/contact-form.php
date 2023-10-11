<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="./assets/css/style.css"> 
</head>
<body>
    <main>
    <div class="cd-container">
    <form class="contact-form" action="procesar-formulario.php" method="post">
    <label for="nombre" class="form-label">Nombre:</label>
    <input type="text" id="nombre" name="nombre" class="form-input" required>

    <label for="correo" class="form-label">Correo Electrónico:</label>
    <input type="email" id="correo" name="correo" class="form-input" required>

    <label for="mensaje" class="form-label">Motivo de contacto:</label>
    <textarea id="mensaje" name="mensaje" class="form-textarea" rows="4" required></textarea>

    <input type="submit" value="Enviar" class="form-button">
    </form>
    </div>
    </main>
</body>
</html>
