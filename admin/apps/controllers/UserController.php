<?php

require_once "../model/Database.php";

class UserController {
    
    public $usuario;
    public $nombre;
    public $tipo_usuario;
    public $password;

    public function __construct() {}
    public function __clone() {}

    public function setUserDatabase() {
        try {
            $instance = new Database();

            $db = $instance->conection();
            $stmt = $db->prepare("INSERT INTO `	usuarios_admin` (`usuario`, `nombre`, `tipo_usuario`, `password`,) VALUES (:usuario, :nombre, :tipo_usuario, :password)");

            $stmt->bindParam(":username", $this->usuario);
            $stmt->bindParam(":nombre", $this->nombre);
            $stmt->bindParam(":tipo_usuario", $this->tipo_usuario);
            $stmt->bindParam(":password", $this->password);
            $stmt->execute();

        } catch (PDOException $error) {
            $response = ['Error' => 'error' . $error->getMessage()];
            echo "<pre>";
            print_r([
                'ERROR INGRESAR USUARIO' => json_encode($response)
            ]);
            echo "</pre>";
            die();
        }

        return 200;
    }

    public function getUserDatabase() {
        $instance = new Database();

        $db = $instance->conection();
        $result = $db->prepare(" SELECT * FROM `usuarios_admin` WHERE `usuario`=:usuario AND `password`=:password AND `status` = 1");
        $result->bindParam(":usuario", $this->usuario);
        $result->bindParam(":password", $this->password);

        $result->execute();
        $result = $result->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getUserValidate($by, $value) {
        $instance = new Database();

        $db = $instance->conection();
        $result = $db->prepare("SELECT * FROM `usuarios_admin` WHERE $by = '$value' and `status` = 1");
        $result->execute();
        $result = $result->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }
    
    public function getDatabase() {
        $instance = new Database();

        $db = $instance->conection();
        $result = $db->prepare("SELECT * FROM `usuarios_admin`");
        $result->execute();
        $result->fetchAll(PDO::FETCH_ASSOC);
    }
}
