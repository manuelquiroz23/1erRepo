<?php include("template/cabecera.php"); ?>

<?php include("sitioweb/administrador/config/bd.php"); 
$sentenciaSQL = $conexion->prepare("SELECT * FROM productos");
$sentenciaSQL->execute();
$listaProductos=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>
<?php foreach($listaProductos as $producto){ ?>
<div class="col-md-3">
    <li><a href="header.php">Cerrar Sesion</a></li>
    <div class="card">
    <img class="card-img-top" src="./img/<?php echo $producto['imagen'];?>" alt="">
    <div class="card-body">
        <h4 class="card-title"><?php echo $producto['nombre'];?></h4>
        <a name="" id="" class="btn btn-primary" href="levantarpedido.php" role="button">Ver mas</a>
    </div>
    </div>
</div>
<?php } ?>




 

<?php include("template/pie.php"); ?>