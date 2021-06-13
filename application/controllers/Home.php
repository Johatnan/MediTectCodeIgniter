<?php 

class Home extends CI_Controller {
    
    public function view($param = null) {

        if($param == 'profile'){
            
            $page = 'profile';

            if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
                show_404();
            }

            $data['meditect_client'] = $this->Posts_model->get_user_profile(0);

            // echo '<pre>';
            // print_r($data['client']);
            
            $this->load->view('templates/profile_header');
            $this->load->view('templates/bueno_header');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/profile_footer');

        } else {

            $page = 'single';

            if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
                show_404();
            }

            $data['client'][0] = $this->Posts_model->get_posts_single($param);
            $data['client'][1] = $this->Posts_model->get_user_records($param);
            $data['full_name'] = $data['client'][0]['full_name'];
            
            $this->load->view('templates/header');
            $this->load->view('pages/'.$page, $data);
            // $this->load->view('templates/disqus_embeded');
            // $this->load->view('templates/footer');
        }

    }

}