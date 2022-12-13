<?php

require('C:/xampp/htdocs/megakit-2/Project/model/config/app.php');
// $db=App1::getDB();
//         print_r($db);
class BlogeurModel 
{


    public $id;
    public $nom;
    public $prenom;
    public $email;
    public $password;
    public $aactif;
    public $code;


    public function __construct(){

    }
    public function ajouterBlogeur(){
        
        $db=App1::getDB();

        $req="insert into blogeur values(NULL,'$this->nom','$this->prenom','$this->email','$this->code','$this->aactif','$this->password')";
        $db->execute_query($req) ;
    } 
    

    public function getBlogeurById($code){

        $db=App1::getDB();
        $req="select id from blogeur where code='$code' ";
        $res=$db->execute_query($req) ;
        return $res;
       
    }

   

    
    public function verifAdmin($login,$pass){
        $db=App1::getDB();
        $req="select count(*) from blogeur where email= :email  and motpass =:motpass";
        $param=['email' => $login, 'motpass' => $pass];
        $res=$db->execute_query($req,$param) ;
        return $res;
       
    }

    public function getData($email,$code){
        $db=App1::getDB();
        $req="select * from blogeur where email= :email  and code =:code";
        $param=['email' => $email, 'code' => $code];
        $res=$db->execute_query($req,$param) ;
        return $res;
       
    }

    public function update($id){
        $db=App1::getDB();
        $req="update blogeur set nom='$this->nom',prenom='$this->prenom',email='$this->email',motpass='$this->password' where id='$id'";
        
        $db->execute_query($req) ;
        
       
    }

   
} 
?>