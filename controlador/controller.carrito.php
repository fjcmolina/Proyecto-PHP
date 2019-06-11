<?php

    require_once "modelo/Carrito.php";
  

    class controllerCarrito{

        public function __construct(){

        }

        public function index() {
            $datos = Carrito::listarCarrito() ;
            require_once "vista/index.carrito.php";
        }

        public function insertar(){

            if(isset($_GET["idProducto"])){
                Carrito::insertarCarrito($_GET["idProducto"],$_GET["idUsuario"]);
            }

            header("Location: controlador.php?mod=carrito&ope=index");
        }

        public function delete(){

            if(isset($_GET["idProducto"])){
                Carrito::borrar($_GET["idProducto"]);
            }

            header("Location: controlador.php?mod=carrito&ope=index");
        }
    }
?>