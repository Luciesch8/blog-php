<?php 

include_once('../../app/model/Crud.php');

$db = new Crud();


$idTopic = $_GET['id'];


$topic = $db->getOneTopicId($idTopic);

?>
<!DOCTYPE html>
<html lang="en">

    <?php include('../../includes/admin/head.admin.php') ?>

    <body>
    <?php include('../../includes/admin/navbar.admin.php') ?>

    <div class="row">
    <?php include('../../includes/admin/verticalNav.admin.php') ?> 



        <div class="w-75">
            <div class="m-5">
                <button type="button" class="btn btn-primary mr-3"><a class="text-white" href="./create.php">Add Topic</a></button>

                <button type="button" class="btn btn-primary"><a class="text-white" href="./index.php">Manage Topic</a></button>
                <h1 class="text-center mt-5">Modify Topic</h1>

            </div>

            
            <form class="w-75" action="../../app/traitement/topic/modifTopic.php?id=<?php echo $topic[0]['id_topic']; ?>" method="post">
                <div>
                    <label for="">Name</label>
                    <input  class="form-control form-control-lg" type="text" name="name" value=" <?php echo $topic[0]['name']; ?>">
                </div>
               
                <div class="mt-5">
                    <button type="submit" class="btn btn-primary">Modify Topic</button>
                </div>
            </form>


        </div>

    </div>

    </body>
</html>