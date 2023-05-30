<?php

class Page_controller {
    public static function home() {
        require "view/welcome.php";
    }

    public static function about() {
        require "view/about.php";
    }
    
    public static function contact() {
        require "view/contacto.php";
    }

    public static function shop() {
        require "view/shop.php";
    }

    public static function shopSingle() {
        require "view/shop-single.php";
    }
    
    public static function not_found() {
        require "view/error.php";
    }

    public static function login() {
        require "view/auth/login.php";
    }
}