<?php 

include('../../model/Crud.php');

$db = new Crud();


$articleDelete = $_GET['id'];


$delete = $db->deleteArticle($articleDelete);


    if ($delete) 
    {
        header('Location: ../../../views/admin/index.php');

    } else{

        header('Location: ../../../views/admin/index.php'); 
    }




?>