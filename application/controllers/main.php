<?php
    function login(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $this->load->model('Post_model');
        if($this->Post_model->authenticate($email,$password)){
            $_SESSION['name'] = $row['full_name'];
            // $_SESSION['image'] = $row['user_img'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['isLogin'] = true;
            header("Location: profile.php");
            // echo"Login done";

        }else{

            //invalid credentials
            $_SESSION['isLogin'] = false;
            echo"Login error";
            header("Location: login.php?error=Incorrect Credentials");
        }
    }
?>