<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css">
    
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="css/hospitalProfile.css">

        <!-- Icon -->
        <link rel="icon" href="images/meditect-logo.png">

        <!-- Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda+One">

        <!-- Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <!-- BootStrap Script-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <!-- SweetAlert -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <!-- Flickity CSS -->
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

        <!-- Flickity Script -->
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

        
        <title>Meditect-Search Hospital</title>

    </head>
<body class="standard-size">
<!-- navbar, search bar -->
<nav class="navbar navbar-expand-xl navbar-light bg-light">
            <a href="index.php" class="navbar-brand">
                <img class = "logo" src = "images/home/meditect-logo.png" width = "50px"></i>Medi<b>Tect</b>
            </a>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collection of nav links, forms, and other content for toggling -->

            <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
                <div class="navbar-nav">
                <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style = "color:white!important">How to use</a>
                        <div class="dropdown-menu">
                                <a href="login.php" class="dropdown-item">User must make an account in order to <br>
								access all of MediTect's features.</a>
                            </div>
                        </div>
                    <a href="searchHospital.php?default" class="nav-item nav-link"style = "color:white!important">Hospitals</a>
                </div>

                <!-- -----------right navbar---------- -->

                <div class="navbar-nav ml-auto">
                    <div class="nav-item dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action" style = "color:white!important"><i class="fa fa-stethoscope" aria-hidden="true" style = "color:white!important"></i> User Profile</a>
                        <div class="dropdown-menu">
                            <a href="profile.php" class="dropdown-item"><i class="fa fa-user"></i> Profile</a></a>
                            <a href="about-us.php" class="dropdown-item"><i class="fa fa-heart"></i></i> About us</a></a>
                            <a href="contact-us.php" class="dropdown-item"><i class="fa fa-phone"></i> Contact us</a></a>
                            <div class="dropdown-divider"></div>
                            <a href="logout.php" class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Logout</a></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
		<!-- end of navbar--> 