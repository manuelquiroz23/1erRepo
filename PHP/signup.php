<?php  
    require "header.php"
?>
        <main>
         <div class="wrapper-main">
          <section class="section-default">
            <h1>Registrarse</h1>
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
                else if($_GET['signup']=="success"){
                    echo '<p class="signuperror">Iniciaste Sesion</p>';
                }

            }
    
            ?>
            <form class="from-sginup" action="Includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Nombre de Usuario">
                <input type="text" name="mail" placeholder="Correo Electronico">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwd-repeat" placeholder="Repita la Password">
                <button type="submit" name="signup-submit">Registrarse</button>
            </form>
          </section>
         </div>
        </main>
<?php 
    require "footer.php"
?>