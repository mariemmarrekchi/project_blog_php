<?php

require_once('../model/class/ArticleModel.php');

$article=new ArticleModel();

    $article->delete($_GET['id']);
    
    header('location:../vue/gestionBlog.php');
    
