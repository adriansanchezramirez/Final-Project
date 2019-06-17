<?php
require_once "Database.php" ;

class ComentarioManga{

    private $idComman ;
    private $idUsu ;
    private $idMan ;
    private $commentary ;

    public function __construct(){}

    //SETTER
    public function setIdComman($dta)    {$this->idComman = $dta;}
    public function setIdUsu($dta)       {$this->idUsu = $dta;}
    public function setCommentary($dta)  {$this->commentary = $dta;}
    public function setIdMan($dta)       {$this->idMan = $dta;}
    

    //GETTER
    public function getIdUsu()       {return $this->idUsu;}
    public function getIdMan()       {return $this->idMan;}
    public function getIdComman()    {return $this->idComman;}
    public function getCommentary()  {return $this->commentary;}


    public function insert(){
        $bd = Database::getInstance();
        $bd->doQuery("INSERT INTO comentario_manga(idUsu,idMan,commentary) VALUES (:idUsu, :idMan, :commentary);",
        [":idUsu"=>$this->idUsu,
         ":idMan"=>$this->idMan,
         ":commentary"=>$this->commentary]) ;
    }

    public static function allMangaComen($idMan){
        $bd = Database::getInstance() ;
        $bd->doQuery("SELECT * FROM comentario_manga WHERE idMan=:idMan;", [":idMan"=>$idMan]) ;

        $datos = [] ;

        while($item = $bd->getRow("ComentarioManga")){
            array_push($datos,$item);
        }
 
        return $datos;
    }    

}