<?php 

include_once('../../app/model/Crud.php');


$db = new Crud();

$allUser = $db->getAllUser();



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
            <button type="button" class="btn btn-primary mr-3"><a class="text-white" href="./create.php">Add User</a></button>

            <button type="button" class="btn btn-primary"><a class="text-white" href="./index.php">Manage User</a></button>

        </div>
        <h1 class="text-center m-3 text-dark">Manage User</h1>

            <div class="row justify-content-center m-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="">ID</th>
                            <th class="">Role</th>
                            <th class="">Name</th>
                            <th class="">Lastname</th>
                            <th class="">Email</th>
                            <th class="">Pseudo</th>
                            <th class="text-center" colspan="2">Action</th>
                        </tr>
                    </thead>
                    
                    <?php foreach($allUser as $allUsers):  ?>
                    <tr>
                        <td class="pt-3 pb-3"><?php echo $allUsers['id'] ?></td> 
                        <td class="pt-3 pb-3"><?php echo $allUsers['admin'] ?></td> 
                        <td class="pt-3 pb-3"><?php echo $allUsers['name'] ?></td> 
                        <td class="pt-3 pb-3"><?php echo $allUsers['lastname'] ?></td> 
                        <td class="pt-3 pb-3"><?php echo $allUsers['email'] ?></td>
                        <td class="pt-3 pb-3"><?php echo $allUsers['pseudo'] ?></td>
                        <td class="text-center pt-3 pb-3">
                            <a href="./update.php?id=<?php echo $allUsers['id'] ?>" class="text-success m-3">Edit</a>
                            <a href="../../app/traitement/user/deleteUser.php?id=<?php echo $allUsers['id'] ?>" class="text-danger m-3">Delete</a> 
                        </td>
                    </tr>
                    <?php endforeach; ?>


                </table>

            </div>
        </div>
        <!-- Pannel Start-->

    </div>

    </body>
</html>