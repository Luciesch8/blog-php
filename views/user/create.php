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
            
            <form class="w-75" action="../../app/traitement/user/addUser.php" method="post">
                <!-- Name input -->
                <div class="form-outline mb-4">
                    <input name="name" type="text" class="form-control form-control-lg" />
                    <label class="form-label">Name</label>
                </div>

                <!-- Lastname input -->
                <div class="form-outline mb-4">
                    <input name="lastname" type="text"  class="form-control form-control-lg" />
                    <label class="form-label">Lastname</label>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input name="email" type="text"  class="form-control form-control-lg" />
                    <label class="form-label" for="form1Example23">Email</label>
                </div>

                <!-- Pseudo input -->
                <div class="form-outline mb-4">
                    <input name="pseudo" type="text" class="form-control form-control-lg" />
                    <label class="form-label">Pseudo</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input name="password" type="password"class="form-control form-control-lg" />
                    <label class="form-label">Password</label>
                </div>


                <!-- Pannel -->
                <div>
                    <label for="">Type</label>
                    <select class="form-select" name="type" id="">
                        <option name="user" value="0">User</option>
                        <option name="admin" value="1">Admin</option>

                    </select>
                </div>
                <div class="mt-5">
                    <button type="submit" class="btn btn-primary">Add User</button>
                </div>
            </form>


        </div>
        <!-- Pannel Start-->

    </div>



    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script src="../../assets/js/script.js"></script>
    </body>
</html>