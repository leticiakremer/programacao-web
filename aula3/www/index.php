<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!isset($_GET['controller'])) {
    require_once('controllers/SiteController.php');
    $SiteController = new SiteController();
    $SiteController->home();
} else {
    switch ($_GET['controller']) {
        case 'site':
            require_once('controllers/SiteController.php');
            $SiteController = new SiteController();
            if (!isset($_GET['action'])) {
                $SiteController->home();
            } else {
                switch ($_GET['action']) {
                    case 'home':
                        $SiteController->home();
                        break;
                    case 'products':
                        $SiteController->products();
                        break;
                    case 'contact':
                        $SiteController->contact();
                        break;
                    case 'about':
                        $SiteController->about();
                        break;
                }
            }
            break;
    }
}
