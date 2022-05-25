<?php

include('../app/model/Crud.php');

$db = new Crud();

$recentArticle = $db->getAllArticle();

$allTopic = $db->getAllTopics();

$aleatoireArticle = $db->aleatoireArticle();


?>


<!DOCTYPE html>
<html lang="en">

<?php include('../includes/head.php')?>

<body>
    <?php include("../includes/navbar.php")?>
    

    <h2 class="text-center mt-5">Trending Post</h2>

    <div class="page-content p-5" id="content">

        <div class="row row-cols-1 row-cols-md-3 g-4 d-flex justify-content-evenly">

        <?php  foreach($aleatoireArticle as $aleatoireArticles):  ?>
            <div class="col blog" >
                <div class="card h-100">
                    <img src="../assets/img/landscape-4572804_1280.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $aleatoireArticles['title']; ?></h5>
                        <p class="card-text"></p>
                        <div class="d-flex justify-content-between">
                            <small class="text-muted"><?php echo $aleatoireArticles['create_at'] ?> </small>
                            <small><a href="./single.php?id=<?php echo $aleatoireArticles['id']  ?>">Voir plus</a></small>
                        </div>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"></small>
                    </div>

                </div>
            </div>
            <?php  endforeach;?>
        </div>
    </div>

    <h2>Recent post</h2>

    <div class="row mb-5">
        <div class="w-75 ml-3">   <!-- Recent Article -->

        <?php  foreach($recentArticle as $recentArticles):  ?>

            <div class="card mb-3 ml-5" style="max-width: 800px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                    <img src="../assets/img/landscape-4572804_1280.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $recentArticles['title'] ?></h5>
                        <p maxlength="4" class="card-text"><?php

                                                $article = substr($recentArticles['content'],0, 125);

                                                echo $article.'...';

                                                ?>
                        </p>
                        <div class="d-flex justify-content-between">
                            <small class="text-muted"><?php echo $recentArticles['create_at'] ?> </small>
                            <small><a href="./single.php?id=<?php echo $recentArticles['id']  ?>">Voir plus</a></small>
                        </div>

                        
                    </div>
                    </div>
                </div>
            </div>
       <?php  endforeach;?>

        </div>
        <div class="w-25 p-3">
            <div class=""> <!-- Search -->
                <nav class="navbar navbar-light bg-light col">
                    <div class="col p-3">
                        <div>
                            <h3>Search</h3>
                        </div>
                        <div class="">
                            <input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="p-3 mt-5 bg-light "><!-- Categorie Topics -->
                <h3>Topics</h3>
                <div class="card" style="width: 14rem;">
                    <ul class="list-group list-group-flush" >
                    <?php  foreach($allTopic as $allTopics):  ?>
                        <a class="list-group-item list-group-item-action list-group-item-light text-dark" href=""><?php echo $allTopics['name']?></a>
                        <?php  endforeach; ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>



    <?php include('../includes/footer.php')?>


</body>
</html>