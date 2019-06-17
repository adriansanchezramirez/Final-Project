<?php
require_once "Database.php" ;

class ComentarioAnime{

    private $idCom ;
    private $idUsu ;
    private $idAni ;
    private $commentary ;

    public function __construct(){}

    //SETTER
    public function setIdCom($dta)       {$this->idCom = $dta;}
    public function setIdUsu($dta)       {$this->idUsu = $dta;}
    public function setCommentary($dta)  {$this->commentary = $dta;}
    public function setIdAni($dta)       {$this->idAni = $dta;}
    

    //GETTER
    public function getIdUsu()       {return $this->idUsu;}
    public function getIdAni()       {return $this->idAni;}
    public function getIdCom()       {return $this->idCom;}
    public function getCommentary()  {return $this->commentary;}


    public function insert(){
        $bd = Database::getInstance();
        $bd->doQuery("INSERT INTO comentario_anime(idUsu,idAni,commentary) VALUES (:idUsu, :idAni, :commentary);",
        [":idUsu"=>$this->idUsu,
         ":idAni"=>$this->idAni,
         ":commentary"=>$this->commentary]) ;
    }

    public static function allAnimeComen($idAni){
        $bd = Database::getInstance() ;
        $bd->doQuery("SELECT * FROM comentario_anime WHERE idAni=:idAni;", [":idAni"=>$idAni]) ;

        $datos = [] ;

        while($item = $bd->getRow("ComentarioAnime")){
            array_push($datos,$item);
        }
 
        return $datos;
    }    




}