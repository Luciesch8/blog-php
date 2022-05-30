<!DOCTYPE html>
<html lang="en">

    <?php include('../../includes/admin/head.admin.php') ?>

    <body>
    <?php include('../../includes/admin/navbar.admin.php') ?>

    <div class="row">
    <?php include('../../includes/admin/verticalNav.admin.php') ?> 



    <?php 

        include_once('../../app/model/Crud.php');

        $id_user = $_SESSION['id'];
        $db = new Crud();

        $allMyArticle = $db->getAllMyArticle($id_user);                

    ?>



        <!-- MyPannel Start-->
        <div class="w-75">

        <div class="m-5">
            <button type="button" class="btn btn-primary mr-3"><a class="text-white" href="./create.php">Add Post</a></button>

            <button type="button" class="btn btn-primary"><a class="text-white" href="./index.php">Manage Post</a></button>

        </div>
        <h1 class="text-center m-3 text-dark">Manage Post</h1>

            <div class="row justify-content-center m-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="">Title</th>
                            <th class="">Author</th>
                            <th class="">Date</th>
                            <th class="text-center" colspan="2">Action</th>
                        </tr>
                    </thead>
                    

                    <?php  foreach($allMyArticle as $allMyArticles):  ?>
                    <tr>
                        <td maxlength="20" class="pt-3 pb-3"><?php echo $allMyArticles['title']?></td>
                        <td class="pt-3 pb-3"><?php echo $allMyArticles['id_user']?></td> 
                        <td class="pt-3 pb-3"><?php echo $allMyArticles['create_at']?> </td>
                        <td class="text-center pt-3 pb-3">
                            <a href="../traitement/admin/modif.php?modif=" class="text-success m-3">Edit</a>
                            <a href="../../app/traitement/article/deleteArticle.php?id=<?php echo $allMyArticles['id'] ?>" class="text-danger m-3">Delete</a> 
                            <a href="../traitement/checkArticle.php?id=" class="text-primary m-3">Publish</a>
                        </td>
                    </tr>
                    <?php  endforeach; ?>


                </table>

            </div>
            
        </div>
        <!-- MyPannel End-->

    </div>



    </body>
</html>