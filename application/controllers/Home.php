<?php 

class Home extends CI_Controller {
    
    public function view($param = null) {

        if($param == null){
            
            $page = 'home';

            if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
                show_404();
            }

            $data['title'] = "Old Posts";
            $data['document'] = "This is a new document";
            $data['posts'] = $this->Posts_model->get_posts();

            // echo '<pre>';
            // print_r($data['posts']);
            
            $this->load->view('templates/header');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/disqus_embeded');
            $this->load->view('templates/footer');

        } else {

            $page = 'single';

            if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
                show_404();
            }

            $data['posts'] = $this->Posts_model->get_posts_single($param);
            $data['title'] = $data['posts']['title'];
            
            $this->load->view('templates/header');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/disqus_embeded');
            $this->load->view('templates/footer');
        }

    }

}