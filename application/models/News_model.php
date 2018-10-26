<?php
class News_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_news($slug = FALSE)
        {
        if ($slug === FALSE)
        {
                $query = $this->db->get('clientes');
                return $query->result_array();
        }

        $query = $this->db->get_where('clientes', array('slug' => $slug));
        return $query->row_array();
        }
        
        public function set_news()
        {
            $this->load->helper('url');
        
            $slug = url_title($this->input->post('title'), 'dash', TRUE);
        
            $data = array(
                'fecha' =>$this->input->post('fecha'),
                'nombre_completo' =>$this->input->post('nombre_completo'),
                'pais' =>$this->input->post('pais'),
                'slug' => $slug,
                'email' =>$this->input->post('email'),
                'extranjero' =>$this->input->post('extranjero'),
                'mexicano' =>$this->input->post('mexicano'),
                'moneda_origen' =>$this->input->post('moneda_origen'),
                'moneda_cambio' =>$this->input->post('moneda_cambio'),
                'cantidad' =>$this->input->post('cantidad'),
                'total' =>$this->input->post('total')

            );
        
            return $this->db->insert('clientes', $data);
        }

      
       
}