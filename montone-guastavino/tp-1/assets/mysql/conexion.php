<?php
//Definimos  primero los detalles de la conexion en variables

$db_host = "localhost";
$db_name = "dw3_montone_guastavino"
$db_charset = "utf8mb4";
$db_user = "root";
$db_pass = "";

//Armamos el dsn

$db_dsn = "mysql:host=" . $db_host . ";dbname=" . $db_name . ";charset=" . $db_charset;



try {
    // Instanciamos la clase PDO
    $db = new PDO($db_dsn, $db_user, $db_pass);

} catch (Exception $e) {
    //Manejo del error
    echo "Error al conectar con la base de datos. Por favor, intenta de nuevo mas tarde. ";
    //echo "El error es: " . $e->getMessage();

}


