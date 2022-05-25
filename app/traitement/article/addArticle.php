<?php 

session_start();
include ('../../model/Crud.php');

$title = htmlspecialchars($_POST['title']);
$content = htmlspecialchars($_POST['editor']);
$topic = htmlspecialchars($_POST['topic']);
$user = $_SESSION['id'];


$db = new Crud();

$oneTopic = $db->getOneTopic($topic);

$selectTopic = $oneTopic[0]['id_topic']; // select id_topic to topic

$addArticle =  $db->addArticle($user, $selectTopic, $title, $content);

header('Location: ../../../views/admin/index.php');

?>