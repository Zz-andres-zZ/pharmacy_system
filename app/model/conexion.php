<?php

try {
    $conex = mysqli_connect("localhost", "root", "", "pharmacy_system");

    session_start();

} catch (\Throwable $error) {
    die("ERROR CONECTION => {$error->getMessage()}");
}