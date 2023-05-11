<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planchaduria Loma Linda</title>
    <link rel="stylesheet" href="CSS/nuevoestilo.css">
</head>
<body>

    <header>
        <nav>
            <img src="Images/logo.jpeg" alt="logo">
            <ul>
                <li><a href="pagprincipal.php">Pagina Principal</a></li>
                <li><a href="HTML/servicios.html">Servicios</a></li>
                <li><a href="#">Ubicacion</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
            <div>
                <form action="Includes/login.inc.php" method="post">
                    <input type="text" name="mailuid" placeholder="Username/E-Mail">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="login-submit">Login</button>
                </form>
                
            </div>
        </nav>
        
    </header>
    <h1>Planchaduria Lomalinda</h1>
    <h2>Registrarse</h2>
    <form action="Includes/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username">
        <input type="text" name="mail" placeholder="E-mail">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwd-repeat" placeholder="Repeat password">
        <button type="submit" name="signup-submit">Registrarse</button>
    </form>

</body>
</html>
