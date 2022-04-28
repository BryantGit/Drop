<?php
    /*class Mysql extends Conexion{
        private $conexion;
        private $strquery;
        private $arrValues;
        function __construct(){
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();
        }

        public function insert(string $query, array $arrayValues)
        {
            $this->strQuery = $query;
            $this->arrayValues = $arrayValues;
            $insert = $this->conect->prepare($this->strQuery);
            $resInsert = $insert->execute($this->arrayValues);
            if($resInsert){
                $lastInsert = $this->conect->lastInsertId();
            }else{
                $lastInsert = 0;
            }
            return $lastInsert;
        }
        public function select(string $query){
            $this->strQuery = $query;
            $res = $this->conect->prepare($this->strQuery);
            $res->execute();
            $data = $res->fetch(PDO::FETCH_ASSOC);
            return $data;
        }
        public function select_all(string $query){
            $this->strQuery = $query;
            $res = $this->conect->prepare($this->strQuery);
            $res->execute();
            $data = $res->fetchAll(PDO::FETCH_OBJ);
            return $data;
        }
        public function update(string $query, array $arrayValues){
            $this->strQuery = $query;
            $this->arrayValues = $arrayValues;
            $update = $this->conect->prepare($this->strQuery);
            $resExecute = $update->execute($this->arrayValues);
            return $resExecute;
        }
        public function delete(string $query){
            $this->strQuery = $query;
            $result = $this->conect->prepare($this->strQuery);
            $delete =$result->execute();
            return $delete;
            
        }

    }*/
    class Mysql extends Conexion
{
    private $conexion;
    private $strQuery;
    private $arrValues;

    public function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->conect();
    }
    public function insert(string $query, array $arrValues)
    {
        $this->strQuery = $query;
        $this->arrValues = $arrValues;
        $insert = $this->conexion->prepare($this->strQuery);
        $resInsert = $insert->execute($this->arrValues);
        if($resInsert){
            $lastInsert = $this->conexion->lastInsertId();
        }else{
            $lastInsert = 0;
        }
        return $lastInsert;//regresa el id del ultimo id
    }
    public function select(string $query){
        $this->strQuery = $query;
        $res = $this->conexion->prepare($this->strQuery);
        $res->execute();
        $data = $res->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    public function select_all(string $query){
        $this->strQuery = $query;
        $res = $this->conexion->prepare($this->strQuery);
        $res->execute();
        $data = $res->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
    public function update(string $query, array $arrValues){
        $this->strQuery = $query;
        $this->arrValues = $arrValues;
        $update = $this->conexion->prepare($this->strQuery);
        $resExecute = $update->execute($this->arrValues);
        return $resExecute;
    }
    public function delete(string $query){
        $this->strQuery = $query;
        $result = $this->conexion->prepare($this->strQuery);
        $delete =$result->execute();
        return $delete;
        
    }
}
?>