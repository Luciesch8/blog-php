<?php 

include_once('../../app/model/Crud.php');

$db = new Crud();


$idUser = $_GET['id'];


$user = $db->getOneUser($idUser);

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

            
            <form class="w-75" action="../../app/traitement/user/updateUser.php?id=<?php echo $user[0]['id']; ?>" method="post">

                <!-- Lastname input -->
                <div class="form-outline mb-4">
                    <input name="lastname" type="text"  class="form-control form-control-lg" value="<?php echo $user[0]['lastname']; ?>" />
                    <label class="form-label">Lastname</label>
                </div>

                <!-- Name input -->
                <div class="form-outline mb-4">
                    <input name="name" type="text" class="form-control form-control-lg" value="<?php echo $user[0]['name']; ?>"/>
                    <label class="form-label">Name</label>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input name="email" type="text"  class="form-control form-control-lg" value="<?php echo $user[0]['email']; ?>" />
                    <label class="form-label" for="form1Example23">Email</label>
                </div>

                <!-- Pseudo input -->
                <div class="form-outline mb-4">
                    <input name="pseudo" type="text" class="form-control form-control-lg" value="<?php echo $user[0]['pseudo']; ?>"/>
                    <label class="form-label">Pseudo</label>
                </div>

                <div>
                    <label for="">Type</label>
                    <select class="form-select" name="type" id="">
                        <?php 

                        if ($user[0]['admin'] == 0 ){
                            
                            echo '<option name="user" value="0">User</option>
                            <option name="admin" value="1">Admin</option>';

                        } else{

                            echo '<option name="admin" value="1">Admin</option>
                            <option name="user" value="0">User</option>';

                        }
                        
                        ?>

                    </select>
                </div>

                <div class="mt-5">
                    <button type="submit" class="btn btn-primary">Add User</button>
                </div>
            </form>


        </div>

    </div>

    </body>
</html>