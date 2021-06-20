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

            $this->load->view('templates/header-conlink');
            $this->load->view('templates/header-navbar');
            $this->load->view('pages/'.$page);
            $this->load->view('templates/footer');
            $this->load->view('templates/contact-us-backend');
            
        } elseif (strpos($param, 'editprofile') !== false) {

            $this->Posts_model->edit_user_profile();
        
        } elseif (strpos($param, 'add_profile') !== false) {

            $this->Posts_model->add_user_profile();
        
        } elseif (strpos($param, 'profile') !== false) {
            
            $page = 'profile';

            if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
                show_404();

            }

            $data['meditect_client'] = [];
            $profile = $this->Posts_model->get_user_info($_SESSION['id']);
            $records = $this->Posts_model->get_user_records($_SESSION['id']);
            $recents = $this->Posts_model->get_user_recents($_SESSION['id']);

            for ($i = 0; $i < count($profile); $i++){

                array_push($data['meditect_client'], $profile[$i]);

            }

            for ($i = 0; $i < count($records); $i++){

                array_push($data['meditect_client'], $records[$i]);

            }

            for ($i = count($recents) - 1; $i > 0; $i--){

                array_push($data['meditect_client'], $recents[$i]);

            }            
            
            $this->load->view('templates/profile_header');
            $this->load->view('templates/bueno_header');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/profile_footer');
            
        } elseif (strpos($param, 'delete_health_records') !== false) {

            $this->Posts_model->delete_user_records();

        } elseif (strpos($param, 'add_health_records') !== false) {

            $this->Posts_model->add_user_records();

        } elseif (strpos($param, 'login') !== false) {

            $page = 'login';
    
            if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
                show_404();
            }
    
            $this->load->view('templates/angat_header');
            $this->load->view('pages/'.$page);
            $this->load->view('templates/angat_footer');

        } elseif (strpos($param, 'authenticate') !== false) {

            $page = 'authenticate';
    
            if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
                show_404();
            }
          
            $this->load->view('pages/'.$page);

        } elseif (strpos($param, 'logout') !== false) {

            $page = 'logout';

            if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
                show_404();
            }
            $this->load->view('pages/'.$page);

        } elseif (strpos($param, 'searchHospital') !== false) {

            $page = 'searchHospital';

            if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
                show_404();
            }

            $this->load->view('templates/searchHospital_header');
            $this->load->view('pages/'.$page);
            $this->load->view('templates/searchHospital_footer');

        } elseif (strpos($param, 'hospitalProfile') !== false) {

            $page = 'hospitalProfile';

            if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
                show_404();
            }

            $this->load->view('templates/hospitalProfile_header');
            $this->load->view('pages/'.$page);
            $this->load->view('templates/hospitalProfile_footer');

        } elseif (strpos($param, 'user_recently_searched') !== false) {

            $page = 'user_recently_searched';

            if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
                show_404();
            }

            $this->load->view('pages/'.$page);
          
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
