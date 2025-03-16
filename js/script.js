document.getElementById('formulario-login').addEventListener('submit', function (e) {
    e.preventDefault();

    const usuario = document.getElementById('usuario').value;
    const contrasena = document.getElementById('contrasena').value;

    // Simulación de validación (usuario: "admin", contraseña: "1234")
    if (usuario === 'admin' && contrasena === '1234') {
        // Redirigir a la página principal
        window.location.href = 'inicio.html';
    } else {
        // Mostrar mensaje de error
        document.getElementById('mensaje-error').innerText = 'Usuario o contraseña incorrectos.';
    }
});