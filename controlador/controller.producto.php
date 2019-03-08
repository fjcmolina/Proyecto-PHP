<?php

    require_once "modelo/Producto.php";

    class controllerProducto{

        public function __construct(){

        }

        //Pagina del usuario normal
        public function index() {
            $datos = Producto::listarProductos() ;
            require_once "vista/index.producto.php";

        }

        //Pagina del administrador
        public function principal() {
            $datos = Producto::listarProductos() ;
            require_once "vista/index.principal.php";

        }

        public function delete(){

            if(isset($_GET["idProducto"])){
                Producto::borrar($_GET["idProducto"]);
            }

            header("Location: controlador.php?mod=producto&ope=index");
        }
        

        public function crear(){

            if (isset($_GET["nombre"])) {
                
                $producto = new Producto();
              
                $producto->setNombre($_GET["nombre"]);
                $producto->setPrecio($_GET["precio"]);
                $producto->crearProducto();
                
                header ("Location: controlador.php?mod=producto&ope=index");
           } else {
                require_once "vista/crear.producto.php";
           }
        }


        public function update(){

            $idProducto = $_GET["idProducto"]??"";

            if(!empty($idProducto)){

                $producto = Producto::getProducto($_GET["idProducto"]);

                if(isset($_GET["nombre"]) ){
                    $producto->setPrecio($_GET["precio"]);
                    $producto->update();

                    
                    header("location: controlador.php?mod=producto&ope=index");
                    
                }else{
                    //Muestra los valores que ya tiene en la bd
                    $nombre = $producto->getNombre();
                    $precio = $producto->getPrecio();
                    require_once "vista/update.producto.php";
                }

            }else{
               
               header("location: controlador.php?mod=producto&ope=index");
            }

            
        }
    }

?>