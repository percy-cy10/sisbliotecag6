<?php
class model_ejemplar extends CI_Model {

     

    public function consultar()
    {
            $query = $this->db->get('ejemplar', 10);
            return $query->result();
    }
    public function guardar($data){
        
            $this->db->insert('ejemplar',$data);
        
    }
          
}
