<?php 

    require_once "modelo/Usuario.php";    

    class controllerUsuario{


        public function __construct(){

            session_start();
            
            if(isset($_SESSION["nombre"])){
                $nombre = $_SESSION["nombre"];
                
                //Redirecciona a la vista del usuario normal
                if($nombre !== "admin"){
                    if (isset($nombre)){
                        header("Location: controlador.php?mod=producto&ope=principal");
                    }
                }else{
                //Redirecciona a la vista del administrador
                    if (isset($nombre)){
                        header("Location: controlador.php?mod=producto&ope=index");
                    }
                }
            }
        }
     
        public function index(){
            
            if($_SERVER["REQUEST_METHOD"] == "GET") {

                Usuario::validar();
            }
          
        }

        public function registro(){
            require_once "vista/index.registro.php";
        }

        //Cerrar la session que este iniciada
        public function cerrar(){

            session_start();
            session_unset();
            session_destroy();

            header("Location: index.php");
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
                
                header ("Location: controlador.php?mod=usuario&ope=index");
           } else {
                require_once "vista/index.registro.php";
           }
        }
	

    }
?>



