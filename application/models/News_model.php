<?php
class News_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();               
        }

        public function get_news($slug = FALSE)
        {
                if ($slug == FALSE)
                {
                        $this->db->order_by('id', 'ASC');
                        $query = $this->db->get('news');                        
                        return $query->result_array();
                }

                $query = $this->db->get_where('news', array('slug' => $slug));
                return $query->row_array();
        }
        public function set_news()
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
        public function update_news()
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
        public function delete_news()
        {
                $this->load->helper('url');               
                $id = $this->input->post('id');
                return $this->db->delete('news', array('id' => $id));             
        }
}
