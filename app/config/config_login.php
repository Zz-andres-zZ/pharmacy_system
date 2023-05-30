<?php
session_start();

function check_login() {
    if (!isset($_SESSION['user_data'])) {
        header("Location:login");
    }
}
