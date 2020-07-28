<?php
class Model_ejemplar extends CI_Model {

     

    public function consultar()
    {
            $query = $this->db->get('ejemplar', 100);
            return $query->result();
    }
    public function guardar($data){
        
            $this->db->insert('ejemplar',$data);
        
    }
          
}
