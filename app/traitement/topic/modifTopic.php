<?php 

include('../../model/Crud.php');

$db = new Crud();


$topicModif = $_GET['id'];

$name = htmlspecialchars($_POST['name']);


$modif = $db->updateTopic($name, $topicModif);


    if ($modif) 
    {
        header('Location: ../../../views/topic/index.php');

    } else{

        header('Location: ../../../views/topic/index.php');
    }




?>