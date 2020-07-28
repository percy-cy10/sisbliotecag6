<?php
class Model_usuario extends CI_model
{
    public function consultar()
    {
            $query = $this->db->get('usuario', 10);
            return $query->result();
    }
    public function guardar($data){
        
            $this->db->insert('usuario',$data);
        
    }

}
?>