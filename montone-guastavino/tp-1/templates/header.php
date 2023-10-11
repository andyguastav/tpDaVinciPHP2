<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Shop</title>
    <link rel="icon" href="favicon.ico" sizes="any">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script>
        // JavaScript para el menú hamburguesa
        document.addEventListener('DOMContentLoaded', function () {
        const menuToggle = document.querySelector('.menu-toggle');
        const navMenu = document.querySelector('.navbar ul');

        menuToggle.addEventListener('click', function () {
            navMenu.classList.toggle('active');
        });
    });
    </script>
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <h1>Music Shop</h1>
            <!-- menu hamburguesa -->
            <div> 
                <ul>
                    <li><a href="index.php?seccion=home" class="homeBtn">Home</a></li>
                    <li><a href="index.php?seccion=productos" class="productosBtn">Productos</a></li>
                    <li><a href="index.php?seccion=contacto" class="contactoBtn">Contacto</a></li>
                </ul>
            </div>
            <!-- navbar -->
            <div class="menu-toggle">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </nav>
    </header>
</body>