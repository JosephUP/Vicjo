function loguear(event)
{

    let user = document.getElementById("username").value;
    let pass = document.getElementById("password").value;

    if (user === "Vicjo" && pass === "admin123")
    {
        window.location.href = "vicjo.html";
    }
    else
    {
        alert("Usuario o contraseña incorrectos");
    }

    return false;
}
;

document.getElementById('loginForm').addEventListener('submit', function(event) {
  event.preventDefault(); // Evitar que el formulario se envíe de forma tradicional

  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;

  //  Enviar la información al servidor
  //  Aquí puedes usar AJAX o fetch para enviar los datos al servidor
  //  (ejemplo de fetch, debes adaptarlo a tu backend):
  fetch('/login', { // Reemplazar '/login' con la ruta a tu backend
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ username: username, password: password })
  })
  .then(response => response.json())
  .then(data => {
    if (data.success) {
      //  Redireccionar o mostrar un mensaje de éxito
      window.location.href = '/dashboard'; //  Redireccionar a la página de dashboard
    } else {
      //  Mostrar un mensaje de error
      alert('Nombre de usuario o contraseña incorrectos.');
    }
  })
  .catch(error => {
    console.error('Error:', error);
    alert('Hubo un error al procesar la solicitud.');
  });
});