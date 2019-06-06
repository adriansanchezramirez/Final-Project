<?php
require_once "modelo/Anime.php" ;
require_once "modelo/Sesion.php" ;

class controllerAnime{

    private $sesion;

    public function __construct(){
        
    }

        public function index(){

            $datos = Anime::getAllAnime() ;
            require_once "vista/index.anime.php" ;
        }

        public function aniadir(){
            $datos = Anime::getAllAnime() ;
            require_once "vista/aniadir.anime.php" ;
        }

        public function create()
        {
            if(isset($_GET["name"])):
                $anime = new Anime();
                $anime->setName($_GET["name"]) ;
                $anime->setEpisode($_GET["episode"]) ;
                $anime->setCategory($_GET["category"]) ;
                $anime->setDescription($_GET["description"]) ;
                $anime->setCover($_GET["cover"]) ;

                $anime->insert() ;
                header("location: index.php?mod=anime&ope=aniadir") ;
            else:
                require_once "vista/create.anime.php" ;
            endif;
        }

        public function delete(){
			if (isset($_GET["idAni"])) {
				Anime::delete($_GET["idAni"]) ;

				header("Location: index.php?mod=anime&ope=index");
			} else {
				header("Location: index.php?mod=anime&ope=index");
			}
        }
        
        public function update(){
			
			$id = $_GET["idAni"] ?? "" ;

			if (!empty($id)) {

				$anime = Anime::getAnime($id) ;

				if (isset($_GET["name"])) {

                    $anime->setName($_GET["name"]) ;
                    $anime->setEpisode($_GET["episode"]) ;
                    $anime->setCategory($_GET["category"]) ;
                    $anime->setDescrption($_GET["description"]) ;
                    $anime->setCover($_GET["cover"]) ;

					$anime->update() ;

					header("Location: index.php?mod=anime&ope=index");

				} else {
					//
                    $name = $anime->getName() ;
                    $episode = $anime->getEpisode() ;
                    $category = $anime->getCategory() ;
                    $description = $anime->getDescription() ;
                    $cover = $anime->getCover() ;

					require_once "vista/update.anime.php" ;
				}

			} else {
				//
				header("Location: index.php?mod=anime&ope=index");
			}
		}
       
}
?>