<?php
require_once "../controller/UserController.php";

try {
    if ($_POST) {

        $name = (isset($_POST['name']) ? $_POST['name'] : "");
        $correo = (isset($_POST['email']) ? $_POST['email'] : "");
        $phone = (isset($_POST['phone']) ? $_POST['phone'] : "");
        $direction = (isset($_POST['direction']) ? $_POST['direction'] : "");
        $password = (isset($_POST['password']) ? $_POST['password'] : "");
        $password_encryp = hash('sha256', $password); //Password encryption 

        // INSTANCIAMOS LA CLASE DE UserController PARA PASAR DATOS DESDE EL FORMULARIO
        $user = new UserController();

        // INCRUSTAMOS DATOS DE LA CLASE UserController
        $user->name = $name;
        $user->correo = $correo;
        $user->phone = $phone;
        $user->direction = $direction;
        $user->password = $password_encryp;

        // EXECUTAR EL REGISTRO DESDE LA INSTANCIA
        $data_register = $user->setUserDatabase();

        // SI USUARIO NO EXISTE RETORNO 404
        if (!$data_register) {
            echo 404;
            die();
        }

        $_SESSION['usuario'] = $user->correo;

        echo 200;
    }
} catch (PDOException $error) {
    $response = ['Error' => 'error' . $error->getMessage()];
    echo "<pre>";
    print_r([
        'ERROR DE VALIDACION DE REGISTRO' => json_encode($response)
    ]);
    echo "</pre>";
    die();
}
