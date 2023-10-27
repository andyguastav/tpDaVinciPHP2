
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="../favicon.ico" sizes="any">
    <link rel="stylesheet" href="./../assets/css/style.css">
</head>
<body>


<?php
$seccion = isset($_GET['seccion']) ? $_GET['seccion'] : 'home';

include('templates/header.php');

switch ($seccion) {
    case 'home':
        include('templates/home.php');
        break;
    case 'productos':
        include('templates/cds-list.php');
        break;
    case 'detalle':
        include('templates/cds-detail.php');
        break;
    case 'contacto':
        include('templates/contact-form.php');
        break;
    default:
        include('templates/error-404.php');
        echo '<meta http-equiv="refresh" content="5;url=index.php?seccion=home">';
}

include('templates/footer.php');
?>

</body>
</html>
