<?php
// Incluir la conexion
require_once __DIR__ . '/../../assets/mysql/conexion.php';
//Incluir clase cds
require_once __DIR__ . '/../../classes/Cds.php';
// Armar la query
$query = "SELECT * FROM cds";
$stmt = $db->prepare($query);
$stmt->execute();

//Fetch
$stmt->setFetchMode(PDO::FETCH_CLASS, 'Cds');
$cdsData= $stmt->fetchAll(); 
?>

<h2>Administracion de Productos</h2>

<main class="bodyFondoCds">
    <div class="cd-container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Sinopsis</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                    <th>Acciones</th>

                </tr>
            </thead>
            <tbody>
            <?php
            // Recorre los CDs y muestra la lista
            foreach ($cdsData as $cd) {
            ?>
                <tr>
                    <td><?= $cd->cd_id;?></td>
                    <td><?= $cd->titulo;?></td>
                    <td><?= $cd->sinopsis;?></td>
                    <td><?= $cd->precio;?></td>
                    <td><img src="<?='../'. $cd->imagen;?>" alt="<?= $cd->titulo;?>"></td>
                    <td>Pronto Acciones</td>
                </tr>
                <?php
           };
            ?>
            </tbody>
        </table>
    </div>
</main>
