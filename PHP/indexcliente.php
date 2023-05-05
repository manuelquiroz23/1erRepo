<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planchaduria Loma Linda</title>
    <link rel="stylesheet" href="CSS/designindexcliente.css">
</head>
<body>

    <header>
        <nav>
            <a href="#">
                <img src="Images/logo.jpeg" alt="logo">
            </a>
            <ul>
                <li><a href="#">PLANCHADO</a></li>
                <li><a href="#">COSTURERIA</a></li>
            </ul>
            <ul>
                <li><a href="#">Nuevo pedido</a></li>
                <li><a href="#">Pedidos anteriores</a></li>
                <li><a href="#">Servicios disponibles</a></li>
                <li><a href="#">Mi perfil</a></li>
            </ul>
            <form action="Includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Cerrar sesion</button>
            </form>
        </nav>
    </header>
    
    <main>
        <?php
            include_once('layout/menu.php');
        ?>
            <?php
                $response = json_decode(file_get_contents('http://localhost/curso/49.%20carrito/terminado/api/productos/api-productos.php?categoria=juguetes'), true);
                if($response['statuscode'] == 200){
                    foreach($response['items'] as $item){
                        include('layout/items.php');
                    }
                }else{
                    echo $response['response'];
                }
            ?>
    </main>
    <script src="PHP\JS\maincliente.js"></script>
</body>
</html>
