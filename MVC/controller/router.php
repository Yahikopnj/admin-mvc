<?php

/**le use sert a dire ce que routere dois aller chercher  */

use App\admin\MVC\Controller\RegisterController;


/** le require autoloader sert a ne pas répéter le require car le fichier autoloader s'en occuper */
require_once("../../../autoloader.php");


/** le if sert a a vérifier que c'est le bon lien exemple route=delete */

if(isset($_GET["route"])){

    if($_GET["route"] == "all"){
        RegisterController::all();
    }else if($_GET["route"]=="read"){
        RegisterController::readById($_GET["id_register"]);
    }
    else if($_GET["route"] == "create"){
        RegisterController::create($_POST);
    }
    else if($_GET["route"]== "delete"){
        RegisterController::delete($_GET["id_register"]);

}else if($_GET["route"] == "update"){
    RegisterController::modif($_POST);
}else if($_GET["route"] == "formUpdate"){
    RegisterController::formUpdate($_GET["id_register"]);


}
}

?>