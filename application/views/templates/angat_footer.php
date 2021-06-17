</body>
</html>
<!-- Sign Up PHP -->
<?php
if(isset($_POST['signup'])){
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $password = ($_POST['password']); //MD5 encryption
        $confirm_password = ($_POST['confirm_password']); //MD5 encryption

        //Checking of password
        $number = preg_match('@[0-9]@', $password);
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

        if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase ||  $specialChars) {
            echo'<script type="text/javascript"> swal("Registration Failed", "Password does not meet requirements", "warning");</script>';//password does not meet requirements
          } else {
           //1. Setup Database connection
            
            $epassword = md5($password);
            $servername = "localhost";
            $db_username = "root"; //xampp default
            $db_password = "";  //xampp default
            $database = "meditect_database";
        
            $conn = mysqli_connect($servername, $db_username, $db_password, $database);

            $e = "SELECT 'email' FROM meditect_client WHERE email='$email'";//checking of emails
            $email_counter = mysqli_query($conn,$e);//query
            $count = $email_counter->num_rows;//int value of email
            if($count>0){
                echo'<script type="text/javascript"> swal("Registration Failed", "Email already used", "warning");</script>';//email already used
            }else{
                //2. Insert SQL
                if($password==$confirm_password){
                    $sql = "INSERT INTO `meditect_client`(
                        `full_name`, 
                        `email`, 
                        `password`
                        ) VALUES (
                        '".$full_name."',
                        '".$email."',
                        '".$epassword."')
                        ";
                        
                    //3. Execute SQL
                    if (mysqli_query($conn, $sql)) {
                            echo'<script type="text/javascript"> swal("Sign Up Complete!", "Thank you for joining Meditect", "success");</script>';
                            }else{
                            echo'<script type="text/javascript"> swal("Registration Failed", "", "error");</script>';
                            }
                }else{
                    echo'<script type="text/javascript"> swal("Registration Failed", "Password does not match", "warning");</script>';//password does not match
                }
            } 
            //.4 Closing Database Connection
            mysqli_close($conn);
        }
    }
?>
<!-- Incorrect credentials php -->
<?php 
    if(isset($_GET['error'])){
        echo'<script type="text/javascript"> swal("Log-in Failed", "Invalid Credentials", "warning");</script>';//invalid credentials
    }
?>
