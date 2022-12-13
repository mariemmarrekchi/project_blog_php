<?php
require('C:/xampp/htdocs/megakit-2/Project/model/config/app.php');
class ArticleModel{
    
    public $id;
    public $titre;
    public $tag;
    public $date;
    public $image;
    public $desC;
    public $descD;
    public $idBlogeur;
    public function __construct(){
    }
    public function ajouterArticle(){
        
        $db=App1::getDB();
        $req="insert into article values(NULL,'$this->titre','$this->tag','$this->date','$this->image','$this->desC','$this->descD','$this->idBlogeur')";
        $db->execute_query($req) ;
    } 
    public function getData($code){

        $db=App1::getDB();
        $req="select article.*,blogeur.nom from article ,blogeur  where blogeur.id=article.idBlogeur and blogeur.code= '$code' ";
        
        $res=$db->execute_query($req) ;
        return $res;
       
    }

    public function getDataAll(){

        $db=App1::getDB();
        $req="select * from article ";
        
        $res=$db->execute_query($req) ;
        return $res;
       
    }
    public function Latest(){

        $db=App1::getDB();
        $req="select  * from article  order by date desc LIMIT 3 ";
        
        $res=$db->execute_query($req) ;
        return $res;
       
    }
    
   
    public function getDataById($id){
        $db=App1::getDB();
        $req="select * from article where id= :id  ";
        $param=['id' => $id];
        $res=$db->execute_query($req,$param) ;
        return $res;
       
    }

    public function getDataByTag($tag){
        
        $db=App1::getDB();
        $req="select * from article where tag like ? ";
        $param=['tag' =>$tag];
        $res=$db->execute_query($req,array('%'.$tag.'%')) ;
        return $res;
       
    }

   

    public function delete($id){
        $db=App1::getDB();
        $req="delete from article where id='$id'";  
        $db->execute_query($req) ;
 
    }

    public function update($id){
        $db=App1::getDB();
        $req="update article set titre='$this->titre',tag='$this->tag',date='$this->date',image='$this->image',descriptionC='$this->desC' ,descriptionD='$this->descD' where id='$id'";
        $db->execute_query($req) ;
        
       
    }
    }