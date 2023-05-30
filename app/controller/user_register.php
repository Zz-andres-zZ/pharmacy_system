<?php

require_once("../model/conexion.php");
require_once("user_controller.php");

session_unset();

if ($_POST) {
    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['direction']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['password']) >= 1
    ) {

        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $direction = trim($_POST['direction']);
        $phone = trim($_POST['phone']);
        $password = trim($_POST['password']);

        $consulta = "INSERT INTO usuarios (nombre, correo, telefono, direccion, password) VALUES ('$name', '$email', '$phone', '$direction', '$password')";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
            $user = getUser($email, $password);
            $_SESSION['usuario'] = $user;
            $_SESSION['login'] = true;
            header("location:../../system/");
?>
        <?php } else { ?>
            <h3 class="error">Ocurrio un error </h3>
        <?php }
    } else {
        ?>
        <h3 class="error"> Llena todos los campos</h3>
<?php }
}

?>