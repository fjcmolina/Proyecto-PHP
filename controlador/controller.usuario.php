<?php 

    require_once "modelo/Usuario.php";    

    class controllerUsuario{


        public function __construct(){
            $this->sesion = new Usuario() ;
        }
     
        public function index(){
            
            if($_SERVER["REQUEST_METHOD"] == "GET") {

                Usuario::validar();
            }
          
        }

        public function registro(){
            require_once "vista/index.registro.php";
        }

        public function cerrar(){
            session_start();
            session_unset();
            session_destroy();
            header("Location: index.php?mod=usuario&ope=index");
        }

        public function insertar(){

            if (isset($_GET["nombre"]) && isset($_GET["password"])) {
                $usuario = new Usuario();
              
                $usuario->setNombre($_GET["nombre"]);
                $usuario->setPassword($_GET["password"]);
                $usuario->setTelefono($_GET["telefono"]);
                $usuario->setDireccion($_GET["direccion"]);
                $usuario->setCp($_GET["cp"]);
                
                $usuario->nuevoUSuario();
                
                header ("Location: index.php?mod=usuario&ope=index");
           } else {
                require_once "vista/index.registro.php";
           }
        }
	

    }
?>



