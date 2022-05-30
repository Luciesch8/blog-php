<?php 

include('../../model/Crud.php');

$db = new Crud();


$userModif = $_GET['id'];

$name = htmlspecialchars($_POST['name']);


$modif = $db->updateUser($name, $userModif);


    if ($modif) 
    {
        header('Location: ../../../views/user/index.php');

    } else{

        header('Location: ../../../views/user/index.php');
    }




?>