<?php            
    class Admin extends CI_Controller {    
        
        public function __construct()
        {
            parent::__construct();
            //Do your magic here
           
            $this->load->helper('url_helper');                        
        }

        public function index()
        {
            $this->load->view('admin/index.html');            
        }    
    }
    
    /* End of file Controllername.php */
        