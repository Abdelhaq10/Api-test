<?php
require __DIR__."../../Model/Methodes.php";
 class ApiController
{
   
    
    public function __construct()
        {
            
        }
        public function index()
        {
        
           $methode = new Methodes();
        // $getP = ;
        
        $json= json_encode($methode->getCat());
      //  echo $json;
          require_once __DIR__."/../view/index.php";
        }
        public function edit($id)
        {
           $methode = new Methodes();
            $json= json_encode($methode->oneCat($id));
            // echo $json;
           require_once __DIR__."/../view/edit.php";
        }
        public function delete()
        {
          require_once __DIR__."/../view/delete.php";
        }
    public function getProduct()
    {
        // echo "hello";
        
        $methode = new Methodes();
        // $getP = ;
        
       $json= json_encode($methode->getProduct());
       echo $json;
    }
      public function getCat()
    {
        // echo "hello";
        
        $methode = new Methodes();
        // $getP = ;
        
       $json= json_encode($methode->getCat());
       echo $json;
    }
  public function addProduct()
    {
        $name=$_POST['cat'];
        $methode = new Methodes();
        
        echo $json= json_encode( $methode->addProduct($name));
    }

  public function updateProducts($id)
  {
        // $id=$_GET['id'];
        $name=$_POST['cat'];
        $methode = new Methodes();
         $json= json_encode($methode->updateProduct($id,$name));
          header("Location:http://localhost/apiTest/api/index");
  }
  public function deleteProduct($id)
  {
        $methode = new MethodeS();
        $json= json_encode($methode->deleteProduct($id));
        header("Location:http://localhost/apiTest/api/index");
  }
}




?>