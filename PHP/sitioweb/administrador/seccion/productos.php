<?php include("../template/cabecera.php"); ?>
<?php

$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";

$txtImagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";



include("../config/bd.php"); 

switch($accion){

    case"Agregar":
        $sentenciaSQL = $conexion->prepare("INSERT INTO productos (nombre, imagen) VALUES (:nombre, :imagen);");
        $sentenciaSQL->bindParam(':nombre', $txtNombre);

        $fecha=new DateTime();
        $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";

        $tmpImagen=$_FILES["txtImagen"]["tmp_name"];

        if ($tmpImagen!="") {
            move_uploaded_file($tmpImagen,"../../img/".$nombreArchivo);
        }

        $sentenciaSQL->bindParam(':imagen', $nombreArchivo);
        $sentenciaSQL->execute();

        header("Location:productos.php");
        break;

    case"Modificar":
        //echo "Presionado boton modificar";

        $sentenciaSQL = $conexion->prepare("UPDATE productos SET nombre = :nombre WHERE id=:id");
        $sentenciaSQL->bindParam(':nombre', $txtNombre);
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();

        if ($txtImagen!="") {

            $fecha=new DateTime();
            $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";
            $tmpImagen=$_FILES["txtImagen"]["tmp_name"];

            move_uploaded_file($tmpImagen,"../../img/".$nombreArchivo);


                $sentenciaSQL = $conexion->prepare("SELECT imagen FROM productos WHERE id=:id");
                $sentenciaSQL->bindParam(':id', $txtID);
                $sentenciaSQL->execute();
                $producto=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
        
                if(isset($producto["imagen"]) && ($producto["imagen"]!="imagen.jpg") ){
                    if (file_exists("../../img/".$producto["imagen"])) {
                        unlink("../../img/".$producto["imagen"]);
                    }
                }

            $sentenciaSQL = $conexion->prepare("UPDATE productos SET imagen = :imagen WHERE id=:id");
            $sentenciaSQL->bindParam(':imagen', $txtImagen);
            $sentenciaSQL->bindParam(':id', $txtID);
            $sentenciaSQL->execute();

            
        }
        
        header("Location:productos.php");
        break;

    case"Cancelar":
            header("Location:productos.php");
        break;

    case"Seleccionar":
        //echo "Presionado boton Seleccionar";
        $sentenciaSQL = $conexion->prepare("SELECT * FROM productos WHERE id=:id");
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();
        $producto=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

        $txtNombre=$producto['nombre'];
        $txtImagen=$producto['imagen'];

        break;

    case"Borrar":
        //echo "Presionado boton Borrar";
        $sentenciaSQL = $conexion->prepare("SELECT imagen FROM productos WHERE id=:id");
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();
        $producto=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

        if(isset($producto["imagen"]) && ($producto["imagen"]!="imagen.jpg") ){
            if (file_exists("../../img/".$producto["imagen"])) {
                unlink("../../img/".$producto["imagen"]);
            }
        }


        $sentenciaSQL = $conexion->prepare("DELETE FROM productos WHERE id=:id");
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();

        header("Location:productos.php");
        break;

}
$sentenciaSQL = $conexion->prepare("SELECT * FROM productos");
$sentenciaSQL->execute();
$listaProductos=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
include("../template/cabecera.php");
?>
<div class="col-md-5">


    <div class="card">
        <div class="card-header">
            Datos de los Servicios
        </div>
        <div class="card-body">
            

            <form method="POST" enctype="multipart/form-data">

                <div class = "form-group">
                <label for="textID">ID:</label>
                <input type="text" required readonly class="form-control" value="<?php echo $txtID;?>" name="txtID" id="txtID" placeholder="ID">
                </div>

                <div class = "form-group">
                <label for="textNombre">Nombre:</label>
                <input type="text" required class="form-control" value="<?php echo $txtNombre;?>" name="txtNombre" id="txtNombre" placeholder="Nombre del producto">
                </div>

                <div class = "form-group">
                <label for="textNombre">Imagen:</label>

               <br/>

                <?php if ($txtImagen!="") { ?>

                    <img class="img-thumbnail rounded" src="../../img/<?php echo $txtImagen; ?> " width="50" alt="" srcset="">

                <?php } ?>
                <input type="file"  class="form-control" name="txtImagen" id="txtImagen" placeholder="Imagen">
                </div>


                <div class="btn-group" role="group" aria-label="">
                    <button type="submit" name="accion" <?php echo($accion=="Seleccionar")?"disabled":""; ?> value="Agregar" class="btn btn-success">Agregar</button>
                    <button type="submit" name="accion" <?php echo($accion!=="Seleccionar")?"disabled":""; ?> value="Modificar" class="btn btn-warning">Modificar</button>
                    <button type="submit" name="accion" <?php echo($accion!=="Seleccionar")?"disabled":""; ?> value="Cancelar" class="btn btn-info">Cancelar</button>

                    <a class="nav-item nav-link" href="../inicio.php">Volver</a>
                </div>


            </form>
        </div>
    </div>

    
    
    
</div>

<div class="col-md-7">

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listaProductos as $producto) { ?>
            <tr>
                <td> <?php echo $producto['id']; ?> </td>
                <td> <?php echo $producto['nombre']; ?> </td>
                <td> 
                    <img class="img-thumbnail rounded" src="../../img/<?php echo $producto['imagen']; ?> " width="50" alt="" srcset="">

                    
                </td>

                <td>
                    
                    <form method="post">

                        <input type="hidden" name="txtID" id="txtID" value=" <?php echo $producto['id']; ?>">
                        
                        <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary" />

                        <input type="submit" name="accion" value="Borrar" class="btn btn-danger" />
                        
                        

                    </form>

                </td>

            </tr>
            <?php } ?>
        </tbody>
    </table>

</div>
