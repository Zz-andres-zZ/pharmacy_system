<?php

class Database {

    private static $hostname = "localhost";
    private static $database = "pharmacy_system";
    private static $username = "root";
    private static $password = "";
    protected static $conect;

    public function __construct() {}

    public function __clone() {}

    public function conection() {
        try {
            
            self::$conect = new PDO("mysql:host=" . self::$hostname . ";dbname=" . self::$database, self::$username, self::$password);
            self::$conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return self::$conect;

        } catch (PDOException $error) {
            $response = ['Error' => 'error' . $error->getMessage()];
            echo "<pre>";
            print_r([
                'ERROR CONECTION' => json_encode($response)
            ]);
            echo "</pre>";
            die();
        }
    }
}