<?php

    require_once "Database.php";

    class Producto{

        private $idProducto;
        private $nombre;
        private $precio;
        private $descripcion;
        private $foto;
        private $cantidad;

        public function __construct(){

        }

        //SETTERS
        public function setIdProducto($idProducto){
            $this->idProducto = $idProducto;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function setPrecio($precio){
            $this->precio = $precio;
        }
        public function setDescripcion($descripcion){
            $this->descripcion = $descripcion;
        }
        public function setFoto($foto){
            $this->foto = $foto;
        }
        public function setCantidad($cantidad){
            $this->cantidad = $cantidad;
        }

        //GETTERS
        public function getIdProducto(){
            return $this->idProducto;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function getPrecio(){
            return $this->precio;
        }
        public function getDescripcion(){
            return $this->descripcion;
        }
        public function getFoto(){
            return $this->foto;
        }
        public function getCantidad(){
            return $this->cantidad;
        }

        //Obtener listado de los productos de la tienda
        public static function listarProductos(){
            $db = Database::getInstance();
            $db ->doQuery("SELECT * FROM producto");

            $datos = [];

            while($item = $db->getRow("Producto")){
                array_push($datos,$item);
            }

            return $datos;
        }

        //Obtenemos un producto mediante su id
        public static function getProducto($idProducto){

            $db = Database::getInstance();
            $db->doQuery("SELECT * FROM producto WHERE idProducto=:idProducto;",
                        ["idProducto" => $idProducto]);
    
            return $db ->getRow("Producto");
    
        }

        //Creacion del nuevo producto
         public function crearProducto(){
            $db = Database::getInstance();
            $db->doQuery("INSERT INTO producto(nombre,precio) VALUES (:nombre,:precio);",
                        [":nombre"=>$this->nombre,
                        ":precio"=>$this->precio]);
        }

        //Borrar el producto
        public function borrar($idProducto){
            $db = Database::getInstance();
            $db->doQuery("DELETE FROM producto WHERE idProducto=:idProducto;",
                        [":idProducto"=> $idProducto]);
        }

        //Actualizar el producto
        public function update(){
            $db = Database::getInstance();
            $db->doQuery("UPDATE producto SET  precio=:precio WHERE idProducto=:idProducto;",
                        [":idProducto" => $this->idProducto,
                         ":precio" => $this->precio]);
        }
    }

?>