<?php
class model_categoria extends CI_Model {

     

    public function consultar()
    {
            $query = $this->db->get('categoria', 100);
            return $query->result();
    }
    public function guardar($data,$id){
        if($id>0){
                $this->db->where('cate_id', $id);
                $this->db->update('categoria',$data); 
         }else{
                $this->db->insert('categoria',$data);
         }
    } 
    public function consultar1($id){
      return $this->db->get_where("categoria", array("cate_id" => $id))->row();
        
    } 
    public function consultarvarios($id){
<<<<<<< HEAD
     
      if(!$this->db->get_where("ejemplar", array("ejem_cate_id" => $id))->row()){
           echo "incorrecto";
      }else{
        return $this->db->get_where("ejemplar", array("ejem_cate_id" => $id))->row();
      }
        
    } 
=======

        return $this->db->get_where("ejemplar", array("ejem_cate_id" => $id))->row();
  } 
>>>>>>> 73e15412df77e6af57dc12351a1e06da4a2186ef
   
}