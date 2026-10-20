<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>GET y POST en PHP</title> 
</head>
<body>

    <h1>Ejemplos GET y POST</h1>

    <h2>Petición GET</h2>
    <!-- Pasa la variable 'nombre' con el valor 'Juan' a través de la URL -->
    <a href="get.php?nombre=Juan">Hacer GET</a>

    <h2>Petición POST</h2>
    <!-- Envía los datos del formulario de forma oculta a post.php -->
    <form action="post.php" method="POST">
        <input type="text" name="nombre" placeholder="Escribe tu nombre" required>
        <button type="submit">Hacer POST</button>
    </form>

</body>
</html>