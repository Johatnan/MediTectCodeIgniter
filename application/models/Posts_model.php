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

    public function get_user_info($param) {

        $results = array();

        $this->db->where('id', $param);
        $result_clients = $this->db->get('user_info');
        array_push($results, $result_clients->row_array());

        return $results;

    }

    public function edit_user_profile(){

        $profile_picture = $_FILES['profile_picture'];

        $user_first_name = $_POST['user_first_name'];
        $user_last_name = $_POST['user_last_name'];
        $user_address = $_POST['user_address'];
        $user_sex = $_POST['user_sex'];
        $user_birthdate = $_POST['user_birthdate'];
        $user_age = $_POST['user_age'];
        $user_weight = $_POST['user_weight'];
        $user_height = $_POST['user_height'];
        $user_bloodtype = $_POST['user_bloodtype'];

        $sql = "UPDATE `user_info`
        SET
            `user_first_name` = '".$user_first_name."', 
            `user_last_name` =  '".$user_last_name."',
            `user_profile` = '".$profile_picture['name']."',
            `user_sex` = '".$user_sex."',
            `user_age` = '".$user_age."',
            `user_birthdate` = '".$user_birthdate."',
            `user_address` = '".$user_address."',
            `user_bloodtype` = '".$user_bloodtype."',
            `user_height` = '".$user_height."',
            `user_weight` = '".$user_weight."'
        WHERE (
            ".$_SESSION['id']." = id
        )";

        if ($this->db->query($sql)) {

            move_uploaded_file($profile_picture['tmp_name'], 'images/users/'.$profile_picture['name']);
            header("Location: profile.php");

        } else {

            echo'<pre>';
            print_r($sql);

        }

    }

    public function add_user_profile(){

        $profile_picture = $_FILES['profile_picture'];

        $user_first_name = $_POST['user_first_name'];
        $user_last_name = $_POST['user_last_name'];
        $user_address = $_POST['user_address'];
        $user_sex = $_POST['user_sex'];
        $user_birthdate = $_POST['user_birthdate'];
        $user_age = $_POST['user_age'];
        $user_weight = $_POST['user_weight'];
        $user_height = $_POST['user_height'];
        $user_bloodtype = $_POST['user_bloodtype'];

        $sql = "INSERT INTO `user_info`(
                `id`,  
                `user_first_name`, 
                `user_last_name`, 
                `user_profile`, 
                `user_sex`, 
                `user_age`, 
                `user_birthdate`, 
                `user_address`, 
                `user_bloodtype`, 
                `user_height`, 
                `user_weight`) 
            VALUES (
                '".$_SESSION['id']."',
                '".$user_first_name."',
                '".$user_last_name."',
                '".$profile_picture['name']."',
                '".$user_sex."',
                '".$user_age."',
                '".$user_birthdate."',
                '".$user_address."',
                '".$user_bloodtype."',
                '".$user_height."',
                '".$user_weight."')
            ";        
        if ($this->db->query($sql)) {

            move_uploaded_file($profile_picture['tmp_name'], 'images/users/'.$profile_picture['name']);
            header("Location: profile.php");

        } else {

            echo'<pre>';
            print_r($sql);

        }

    }

    public function delete_user_records() {

        $chronic_record_id = $_GET['chronic_record_id'];
        $drug_record_id = $_GET['drug_record_id'];
        $food_record_id = $_GET['food_record_id'];
        $medicine_record_id = $_GET['medicine_record_id'];

        if (!empty($chronic_record_id)) {
            $sql = "UPDATE user_health_records
                SET 
                    user_chronic_conditions = '', 
                    user_year_diagnosis= 0
                WHERE 
                    health_record_id = $chronic_record_id;";
        } elseif (!empty($drug_record_id)) {
            $sql = "UPDATE user_health_records
                SET 
                    user_drug_allergies = '', 
                    user_reactions= ''
                WHERE 
                    health_record_id = $drug_record_id;";
        } elseif (!empty($food_record_id)) {
            $sql = "UPDATE user_health_records
                SET 
                    user_food_allergies = '', 
                    user_food_reactions= ''
                WHERE 
                    health_record_id = $food_record_id;";
        } elseif (!empty($medicine_record_id)) {
            $sql = "UPDATE user_health_records
                SET 
                    user_medicine = ''
                WHERE 
                    health_record_id = $medicine_record_id;";
        }   

        if ($this->db->query($sql)) {

            header("Location: profile.php");

        } else {

            echo'<pre>';
            print_r($sql);

        }

    }

    public function add_user_records() {

        ob_start();

        $new_chronic = $_POST['new_chronic'];
        $new_year = $_POST['new_year'];    
        $new_drug = $_POST['new_drug'];
        $new_reaction = $_POST['new_reaction'];    
        $new_food = $_POST['new_food'];
        $new_food_reaction = $_POST['new_food_reaction'];    
        $new_medicine = $_POST['new_medicine'];

        if (!empty($new_chronic) or !empty($new_year)) {
            $sql = "INSERT INTO `user_health_records`(
                `id`, 
                `user_chronic_conditions`, 
                `user_year_diagnosis`) 
            VALUES (
                '".$_SESSION['id']."',
                '".$new_chronic."',
                '".$new_year."'
            )";
        } elseif (!empty($new_drug) or !empty($new_reaction)) {
            $sql = "INSERT INTO `user_health_records`(
                `id`, 
                `user_drug_allergies`, 
                `user_reactions`) 
            VALUES (
                '".$_SESSION['id']."',
                '".$new_drug."',
                '".$new_reaction."'
            )";
        } elseif (!empty($new_food) or !empty($new_food_reaction)) {
            $sql = "INSERT INTO `user_health_records`(
                `id`, 
                `user_food_allergies`, 
                `user_food_reactions`) 
            VALUES (
                '".$_SESSION['id']."',
                '".$new_food."',
                '".$new_food_reaction."'
            )";
        } elseif (!empty($new_medicine)) {
            $sql = "INSERT INTO `user_health_records`(
                `id`, 
                `user_medicine`) 
            VALUES (
                '".$_SESSION['id']."',
                '".$new_medicine."'
            )";
        }

        if ($this->db->query($sql)) {

            header("Location: profile.php");

        } else {

            echo'<pre>';
            print_r($sql);

        }

    }

    public function user_logout() {

        session_start();
        session_destroy();
        header('Location: login.php');

    }

}