<?php  
    require "header.php"
?>
        <main>
         <div class="wrapper-main">
            <section class="section-default">
            <?php 
                if(isset($_SESSION['ClienteId'])){
                    echo '<p class="login-status">Cerraste Sesion</p>';
                }
                else {
                    echo'<p class="logout-status">Iniciaste Sesion</p>';
                }
            ?>
            </section>
         </div>
        </main>
<?php 
    require "footer.php"
?>