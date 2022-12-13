<?php
require_once('../model/class/BlogeurModel.php');
session_start();
$_SESSION['email']="";
$_SESSION['motpass']="";
$_SESSION['message']="";
$_SESSION['id']="";
$blogeur=new BlogeurModel();
$blogeur->nom=$_POST['nom'];
$blogeur->prenom=$_POST['prenom'];
$blogeur->password=$_POST['pass'];
$blogeur->email=$_POST['email'];
$blogeur->code=random_int(100, 1000000);
$blogeur->aactif=1;
$password=$blogeur->password;

// if(isset($password)){
// $client->password=password_hash($_POST['pass'],PASSWORD_BCRYPT);
// if (password_verify($password, $client->password)) {
//     print_r("yes");

// }
// }

if(empty($blogeur->password)|| empty($blogeur->nom) || empty($blogeur->prenom) || empty($blogeur->email) ){
$message="verif le(s) champ(s)";
require("../vue/register.php");
}
//getClient
else{
    $res=$blogeur->verifAdmin($blogeur->email,$blogeur->password);



    $verif=$res->fetchColumn(0);

    if($verif==0){
        $_SESSION['email']=$blogeur->email;
        $_SESSION['motpass']=$blogeur->password;
        $_SESSION['code']=$blogeur->code;
       
        $blogeur->ajouterBlogeur($blogeur->nom,$blogeur->prenom,$blogeur->email,$blogeur->code,$blogeur->aactif,$blogeur->password);
       
        
        header("location:../vue/compte.php");
    }else{
        $_SESSION['message']="Ce compte exite avec un code ";

        require("../vue/singin.php");
    }
}







