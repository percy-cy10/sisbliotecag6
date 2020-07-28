<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrlcategoria extends CI_Controller {

	public function index(){
     
        
    }

    public function guardar(){
      
         $cate_id = $this->input->post('cate_id');
         $cate_nombre = $this->input->post('cate_nombre');
         $this->load->model('model_categoria');
         
         $data=array(
             'cate_id'=>$cate_id,
             'cate_nombre'=>$cate_nombre            
         );
     $this->model_categoria->guardar($data);
     redirect();
       
      
    }
}