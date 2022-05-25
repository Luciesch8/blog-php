<?php 

include('../../model/Crud.php');

$db = new Crud();


$topicDelete = $_GET['id'];


$delete = $db->deleteTopic($topicDelete);


    if ($delete) 
    {
        header('Location: ../../../views/topic/index.php');

    } else{

        header('Location: ../../../views/topic/index.php');
    }




?>