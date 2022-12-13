<?php
require('C:/xampp/htdocs/megakit-2/Project/model/config/app.php');
// $db=App1::getDB();
//         print_r($db);
class ContactModel 
{


    public $id;
    public $nom;
    public $adress;
    public $contact;
  


    public function __construct(){

    }
    public function ajouterContact(){
        
        $db=App1::getDB();

        $req="insert into contact values(NULL,'$this->nom','$this->adress','$this->contact')";
        $db->execute_query($req) ;
    } 
    
    public function afficherContact(){
        
        $db=App1::getDB();
        $req="select * from contact";
        $res=$db->execute_query($req) ;
        return $res;
        
    }
   
  
 
 

 
    


   
} 
?>