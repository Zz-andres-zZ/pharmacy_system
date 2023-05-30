<?php

/**
 * * ENRUTADOR DEL SITE
 * * LAS VISTAS SE CARGARAN DESDE EL CONTROLADOR
 */

require "app/controller/Page_controller.php";

$page_controller = Page_controller::class;

if (isset($_GET['url'])) {
    $path = $_GET['url'];

    switch ($path) {
        case 'home':
            $section_active = 'home';
            $page_controller::home();
            break;

        case 'about':
            $section_active = 'about';
            $page_controller::about();
            break;

        case 'contacto':
            $section_active = 'contacto';
            $page_controller::contact();
            break;

        case 'shop':
            $section_active = 'shop';
            $page_controller::shop();
            break;
            
        case 'shop-single':
            $section_active = 'shop-single';
            $page_controller::shopSingle();
            break;

        case 'login':
            $section_active = 'login';
            $page_controller::login();
            break;

        default:
            $page_controller::not_found();
            break;
    }
} else {
    $section_active = 'home';
    require "view/welcome.php";
}
