<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de CDs</title>
    <link rel="stylesheet" href="./assets/css/style.css"> 
</head>
<body class="bodyFondoCds">
    <main>
    <div class="cd-container">
        <ul>
            <?php
            // Cargar la información de los CDs desde el archivo JSON
            $jsonFile = 'data/cds.json';
            $cdsData = json_decode(file_get_contents($jsonFile), true);

            // Recorre los CDs y muestra la lista
            foreach ($cdsData as $cd) {
                echo '<div class="cd-card">';
                echo '<a href="index.php?seccion=detalle&cd_id=' . $cd['cd_id'] . '">';
                echo '<img src="' . $cd['imagen'] . '" alt="' . '" class="cd-image">';
                echo '<h2 class="cd-title">' . $cd['titulo'] . '</h2>';
                echo '<p class="cd-sinopsis">' . $cd['sinopsis'] . '</p>';
                echo '<p class="cd-precio">' . $cd['precio'] . '</p>';
                echo '</a>';
                echo '<a class="cd-button" href="index.php?seccion=detalle&cd_id=' . $cd['cd_id'] . '">Ver Detalle</a>';
                echo '</div>';
            }
            ?>
        </ul>
    </div>
    </main>
</body>
</html>
