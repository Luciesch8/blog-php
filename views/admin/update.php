<?php 

include_once('../../app/model/Crud.php');

$db = new Crud();


$idArticle = $_GET['id'];


$allTopic = $db->getAllTopics();

$article = $db->getOneArticle($idArticle);

$topic = $db->getOneTopicId($idArticle);

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
            
            <form class="w-75" action="../../app/traitement/article/updateArticle.php?id=<?php echo $article[0]['id'] ?>" method="post">
                <div>
                    <label for="">Title</label>
                    <input  class="form-control form-control-lg" type="text" name="title" value="<?php echo $article[0]['title']?>">
                </div>
                <div>
                    <label for="">Body</label>
                    <textarea name="editor" id="editor"><?php echo $article[0]['content']?></textarea>
                </div>
                <div>
                    <label for="">Topics</label>
                    <select class="form-select" name="topic" id="">

                        <?php  foreach($allTopic as $allTopics):  ?>
                            <option name="topic" value="<?php echo $allTopics['id_topic'] ?>"><?php echo $allTopics['name'] ?></option>
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

    </div>



    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script src="../../assets/js/script.js"></script>

    </body>
</html>