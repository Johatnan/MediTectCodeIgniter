<?php 

class Home extends CI_Controller {
    
    public function view($param = null) {

        if ($param == null) {

            $page = 'index';

            if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
                show_404();
            }

            // $this->Post_model->get_post();
            
            $this->load->view('templates/header-homelink');
            $this->load->view('templates/header-navbar');
            $this->load->view('pages/'.$page);

        } elseif (strpos($param, 'about-us') !== false) {
            
            $page = 'about-us';

            if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
                show_404();
            }

            $this->load->view('templates/header-abtlink');
            $this->load->view('templates/header-navbar');
            $this->load->view('pages/'.$page);
            $this->load->view('templates/disqus_embeded');
            $this->load->view('templates/footer');
               
        } elseif (strpos($param, 'contact-us') !== false) {
            
            $page = 'contact-us';

            if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
                show_404();
            }

            $this->load->view('templates/header-abtlink');
            $this->load->view('templates/header-navbar');
            $this->load->view('pages/'.$page);
            $this->load->view('templates/disqus_embeded');
            $this->load->view('templates/footer');
            
        } elseif (strpos($param, 'profile') !== false) {
            
            $page = 'profile';

            if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
                show_404();
            }

            $data['meditect_client'] = $this->Posts_model->get_user_profile(0);
            $records = $this->Posts_model->get_user_records(0);
            $recents = $this->Posts_model->get_user_recents(0);

            for ($i = 0; $i < count($records); $i++){

                array_push($data['meditect_client'], $records[$i]);

            }

            for ($i = 0; $i < count($recents); $i++){

                array_push($data['meditect_client'], $recents[$i]);

            }            

            $_SESSION['isLogin'] = true;
            $_SESSION['name'] = $data['meditect_client'][0]['full_name'];
            
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
        }

    }

}