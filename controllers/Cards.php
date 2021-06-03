<?php

class CardsController{
    public function __construct(){
        require_once "models/CardsModel.php";
    }
    public function index(){
        $tableros = new Cards_model();
        $data ["titulo"]= "Cartones de Loteria";
        $data ["Cards"]= $tableros->get_tableros();
        require_once "views/header.php";
        require_once "views/cards/cards.php";
    }
    public function insert(){
        $tableros = new Cards_model();
        $code =$_POST['codigo'];
        $array =  $_POST['array'];
        $cedula =  $_POST['cedula'];
        $tableros->insert($code, $array, $cedula);
        header("Location: index.php");
    }
    public function new(){
        $tableros = new Cards_model();
        $data ["titulo"]= "Cartones de Loteria";
        $data ["items"]= $tableros->get_num_objects();
        $data ["cards"]= $tableros->get_num_cards();
        require_once "views/header.php";
        require_once "views/cards/cards_new.php";
    }
    public function save(){
        $tableros = new Cards_model();
        $array = $_POST['array'];
        $code = $_POST['codigo'];
        $cedula = $_POST['cedula'];
        $tableros->insert($array, $code, $cedula);
        header("Location: index.php?c=cards&a=index");
    }
    public function read(){
        $tableros = new Cards_model();
        $code = $_POST['code'];
        $data ["titulo"]= "Carton de Loteria # ".$code;
        $data ["Cards"]= $tableros->get_tablero($code);
        // require_once "views/header.php";
        require_once "views/cards/cards_print.php";
    }
}

?>