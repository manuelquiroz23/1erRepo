<?php

if(isset($_POST['login-submit'])){

    require 'dbh.inc.php';

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if(empty($mailuid) || empty($password)) {
        header("Location: ../header.php?error=emptyfields");
        exit(); 
    }
    else {
        $sql = "SELECT * FROM clientes WHERE uIdClientes = ? OR CorreoCliente = ?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../header.php?error=sqlerror");
            exit(); 
        }
        else {
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            
            if($row = mysqli_fetch_assoc($result)){
                $pwdCheck = password_verify($password, $row['PasswordCliente']);
                
                if($pwdCheck == false){ 
                    header("Location: ../header.php?error=wrongpwd");
                    exit(); 
                }
                else if($pwdCheck == true){
                    session_start();
                    $_SESSION['ClienteId'] = $row['Id_Cliente'];
                    $_SESSION['ClienteuId'] = $row['uIdClientes'];

                    header("Location: ../indexcliente.php");
                    exit(); 
                }
                else {
                    header("Location: ../header.php?error=wrongpwd");
                    exit(); 
                }
            }
            else {
                header("Location: ../header.php?error=nouser");
                exit(); 
            }

        }
    }
}
else {
    header("Location: ../index.php");
    exit(); 
}