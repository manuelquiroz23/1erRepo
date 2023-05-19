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
        #usernameregistro-input.invalid {
        border: 1px solid red;
        }
        #email-input.invalid {
        border: 1px solid red;
        }
        #password-input.invalid {
        border: 1px solid red;
        }
        #passwordregistro-input.invalid {
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
                <li><a href="https://goo.gl/maps/VwwQf88H7ibsYzG46">Ubicacion</a></li>
            </ul>
            <div>
                <form action="Includes/login.inc.php" method="post" onsubmit="return validateLoginForm()">
                    <input type="text" name="mailuid" id="username-input" placeholder="Username/E-Mail">
                    <input type="password" name="pwd" id="password-input" placeholder="Password">
                    <button type="submit" name="login-submit">Login</button>
                </form>
                
            </div>
        </nav>
        
    </header>
    <h1>Planchaduria Lomalinda</h1>
    <h2>Registrarse</h2>
    <form action="Includes/signup.inc.php" method="post" onsubmit="return validateSignupForm()">
    <input type="text" name="uid" id="usernameregistro-input" placeholder="Username">
    <input type="text" name="mail" id="email-input" placeholder="E-mail">
    <input type="password" name="pwd" id="passwordregistro-input" placeholder="Password">
    <input type="password" name="pwd-repeat" id="repeat-password-input" placeholder="Repeat password">
    <button type="submit" name="signup-submit">Registrarse</button>
</form>
<script>
    function validateSignupForm() {
        var username = document.getElementById("usernameregistro-input").value;
        var password = document.getElementById("passwordregistro-input").value;

        if (username.includes(" ")) {
            showNotification("El nombre de usuario no puede contener espacios.");
            return false; // Cancela el envío del formulario de registro
        }

        if (password.length < 5) {
            showNotification("La contraseña debe tener al menos 5 caracteres.");
            return false; // Cancela el envío del formulario de registro
        }

        return true; // Permite el envío del formulario de registro
    }

    function validateLoginForm() {
        var username = document.getElementById("username-input").value;
        var password = document.getElementById("password-input").value;

        if (username.trim() === "" || password.trim() === "") {
            showNotification("Ingrese un nombre de usuario/correo electrónico y una contraseña válidos.");
            return false; // Cancela el envío del formulario de inicio de sesión
        }

    return true;// Permite el envío del formulario de inicio de sesión
    }

    function showNotification(message) {
        var notification = document.createElement("div");
        notification.className = "notification";
        notification.textContent = message;
        document.body.appendChild(notification);
        setTimeout(function() {
            notification.style.display = "none";
        }, 3000);
    }

    function showEmergencyNotification(message) {
        var emergencyNotification = document.createElement("div");
        emergencyNotification.className = "emergency-notification";
        emergencyNotification.textContent = message;
        document.body.appendChild(emergencyNotification);
        setTimeout(function() {
            emergencyNotification.style.display = "none";
        }, 5000);
    }

    // Esta función es solo para simular un inicio de sesión exitoso.
    // Debes reemplazarla con tu lógica de verificación de inicio de sesión en el servidor.
    function loginSuccessful() {
        // Simulamos un inicio de sesión exitoso si el nombre de usuario es "admin" y la contraseña es "password".
        var username = document.getElementById("username-input").value;
        var password = document.getElementById("password-input").value;
        return username === "admin" && password === "password";
    }
</script>

<style>
    .notification {
        position: fixed;
        top: 10px;
        right: 10px;
        padding: 10px;
        background-color: #ff0000;
        color: #fff;
        font-size: 16px;
    }

    .emergency-notification {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 20px;
        background-color: #ff0000;
        color: #fff;
        font-size: 20px;
        text-align: center;
    }
</style>

    <script>
        // seleccione los campos de entrada de usuario, email, contraseña y repetir contraseña
        var usernameInput = document.getElementById('username-input');
        var usernameregistroInput = document.getElementById('usernameregistro-input');
        var emailInput = document.getElementById('email-input');
        var passwordInput = document.getElementById('password-input');
        var passwordregistroInput = document.getElementById('passwordregistro-input');
        var repeatPasswordInput = document.getElementById('repeat-password-input');

        // agregue un detector de eventos 'blur' a cada campo de entrada
        usernameInput.addEventListener('blur', checkField);
        usernameregistroInput.addEventListener('blur', checkField);
        emailInput.addEventListener('blur', checkField);
        passwordInput.addEventListener('blur', checkField);
        passwordregistroInput.addEventListener('blur', checkField);
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
