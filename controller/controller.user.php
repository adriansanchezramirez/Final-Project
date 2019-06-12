<?php

require_once "model/User.php" ;
require_once "model/Sesion.php" ;

    class controllerUser{

        private $sesion;

        public function __construct(){
            $this->sesion = new Sesion() ;
        }
        
        public function sigin(){
        
            if(isset($_SESSION["email"])){
                header("Location: index.php?mod=anime&ope=anime");
            }
            
            if($_SERVER["REQUEST_METHOD"] == "GET") {

                if(isset($_GET["email"]) && isset($_GET["password"])){
                    $email   = $_GET["email"];
                    $password = $_GET["password"];
                
                    $db = Database::getInstance();

                    $db->doQuery("SELECT * FROM users WHERE email=:email AND password=:password",
                        [":email" => $email,
                        ":password" => $password]);
            
                    $resultado = $db->getRow();
                    $this->sesion->init();
                    
                    if ($resultado) {
                        $_SESSION["email"]=$email;
                        $_SESSION["idUsu"]=$resultado->idUsu;
                        header("Location: index.php?mod=anime&ope=anime");
                        
                    }else{
                        require_once "view/login.php";
                        echo "El nombre o la contraseña no es correcta";
                    
                    }
                } else{
                    require_once "view/login.php";
                }
            }
        }

        public function logout(){
            session_start();
            session_unset();
            session_destroy();
            header("Location: index.php?mod=anime&ope=index") ;
        }

        public function create()
        {
            if(isset($_GET["name"])):
                $usuario = new Usuario();
                $usuario->setName($_GET["name"]) ;
                $usuario->setPassword($_GET["password"]) ;
                $usuario->setEmail($_GET["email"]) ;

                $usuario->insert() ;
                header("location: index.php?mod=anime&ope=index") ;
            else:
                require_once "view/create.user.php" ;
            endif;
        }
    }
