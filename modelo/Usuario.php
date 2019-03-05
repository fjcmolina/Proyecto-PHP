<?php

    require_once "Database.php";

    class Usuario{

        private $idUsuario;
        private $nombre;
        private $password;
        private $telefono;
        private $direccion;
        private $cp;

        public function __construct(){

        }


        //SETTERS
        public function setIdUsuario($idUsuario){
            $this->idUsuario = $idUsuario;
        }
        public function setnombre($nombre){
            $this->nombre = $nombre;
        }
        public function setPassword($password){
            $this->password = $password;
        }
        public function setTelefono($telefono){
            $this->telefono = $telefono;
        }
        public function setDireccion($direccion){
            $this->direccion = $direccion;
        }
        public function setCp($cp){
            $this->cp = $cp;
        }

        //GETTERS
        public function getIdUsuario(){
            return $this->idUsuario;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function getPassword(){
            return $this->password;
        }
        public function getTelefono(){
            return $this->telefono;
        }
        public function getDireccion(){
            return $this->direccion;
        }
        public function getCp(){
            return $this->cp;
        }

        public static function validar(){

            if(isset($_GET["nombre"]) && isset($_GET["password"])){
                $nombre = $_GET["nombre"];
                $password = $_GET["password"];
           

                $db = Database::getInstance();

                $db->doQuery("SELECT * FROM usuario WHERE nombre=:nombre AND password=:password;",
                                [":nombre" => $nombre,
                                ":password" => $password]);
        
                $resultado = $db->getRow();
                session_start();
            
                if ($resultado!== false) {
                    if($nombre !== "admin"){
                        $_SESSION["nombre"]=$nombre;
                        header("Location: index.php?mod=producto&ope=principal");
                        
                    }else{
                        $_SESSION["nombre"]=$nombre;
                        header("Location: index.php?mod=producto&ope=index");
                        //echo "admin";
                    }
                    
                    
                }else{
                    require_once "vista/index.login.php";
                    echo "El nombre o la contraseña no es correcta";
                
                }
            } else{
                require_once "vista/index.login.php";
            }
        }


        public function nuevoUsuario(){
            $db = Database::getInstance();
            $db->doQuery("INSERT INTO usuario(nombre,password,telefono,direccion,cp) VALUES (:nombre,:password,:telefono,:direccion,:cp);",
                        [":nombre"=>$this->nombre,
                        ":password"=>$this->password,
                        ":telefono"=>$this->telefono,
                        ":direccion"=>$this->direccion,
                        ":cp"=>$this->cp]);
        }
        
    }
?>