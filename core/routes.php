<?php

    function loadController($controller){
        $nameController = ucwords($controller)."Controller";
        $archiveController = 'controllers/'.ucwords($controller).'.php';
        if (!is_file($archiveController)) {
            $archiveController='controllers/'.FIRST_CONTROLLER.'.php';
        }
        // echo $archiveController;
        require_once $archiveController;
        $control = new $nameController();
        return $control;
    }

    function loadAction($controlle,$action){
        if (isset($action) && method_exists($controlle,$action)) {
            $controlle->action();
        }else{
            $controlle->FIRST_ACTION();
        }
    }

?>