<?php 

include('../../model/Crud.php');

$db = new Crud();


$updateUser = $_GET['id'];

$lastname = htmlspecialchars($_POST['lastname']);
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$pseudo = htmlspecialchars($_POST['pseudo']);
$type = htmlspecialchars($_POST['type']);


$modif = $db->updateUser($type, $lastname, $name, $email, $pseudo, $updateUser);

var_dump($modif);




        if ($modif) 
        {
            header('Location: ../../../views/user/index.php');
    
        } else{
    
            header('Location: ../../../views/user/index.php');
        }

    




?>