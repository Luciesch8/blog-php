<?php 

include_once('../../app/model/Crud.php');

$db = new Crud();

$allTopic = $db->getAllTopics();


?>

<!DOCTYPE html>
<html lang="en">

    <?php include('../../includes/admin/head.admin.php') ?>

    <body>
    <?php include('../../includes/admin/navbar.admin.php') ?>

        <div class="row">
    
        <?php include('../../includes/admin/verticalNav.admin.php') ?> 

            <!-- Pannel Start-->
            <div class="w-75">

            <div class="m-5">
                <button type="button" class="btn btn-primary mr-3"><a class="text-white" href="./create.php">Add Topics</a></button>

                <button type="button" class="btn btn-primary"><a class="text-white" href="./index.php">Manage Topics</a></button>

    

            </div>
            <h1 class="text-center m-3 text-dark">Manage Topic</h1>

                <div class="row justify-content-center m-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="">SN</th>
                                <th class="">Name</th>
                                <th class="text-center" colspan="2">Action</th>
                            </tr>
                        </thead>
                        
                        <?php  foreach($allTopic as $allTopics):  ?>
                        <tr>
                            <td class="pt-3 pb-3"><?php echo $allTopics['id_topic'] ?></td> 
                            <td class="pt-3 pb-3"><?php echo $allTopics['name'] ?></td>
                            <td class="text-center pt-3 pb-3">
                                <a href="./modif.php?id=<?php echo $allTopics['id_topic'] ?>" class="text-success m-3">Edit</a>
                                <a href="../../app/traitement/topic/deleteTopic.php?id=<?php echo $allTopics['id_topic'] ?>" class="text-danger m-3">Delete</a> 
                            </td>
                        </tr>
                        <?php  endforeach; ?>


                    </table>

                </div>
            </div>
            <!-- Pannel End-->
        </div>

    </body>
</html>