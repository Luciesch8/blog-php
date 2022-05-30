<?php 

include('../../model/Crud.php');

$db = new Crud();


$updateArticle = $_GET['id'];

$idTopic = htmlspecialchars($_POST['topic']);
$title = htmlspecialchars($_POST['title']);
$content = htmlspecialchars($_POST['editor']);


$modif = $db->updateArticle($updateArticle, $idTopic, $title, $content);

var_dump($modif);




        if ($modif) 
        {
            header('Location: ../../../views/admin/index.php');
    
        } else{
    
            header('Location: ../../../views/admin/index.php');
        }

    




?>