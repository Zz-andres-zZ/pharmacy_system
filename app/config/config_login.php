<?php

function check_login() {
    if (!isset($_SESSION['usuario'])) {
        header("Location:login");
    }
}

?>