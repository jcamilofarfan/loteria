<?php

class ObjectsController{
    public function __construct(){
        require_once "models/ObjectsModel.php";
    }
    public function index(){
        // require_once "models/ObjectsModel.php";
        $objects = new Objects_model();
        $data ["titulo"]= "Objetos";
        $data ["Objects"]= $objects->get_objects();
        require_once "views/header.php";
        require_once "views/objects/objects.php";
    }

    public function new(){
        $data ["titulo"]= "Objetos";
        require_once "views/header.php";
        require_once "views/objects/objects_new.php";
    }
    public function save(){
        $objects = new Objects_model();
        $img = $_FILES['img']['tmp_name'];
        $objeto = $_POST['objetos'];
        $objects->saveimg($img);
        $objects->insert($objeto);
        $data ["titulo"]= "Objetos";
        header("Location: index.php");
    }
}

?>