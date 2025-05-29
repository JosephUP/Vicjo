// function register(event) {
//     event.preventDefault();

//     const formData = new FormData(event.target);

//     fetch('register.php', {
//         method: 'POST',
//         body: formData
//     })
//     .then(response => response.json())
//     .then(data => {
//         if (data.success && newPassword === repeatPassword) {
//             alert('Registro exitoso');
//             // Redirigir o limpiar formulario si es necesario
//             window.location.href = "login.html";
//         } else {
//             alert('Error: ' + data.message);
//         }
//     })
//     .catch(error => {
//         alert('Error en la conexión');
//         console.error(error);
//     });
// }

function register(event)
{
    postMessage({
        type: 'register',
        data: {
            username: document.getElementById("username").value,
            password: document.getElementById("password").value,
            repeatPassword: document.getElementById("repeatPassword").value
        }
    });
    event.preventDefault();
    return false;

}