<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class model_ejemplar extends CI_Model {

     

    public function consultar()
    {
            $query = $this->db->get('ejemplar', 100);
            return $query->result();
    }
    public function guardar($data){
            var_dump($data);
            $this->db->insert('ejemplar',$data);
        
    }
          
}
