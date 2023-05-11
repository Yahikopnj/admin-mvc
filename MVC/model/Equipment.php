<?php 
namespace App\admin\MVC\model;
use App\admin\MVC\model\DAO;
use \PDOException;


class Equipment{
    private $name_equipment;
    private $type_equipment;
    private $quantity_equipment;
    private $status_equipment;


    function __construct($name_equipment, $type_equipment, $quantity_equipment, $status_equipment){
$this->name_equipment = $name_equipment;
$this->type_equipment = $type_equipment;
$this->quantity_equipment = $quantity_equipment;
$this->status_equipment = $status_equipment;


    }



    public function getName_equipment(){
        return $this->name_equipment;
    }

    public function setName_equipment($name_equipment){
        $this->name_equipment = $name_equipment;
    }

    public function getType_equipment(){
        return $this->name_equipment;
    }

    public function setTye_equipment($type_equipment){
        $this->type_equipment = $type_equipment;
    }

    public function getQuantity_equipment(){
        return $this->quantity_equipment;
    }

    public function setQuantity_equipment($quantity_equipment){
        $this->quantity_equipment = $quantity_equipment;
    }


    public function getStatus_equipment(){
        return $this->status_equipment;
    }

    public function setStatus_equipment($status_equipment){
        $this->status_equipment = $status_equipment;
    }


public static function findAll(){
    try{
        $dao = new DAO();
        $dbh = $dao->getDbh();

        $stmt = $dbh->query("SELECT * FROM equipment");

        return $stmt->fetchAll();
    }catch(PDOException $erreur){
echo $erreur->getMessage();
    }
}

public static function findById($id_equipment){
    try{
        $dao = new DAO();
        $dbh = $dao->getDbh();

        $stmt = $dbh->prepare("SELECT * FROM equipment WHERE id_equipment=?");
        $stmt->bindParam(1,$id_equipment);
        $stmt->execute();
        return $stmt->fetchAll();
    }catch(PDOException $erreur){
        echo $erreur->getMessage();
    }
}


public function insert(){
    try{
        $dao = new DAO();
        $dbh = $dao->getDbh();

        $stmt = $dbh->prepare("INSERT INTO equipment (name_equipment, type_equipment, quantity_equipment, status_equipment)
        VALUES(?, ?, ?, ?)");
        $stmt->bindValue(1,$this->name_equipment);
        $stmt->bindValue(1,$this->type_equipment);
        $stmt->bindValue(1,$this->quantity_equipment);
        $stmt->bindValue(1,$this->status_equipment);

        $stmt->execute();
    }catch(PDOException $erreur){
        echo $erreur->getMessage();
    }
}


}


?>