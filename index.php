<!-- Commits: 02 -->

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>VICJO</title>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="IMG/ICON.png" type="icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="CSS/style.css" rel="stylesheet">
        <script src="JS/login.js"></script>
    </head>
    <body>
        <header">
            <div class="login">
                <form action="send.php" method="get">
                    <fieldset>
                        <legend>Iniciar Sesión</legend>
                        <div class="input-container">
                            <label for="username">Usuario:</label>
                            <input type="text" id="username" name="username" required>
                        </div>
                        <div class="input-container">
                            <label for="password">Contraseña:</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn-login">Iniciar sesión</button>

                        <button type="button" class="btn-register" value="" onclick="location.href='register.html'">Registrarse</button>
                    </fieldset>
                </form>
            </div>
        </header>
        <?php
            include("send.php")
        ?>

        <script>
            function myFunction() {
                window.location.href = "https://localhost/";
            }
        </script>
    </body>
</html>