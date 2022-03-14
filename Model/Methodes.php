<?php
require_once __DIR__."/../Model/Database.php";
class Methodes extends Dbconnect{

public function __construct(){
            // $db = new Dbconnect();
            // $conn=$db->connect();
}
// ** connection;

// $conn = new PDO("mysql:host=localhost;dbname=shop", 'root', '');
// get contacts

public function getProduct(){

    $query=$this->connect()->prepare("SELECT * FROM product");
        if($query->execute()){
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return 0;
        }

}
public function getCat(){

    $query=$this->connect()->prepare("SELECT * FROM categorie");
        if($query->execute()){
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return 0;
        }

}
public function oneCat($id)
{
     $query=$this->connect()->prepare("SELECT Nomcat FROM categorie where idCat=$id");
        if($query->execute()){
            return $query->fetch(PDO::FETCH_ASSOC);
        }else{
            return 0;
        }
}
// add contact

function addProduct($name){

  
 
    $query=$this->connect()->prepare("INSERT INTO `categorie`(`Nomcat`) VALUES ('$name')");
        if($query->execute()){
            return 'inserted';
            ;
        }else{
            return 'error';
        }
    

}



// echo $json= json_encode($res);

// update contact
// $res=[];
function updateProduct($id,$name){

 
 
    
    $query=$this->connect()->prepare("UPDATE `categorie` SET `Nomcat`='$name'  where `idCat`= $id");
        if($query->execute()){
            return 'updated ';
        }else{
            return 'error';
        }

}
// $res['erros']=updateProduct();
// echo $json= json_encode($res);

// delete contact
// $res=[];
function deleteProduct($id){

    $query=$this->connect()->prepare("DELETE FROM categorie where idCat like $id");
        if($query->execute()){
            return 'deleted';
        }else{
            return 'error';
        }

}
// $res['erros']=deleteProduct();
// echo $json= json_encode($res);




}
?>