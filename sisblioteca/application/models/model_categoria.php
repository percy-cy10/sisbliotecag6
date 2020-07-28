<?php
class model_categoria extends CI_Model {

     

    public function consultar()
    {
            $query = $this->db->get('categoria', 100);
            return $query->result();
    }
    public function guardar($data){
        
            $this->db->insert('categoria',$data);
        
    }
          
}