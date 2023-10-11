
    <main class ="bodyFondoCds">
    <div class="cd-container">
        <?php
         // Cargar la información de los CDs desde el archivo JSON
            $jsonFile = 'data/cds.json';
            $cdsData = json_decode(file_get_contents($jsonFile), true);
        // Verifica si se ha proporcionado un ID de CD válido en la URL
        if (isset($_GET['cd_id'])) {
            $cdId = intval($_GET['cd_id']);
            
            // Busca el CD correspondiente en el arreglo de datos
            $foundCd = null;
            foreach ($cdsData as $cd) {
                if ($cd['cd_id'] === $cdId) {
                    $foundCd = $cd;
                    break;
                }
            }

            // Muestra los detalles del CD si se encontró
            if ($foundCd) {
                echo '<div class="cd-card-details">';
                echo '<div class="cd-card-details-left">';
                echo '<img src="' . $foundCd['imagen'] . '" alt="' . $foundCd['titulo'] . '">';
                echo '<p><strong>Precio:</strong> ' . $foundCd['precio'] . '</p>';
                echo '<a href="index.php?seccion=productos" class="cd-button">Volver</a>';
                echo '</div>';
                echo '<div class="cd-card-details-right">';
                echo '<h2>' . $foundCd['titulo'] . '</h2>';
                echo '<p><strong>Discográfica:</strong> ' . $foundCd['discografica'] . '</p>';
                echo '<p><strong>Productor:</strong> ' . $foundCd['productor'] . '</p>';
                echo '<p><strong>Género:</strong> ' . $foundCd['genero'] . '</p>';
                echo '<p>' . $foundCd['texto'] . '</p>';
                echo '</div>';
                echo '</div>';
            } else {
                echo '<p>CD no encontrado</p>';
            }
        } else {
            echo '<p>CD no especificado</p>';
        }
        ?>
    </div>
    </main>