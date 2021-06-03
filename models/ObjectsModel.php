<?php
    class Objects_model{
        private $db;
        private $objetos;
        public function __construct(){
            $this->db=Conectar::conexion();
            $this->objetos = array();
        }
        public function get_objects(){
            $sql= "CREATE TABLE IF NOT EXISTS `loteria`.`objetos` (
                `id` INT NOT NULL AUTO_INCREMENT,
                `objetos` VARCHAR(100) NOT NULL,
                PRIMARY KEY (`id`));";
            $this->db->query($sql);
            $sql= "SELECT * FROM objetos";
            $resultado =$this->db->query($sql);
            while($row=$resultado->fetch_assoc()){
                $this->objetos[]=$row;
            }
            return $this->objetos;
        }
        public function insert($objetos){
            // move_uploaded_file($img, $fichero_subido);
            function eliminar_acentos($objetos){
                //Reemplazamos la A y a
                $objetos = str_replace(
                array('Á', 'À', 'Â', 'Ä', 'á', 'à', 'ä', 'â', 'ª'),
                array('A', 'A', 'A', 'A', 'a', 'a', 'a', 'a', 'a'),
                $objetos
                );
                //Reemplazamos la E y e
                $objetos = str_replace(
                array('É', 'È', 'Ê', 'Ë', 'é', 'è', 'ë', 'ê'),
                array('E', 'E', 'E', 'E', 'e', 'e', 'e', 'e'),
                $objetos );
                //Reemplazamos la I y i
                $objetos = str_replace(
                array('Í', 'Ì', 'Ï', 'Î', 'í', 'ì', 'ï', 'î'),
                array('I', 'I', 'I', 'I', 'i', 'i', 'i', 'i'),
                $objetos );
                //Reemplazamos la O y o
                $objetos = str_replace(
                array('Ó', 'Ò', 'Ö', 'Ô', 'ó', 'ò', 'ö', 'ô'),
                array('O', 'O', 'O', 'O', 'o', 'o', 'o', 'o'),
                $objetos );
                //Reemplazamos la U y u
                $objetos = str_replace(
                array('Ú', 'Ù', 'Û', 'Ü', 'ú', 'ù', 'ü', 'û'),
                array('U', 'U', 'U', 'U', 'u', 'u', 'u', 'u'),
                $objetos );
                //Reemplazamos la N, n, C y c
                $objetos = str_replace(
                array('Ñ', 'ñ', 'Ç', 'ç'),
                array('G.N', 'g.n', 'C', 'c'),
                $objetos
                );
                return $objetos;
            }
            $objetos = eliminar_acentos($objetos);
            $objetos = str_replace(' ', '-', $objetos);
            $objetos = strtolower($objetos);
            $resultado =$this->db->query("INSERT INTO objetos(objetos) VALUES ('$objetos')");
        }
        public function saveimg($img){
            $numresult =$this->db->query("SELECT COUNT(*) id FROM objetos");
            $fila = $numresult->fetch_assoc();
            $numMax = $fila['id']+1;
            $fichero_subido = $_SERVER["DOCUMENT_ROOT"]."/loteria/img/" . basename($numMax.".png");
            move_uploaded_file($img, $fichero_subido);
        }
    }

?>