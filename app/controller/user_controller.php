<?php

function getUser($correo, $password) {

    require_once("../model/conexion.php");

    $consulta = "SELECT * FROM usuarios WHERE correo='$correo' AND password='$password' ";
    $resultado = mysqli_query($conex, $consulta);

    $data = false;

    if (mysqli_num_rows($resultado)) {
        $data = mysqli_fetch_assoc($resultado);
    }

    return $data;
}
