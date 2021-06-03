<?php
    class Conectar{
        public static function conexion(){
            $user ="root";
            $pass = "toor";
            $server = "localhost";
            $db= "loteria";
            $conn = new mysqli($server, $user, $pass, $db);
            return $conn;
        }
    }
?>