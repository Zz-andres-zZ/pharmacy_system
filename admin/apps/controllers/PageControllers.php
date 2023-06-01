<?php

class PageControllers {

    /* PANEL ADMINISTRATIVO */
    public static function dashboard() {
        require_once "views/dashboard.php";
    }

    public static function layoutstatic () {
        require_once "views/layout-static.php";
    }

    public static function table() {
        require_once "views/tables.php";
    }

    public static function charts() {
        require_once "views/charts.php";
    }
    
    public static function login_admin() {
        require_once "views/auth/login.php";
    }

    public static function register_admin() {
        require_once "views/auth/register.php";
    }

    public static function password_admin() {
        require_once "views/auth/password.php";
    }

    public static function logaut_admin() {
        require_once "views/auth/logaut.php";
    }

    public static function not_found() {
        require_once "views/404.php";
    }
}