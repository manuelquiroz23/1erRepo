<?php  
    require "header.php"
?>
        <main>
         <div class="wrapper-main">
          <section class="section-default">
            <h1>Registrarse</h1>
            <form action="Includes/registro.inc.php" method="post">
                <input type="text" name="uid" placeholder="Nombre de Usuario">
                <input type="text" name="mail" placeholder="Correo Electronico">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwd-repeat" placeholder="Repita la Password">
                <button type="submit" name="Confirmar Registro">Registrarse</button>
            </form>
          </section>
         </div>
        </main>
<?php 
    require "footer.php"
?>