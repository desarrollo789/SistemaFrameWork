<?php            
    class Index extends CI_Controller {    
        
        public function __construct()
        {
            parent::__construct();
            //Do your magic here
           
            $this->load->helper('url_helper');                    
            $this->load->library('styles');                    
        }

        public function index()
        {
            $routes = $this->styles->getstyle();
            $this->load->view('admin/index.html', $routes);                    
        }    
    }
    
    /* End of file Controllername.php */
        