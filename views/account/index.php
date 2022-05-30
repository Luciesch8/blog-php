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





        <div class="w-75">

        <div>
            <div>

                <h1>Profile</h1>

                <a href="./update.php">Update my profile</a>

            </div>

            <div class="row">
                <h2 class="mb-5">Bio Graph</h2>

                <p>Type : <?php if ($_SESSION['admin'] == 1){
                        
                        echo 'Admin';

                    }else{

                        echo 'User';

                    } ?></p>
                <div class="row">

                    <div class="row w-50">
                        <div class="col">
                            <p>Firstname</p>
                            <p>Pseudo</p>
                        </div>
                        <div class='col'>
                            <p> : <?php echo $_SESSION["name"]; ?> </p>
                            <p> : <?php echo $_SESSION["pseudo"]; ?> </p>
                        </div>
                    </div>

                    <div class="row w-50">
                        <div class="col">
                            <p>Lastname</p>
                            <p>Email</p>
                        </div>
                        <div class='col'>
                            <p> : <?php echo $_SESSION["lastname"]; ?> </p>
                            <p> : <?php echo $_SESSION["email"]; ?> </p>
                        </div>
                    </div>

                </div>

            </div>


        </div>





            
        </div>

    </div>



    </body>
</html>