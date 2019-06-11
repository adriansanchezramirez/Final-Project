<?php
require_once "model/Anime.php" ;
require_once "model/Sesion.php" ;

class controllerAnime{

    private $sesion;

    public function __construct(){
        
    }

        public function index(){

            $datos = Anime::getAllAnime() ;
            require_once "view/index.anime.php" ;
        }

        public function anime(){
            $datos = Anime::getAllAnime() ;
            require_once "view/anime.php" ;
        }

        public function show(){
            $datos = Anime::getAnimeId($_GET["idAni"]);

            require_once "view/show.anime.php";
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
                require_once "view/create.anime.php" ;
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

					require_once "view/update.anime.php" ;
				}

			} else {
				//
				header("Location: index.php?mod=anime&ope=index");
			}
		}
       
}
?>