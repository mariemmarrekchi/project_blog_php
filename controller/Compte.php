<?php

require_once('../model/class/BlogeurModel.php');

$blogeur=new BlogeurModel();

if(isset($_GET['mode']) && isset($_GET['id'])){
    $mode=$_GET['mode'];
$id=$_GET['id'];
   
    $blogeur->nom=$_POST['nom'];
    $blogeur->prenom=$_POST['prenom'];
    $blogeur->password=$_POST['motpass'];
    $blogeur->email=$_POST['email'];


if(empty($blogeur->password)|| empty($blogeur->nom) || empty($blogeur->prenom) || empty($blogeur->email) ){
$message="verif le(s) champ(s)";
require("../vue/compte.php");
}
//getClient
else{
   
        $_SESSION['email']=$blogeur->email;
        $_SESSION['motpass']=$blogeur->password;
        $blogeur->update($id);
        $_SESSION['message']="update profile";
        require("../vue/compte.php");
    
    }
}

 
   








