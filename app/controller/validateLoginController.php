<?php
require_once "../controller/UserController.php";

try {
    if ($_POST) {

        $correo = (isset($_POST['email']) ? $_POST['email'] : "");
        $password = (isset($_POST['password']) ? $_POST['password'] : "");
        $password_encryp = hash('sha256', $password); //Password encryption 

        // INSTANCIAMOS LA CLASE DE USRRCONTROLLER PARA PASAR DATOS DESDE EL FORMULARIO
        $user = new UserController();

        // INCRUSTAMOS DATOS DE LA CLASE Register
        $user->correo = $correo;
        $user->password = $password_encryp;

        // EXECUTAR LA CONSULTA DESDE LA INSTANCIA
        $data_login = $user->getUserDatabase();

        // SI USUARIO NO EXISTE RETORNO 404
        if (!$data_login) {
            echo 404;
            die();
        }

        session_start();
        $_SESSION['usuario'] = $user->correo;
        $_SESSION['user_data'] = true;

        echo 200;
    }
} catch (PDOException $error) {
    $response = ['Error' => 'error' . $error->getMessage()];
    echo "<pre>";
    print_r([
        'ERROR DE VALIDACION DE LOGIN' => json_encode($response)
    ]);
    echo "</pre>";
    die();
}
