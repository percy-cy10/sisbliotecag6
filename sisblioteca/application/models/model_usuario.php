<?php
class Model_usuario extends CI_model
{
    public function consultar()
    {
            $query = $this->db->get('usuario');
            return $query->result();
    }
    public function guardar($data,$id){
        if($id>0){
                $this->db->where('usua_id', $id);
                $this->db->update('usuario',$data); 
         }else{
                $this->db->insert('usuario',$data);
         }
    }
    public function eliminar($id){
        $this->db->delete('usuario', array('usua_id' => $id)); 
    }
    public function consultar1($id){
        return $this->db->get_where("usuario", array("usua_id" => $id))->row();
        
    }
    public function datos(){
        $query=$this->db->get('usuario');
        return $query;

    }

}
?>