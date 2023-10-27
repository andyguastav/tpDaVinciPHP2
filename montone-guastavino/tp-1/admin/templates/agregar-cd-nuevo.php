<!DOCTYPE html>
<html>
<head>
    <title>Formulario para agregar un nuevo CD</title>
</head>
<body>
    <h2>Agregar un nuevo CD</h2>
    <form action="acciones/agregar-nuevo-cd.php" method="POST">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br><br>

        <label for="sinopsis">Sinopsis:</label>
        <textarea id="sinopsis" name="sinopsis" rows="4" required></textarea><br><br>

        <label for="precio">Precio:</label>
        <input type="text" id="precio" name="precio" required><br><br>

        <label for="imagen">Imagen</label>
        <input type="file" id="imagen" name="imagen" accept="image/*"><br><br>

        <label for="productor">Productor:</label>
        <input type="text" id="productor" name="productor" required><br><br>

        <label for="genero">Género:</label>
        <input type="text" id="genero" name="genero" required><br><br>

        <input type="submit" value="Agregar CD">
    </form>
</body>
</html>
