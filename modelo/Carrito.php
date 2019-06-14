<?php

    require_once "Database.php";
   

    class Carrito{

    
        private $nombre;
        private $precio;
        private $cantidad;
        private $idUsuario;

        public function __construct(){

        }

        //SETTERS
        
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function setPrecio($precio){
            $this->precio = $precio;
        }
        public function setCantidad($cantidad){
            $this->cantidad = $cantidad;
        }
        public function setIdUsuario($idUsuario){
            $this->idUsuario = $idUsuario;
        }

        //GETTERS
        
        public function getNombre(){
            return $this->nombre;
        }
        public function getPrecio(){
            return $this->precio;
        }
        public function getCantidad(){
            return $this->cantidad;
        }
        public function getIdUsuario(){
            return $this->idUsuario;
        }

        public static function listarCarrito(){

            $db = Database::getInstance();
            $db ->doQuery("SELECT * FROM carrito");
        
            $datos = [];

            while($item = $db->getRow("Carrito")){
                array_push($datos,$item);
            }

            return $datos;
        }

        public function insertarCarrito($idProducto,$idUsuario){
            
            $db = Database::getInstance();
            $db ->doQuery("INSERT INTO carrito(nombre,precio) VALUES (:nombre,:precio) WHERE idProducto=:idProducto and idUsuario=:idUsuario;",
                            [":nombre"=>$nombre,
                            ":precio"=>$precio,
                            ":idProducto"=> $idProducto,
                            ":idUsuario"=> $idUsuario]);
        }


        public function borrar($idProducto){
            $db = Database::getInstance();
            $db->doQuery("DELETE FROM carrito WHERE idProducto=:idProducto;",
                        [":idProducto"=> $idProducto]);
        }

    }

?>