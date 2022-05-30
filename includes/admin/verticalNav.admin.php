<div class="row">
            <!-- Vertical navbar -->
        <div class="vertical-nav bg-light w-25 vh-100" id="sidebar">


        <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Charts</p>

        <ul class="nav flex-column bg-light mb-0">
            <li class="nav-item mb-3">
            <a href="../admin/index.php" class="nav-link text-dark font-italic">
                        <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>
                        Manage Posts
                    </a>
            </li>

            <?php 

            if ($_SESSION['admin'] == 1){

                echo '<li class="nav-item mb-3">
                <a href="../user/index.php" class="nav-link text-dark font-italic">
                            <i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>
                            Manage Users
                        </a>
                </li>
                <li class="nav-item mb-3">
                <a href="../topic/index.php" class="nav-link text-dark font-italic">
                            <i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>
                            Manage Topics
                        </a>
                </li>';

            }

            ?>

            
        </ul>
    </div>
        <!-- End vertical navbar -->