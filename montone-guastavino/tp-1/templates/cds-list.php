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
?>

<main class="bodyFondoCds">
    <div class="cd-container">
        <ul>
            <?php
            // Recorre los CDs y muestra la lista
            foreach ($cdsData as $cd) {
            ?>
            <li class="cd-card">
                <div>
                    <a href="index.php?seccion=detalle&cd_id=<?= $cd['cd_id'] ?>">
                        <img src="<?= $cd['imagen'] ?>" alt="<?= $cd['titulo'] ?>" class="cd-image">
                        <h2 class="cd-title"><?= $cd['titulo'] ?></h2>
                        <p class="cd-sinopsis"><?= $cd['sinopsis'] ?></p>
                        <p class="cd-precio"><?= $cd['precio'] ?></p>
                    </a>
                    <a class="cd-button" href="index.php?seccion=detalle&cd_id=<?= $cd['cd_id'] ?>">Ver Detalle</a>
                </div>
            </li>
            <?php
            }
            ?>
        </ul>
    </div>
</main>
