<?php
require_once('../model/class/ArticleModel.php');
require_once('../model/class/BlogeurModel.php');
session_start();
$article=new ArticleModel();
$blogeur=new BlogeurModel();
$_SESSION['messageArticle']="";
if(isset($_POST['titre']) && isset($_POST['tag']) && isset($_POST['date'])  && isset($_POST['desC']) && isset($_POST['desD'])){
    $article->titre=$_POST['titre'];
    $article->tag=$_POST['tag'];
    $article->date=$_POST['date'];
    $article->desC=$_POST['desC'];
    $article->descD=$_POST['desD'];
    $img=$_FILES['image']['name'];
    $target="../images/addImage/".$img;
   
    move_uploaded_file($_FILES['image']['tmp_name'],$target); 
    $article->image=$img;
    //getId blogeuer
            $res=$blogeur->getBlogeurById($_SESSION['code']);
            $result=$res->fetchAll();
        
            foreach( $result as $key =>$val){
                $_SESSION['id']= $val['id'];
            };
       
        $article->idBlogeur=$_SESSION["id"];
        $article->ajouterArticle();
        header("location:../vue/Blog.php");  


}
else{
    $_SESSION['messageArticle']="verifier vos champs ";
    require("../vue/Blog.php");
}


?>