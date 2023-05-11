<?php
namespace App\admin\MVC\Controller;

use App\admin\MVC\model\Register;
require("../../../autoloader.php");
class RegisterController{

/**c'est la function qui sert a rappeler le param dans le router */
public static function all(){
    $register = Register::findAll();
    require("../view/ReadAllRegister.php");
}

public static function readById($id_register){
    $register = Register::findById($id_register);
    require("../view/ReadRegister.php");
}

public  static function create($post){
    $register=  new Register($post["lastname"], $post["firstname"], $post["mail"], $post["password"], $post["birthday"],false);
    $register->insert();
    self::all();
 }
 public static function delete($id_register){
    $register = Register::deleteid($id_register);
    self::all();

 }

 public static function modif($post){
    $register=  new Register($post["lastname"], $post["firstname"], $post["mail"], $post["password"], $post["birthday"],false);
    $register->update($post["id_register"]);
    self::all();
}

public static function formUpdate($id_register){
    $register = Register::findById($id_register);
    require("../view/formUpdate.php");
}
}

?>
