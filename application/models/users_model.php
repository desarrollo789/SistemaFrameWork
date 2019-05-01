<?php
class users_model extends Interface_model {   
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
        switch (table) {
            case 'admin':   
                parameter == array(
                    'slug' => $slug,
                    'id_admin' => $this->input->post(''),
                    'name' => $this->input->post(''),
                    'last_name' => $this->input->post(''),
                    'email' => $this->input->post(''),
                    'password' => $this->input->post(''),
                    'address' => $this->input->post(''),
                    'id_role' => $this->input->post('')
                );         
                break;
            case 'product': 
                parameter == array(
                    'slug' => $slug,
                    'id_product' => $this->input->post(''),
                    'model' => $this->input->post(''),
                    'price' => $this->input->post(''),
                    'color' => $this->input->post(''),
                    'descuento' => $this->input->post(''),
                    'image' => $this->input->post(''),
                    'id_brand' => $this->input->post(''),
                    'id_features' => $this->input->post('')
                );
                break;
            case 'user':
                parameter == array(
                    'slug' => $slug,
                    'id_user' => $this->input->post(''),
                    'name' => $this->input->post(''),
                    'last_name' => $this->input->post(''),
                    'email' => $this->input->post(''),
                    'password' => $this->input->post(''),
                    'address' => $this->input->post(''),
                    'id_role' => $this->input->post(''),                    
                );         
                break;                        
            default:
            parameter == array();
                break;
        }
    }
    
    public function table_type()
    {

    }        

    public function get_values($slug = FALSE)
    {        
        if ($slug == FALSE)
        {
                $this->db->order_by('id', 'ASC');
                $query = $this->db->get(table);                        
                return $query->result_array();
        }

        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
    }
    public function set_values()
    {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);
        
        $data = array(
                'title' => $this->input->post('title'),
                'slug' => $slug,
                'text' => $this->input->post('text')
        );

        return $this->db->insert('news', $data);
    }
    public function update_values()
    {
        $this->load->helper('url');
                $slug = url_title($this->input->post('title'), 'dash', TRUE);
                $id = $this->input->post('id');
                $data = array(
                        'id' => $this->input->post('id'),
                        'title' => $this->input->post('title'),
                        'slug' => $slug,
                        'text' => $this->input->post('text')
                );   
                return $this->db->update('news', $data, array('slug' => $slug));
    }
    public function delete_values()
    {
        $this->load->helper('url');               
                $id = $this->input->post('id');
                return $this->db->delete('news', array('id' => $id)); 
    }
}