<?php

    $this->load->library('form_validation');
    $this->form_validation->set_rules('email','Email','required');
    $this->form_validation->set_rules('password','Password','required');
    if($this->form_validation->run()){
        //true
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $query = $this->db->query(" SELECT 
        * 
      FROM 
        `meditect_client` 
      WHERE 
        `email`='".$email."'
        AND
        `password`='".$password."'
        ");

        $count = $query->result_array();

        if(!empty($count)){
            print_r($count);
            $_SESSION['name'] = $count[0]['full_name'];
            $_SESSION['id'] = $count[0]['id'];
            $_SESSION['email'] = $count[0]['email'];
            $_SESSION['isLogin'] = true;
            header("Location: profile.php"); 
        }else{
            header("Location: login.php?error=Incorrect Credentials"); 
        }
    }
?>