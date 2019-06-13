<?php
require_once "Database.php" ;


class Manga {
    private $idMan ;
    private $title ;
    private $episode ;
    private $description ;
    private $cover ;



    public function __construct(){}

    //SETTER
    public function setIdMan($dta)       {$this->idMan = $dta;}
    public function setTitle($dta)      {$this->title = $dta;}
    public function setEpisode($dta)        {$this->episode = $dta;}
    public function setDescription($dta) {$this->description = $dta;}
    public function setCover($dta)    {$this->cover = $dta;}


    //GETTER
    public function getIdMan()       {return $this->idMan;}
    public function getTitle()      {return $this->title;}
    public function getEpisode()        {return $this->episode;}
    public function getDescription() {return $this->description;}
    public function getCover()    {return $this->cover;}


    public static function getAllManga(){
        $bd = Database::getInstance() ;
        $bd->doQuery("SELECT * FROM manga ORDER BY title;") ;

        $datos = [] ;

        while($item = $bd->getRow("Manga")){
            array_push($datos,$item);
        }
 
        return $datos;
    }

    
    public function insert(){
        $bd = Database::getInstance();
        $bd->doQuery("INSERT INTO manga(title, episode, description, cover) VALUES (:title, :episode, :description, :cover);",
        [":title"=>$this->title,
            ":episode"=>$this->episode,
            ":description"=>$this->description,
            ":cover"=>$this->cover]) ;
    }


    public function delete($idMan){
        $bd = Database::getInstance() ;
        $bd->doQuery("DELETE FROM manga WHERE idMan=:idMan ;",
            [ ":idMan" => $idMan ]) ;
    }

    public function update()
    {
        $bd = Database::getInstance() ;
        $bd->doQuery("UPDATE manga SET title=:title, episode=:episode, description=:description, cover=:cover WHERE idMan=:idMan ;",
            [":title"=>$this->title,
                ":episode"=>$this->episode,
                ":description"=>$this->description,
                ":cover"=>$this->cover,
                ":idMan"=>$this->idMan]) ;
    } 
    
    public static function getManga($idMan) {
        $bd = Database::getInstance() ;
        $bd->doQuery("SELECT * FROM manga WHERE idMan=:idMan ;",
            [ ":idMan" => $idMan ]) ;

        return $bd->getRow("Manga") ;
    }
    
    public static function getMangaId($idMan){

        $bd = new Database;
        $bd->doQuery("SELECT * FROM manga WHERE idMan=:idMan;", [":idMan"=>$idMan]);

        $datos = [];

        while($item = $bd->getRow("Manga")){
            array_push($datos,$item);
        }

        return $datos;
    }
    
}

?>