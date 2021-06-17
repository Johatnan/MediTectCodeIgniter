<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css">
    
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="css/meditectCSS.css">

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
        
        <title>Meditect-Login/Signup</title>

    </head>
<body>
<!-- Logo -->
<div class="circle">
</div>
    <div id="logo">
        <img src = "images/meditect-logo.png" width = "450px" id="logo-pic">
    </div>

    <!-- navbar, Log-in --> 
    <nav class="navbar navbar-expand-xl navbar-light bg-light">
        <a href="index.php" class="navbar-brand" style="font-size: 50px; margin-left: 20%;"></i>Medi<b>Tect</b></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
            <div class="navbar-nav">
                <a href="index.php" class="nav-item nav-link active" style = "color:white!important">Home</a>
                <a href="about-us.php" class="nav-item nav-link"style = "color:white!important">About Us</a>
            </div>
            
            <div class="navbar-nav ml-auto"> 
                <div class="container">
                    <form class="row" action="<?php echo base_url(); ?>main/login" method="post">
                        <div class="col-md-5">
                            <label class="text" style="color:white;">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="col-md-5">
                            <label class="text" style="color:white;">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-success text" style="margin-top:30px;">Log In</button>
                        </div>
                    </form>
                </div>       
            </div>
        </div>
    </nav>
    <!-- end of navbar -->