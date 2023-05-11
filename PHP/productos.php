<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Planchaduria Loma Linda</title>
  <link rel="stylesheet" href="estilos.css">
    <style>
        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: #f2f2f2;
            padding: 10px;
        }
    </style>
</head>
<body>
  <header>
    
  </header>
  
  <main>
    <?php include("template/cabecera.php"); ?>
    
    <?php include("sitioweb/administrador/config/bd.php"); 
    $sentenciaSQL = $conexion->prepare("SELECT * FROM productos");
    $sentenciaSQL->execute();
    $listaProductos=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
    
    ?>
    <?php foreach($listaProductos as $producto){ ?>
    <div class="col-md-3">
        <div class="card">
        <img class="card-img-top" src="./img/<?php echo $producto['imagen'];?>" alt="">
        <div class="card-body">
            <h4 class="card-title"><?php echo $producto['nombre'];?></h4>
            <a name="" id="" class="btn btn-primary" href="levantarpedido.php" role="button">Hacer Pedido</a>
        </div>
        </div>
    </div>
    <?php } ?>
    
  </main>
  
  <footer>
    <!-- Aquí va el código del pie de página -->
    <?php include("template/pie.php"); ?>
  </footer>
</body>
</html>
