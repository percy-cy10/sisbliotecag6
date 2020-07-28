<?php
class Model_usuario extends CI_model
{
   public function guardar($data)
   {
     $this->db->insert('crtlusuarios',$data);
   }
   public function eliminar($id)
{
    $this->db->delete('crtlusuarios',array('id',$id));
}
    public function editar($data)
    {
      $this->db->update('crtlusuarios',$data);

    }

}
?>