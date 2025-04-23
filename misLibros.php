<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
    exit;
}
include("conexion.php");

$id_usuario = $_SESSION["id_usuario"];
$sql = "SELECT libros.titulo, libros.autor, libros.archivo 
        FROM mis_libros 
        JOIN libros ON mis_libros.id_libro = libros.id 
        WHERE mis_libros.id_usuario = $id_usuario";
$resultado = $conexion->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Libros - Biblioteca</title>
    <link rel="stylesheet" href="css/estilos.css">
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
        <h1>Mis Libros</h1>

        <div class="tab">
            <a href="favoritos.php" class="tablinks">Libros Favoritos</a>
            <a href="descargados.php" class="tablinks">Libros Descargados</a>
        </div>

        <div class="libros">
        <?php
        if ($resultado->num_rows > 0) {
            while ($libro = $resultado->fetch_assoc()) {
                echo "<div class='libro'>";
                echo "<h3>" . htmlspecialchars($libro['titulo']) . "</h3>";
                echo "<p>Autor: " . htmlspecialchars($libro['autor']) . "</p>";
                echo "<a href='libros/" . urlencode($libro['archivo']) . "' download>📥 Descargar</a>";
                echo "</div>";
            }
        } else {
            echo "<p>No has descargado libros aún.</p>";
        }
        ?>
        </div>
    </div>

    <script src="js/misLibros.js"></script>
</body>
</html>