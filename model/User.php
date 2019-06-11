<?php

require_once "Database.php" ;

    class Usuario{

        private $idUsu    ;
        private $name     ;
        private $password ;
        private $email    ;
        private $type     ;

        public function __construct(){}

        //SETTER
        public function setIdUsu($dta)     {$this->idUsu = $dta;}
        public function setName($dta)    {$this->name = $dta;}
        public function setPassword($dta)  {$this->password = $dta;}
        public function setEmail($dta)     {$this->email = $dta;}
        public function setType($dta)     {$this->type = $dta;}

        //GETTER
        public function getIdUsu()      {return $this->idUsu;}
        public function getName()     {return $this->name;}
        public function getPassword()   {return $this->password;}
        public function getEmail()      {return $this->email;}
        public function getType()      {return $this->type;}

        public function insert(){
            $bd = Database::getInstance();
            $bd->doQuery("INSERT INTO users(name, password, email) VALUES (:name, :password, :email);",
            [":name"=>$this->name,
             ":password"=>$this->password,
             ":email"=>$this->email]) ;
        }

        
    }
?>