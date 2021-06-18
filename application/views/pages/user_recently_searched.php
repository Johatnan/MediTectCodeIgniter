<?php
    session_start();
       
    $user_recents = $_GET["hospital_name"];

    //1. Setup Database connection
    $servername = "localhost";
    $db_username = "root"; //xampp default
    $db_password = "";  //xampp default
    $database = "meditect_database";

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