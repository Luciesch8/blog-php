<?php 

include('../../model/Crud.php');

$db = new Crud();


$updateAccount = $_GET['id'];



$lastname = htmlspecialchars($_POST['lastname']);
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$pseudo = htmlspecialchars($_POST['pseudo']);


$modif = $db->updateAccount($lastname, $name, $email, $pseudo, $updateAccount);

var_dump($modif);




        session_start();
    
        $user = $db->user($email); 

        $_SESSION['id'] = $user[0]['id']; 
        $_SESSION['admin'] = $user[0]['admin']; 
        $_SESSION['lastname'] = $user[0]['lastname']; 
        $_SESSION['name'] = $user[0]['name']; 
        $_SESSION['pseudo'] = $user[0]['pseudo']; 
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $user[0]['password']; 
        header('Location: ../../../views/account/index.php');

    




?>