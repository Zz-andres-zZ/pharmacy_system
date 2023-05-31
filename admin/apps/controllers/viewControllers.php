<?php

/**
 * * ENRUTADOR DEL SITE
 * * LAS VISTAS SE CARGARAN DESDE EL CONTROLADOR
 */

require "apps/controllers/PageControllers.php";

$page_controller_admin = PageControllers::class;

if (isset($_GET['urls'])) {
    $path_admin = $_GET['urls'];

    switch ($path_admin) {
        case '':
            $section_active = 'dashboard';
            $page_controller_admin::dashboard();
            break;

        case 'dashboard':
            $section_active = 'dashboard';
            $page_controller_admin::dashboard();
            break;

        case 'charts':
            $section_active = 'charts';
            $page_controller_admin::charts();
            break;

        case 'tables':
            $section_active = 'tables';
            $page_controller_admin::table();
            break;

        case 'login':
            $section_active = 'login';
            $page_controller_admin::login_admin();
            break;

        case 'register':
            $section_active = 'register';
            $page_controller_admin::register_admin();
            break;

            case 'logaut':
            $section_active = 'logaut';
            $page_controller_admin::logaut_admin();
            break;

        default:
            $page_controller_admin::not_found();
            break;
    }
} else {
    $section_active = 'dashboard';
    require "views/dashboard.php";
}
