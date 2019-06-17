<?php

require_once "model/ListaAnime.php" ;

class controllerLista{

    public function __construct(){}

    public function create(){
        if(isset($_GET["idUsu"])):
            $lista = new ListaAnime();
            $lista->setIdUsu($_GET["idUsu"]) ;
            $lista->setIdAni($_GET["idAni"]) ;

            $lista->insert() ;
            header("Location: index.php?mod=anime&ope=anime");
        else:
            require_once "view/anime.php" ;
        endif;
    }    
    
}

?>