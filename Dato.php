<?php
    class Dato{
        private $conn;
        public function __construct($conn){
            $this->conn = $conn;
        }
        public function getAllDatos(){
            $query = "SELECT * FROM datos_tink";
            $result = mysqli_query($this->conn, $query);
            $datos = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $datos[]= $row; 
            }
            return $datos;
        }
        public function addDato($datos){
            $query = "INSERT INTO datos_tink(created_at,field1,id_alimentador) VALUES('".$datos["created_at"]."','".$datos["field1"]."','".$datos["id_alimentador"]."');";
            $result = mysqli_query($this->conn, $query);
            if ($result) {
                return true;
            }   else {
                return false;
            }
        }
    }
?>