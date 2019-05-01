<?php
abstract class Interface_model extends CI_Model{       
    
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');               

    }

    abstract public function get_values();
   
    abstract public function set_values();
    
    abstract public function update_values();
       
    abstract public function delete_values();

}
