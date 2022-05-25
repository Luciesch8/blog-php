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

            </div>
            
            <form class="w-75" action="../../app/traitement/topic/addTopic.php" method="post">
                <div>
                    <label for="">Name</label>
                    <input  class="form-control form-control-lg" type="text" name="name">
                </div>
                <div>
                    <label for="">Description</label>
                    <textarea name="editor" id="editor"></textarea>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Add Topic</button>
                </div>
            </form>


        </div>

    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script src="../../assets/js/script.js"></script>
    </body>
</html>