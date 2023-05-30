<?php

require_once "app/config/config_login.php";

class PageController {
    public static function welcome() {
        check_login();
        require "view/welcome.php";
    }

    public static function about() {
        check_login();
        require "view/about.php";
    }
    
    public static function contact() {
        check_login();
        require "view/contacto.php";
    }

    public static function shop() {
        check_login();
        require "view/shop.php";
    }

    public static function shopSingle() {
        check_login();
        require "view/shop-single.php";
    }
    
    public static function not_found() {
        require "view/404.php";
    }

    public static function login() {
        require "view/auth/login.php";
    }

    public static function logaut() {
        require "view/auth/logaut.php";
    }
}