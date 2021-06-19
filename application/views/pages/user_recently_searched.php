<?php
    session_start();
       
    $user_recents = $_GET["hospital_name"];

    //1. Setup Database connection
    $servername = "eu-cdbr-west-01.cleardb.com";
    $db_username = "bb372c9ecfbe6e"; //xampp default
    $db_password = "f8312940";  //xampp default
    $database = "heroku_5b8ce60be14add9";

    $conn = mysqli_connect($servername, $db_username, $db_password, $database);

    //2. Select sql
    $sql = "INSERT INTO `user_recents`(
            `id`,
            `first_recents`
        )
        VALUES (
            '".$_SESSION['id']."',
            '".$user_recents."'
        )";

    //3. Execute sql
    if (mysqli_query($conn, $sql)) {
        // header("hospitalProfile.php?hospital_name='. $hospitals[$index]["hospital_name"].'");
        header("Location: hospitalProfile.php?hospital_name=$user_recents");
    } else {
        echo'<pre>';
        print_r($user_recents);
        echo'<br>';
        print_r($result_recents);
        echo'<br>';
        print_r($_SESSION['id']);
    }

    //.4 Closing Database Connection
    mysqli_close($conn);
 ?>