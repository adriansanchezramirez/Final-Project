<?php

ini_set("display_errors", 1) ;
ini_set("display_startup_errors", 1) ;
error_reporting(E_ALL) ;

    if(isset( $_POST["mod"]) && isset( $_POST["ope"])){
        $mod = $_POST["mod"];
        $ope = $_POST["ope"];
    } else {
        $mod = $_GET["mod"]??"anime";
	    $ope = $_GET["ope"]??"index";
    }


require_once "controller/controller.$mod.php" ;

$nme = "controller$mod" ;

$cont = new $nme();

if(method_exists($cont,$ope))
    $cont->$ope() ;
    else
        die("Error") ;

?>