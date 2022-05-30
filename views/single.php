<?php 

    include_once('../app/model/Crud.php');

    $db = new Crud();

    $articleId = $_GET['id'];

    $allTopic = $db->getOneArticle($articleId);


?>

<!DOCTYPE html>
<html lang="en">
    <?php include('../includes/head.php')?>
    <body>
    <?php include('../includes/navbar.php')?>

    
    <div class="row m-3 ">
        <div class="w-75 p-3 ml-5">
            <div style="border-radius: 10px" class="p-5 bg-light">
                <div>
                    <img class="w-100" src="../assets/img/landscape-4572804_1280.jpg" alt="">
                </div>
                <div class="">
                    <h1 class="text-center mt-3"><?php echo $allTopic[0]['title']; ?></h1>
                    <div class="row ">
                        <p>Auteur</p>
                        <p><?php echo $allTopic[0]['content']; ?></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    
                </div>
            </div>
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
            
        </div>
    </div>


    <?php include('../includes/footer.php')?>
    </body>
</html>