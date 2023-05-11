<?php include("template/cabecera.php"); ?>
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1 class="display-3">Bienvenido <?php echo $nombreUsuario; ?></h1>
                    <p class="lead">Vamos a administrar nuestros productos en el sitio web</p>
                    <hr class="my-2">
                    <p>En esta pagina es para un administrador, si usted no es administrador, por favor cierre sesion</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="seccion/productos.php" role="button">Administrar productos</a>
                        <a class="btn btn-primary btn-lg" href="../../pedidosadmin.php" role="button">Ver Pedidos</a>
                        <a class="btn btn-primary btn-lg" href="../../verclientesadmin.php" role="button">Ver Clientes</a>
                    </p>
                </div>
            </div>

<?php include("template/pie.php"); ?>
            
   