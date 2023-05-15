<?php  
    require "header.php"
?>
<main>
    <div class="wrapper-main">
        <?php
        if(isset($_GET['error'])){
            if($_GET['error']=="emptyfields"){
                echo '<p class="signuperror">ERROR: CAMPOS VACIOS</p>';
            }
            else if($_GET['error']=="invalidmail"){
                echo '<p class="signuperror">ERROR: CORREO ELECTRONICO NO VALIDO</p>';
            }
            else if($_GET['error']=="invaliduid"){
                echo '<p class="signuperror">ERROR: NOMBRE DE USUARIO INCORRECTO</p>';
            }
            if($_GET['error']=="passwordcheck"){
                echo '<p class="signuperror">ERROR: CONTRASENAS DIFERENTES</p>';
            }
            else if($_GET['error']=="usertaken"){
                echo '<p class="signuperror">ERROR: NOMBRE DE USUARIO UTILIZADO</p>';
            }
            else if(isset($_GET['signup']) && $_GET['signup'] == 'success') {
                echo '<p class="signuperror">Iniciaste Sesion</p>';
            }
        } else if (isset($_GET['signup']) && $_GET['signup'] == 'success') {
            echo '<p class="signup-submit">El usuario se ha registrado correctamente.</p>';
        }
        ?>
        <section class="section-default">
            
        </section>
    </div>
</main>
<?php 
    require "footer.php"
?>
