<?php 

if(isset($_GET['mode'])) {

if($_GET['mode']=="ajout" ){
    require("ControllerArticle.php");
}

    if( $_GET['mode']=="delete" ){
        //echo $_GET['id'];
        include ("ControllerArticleDelete.php");
    }
    if( $_GET['mode']=="edit" ){
        //echo $_GET['id'];
        require ("ControllerArticleEdit.php");
    }

}