<?php

require_once "model/ComentarioAnime.php" ;

class controllerComenAnime{

    public function __construct(){}

    public function create(){
        if(isset($_GET["idUsu"])):
            $comen = new ComentarioAnime();
            $comen->setIdUsu($_GET["idUsu"]) ;
            $comen->setIdAni($_GET["idAni"]) ;
            $comen->setCommentary($_GET["commentary"]);

            $comen->insert() ;
            header("Location: index.php?mod=anime&ope=anime");
        else:
            // require_once "view/show.anime.php" ;
        endif;
    }    
    
}

?>