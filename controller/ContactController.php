<?php
require_once('../model/class/ContactModel.php');
session_start();
$contact=new ContactModel();
$contact->nom=$_POST['name'];
$contact->adress=$_POST['email'];
$contact->contact=$_POST['message'];
if(empty($contact->nom) || empty($contact->adress)  || empty($contact->contact)  ){
$_SESSION['messageContact']="Check champs ";
}
$contact->ajouterContact();
$_SESSION['messageContact']=" Your message was sent successfully. ";
require("../vue/contact.php");


