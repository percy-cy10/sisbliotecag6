<?php
class model_ejemplar extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function consultar()
        {
                $query = $this->db->get('persona', 10);
                return $query->result();
        }

        public function guardar($data,$id){
            if($id>0){
               
                $this->db->where('id', $id);
                $this->db->update('persona',$data); 
            }else{
                $this->db->insert('persona',$data);
            }
        }

        public function eliminar($id){
                $this->db->delete('persona', array('id' => $id)); 
         }

         
         public function editar($id){
            
                $CI=& get_instance();
                $CI->db->where('id',$id);
                
                $query1=$CI->db->get('persona')->result_array();

                if(count($query1)>0){
                    $query1=$query1[0];
                }
                
                return $query1;
            
        }
}
