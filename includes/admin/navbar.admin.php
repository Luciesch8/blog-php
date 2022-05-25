<?php
session_start();
  if (isset($_SESSION['pseudo'])||isset($_SESSION['email'])) {
    $connect = true;
  }else {
    $connect = false;
  }


?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                        <a class="nav-link text-dark" href="../home.php">Home</a>
                        </li>

                    </ul>
                </div>
                <a> <img scr="../assets/img/icons8-unlock-64.png"/> <a>

                <div class="d-flex align-items-center mt-2">
                    <?php

                    if($connect == true){
                        echo '
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                '.$_SESSION['name'].' '. $_SESSION['lastname'].'
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="../../app/traitement/logout.php">Deconnexion</a></li>
                                    <li><a class="dropdown-item" href="../../views/admin/index.php">Dashboard</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                        ';
                    }else{
                        echo '
                        <a class="text-reset me-3" href="./register.php">
                            <p class="text-dark">Sign Up</p>
                        </a>
                        <a class="text-reset me-3" href="./login.php">
                            <p class="text-dark">Login</p>
                        </a>
                        ';
                    }

                    ?>
                </div>
            </div>

    </nav>