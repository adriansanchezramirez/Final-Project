<?php
require_once "model/Manga.php" ;
require_once "model/Sesion.php" ;

class controllerManga{

    private $sesion;

    public function __construct(){
        
    }

        public function index(){

            $datos = Manga::getAllManga() ;
            require_once "view/index.manga.php" ;
        }

        public function manga(){
            $datos = Manga::getAllManga() ;
            require_once "view/manga.php" ;
        }

        public function admin(){
            $datos = Manga::getAllManga() ;
            require_once "view/admin.manga.php" ;
        }

        public function show(){
            $datos = Manga::getMangaId($_GET["idMan"]);

            require_once "view/show.manga.php";
        }

        public function create()
        {
            if(isset($_GET["title"])):
                $manga = new Manga();
                $manga->setTitle($_GET["title"]) ;
                $manga->setEpisode($_GET["episode"]) ;
                $manga->setDescription($_GET["description"]) ;
                $manga->setCover($_GET["cover"]) ;

                $manga->insert() ;
                header("location: index.php?mod=manga&ope=admin") ;
            else:
                require_once "view/create.manga.php" ;
            endif;
        }

        public function delete(){
			if (isset($_GET["idMan"])) {
				Manga::delete($_GET["idMan"]) ;

				header("Location: index.php?mod=manga&ope=admin");
			} else {
				header("Location: index.php?mod=manga&ope=admin");
			}
        }
        
        public function update(){
			
			$idMan = $_GET["idMan"] ?? "" ;

			if (!empty($idMan)) {

				$manga = Manga::getManga($idMan) ;

				if (isset($_GET["title"])) {

                    $manga->setTitle($_GET["title"]) ;
                    $manga->setEpisode($_GET["episode"]) ;
                    $manga->setDescription($_GET["description"]) ;
                    $manga->setCover($_GET["cover"]) ;

					$manga->update() ;

					header("Location: index.php?mod=manga&ope=admin");

				} else {
					//
                    $title = $manga->getTitle() ;
                    $episode = $manga->getEpisode() ;
                    $description = $manga->getDescription() ;
                    $cover = $manga->getCover() ;

					require_once "view/update.manga.php" ;
				}

			} else {
				//
				header("Location: index.php?mod=manga&ope=index");
			}
		}
       
}
?>