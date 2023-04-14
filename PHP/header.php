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
                    <button type="submit" name=login-submit>Login</button>
                </form>
                <a href="signup.php">Registrarse</a>
                <form action="Includes/logout.inc.php" method="post">
                    <button type="submit" name=logout-submit>Cerrar sesion</button>
                </form>
            </div>
        </nav>
    </header>
    
</body>
</html>