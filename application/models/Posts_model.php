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

        $this->db->where('id', $param);
        $result_records = $this->db->get('user_health_records');
        return $result_records->row_array();

    }

}