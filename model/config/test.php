<?php
require_once('app.php');

$db=App1::getDB();
$liste = $db->execute_query('SELECT * from article');
var_dump($liste);
?>