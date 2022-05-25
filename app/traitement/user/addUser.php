<?php 


    include('../../model/Crud.php');


    $admin = $_POST['type'];
    $lastname = htmlspecialchars($_POST['lastname']);
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $password = htmlspecialchars($_POST['password']);


    $bd = new Crud();

    $inscr = $bd->validateInscriptionUser($admin, $lastname, $name, $email, $pseudo, $password);

    header('Location: ../../../views/user/index.php');






?>