<?php
require_once('../model/class/ArticleModel.php');

session_start();
$article=new ArticleModel();


    $article->titre=$_POST['titre'];
    $article->tag=$_POST['tag'];
    $article->date=$_POST['date'];
    $article->desC=$_POST['desC'];
    $article->descD=$_POST['desD'];
    global $imageold;
    $res=$article->getDataById($_POST['id']);
    $result=$res->fetchAll();
    foreach ($result as $key => $value) {
        $imageold=$value['image'];
       print_r($value['image']);
    }

   
   
if(empty( $_FILES['image']['name'])){
    $article->image=$imageold;
    
    
}
else{
$img=$_FILES['image']['name'];
$target="../images/addImage/".$img;
move_uploaded_file($_FILES['image']['tmp_name'],$target); 
$article->image=$img;

}

    $article->update($_POST['id']);
        
    header("location:../vue/gestionBlog.php");  




