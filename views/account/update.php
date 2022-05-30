<?php 

include_once('../../app/model/Crud.php');

$db = new Crud();


?>
<!DOCTYPE html>
<html lang="en">

    <?php include('../../includes/admin/head.admin.php') ?>

    <body>
    <?php include('../../includes/admin/navbar.admin.php') ?>

    <div class="row">
    <?php include('../../includes/admin/verticalNav.admin.php') ?> 

    <?php

        //echo $email;


    
    ?>



        <div class="w-75">
            <div class="m-5">

                <button type="button" class="btn btn-primary mr-3"><a class="text-white" href="./index.php">Return to my profile</a></button>
                <h1 class="text-center mt-5">Update My Profile</h1>

            </div>

            
            <form class="w-75" action="../../app/traitement/account/updateAccount.php?id=<?php echo $_SESSION['id']; ?>" method="post"> 
                <div>
                    <label for="">Lastname</label>
                    <input  class="form-control form-control-lg" type="text" name="lastname" value=" <?php echo $_SESSION['lastname']; ?>">
                </div>
                <div>
                    <label for="">Firstname</label>
                    <input  class="form-control form-control-lg" type="text" name="name" value=" <?php echo $_SESSION['name']; ?>">
                </div>
                <div>
                    <label for="">Pseudo</label>
                    <input  class="form-control form-control-lg" type="text" name="pseudo" value=" <?php echo $_SESSION['pseudo']; ?>">
                </div>
                <div>
                    <label for="">Email</label>
                    <input  class="form-control form-control-lg" type="text" name="email" value=" <?php echo $_SESSION['email']; ?>">
                </div>
               
                <div class="mt-5">
                    <button type="submit" class="btn btn-primary">Modify</button>
                </div>
            </form>


        </div>

    </div>

    </body>
</html>