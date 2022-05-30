<?php 

include('../model/Crud.php');

$admin = 0;
$lastname = htmlspecialchars($_POST['lastname']);
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$pseudo = htmlspecialchars($_POST['pseudo']);
$password = htmlspecialchars($_POST['password']);


$bd = new Crud();

$inscr = $bd->validateInscriptionUser($admin, $lastname, $name, $email, $pseudo, $password);


if($inscr){

    session_start();

    $_SESSION['admin'] = $admin;
    $_SESSION['name'] = $name;
    $_SESSION['lastname'] = $lastname;
    $_SESSION['email'] = $email;
    $_SESSION['pseudo'] = $pseudo;
    $_SESSION['password'] = $password;

    header("Location: ../../views/home.php");
    exit;


}    header("Location: ../../views/home.php");




?>