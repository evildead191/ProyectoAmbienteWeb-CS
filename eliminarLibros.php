<!DOCTYPE html>
<html lang="es">

<head>
    <title>Eliminar Libros</title>
    <link rel="stylesheet" href="css/eliminarLibros.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Eliminar Libros</h1>
        
        <section class="busqueda">
            <h2>Buscar Libro</h2>
            <input type="text" 
            id="buscar-libro" 
            class="form-control" 
            placeholder="Buscar por título, autor o género">
        </section>

        <div class="listaLibros">
            <h2>Libros Disponibles</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Género</th>
                        <th>Año</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody id="tablaLibros">
                    <tr>
                        <td>El principito</td>
                        <td>Antoine de Saint-Exupery</td>
                        <td>Novela</td>
                        <td>1943</td>
                        <td><button class="btn-eliminar">Eliminar</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
