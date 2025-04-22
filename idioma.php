<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar idioma - Biblioteca Rural: El Rincón del Libro</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="inicio.html">Inicio</a></li>
            <li><a href="biblioteca.html">Biblioteca</a></li>
            <li><a href="ayuda.html">Ayuda y Soporte</a></li>
            <li><a href="configuracion.html">Configuración</a></li>
            <li><a href="cambiar-idioma.html">Cambiar Idioma</a></li>
        </ul>
    </nav>

    <div class="container">
        <h1>Cambiar Idioma</h1>
        <p>Seleccione el idioma para el sitio web:</p>
        
        <!-- Opciones interactivas -->
        <div class="section">
            <input type="radio" id="espanol" name="idioma" checked>
            <label for="espanol">Español</label>

            <input type="radio" id="ingles" name="idioma">
            <label for="ingles">English</label>

            <div class="section-content">
                <div class="content" id="content-espanol">
                    <h2>Idioma: Español</h2>
                    <p>Has seleccionado Español. La página se actualizará automáticamente.</p>
                </div>

                <div class="content" id="content-ingles">
                    <h2>Language: English</h2>
                    <p>You have selected English. The page will update automatically.</p>
                </div>
                <div class="image-container">
                    <img src="images/Idiomas.png" alt="Idioma" class="idioma-image">
                </div>
            </div>
        </div>
    </div>
</body>
</html>