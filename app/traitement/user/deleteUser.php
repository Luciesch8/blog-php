<?php 

include('../../model/Crud.php');

$db = new Crud();


$userDelete = $_GET['id'];

var_dump($userDelete);

$delete = $db->deleteUser($userDelete);



    if ($delete) 
    {
        header('Location: ../../../views/user/index.php');

    } else{

        header('Location: ../../../views/user/index.php');

    }




?>