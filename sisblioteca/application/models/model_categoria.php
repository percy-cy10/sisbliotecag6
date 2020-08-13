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

      if(!$this->db->query("SELECT * FROM ejemplar,categoria WHERE ejem_cate_id=$id AND cate_id=$id")->result()){
        
      }else{
        return $this->db->query("SELECT * FROM ejemplar,categoria WHERE ejem_cate_id=$id AND cate_id=$id")->result();
      }

    } 

    public function obtener(){

        return $this->db->query("SELECT * FROM ejemplar,categoria WHERE ejem_cate_id=cate_id")->result();
      

    } 

    public function getCategoria(){
      $query = $this->db->get('categoria');
      $rows = $query->result();

      $opciones=array();
      foreach ($rows as $row) {
        
          $opciones[$row->cate_id]=$row->cate_nombre;
      }
      return $opciones;
  }

 


   
}