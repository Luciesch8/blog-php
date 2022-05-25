<?php 

include_once('../../model/Crud.php');

$name = htmlspecialchars($_POST['name']);

$bd = new Crud();

$addTopic = $bd->addTopic($name);


header("Location: ../../../views/topic/index.php");
exit;




?>