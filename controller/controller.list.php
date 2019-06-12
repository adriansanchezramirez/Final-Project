<?php

require_once "model/ListaManga.php" ;

class controllerList{

    public function __construct(){}

    public function create(){
        if(isset($_GET["idUsu"])):
            $list = new ListaManga();
            $list->setIdUsu($_GET["idUsu"]) ;
            $list->setIdMan($_GET["idMan"]) ;

            $list->insert() ;
            header("Location: index.php?mod=manga&ope=manga");
        else:
            require_once "view/manga.php" ;
        endif;
    }

    public function index(){
        $valor = ListaAnime::getallAnimeByUsuario() ;
        require_once "vista/index.lista.php" ;
    }
    
    
}

?>