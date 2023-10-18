<?php
// Incluir la conexion
require_once __DIR__ . '/../assets/mysql/conexion.php';
// Armar la query
$query = "SELECT * FROM cds";
$stmt = $db->prepare($query);
$stmt->execute();

//Fetch
$stmt->setFetchMode(mode:PDO::FETCH_ASSOC);
$cdsData= $stmt->fetchAll(); 


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
}
?>

<main class="bodyFondoCds">
    <div class="cd-container">
        <?php
        // Muestra los detalles del CD si se encontró
        if (isset($foundCd)) {
        ?>
            <div class="cd-card-details">
                <div class="cd-card-details-left">
                    <img src="<?= $foundCd['imagen'] ?>" alt="<?= $foundCd['titulo'] ?>">
                    <p><strong>Precio:</strong> <?= $foundCd['precio'] ?></p>
                    <a href="index.php?seccion=productos" class="cd-button">Volver</a>
                </div>
                <div class="cd-card-details-right">
                    <h2><?= $foundCd['titulo'] ?></h2>
                    <p><strong>Discográfica:</strong> <?= $foundCd['discografica'] ?></p>
                    <p><strong>Productor:</strong> <?= $foundCd['productor'] ?></p>
                    <p><strong>Género:</strong> <?= $foundCd['genero'] ?></p>
                    <p><?= $foundCd['texto'] ?></p>
                </div>
            </div>
        <?php
        } else {
            echo '<p>CD no encontrado</p>';
        }
        ?>
    </div>
</main>
