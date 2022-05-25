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
                <button type="button" class="btn btn-primary mr-3"><a class="text-white" href="./create.php">Add Post</a></button>

                <button type="button" class="btn btn-primary"><a class="text-white" href="./index.php">Manage Post</a></button>

            </div>
            
            <form class="w-75" action="../../app/traitement/article/addArticle.php" method="post">
                <div>
                    <label for="">Title</label>
                    <input  class="form-control form-control-lg" type="text" name="title">
                </div>
                <div>
                    <label for="">Body</label>
                    <textarea name="editor" id="editor"></textarea>
                </div>
                <div>
                    <label for="">Topics</label>
                    <select class="form-select" name="topic" id="">

                        <?php  foreach($allTopic as $allTopics):  ?>
                            <option name="topic" value="<?php echo $allTopics['name'] ?>"><?php echo $allTopics['name'] ?></option>
                        <?php  endforeach; ?>

                    </select>
                </div>
                <div class="mt-5">
                    <button type="submit" class="btn btn-primary">Add Post</button>
                </div>
            </form>


        </div>
        <!-- Pannel Start-->

    </div>



    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script src="../../assets/js/script.js"></script>
    </body>
</html>