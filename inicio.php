<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Biblioteca Rural: El Rincón del Libro</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="inicio.php">Inicio</a></li>
            <li><a href="biblioteca.php">Biblioteca</a></li>
            <li><a href="ayuda.php">Ayuda y Soporte</a></li>
            <li><a href="configuracion.php">Configuración</a></li>
        </ul>
    </nav>

    <div class="container">
        <h1>Bienvenido a la Biblioteca Rural: El Rincón del Libro</h1>
        <img src="images/Biblioteca.avif" alt="Biblioteca Rural" class="centered-image">
        <p>Explora nuestra colección de libros y disfruta de la lectura sin necesidad de internet.</p>
    </div>

    <div class="container">
        <h1>Bienvenido a la Biblioteca Rural</h1>
        <p>La Biblioteca Rural es una iniciativa diseñada para llevar el conocimiento y la cultura a comunidades 
        que tienen acceso limitado a internet o recursos educativos...</p>
    </div>
</body>
</html>
