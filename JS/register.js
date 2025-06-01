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