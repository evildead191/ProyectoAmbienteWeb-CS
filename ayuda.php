<!DOCTYPE html>
<html lang="es">

<head>
    <title>Ayuda y Soporte</title>
    <link rel="stylesheet" href="css/ayuda.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="inicio.html">Inicio</a></li>
            <li><a href="biblioteca.html">Biblioteca</a></li>
            <li><a href="ayuda.html">Ayuda y Soporte</a></li>
            <li><a href="configuracion.html">Configuración</a></li>
        </ul>
    </nav>

    <div class="container">
        <h1 class="text-center">Ayuda y Soporte</h1>
        
        <section class="preguntas">
            <h2>Preguntas Frecuentes</h2>
            <div class="preguntas-item">
                <h3>¿Cómo agrego un libro a la biblioteca?</h3>
                <p>Para agregar un libro, dirígete a la sección "Agregar Libro", completa los campos y presiona "Agregar".</p>
            </div>
            <div class="preguntas-item">
                <h3>¿Cómo puedo buscar un libro?</h3>
                <p>Utiliza la barra de búsqueda ingresando el título, autor o género del libro que deseas encontrar.</p>
            </div>
        </section>

        <section class="contacto">
            <h2>Contacto</h2>
            <p>Si necesitas más ayuda, envíanos un mensaje.</p>
            <form id="formulario-contacto">
                <div class="formu">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" class="form-control" required>
                </div>
                <div class="formu">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" class="form-control" required>
                </div>
                <div class="formu">
                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" class="form-control" rows="3" required></textarea>
                </div>
                <button type="enviar" class="btn btn-primary">Enviar</button>
            </form>
        </section>
    </div>
</body>

</html>
