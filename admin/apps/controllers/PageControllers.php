<?php

class PageControllers {

    /* PANEL ADMINISTRATIVO */
    public static function dashboard() {
        require_once "views/dashboard.php";
    }

    public static function table() {
        require_once "views/tables.php";
    }

    public static function charts() {
        require_once "views/charts.php";
    }
    
    public static function login_admin() {
        require_once "views/auths/login.php";
    }

    public static function register_admin() {
        require_once "views/auths/register.php";
    }

    public static function logaut_admin() {
        require_once "views/auths/logaut.php";
    }

    public static function not_found() {
        require_once "views/404.php";
    }
}