<?php
 
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modo Offline - Biblioteca Rural</title>
    <link rel="stylesheet" href="css/stylesModoOffline.css">
</head>
<body>
    <div class="container">
        <h1>Modo Offline - Biblioteca Rural</h1>
        
        <!-- Botón para activar/desactivar el modo offline -->
        <div class="offline-toggle">
            <button id="toggle-button" class="btn">Activar modo offline</button>
        </div>

        <!-- Información del estado offline (se muestra cuando se activa el botón) -->
        <div class="offline-info">
            <p>Actualmente estás desconectado de internet. No se podrá acceder a las funciones de descarga.</p>
        </div>
        
        <!-- Información del estado online (se muestra cuando se desactiva el botón) -->
        <div class="online-info">
            <p>Estás conectado a internet. Puedes acceder a todas las funciones de la biblioteca.</p>
        </div>

        <!-- Imagen relacionada con la biblioteca -->
        <div class="image-container">
            <img src="images/ModoOffline.png" alt="Biblioteca Offline" id="biblioteca-image">
        </div>
    </div>
</body>
</html>