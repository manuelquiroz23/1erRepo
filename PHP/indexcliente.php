<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planchaduria Loma Linda</title>
    <link rel="stylesheet" href="CSS/clienteestilo.css">
</head>
<body>

    <header>
        <nav>
            <a href="#">
                <img src="Images/logo.jpeg" alt="logo">
            </a>
            <ul>
                
                <li><a href="perfil.php">Mi perfil</a></li>
                <li><a href="https://goo.gl/maps/VwwQf88H7ibsYzG46">Ubicacion</a></li>
            </ul>

            <form action="Includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Cerrar sesion</button>
            </form>
        </nav>
    </header>
    
    <main>
    <h1>Hacer Pedido</h1>
        <form action="forms/editar_pedido.php" method="post">
            <label for="nombre">Nombre completo:</label>
            <input type="text" id="nombre" name="nombre"><br>

            <label for="domicilio">Domicilio:</label>
            <input type="text" id="domicilio" name="domicilio"><br>

            <label for="piezas">Número de piezas:</label>
            <input type="number" id="piezas" name="piezas"><br>

            <label for="servicio">Servicio:</label>
            <select id="servicio" name="servicio">
                <option value="costureria">Costurería</option>
                <option value="planchado">Planchado</option>
            </select><br>

            <input type="submit" value="Confirmar Pedido">
        </form>
        
    </main>
    
</body>
</html>
