<!DOCTYPE html>
<html lang="en">
    <?php include('../includes/head.php')?>
    <body>
        <?php include('../includes/navbar.php')?>

        <section class="vh-100">
                <div class="container py-5 h-100">
                    <div class="row d-flex align-items-center justify-content-center h-100">
                        <div class="col-md-8 col-lg-7 col-xl-6">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="img-fluid" alt="Phone image">
                        </div>
                        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                            <h1 class="mb-5">Registration</h1>
                            <form method="post" action='../app/traitement/inscription.php'>


                                <!-- Lastname input -->
                                <div class="form-outline mb-4">
                                    <input name="lastname" type="text" id="form1Example23" class="form-control form-control-lg" />
                                    <label class="form-label" for="form1Example23">Lastname</label>
                                </div>

                                <!-- Name input -->
                                <div class="form-outline mb-4">
                                    <input name="name" type="text" id="form1Example13" class="form-control form-control-lg" />
                                    <label class="form-label" for="form1Example13">Name</label>
                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input name="email" type="text" id="form1Example23" class="form-control form-control-lg" />
                                    <label class="form-label" for="form1Example23">Email</label>
                                </div>

                                <!-- pseudo input -->
                                <div class="form-outline mb-4">
                                    <input name="pseudo" type="text" id="form1Example23" class="form-control form-control-lg" />
                                    <label class="form-label" for="form1Example23">Pseudo</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input name="password" type="password" id="form1Example23" class="form-control form-control-lg" />
                                    <label class="form-label" for="form1Example23">Password</label>
                                </div>

                                <!-- Password verify input -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="form1Example23" class="form-control form-control-lg" />
                                    <label class="form-label" for="form1Example23">Password Confirm</label>
                                </div>


                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>

                            </form>
                        </div>
                    </div>
                </div>
            </section>
        
    </body>
</html>