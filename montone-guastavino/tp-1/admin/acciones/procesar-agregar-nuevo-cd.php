<?php
//Capturamos los datos
$titulo     = $_POST['titulo'];
$sinposis   = $_POST[`sinopsis`];
$precio   = $_POST[`precio`];
//$imagen   = $_POST[`imagen`];
$productor   = $_POST[`productor`];
$genero   = $_POST[`genero`];´

// Validacion

//Subir Imagen

//Grabar

(new Cd())->crear([
    `titulo`=>$titulo,
    `sinopsis`=>$sinopsis,
    `precio`=>$precio,
    `imagen`=>null,
    `productor`=>$productor,
    `genero`=>$genero,
]);

//
echo "CD AGREGADO CON EXITO";
