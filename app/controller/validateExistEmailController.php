<?php
require_once "../controller/UserController.php";

try {
    if ($_POST) {
        $correo = (isset($_POST['email']) ? $_POST['email'] : "");

        $user = new UserController();
        $check = $user->getUserValidate("correo", $correo);

        if ($check) {
            echo 202;
            die();
        }
        echo 200;
        return;
    }
} catch (PDOException $error) {
    $response = ['Error' => 'error' . $error->getMessage()];
    echo "<pre>";
    print_r([
        'ERROR VALIDATE EMAIL' => json_encode($response)
    ]);
    echo "</pre>";
    die();
}

?>