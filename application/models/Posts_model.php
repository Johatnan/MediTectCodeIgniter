<?php 

class Posts_model extends CI_Model {
    
    public function __construct(){

        $this->load->database();

    }

    public function get_posts() {

        // $query = $this->db->get('blogs');

        // return $query->result_array();
    }

    public function get_posts_single($param){

        // select from blogs db where id == $param
        // $this->db->query('SELECT FROM....')
        $this->db->where('ID', $param);
        $result = $this->db->get('blogs');

        return $result->row_array();

    }

}