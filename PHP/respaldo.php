<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

    <header>
        <nav>
            <a href="#">
                <img src="Images/logo.jpeg" alt="logo">
            </a>
            <ul>
                <li><a href="pagprincipal.php">Pagina Principal</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Ubicacion</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
            <div>
                <form action="Includes/login.inc.php" method="post">
                    <input type="text" name="mailuid" placeholder="Username/E-Mail">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="login-submit">Login</button>
                </form>
                <a href="signup.php">Registrarse</a>
                <form action="Includes/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit">Cerrar sesion</button>
                </form>
            </div>
        </nav>
    </header>
</body>
</html>

---------


/* Estilos generales */

body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

a {
    text-decoration: none;
}

header {
    background-color: #fff;
    box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

li {
    margin: 0 10px;
}

li a {
    color: #333;
    font-weight: bold;
}

/* Estilos para formulario de login */

form {
    display: flex;
    align-items: center;
}

input[type="text"],
input[type="password"] {
    padding: 10px;
    margin-right: 10px;
    border-radius: 5px;
    border: none;
}

button {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0062cc;
}

/* Estilos para botón de cerrar sesión */

form:last-of-type {
    display: flex;
    align-items: center;
    margin-left: 0px;
}

form:last-of-type button {
    background-color: #dc3545;
}

form:last-of-type button:hover {
    background-color: #c82333;
    color: #fff;
}

/* Estilos para imagen de logo */

nav img {
    max-height: 100px;
    margin-right: 100px;
}
