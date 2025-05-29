function register(event) {
    event.preventDefault();

    const formData = new FormData(event.target);

    fetch('register.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Registro exitoso');
            // Redirigir o limpiar formulario si es necesario
        } else {
            alert('Error: ' + data.message);
        }
    })
    .catch(error => {
        alert('Error en la conexión');
        console.error(error);
    });
}