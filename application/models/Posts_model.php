<?php 

class Posts_model extends CI_Model {
    
    public function __construct(){

        $this->load->database();

    }

    public function get_posts() {

        $query = $this->db->get('meditect_client');

        return $query->result_array();

    }

    public function get_posts_single($param){

        // select from blogs db where id == $param
        // $this->db->query('SELECT FROM....')        
        $this->db->where('id', $param);
        $result_client = $this->db->get('meditect_client');
        
        return $result_client->row_array();

    }

    public function get_user_records($param){

        $results = array();

        $this->db->where('id', $param);
        $result_records = $this->db->get('user_health_records');

        return $result_records->result_array();

    }

    public function get_user_recents($param) {

        $results = array();

        $query = $this->db->query("SELECT 
                hospitals.hospital_name, 
                hospitals.img_1, 
                hospitals.rating, 
                hospitals.hospital_address, 
                hospitals.hospital_contact 
            FROM hospitals 
            INNER JOIN user_recents 
            ON 
                user_recents.id = ".$param." AND 
                user_recents.first_recents=hospitals.hospital_name
        ");

        return $query->result_array();

    }

    public function get_user_profile($param){

        $results = array();

        $this->db->where('id', $param);
        $result_clients = $this->db->get('meditect_client');
        array_push($results, $result_clients->row_array());

        return $results;

    }
    public function authenticate($email,$password){

       $this->db->where('email',$email);
       $this->db->where('password',$password);
       //user found
       $query = $this->db->get('meditect_client');

        if ($query->num_rows > 0) {

            $_SESSION['name'] = $row['full_name'];
            // $_SESSION['image'] = $row['user_img'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['isLogin'] = true;
            header("Location: profile.php");
            // echo"Login done";
            
          } else {
            //invalid credentials
            $_SESSION['isLogin'] = false;
            echo"Login error";
            header("Location: login.php?error=Incorrect Credentials");
          }
        
    }

}
        // $this->db->query('SELECT FROM....')
        // $result_recents = mysqli_query($conn, $sql_recents);
        // while ($row = mysqli_fetch_assoc($result_recents)) {
        //   array_unshift($meditect_client, $row);
        // }

        // //1. Setup Database connection
        // $servername = "localhost";
        // $db_username = "root"; //xampp default
        // $db_password = "";  //xampp default
        // $database = "meditect_database";

        // $conn = mysqli_connect($servername, $db_username, $db_password, $database);

        // //2. SELECT SQL
        // $sql_clients = "SELECT * FROM `user_info`
        // WHERE (
        //     id= $param
        // )";

        // $sql_records = "SELECT * FROM `user_health_records`
        // WHERE (
        //     id= $param
        // )";

        // $sql_recents = "SELECT 
        //     hospitals.hospital_name, 
        //     hospitals.img_1, 
        //     hospitals.rating, 
        //     hospitals.hospital_address, 
        //     hospitals.hospital_contact 
        // FROM hospitals 
        // INNER JOIN user_recents 
        // ON 
        //     user_recents.id = $param AND 
        //     user_recents.first_recents=hospitals.hospital_name
        // ";

        // //3. Execute SQL
        // $result_clients = mysqli_query($conn, $sql_clients);
        // while ($row = mysqli_fetch_assoc($result_clients)) {
        //     $results[0] = $row;
        // }

        // $result_recents = mysqli_query($conn, $sql_recents);
        // while ($row = mysqli_fetch_assoc($result_recents)) {
        //     array_unshift($results, $row);
        // }

        // $result_records = mysqli_query($conn, $sql_records);
        // while ($row = mysqli_fetch_assoc($result_records)) {
        //     array_push($results, $row);
        // }

        // //.4 Closing Database Connection
        // mysqli_close($conn);