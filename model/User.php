<?php

require_once "Database.php" ;
require_once "Anime.php" ;
require_once "Manga.php" ;

    class User{

        private $idUsu    ;
        private $name     ;
        private $password ;
        private $email    ;
        private $type     ;

        public function __construct(){}

        //SETTER
        public function setIdUsu($dta)     {$this->idUsu = $dta;}
        public function setName($dta)    {$this->name = $dta;}
        public function setPassword($dta)  {$this->password = $dta;}
        public function setEmail($dta)     {$this->email = $dta;}
        public function setType($dta)     {$this->type = $dta;}

        //GETTER
        public function getIdUsu()      {return $this->idUsu;}
        public function getName()     {return $this->name;}
        public function getPassword()   {return $this->password;}
        public function getEmail()      {return $this->email;}
        public function getType()      {return $this->type;}

        public function insert(){
            $bd = Database::getInstance();
            $bd->doQuery("INSERT INTO users(name, password, email) VALUES (:name, :password, :email);",
            [":name"=>$this->name,
             ":password"=>$this->password,
             ":email"=>$this->email]) ;
        }

        public static function animeForUser($idUsu){

            $bd = new Database;
            $bd->doQuery("SELECT * FROM anime JOIN listanime ON listanime.idAni = anime.idAni
            WHERE idUsu=:idUsu ORDER BY name;", [":idUsu"=>$idUsu]);
    
            $datos = [];
    
            while($item = $bd->getRow("Anime")){
                array_push($datos,$item);
            }
    
            return $datos;
        }

        public static function mangaForUser($idUsu){

            $bd = new Database;
            $bd->doQuery("SELECT * FROM manga JOIN listamanga ON listamanga.idMan = manga.idMan
            WHERE idUsu=:idUsu  ORDER BY title;", [":idUsu"=>$idUsu]);
    
            $datos = [];
    
            while($item = $bd->getRow("Manga")){
                array_push($datos,$item);
            }
    
            return $datos;
        }

        public function deleteAni($idAni){
            $bd = Database::getInstance() ;
            $bd->doQuery("DELETE FROM listanime WHERE idAni=:idAni ;",
                [ ":idAni" => $idAni
                  ]) ;
        }

        public function deleteMan($idMan){
            $bd = Database::getInstance() ;
            $bd->doQuery("DELETE FROM listamanga WHERE idMan=:idMan;",
                [ ":idMan" => $idMan
                  ]) ;
        }

    }
?>