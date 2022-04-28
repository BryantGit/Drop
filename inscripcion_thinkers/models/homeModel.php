<?php
    class homeModel extends Mysql{

        public function __construct(){
            //echo "Mensaje desde el modelo Home ";
            parent::__construct();
        }

        public function setUser(string $nombre,int $edad){
            $query_insert = "INSERT INTO usuario(nombre,edad) VALUES (?,?)";
            $arrData = array($nombre,$edad);
            $request_insert = $this->insert($query_insert,$arrData);
            return $request_insert;
        }


    }

?>