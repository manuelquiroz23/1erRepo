<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planchaduria Loma Linda</title>
    <link rel="stylesheet" href="CSS/estiloheader.css">
    <style>
        #username-input.invalid {
        border: 1px solid red;
        }
        #email-input.invalid {
        border: 1px solid red;
        }
        #password-input.invalid {
        border: 1px solid red;
        }
        #repeat-password-input.invalid {
        border: 1px solid red;
        }
    </style>
</head>
<body>

    <header>
        <nav>
            <img src="Images/logo.jpeg" alt="logo">
            <ul>
                <li><a href="pagprincipal.php">Pagina Principal</a></li>
                <li><a href="HTML/servicios.html">Servicios</a></li>
                <li><a href="https://goo.gl/maps/VwwQf88H7ibsYzG46">Ubicacion</a></li>
            </ul>
            <div>
                <form action="Includes/login.inc.php" method="post">
                    <input type="text" name="mailuid" id="username-input" placeholder="Username/E-Mail">
                    <input type="password" name="pwd" id="password-input" placeholder="Password">
                    <button type="submit" name="login-submit">Login</button>
                </form>
                
            </div>
        </nav>
        
    </header>
    <h1>Planchaduria Lomalinda</h1>
    <h2>Registrarse</h2>
    <form action="Includes/signup.inc.php" method="post">
        <input type="text" name="uid" id="username-input" placeholder="Username">
        <input type="text" name="mail" id="email-input" placeholder="E-mail">
        <input type="password" name="pwd" id="password-input" placeholder="Password">
        <input type="password" name="pwd-repeat" id="repeat-password-input" placeholder="Repeat password">
        <button type="submit" name="signup-submit">Registrarse</button>
    </form>

    <script>
        // seleccione los campos de entrada de usuario, email, contraseña y repetir contraseña
        var usernameInput = document.getElementById('username-input');
        var emailInput = document.getElementById('email-input');
        var passwordInput = document.getElementById('password-input');
        var repeatPasswordInput = document.getElementById('repeat-password-input');

        // agregue un detector de eventos 'blur' a cada campo de entrada
        usernameInput.addEventListener('blur', checkField);
        emailInput.addEventListener('blur', checkField);
        passwordInput.addEventListener('blur', checkField);
        repeatPasswordInput.addEventListener('blur', checkField);

        function checkField() {
            // verifique si el valor del campo es una cadena vacía o solo contiene espacios en blanco
            if (this.value.trim() === '') {
                // si es así, agregue la clase 'invalid' al campo de entrada
                this.classList.add('invalid');
            } else {
                // si no, asegúrese de que la clase 'invalid' se elimine del campo de entrada
                this.classList.remove('invalid');
            }
        }
    </script>

</body>
</html>
