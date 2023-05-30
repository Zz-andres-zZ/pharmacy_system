<?php

class PageController {
    public static function welcome() {
        require_once "view/welcome.php";
    }

    public static function about() {
        require_once "view/about.php";
    }
    
    public static function contact() {
        require_once "view/contacto.php";
    }

    public static function shop() {
        require_once "view/shop.php";
    }

    public static function shopSingle() {
        require_once "view/shop-single.php";
    }
    
    public static function not_found() {
        require_once "view/404.php";
    }

    public static function login() {
        require_once "view/auth/login.php";
    }

    public static function logaut() {
        require_once "view/auth/logaut.php";
    }

    /* PANEL ADMINISTRATIVO */
    public static function dashboard() {
        require_once "admin/dashboard.php";
    }
}