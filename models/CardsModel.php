<?php
    class Cards_model{
        private $db;
        private $objetos;
        public function __construct(){
            $this->db=Conectar::conexion();
            $this->tableros = array();
        }
        public function get_tableros(){
            $sql= "CREATE TABLE IF NOT EXISTS `loteria`.`tableros` (
                `id` INT(11) NOT NULL AUTO_INCREMENT,
                `array` VARCHAR(500) NOT NULL,
                `identificador` VARCHAR(100) NOT NULL,
                `cedula` INT(20) NOT NULL,
                PRIMARY KEY (`id`));";
            $this->db->query($sql);
            $sql= "SELECT * FROM tableros";
            $resultado =$this->db->query($sql);
            while($row=$resultado->fetch_assoc()){
                $this->tableros[]=$row;
            }
            return $this->tableros;
        }
        public function get_num_objects(){
            //$countCards= $this->db->query("SELECT COUNT(*) id FROM tableros");
            $countObjects = $this->db->query("SELECT COUNT(*) id FROM objetos");
            //$numresult = $con->query($sqlitems);
            $fila = $countObjects->fetch_assoc();
            $numMax = $fila['id'];
            return $numMax;
        }
        public function get_num_cards(){
            $countCards= $this->db->query("SELECT COUNT(*) id FROM tableros");
            //$countObjects = $this->db->query("SELECT COUNT(*) id FROM objetos");
            //$numresult = $con->query($sqlitems);
            $fila = $countCards->fetch_assoc();
            $numMax = $fila['id']+1;
            return $numMax;
        }
        public function insert($array, $code, $cedula){
            $resultado =$this->db->query("INSERT INTO tableros (array, identificador, cedula) VALUES ('$array', '$code', $cedula)");
        }
        public function get_tablero($code){
            $card=$this->db->query("SELECT * FROM `loteria`.`tableros` WHERE id = $code");
            while($row=$card->fetch_assoc()){
                $this->card[]=$row;
            }
            return $this->card;
        }
    }