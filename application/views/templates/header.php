<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogingism</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda+One">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../css/meditectCSS.css?version=51">
    <link rel="stylesheet" type="text/css" href="css/about-meditect.css?version=51">
    <link rel="icon" href="images/home/meditect-logo.png">
    <link rel="shortcut icon" href="images/meditect-logo.png">

    <!-- banner -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>

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
                <a href="searchHospital.php" class="nav-item nav-link"style = "color:white!important">Hospitals</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style = "color:white!important">How to use</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item"> 
                            <b>Search for hospitals:</b> Click on <i> Hospitals</i> to view all the
                            <br> hospitals in Makati City.
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
                </div>
            </div>
        </div>
            
            <!-- -----------right navbar---------- -->

            <div class="navbar-nav ml-auto">
                <div class="nav-item dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action" style = "color:white!important"><i class="fa fa-stethoscope" aria-hidden="true" style = "color:white!important"></i> User Profile</a>
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
                            <a href="logout.php" class="dropdown-item"><i class="fa fa-sign-in">&#xE8AC;</i> Register</a></a>
                            </div>
                            ';
                        } 
                    ?> 
                </div>
            </div>
        </div>
    </nav>
    
