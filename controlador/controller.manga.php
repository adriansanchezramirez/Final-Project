<?php
require_once "modelo/Manga.php" ;
require_once "modelo/Sesion.php" ;

class controllerManga{

    private $sesion;

    public function __construct(){
        
    }

        public function index(){

            $datos = Manga::getAllManga() ;
            require_once "vista/index.manga.php" ;
        }

        // public function aniadir(){
        //     $datos = Manga::getAllAnime() ;
        //     require_once "vista/aniadir.anime.php" ;
        // }

        public function create()
        {
            if(isset($_GET["title"])):
                $manga = new Manga();
                $manga->setTitle($_GET["title"]) ;
                $manga->setEpisode($_GET["episode"]) ;
                $manga->setDescription($_GET["description"]) ;
                $manga->setCover($_GET["cover"]) ;

                $manga->insert() ;
                header("location: index.php?mod=manga&ope=aniadir") ;
            else:
                require_once "vista/create.manga.php" ;
            endif;
        }

        public function delete(){
			if (isset($_GET["idMan"])) {
				Manga::delete($_GET["idMan"]) ;

				header("Location: index.php?mod=manga&ope=index");
			} else {
				header("Location: index.php?mod=manga&ope=index");
			}
        }
        
        public function update(){
			
			$id = $_GET["idMan"] ?? "" ;

			if (!empty($id)) {

				$manga = Manga::getManga($id) ;

				if (isset($_GET["title"])) {

                    $manga->setTitle($_GET["title"]) ;
                    $manga->setEpisode($_GET["episode"]) ;
                    $manga->setCategory($_GET["category"]) ;
                    $manga->setDescrption($_GET["description"]) ;
                    $manga->setCover($_GET["cover"]) ;

					$manga->update() ;

					header("Location: index.php?mod=Manga&ope=index");

				} else {
					//
                    $title = $manga->getTitle() ;
                    $episode = $manga->getEpisode() ;
                    $category = $manga->getCategory() ;
                    $description = $manga->getDescription() ;
                    $cover = $manga->getCover() ;

					require_once "vista/update.manga.php" ;
				}

			} else {
				//
				header("Location: index.php?mod=manga&ope=index");
			}
		}
       
}
?>