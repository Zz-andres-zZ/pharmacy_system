<?php

require_once("user_controller.php");
session_unset();

if ($_POST) {
    
    $email = (isset($_POST['email']) ? $_POST['email'] : "" );
    $password = (isset($_POST['password']) ? $_POST['password'] : "" );

    $user = getUser($email, $password);

    if ($user) {
        $_SESSION['usuario'] = $user;
        $_SESSION['login'] = true;
        header("Location:../system/");
    }
    header("Location:../../system/auth/");
    echo "Datos incorrectos";
}
