<?php  
    require "header.php"
?>

        <main>
         <div class="wrapper-main">
            <section class="section-default">
            <?php 
                if(isset($_SESSION['ClienteId'])){
                    echo '<p class="login-status">Iniciaste Sesion</p>';
                }
                else {
                    echo'<p class="logout-status">Cerraste Sesion</p>';
                }
            ?>
            </section>
         </div>
        </main>
<?php 
    require "footer.php"
?>