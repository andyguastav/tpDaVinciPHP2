<?php
// Cargar la información de los CDs desde el archivo JSON
$jsonFile = 'data/cds.json';
$cdsData = json_decode(file_get_contents($jsonFile), true);
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
