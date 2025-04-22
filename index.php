<!DOCTYPE html>
<html lang="es">
    <div class="container">
        <h1>Bienvenido a la Biblioteca Rural: El Rincón del Libro</h1>
        <p>Explora nuestra colección de libros y disfruta de la lectura sin necesidad de internet.</p>
    </div>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Biblioteca Rural: El Rincón del Libro</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Iniciar Sesión</h1>
        <form id="formulario-login">
            <div class="form-group">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </form>
        <p id="mensaje-error" class="text-danger"></p>
    </div>

    <script src="js/script.js"></script>
</body>
</html>