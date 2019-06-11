<?php
require_once "Database.php" ;


class Anime {
    private $idAni ;
    private $name ;
    private $episode ;
    private $category ;
    private $description ;
    private $cover ;
    private $start_date ;


    public function __construct(){}

    //SETTER
    public function setIdAni($dta)       {$this->idAni = $dta;}
    public function setName($dta)      {$this->name = $dta;}
    public function setEpisode($dta)        {$this->episode = $dta;}
    public function setCategoryy($dta)   {$this->category = $dta;}
    public function setDescription($dta) {$this->description¡ = $dta;}
    public function setCover($dta)    {$this->cover = $dta;}
    public function setStart_Date($dta)    {$this->start_date = $dta;}

    //GETTER
    public function getIdAni()       {return $this->idAni;}
    public function getName()      {return $this->name;}
    public function getEpisode()        {return $this->episode;}
    public function getcategory()   {return $this->category;}
    public function getdescription() {return $this->description;}
    public function getCover()    {return $this->cover;}
    public function getStart_Date()    {return $this->start_date;}

    public static function getAllAnime(){
        $bd = Database::getInstance() ;
        $bd->doQuery("SELECT * FROM anime ORDER BY name;") ;

        $datos = [] ;

        while($item = $bd->getRow("Anime")){
            array_push($datos,$item);
        }
 
        return $datos;
    }

    
        public function insert(){
            $bd = Database::getInstance();
            $bd->doQuery("INSERT INTO anime(name, episode, category, description, cover) VALUES (:name, :episode, :category, :description, :cover);",
            [":name"=>$this->name,
             ":episode"=>$this->episode,
             ":category"=>$this->category,
             ":description"=>$this->description,
             ":cover"=>$this->cover]) ;
        }
    

        public function delete($id){
            $bd = Database::getInstance() ;
			$bd->doQuery("DELETE FROM anime WHERE idAni=:ida ;",
				[ ":ida" => $id ]) ;
        }
  
        public function update()
		{
			$bd = Database::getInstance() ;
			$bd->doQuery("UPDATE anime SET name=:name, episode=:episode, category=:category, description=:description, cover=:cover WHERE idAni=:ida ;",
				[":name"=>$this->name,
                 ":episode"=>$this->episode,
                 ":category"=>$this->category,
                 ":description"=>$this->description,
                 ":cover"=>$this->cover,
                 ":ida"=>$this->idAni]) ;
        } 
        
        public static function getAnime($id) {
			$bd = Database::getInstance() ;
			$bd->doQuery("SELECT * FROM anime WHERE idAni=:idAni ;",
				[ ":idAni" => $id ]) ;

			return $bd->getRow("Anime") ;
		}
    
        public static function getAnimeId($idAni){

            $bd = new Database;
            $bd->doQuery("SELECT * FROM anime WHERE idAni=:idAni;", [":idAni"=>$idAni]);

            $datos = [];

            while($item = $bd->getRow("Anime")){
                array_push($datos,$item);
            }

            return $datos;
        }

}

?>