<?php
require_once('../model/class/BlogeurModel.php');
session_start();
$_SESSION['email']="";

$blogeur=new BlogeurModel();

$code=$_POST['code'];
$email=$_POST['email'];


if(empty($email)|| empty($code)  ){
$message="verif le(s) champ(s)";
require("../vue/singin.php");}
//getClient
else{
    $res=$blogeur->getData($email,$code);
    $verif=$res->fetchColumn(0);
    if($verif==0){
        $messageExsite="ce compte n'exsite pas";
        require("../vue/singin.php");


    }else{
        $_SESSION['email']=$email;
        $_SESSION['code']=$code;
        
       
        header("location:../vue/compte.php");
    }
}







