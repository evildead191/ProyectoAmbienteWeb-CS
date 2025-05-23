<!DOCTYPE html>
<html lang="es">

<head>
    <title>Configuración - Biblioteca Rural</title>
    <link rel="stylesheet" href="css/configuracion.css">
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
        <h1 class="text-center">Configuración</h1>
        
        <form id="configuracion">
            <h2>Opciones de Configuración</h2>

            <div class="perfil">
                <label>Perfil de Usuario:</label>
                <button type="button" class="btn" id="btn-registrar">Registrar</button>
                <button type="button" class="btn" id="btn-iniciarSesion">Iniciar Sesión</button>
            </div>

            <div class="descargas">
                <label for="descargas">Descargas:</label>
                <select id="descargas" class="form-control">
                    <option value="auto">Automáticas</option>
                    <option value="manual">Manuales</option>
                </select>
            </div>

            <div class="progreso-lectura">
                <label>Progreso de Lectura:</label>
                <button type="button" class="btn" id="btnHistorial">Ver Historial</button>
            </div>

            <div class="soporte">
                <label>Soporte y Ayuda:</label>
                <button type="button" class="btn" id="btnSoporte">Ir a Soporte</button>
            </div>

            <div class="restablecer">
                <label>Restablecer Configuración:</label>
                <button type="button" id="btnRestablecer" class="btn btn-warning">Restablecer</button>
            </div>
            
            <button type="submit" class="btn">Guardar Configuración</button>
        </form>
    </div>

</body>

</html>
