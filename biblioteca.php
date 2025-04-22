<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
    exit;
}
include("conexion.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca - Biblioteca Rural: El Rincón del Libro</title>
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
        <h1>Biblioteca</h1>
        <ul>
            <li><a href="recomendaciones.php">Recomendaciones Semanales</a></li>
            <li><a href="descargarLibros.php">Descargar Libros</a></li>
            <li><a href="misLibros.php">Mis Libros</a></li>
        </ul>

        <h2>Libros Disponibles</h2>
        <div class="libros">
            <?php
            $sql = "SELECT * FROM libros";
            $resultado = $conexion->query($sql);

            if ($resultado->num_rows > 0) {
                while ($libro = $resultado->fetch_assoc()) {
                    echo "<div class='libro'>";
                    echo "<h3>" . htmlspecialchars($libro['titulo']) . "</h3>";
                    echo "<p><strong>Autor:</strong> " . htmlspecialchars($libro['autor']) . "</p>";
                    echo "<a href='libros/" . urlencode($libro['archivo']) . "' download>📥 Descargar</a>";
                    echo "</div>";
                }
            } else {
                echo "<p>No hay libros disponibles en este momento.</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>