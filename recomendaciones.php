<!DOCTYPE html>
<html lang="es">

<head>
    <title>Preferencias - Biblioteca Rural</title>
    <link rel="stylesheet" href="css/preferencias.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Preferencias</h1>
        
        <form id="form-preferencias" method="post" action="guardar_preferencias.php">
            <h2>Configuración de Usuario</h2>
            
            <div class="Tema">
                <label for="tema">Seleccionar Tema:</label>
                <select id="tema" name="tema" class="form-control">
                    <option value="claro">Claro</option>
                    <option value="oscuro">Oscuro</option>
                </select>
            </div>

            <div class="Genero">
                <label for="generos">Géneros Literarios Preferidos:</label>
                <select id="generos" name="generos" class="form-control" multiple>
                    <option value="fantasia">Fantasía</option>
                    <option value="ciencia_ficcion">Ciencia Ficción</option>
                    <option value="misterio">Misterio</option>
                    <option value="historia">Historia</option>
                    <option value="romance">Romance</option>
                    <option value="aventura">Aventura</option>
                    <option value="terror">Terror</option>
                </select>
            </div>

            <div class="Tematica">
                <label for="tematicas">Temáticas de Interés:</label>
                <select id="tematicas" name="tematicas" class="form-control" multiple>
                    <option value="filosofia">Filosofía</option>
                    <option value="psicologia">Psicología</option>
                    <option value="tecnologia">Tecnología</option>
                    <option value="arte">Arte</option>
                    <option value="ciencia">Ciencia</option>
                </select>
            </div>

            <div class="Autor">
                <label for="autores">Autoras y Autores Favoritos:</label>
                <input type="text" id="autores" name="autores" class="form-control" placeholder="Escriba el nombre del autor@">
            </div>

            <div class="Estilos">
                <label for="estilo-lectura">Estilo de Lectura:</label>
                <select id="estilo-lectura" name="estilo_lectura" class="form-control">
                    <option value="digital">Digital</option>
                    <option value="fisico">Físico</option>
                    <option value="ambos">Ambos</option>
                </select>
            </div>

            <div class="ordenarPor">
                <label for="ordenar">Ordenar libros por:</label>
                <select id="ordenar" name="ordenar" class="form-control">
                    <option value="titulo">Título</option>
                    <option value="autor">Autor</option>
                    <option value="genero">Género</option>
                    <option value="fecha">Fecha de publicación</option>
                </select>
            </div>

            <div class="notificaciones">
                <label for="notificaciones">Notificaciones:</label>
                <input type="checkbox" id="notificaciones" name="notificaciones" value="1" checked>
                <label for="notificaciones">Activar Notificaciones</label>
            </div>
            
            <button type="submit" class="btn btn-primary">Guardar Preferencias</button>
        </form>
    </div>

    <?php
  
    ?>
</body>

</html>