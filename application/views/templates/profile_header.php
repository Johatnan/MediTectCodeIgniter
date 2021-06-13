<!-- <?php
// Start the session
session_start();

$profile_picture;
?> -->
<!DOCTYPE html>
<html lang="en">

    <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <title>Profile</title>
       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda+One">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
       <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

       <link rel="stylesheet" type="text/css" href="css/style.css">
       <!-- ?version=51 -->

       <link rel="shortcut icon" href="images/meditect-logo.png">
    <style>

      @font-face {
        font-family: quicksand;
        src: url(css/fonts/Quicksand_Book.otf);
        font-style: normal;
        font-size: 20px;
        line-height: 25px;
      }

      body {
          background: #f6fdff;
          font-family: quicksand !important;
      }

      .editColChronic {
        display: none;
      }

      .editColChronic:focus {
        outline: none !important;
        box-shadow: none;
        background-color: transparent;
      }

      .formDiv {
        background-image: url(images/formsbg.png);
      }

    </style>
    </head> 

    <body>
        <?php
          // $user_id = $_GET['id'];

        //   $meditect_client = array(""); 

        //   //1. Setup Database connection
        //   $servername = "localhost";
        //   $db_username = "root"; //xampp default
        //   $db_password = "";  //xampp default
        //   $database = "meditect_database";

        //   $conn = mysqli_connect($servername, $db_username, $db_password, $database);

        //   //2. SELECT SQL
        //   $sql_clients = "SELECT * FROM `user_info`
        //     WHERE (
        //       id='".$_SESSION['id']."'
        //     )";

        //   $sql_records = "SELECT * FROM `user_health_records`
        //   WHERE (
        //     id='".$_SESSION['id']."'
        //   )";

        //   $sql_recents = "SELECT 
        //     hospitals.hospital_name, 
        //     hospitals.img_1, 
        //     hospitals.rating, 
        //     hospitals.hospital_address, 
        //     hospitals.hospital_contact 
        //   FROM hospitals 
        //   INNER JOIN user_recents 
        //   ON 
        //     user_recents.id = ".$_SESSION['id']." AND 
        //     user_recents.first_recents=hospitals.hospital_name
        //   ";

        //   //3. Execute SQL
        //   $result_clients = mysqli_query($conn, $sql_clients);
        //   while ($row = mysqli_fetch_assoc($result_clients)) {
        //     $meditect_client[0] = $row;
        //   }

        //   $result_recents = mysqli_query($conn, $sql_recents);
        //   while ($row = mysqli_fetch_assoc($result_recents)) {
        //     array_unshift($meditect_client, $row);
        //   }

        //   $result_records = mysqli_query($conn, $sql_records);
        //   while ($row = mysqli_fetch_assoc($result_records)) {
        //     array_push($meditect_client, $row);
        //   }

        //   //.4 Closing Database Connection
        //   mysqli_close($conn);
        ?>