<?php 
include "Contoller/controllercompany.php" ;
$contoller_companys = new contoller_companys() ; 
$contoller_BUSs = new contoller_BUSs() ; 

$contoller_Routes = new contoller_Routes() ; 
$contoller_horraires = new contoller_horraires() ; 


if (isset($_GET["action"])) {
    $action = $_GET["action"] ;
    if ($action === "update") {
        $contoller_companys->setcompanys() ;
    }
    if ($action === "companys") {

    }


}else {
    $contoller_companys->getcompanys() ;

    $contoller_BUSs->getBUSs() ;

    $contoller_Routes->getRoutes() ;
    $contoller_horraires->gethorraires() ;
}





//    $contoller_companys->afficheform() ;

// $contoller_companys->setcompanys() ;
