    <nav class="navbar navbar-expand-xl navbar-light bg-light">
        <a href="index.php" class="navbar-brand">
            <img class = "logo" src = "images/meditect-logo.png" width = "50px"></i>Medi<b>Tect</b>
        </a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collection of nav links, forms, and other content for toggling -->

        <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
          
           <?php
              if (isset($_SESSION['isLogin'])) {
                if ($_SESSION['isLogin'] == true) {
                  echo '
                      <div class="navbar-nav">
                          <a href="searchHospital.php" class="nav-item nav-link"style = "color:white!important">Hospitals</a>
                      </div>
                  ';
                }
              }
           ?>
          
            <form class="navbar-form form-inline">
                <div class="input-group search-box ml-1">                                
                    <input class="form-control mr-sm-2 rounded-pill pl-1" type="search" placeholder="   Search for anything" aria-label="Search" name="query">
                </div>
            </form>

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
                    <div class="dropdown-menu">
                        <a href="about-us.php" class="dropdown-item"><i class="fa fa-heart"></i></i> About us</a></a>
                        <a href="contact-us.php" class="dropdown-item"><i class="fa fa-phone"></i> Contact us</a></a>
                        <div class="dropdown-divider"></div>
                        <a href="logout.php" class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Logout</a></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
<!-- end of navbar --> 