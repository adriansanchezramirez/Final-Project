<?php

require_once "model/ComentarioManga.php" ;

class controllerComenManga{

    public function __construct(){}

    public function create(){
        if(isset($_GET["idUsu"])):
            $comen = new ComentarioManga();
            $comen->setIdUsu($_GET["idUsu"]) ;
            $comen->setIdMan($_GET["idMan"]) ;
            $comen->setCommentary($_GET["commentary"]);

            $comen->insert() ;
            header("Location: index.php?mod=manga&ope=manga");
        else:
            // require_once "view/show.anime.php" ;
        endif;
    }    
    
}

?>