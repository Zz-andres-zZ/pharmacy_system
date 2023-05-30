<?php

require("../model/Database.php");

class UserController {
    
    public $name;
    public $correo;
    public $phone;
    public $direction;
    public $password;

    public function __construct() {}
    public function __clone() {}

    public function setUserDatabase() {
        try {
            $instance = new Database();

            $db = $instance->conection();
            $stmt = $db->prepare("INSERT INTO `usuarios` (`nombre`, `correo`, `telefono`, `direccion`, `password`) VALUES (:name, :correo, :phone, :direction, :password)");

            $stmt->bindParam(":name", $this->name);
            $stmt->bindParam(":correo", $this->correo);
            $stmt->bindParam(":phone", $this->phone);
            $stmt->bindParam(":direction", $this->direction);
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
        $result = $db->prepare(" SELECT * FROM `usuarios` WHERE `correo`=:correo AND `password`=:password AND `status` = 1");
        $result->bindParam(":correo", $this->correo);
        $result->bindParam(":password", $this->password);

        $result->execute();
        $result = $result->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }

    public function getUserValidate($by, $value) {
        $instance = new Database();

        $db = $instance->conection();
        $result = $db->prepare("SELECT * FROM `usuarios` WHERE $by = '$value' and `status` = 1");
        $result->execute();
        $result = $result->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }
    
    public function getDatabase() {
        $instance = new Database();

        $db = $instance->conection();
        $result = $db->prepare("SELECT * FROM `usuarios`");
        $result->execute();
        $result->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>