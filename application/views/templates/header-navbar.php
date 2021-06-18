<!-- <?php
  session_start();
?> -->

<!-- navbar, search bar --> 

<nav class="navbar navbar-expand-xl navbar-light bg-light">
    <a href="index.php" class="navbar-brand">
        <img class = "logo" src = "images/home/meditect-logo.png" width = "50px"></i>Medi<b>Tect</b>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collection of nav links, forms, and other content for toggling -->
    <div id="navbarCollapse">
        <div class="navbar-nav">

            <?php
                if (isset($_SESSION['isLogin'])) {
                    if ($_SESSION['isLogin'] == true) {
                        echo '
                            <a href="searchHospital.php?default" class="nav-item nav-link"style = "color:white!important">Hospitals</a>
                        ';
                    }
                }
            ?>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style = "color:white!important">How to use</a>
                    <?php
                        if (isset($_SESSION['isLogin'])) {
                            if ($_SESSION['isLogin'] == true) {
                                echo '
                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item"> 
                                            <b>Search for hospitals:</b> Allow the website to access your loca- <br> tion. Click on <i> Hospitals</i> to view all the
                                            hospitals in Makati City.
                                            <br>
                                            <br><b>Edit Profile: </b> Under <i>User Profile</i>, 
                                            click <i> profile </i> to access and
                                            <br> edit your information details (eg. name, symptoms, location)
                                            <br>
                                            <br><b>Concerns: </b> For assistance with resetting your account or
                                            <br> suggestions for the site, click on <i> Contact us </i> under <i> User 
                                            <br> Profile </i>
                                        </a>
                                    </div>  
                                ';
                            }
                        } else {
                                echo '
                                <div class="dropdown-menu">
                                    <a href="login.php" class="dropdown-item"> <b>Search hospitals: </b> User must make an account in order to <br>
                                    access all of MediTects features. 
                                    <br><b>Concerns: </b> For assistance with resetting your account or
                                    <br> suggestions for the site, click on <i> Contact us </i> under <i> User 
                                    <br> Profile </i>
                                    </a>
                                </div>
                                ';
                        }
                    ?>
            </div>
        </div>
    </div>
        
<!-- -----------right navbar---------- -->

            <div class="navbar-nav ml-auto">
                <div class="nav-item dropdown">
                
                    <?php
                        if (isset($_SESSION['isLogin'])) {
                            if ($_SESSION['isLogin'] == true) {
                                echo '
                                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action" style = "color:white!important"><i class="fa fa-stethoscope" aria-hidden="true" style = "color:white!important"></i> '.$_SESSION['name'].'</a>
                                ';
                            }
                        } else {
                                echo '
                                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action" style = "color:white!important"><i class="fa fa-stethoscope" aria-hidden="true" style = "color:white!important"></i> User Profile</a>
                                ';
                        }
                    ?>
                
                    <?php   
                        if(isset($_SESSION['email']) and $_SESSION['email']!='') {
                            echo ' 
                            <div class="dropdown-menu">
                            <a href="profile.php" class="dropdown-item"><i class="fa fa-user-o"></i> Profile</a></a>
                            <a href="about-us.php" class="dropdown-item"><i class="fa fa-heart"></i></i> About us</a></a>
                            <a href="contact-us.php" class="dropdown-item"><i class="fa fa-phone"></i> Contact us</a></a>
                            <div class="dropdown-divider"></div>
                            <a href="logout.php" class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Logout</a></a>
                            </div>
                        ';
                        } else {
                            echo '
                            <div class="dropdown-menu">
                            <a href="about-us.php" class="dropdown-item"><i class="fa fa-heart"></i></i> About us</a></a>
                            <a href="contact-us.php" class="dropdown-item"><i class="fa fa-phone"></i> Contact us</a></a>
                            <div class="dropdown-divider"></div>
                            <a href="login.php" class="dropdown-item"><i class="fa fa-sign-in">&#xE8AC;</i> Register</a></a>
                            </div>
                            ';
                        } 
                    ?> 
            </div>
        </div>
    </div>
</nav>

<!-- end of navbar-->