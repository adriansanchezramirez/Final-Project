<?php
require_once "Database.php" ;

class ListaManga{

    private $idUsu ;
    private $idMan ;

    public function __construct(){}

    //SETTER
    public function setIdUsu($dta)       {$this->idUsu = $dta;}
    public function setIdMan($dta)       {$this->idMan = $dta;}
    

    //GETTER
    public function getIdUsu()       {return $this->idUsu;}
    public function getIdMan()       {return $this->idMan;}

    public function insert(){
        $bd = Database::getInstance();
        $bd->doQuery("INSERT INTO listamanga(idUsu,idMan) VALUES (:idUsu, :idMan);",
        [":idUsu"=>$this->idUsu,
         ":idMan"=>$this->idMan]) ;
    }

    public static function getallMangaByUsuario(){
        $bd = Database::getInstance() ;
        $bd->doQuery("SELECT * FROM listamanga ;") ;

        $valor = [] ;

        while($obj = $bd->getRow("ListaManga")){
            array_push($valor,$obj);
        }
 
        return $valor;
    }

    
    
    
}
