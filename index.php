<?php
session_start();
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    $sql = "SELECT * FROM usuarios WHERE email = '$usuario'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows === 1) {
        $fila = $resultado->fetch_assoc();
        if (password_verify($contrasena, $fila["contrasena"])) {
            $_SESSION["usuario"] = $fila["nombre"];
            $_SESSION["id_usuario"] = $fila["id"];
            header("Location: inicio.php");
            exit;
        } else {
            $mensaje = "Contraseña incorrecta.";
        }
    } else {
        $mensaje = "Usuario no encontrado.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Biblioteca Rural: El Rincón del Libro</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Bienvenido a la Biblioteca Rural: El Rincón del Libro</h1>
        <p>Explora nuestra colección de libros y disfruta de la lectura sin necesidad de internet.</p>
    </div>

    <div class="container">
        <h1>Iniciar Sesión</h1>
        <form id="formulario-login" method="post" action="index.php">
            <div class="form-group">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </form>

        <?php if (isset($mensaje)) echo "<p class='text-danger'>$mensaje</p>"; ?>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
