<?php
    require_once "config/config.php";
    require_once "core/routes.php";
    require_once "config/database.php";
    require_once "controllers/Objects.php";
    if (isset($_GET['c'])) {
        $controlador = loadController($_GET['c']);
        if (isset($_GET['a'])) {
            $actionTmp = $_GET['a'];
            $controlador->$actionTmp();
            // loadAction($controlador, $_GET['a']);
        }else{
            $actionTmp = FIRST_ACTION;
            $controlador->$actionTmp();
            // loadAction($controlador, FIRST_ACTION);
        }
    }else{
        $controlador = loadController(FIRST_CONTROLLER);
        $actionTmp = FIRST_ACTION;
        $controlador->$actionTmp();
    }
    // $control = new ObjectsController();
    // $control->index();
?>