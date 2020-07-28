<?php
class Model_usuario extends CI_model
{
   public function guardar($data)
   {
     $this->db->insert('crtlusuarios',$data);
   }

}
?>