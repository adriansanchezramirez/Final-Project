<?php
require_once "model/Anime.php" ;
require_once "model/Sesion.php" ;
require_once "model/ComentarioAnime.php" ;


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

        public function admin(){

            $datos = Anime::getAllAnime() ;
            require_once "view/admin.anime.php" ;
        }

        public function serie(){
            $datos = Anime::getAllSerie() ;
            require_once "view/anime.serie.php" ;
        }

        public function pelicula(){
            $datos = Anime::getAllPelicula() ;
            require_once "view/anime.pelicula.php" ;
        }

        public function ova(){
            $datos = Anime::getAllOva() ;
            require_once "view/anime.ova.php" ;
        }

        public function show(){
            $datos = Anime::getAnimeId($_GET["idAni"]);

            $valor = ComentarioAnime::allAnimeComen($_GET["idAni"]);

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
                $anime->setStart_Date($_GET["start_date"]) ;
                $anime->setCover($_GET["cover"]) ;

                $anime->insert() ;
                header("location: index.php?mod=anime&ope=admin") ;
            else:
                require_once "view/create.anime.php" ;
            endif;
        }

        public function delete(){
			if (isset($_GET["idAni"])) {
				Anime::delete($_GET["idAni"]) ;

				header("Location: index.php?mod=anime&ope=admin");
			} else {
				header("Location: index.php?mod=anime&ope=admin");
			}
        }
        
        public function update(){
			
			$idAni = $_GET["idAni"] ?? "" ;

			if (!empty($idAni)) {

				$anime = Anime::getAnime($idAni) ;

				if (isset($_GET["name"])) {

                    $anime->setName($_GET["name"]) ;
                    $anime->setEpisode($_GET["episode"]) ;
                    $anime->setCategory($_GET["category"]) ;
                    $anime->setDescription($_GET["description"]) ;
                    $anime->setCover($_GET["cover"]) ;

					$anime->update() ;

					header("Location: index.php?mod=anime&ope=admin");

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
				header("Location: index.php?mod=anime&ope=admin");
			}
		}
       
}
?>