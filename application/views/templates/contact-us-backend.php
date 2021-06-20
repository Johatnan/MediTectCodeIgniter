<?php

    if(isset($_POST['btnSubmit'])){

        if (empty($_POST['txtName']) || empty($_POST['txtEmail']) ||  empty($_POST['txtMsg'])) {
            $error = "Important fields cannot be empty (Name, Email, Message)";
            $_SESSION['error'] = $error;
            header("Location: contact-us.php");
        } else if (!filter_var($_POST['txtEmail'], FILTER_VALIDATE_EMAIL)) {
            $error = "Enter your valid email address";
            $_SESSION['error'] = $error;
            header("Location: contact-us.php");
        } else if (strlen($_POST['txtMsg']) < 10 && strlen($_POST['txtMsg']) > 140) {
            $error = "Message length should greater than 10 & less than 140 characters";
            $_SESSION['error'] = $error;
            header("Location: contact-us.php");
        } else {

            $servername = "eu-cdbr-west-01.cleardb.com";
            $db_username = "bb372c9ecfbe6e"; //xampp default
            $db_password = "f8312940";  //xampp default
            $database = "heroku_5b8ce60be14add9";

            $conn = mysqli_connect($servername, $db_username, $db_password, $database);

            $name = $_POST['txtName'];
            $email = $_POST['txtEmail'];
            $phone = $_POST['txtPhone'];
            $msg = $_POST['txtMsg'];

            $is_done = $conn->query("INSERT INTO `contact_us`( `name`, `email`, `phone`, `msg` ) VALUES( '$name','$email','$phone','$msg' )");
            if ($is_done == TRUE) {
                $btnSubmit = "btnSubmit";
                $_SESSION['btnSubmit'] = $btnSubmit;
                header("Location: contact-us.php");
            }
        }    
    }

?>
