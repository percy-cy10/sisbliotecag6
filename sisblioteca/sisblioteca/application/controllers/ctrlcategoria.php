<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrlcategoria extends CI_Controller {

	public function index(){

        //$id = $this->input->get('cate_id');
    
        //$this->load->model('model_categoria');
        //$result = $this->model_categoria->consultar1($id);
    
        //$datos = array('registros'=>$result);
       
       // $this->load->view('biblioteca/formCategoria',$datos);  
    }
    
    public function editar(){

        $id = $this->input->get('cate_id');
    
        $this->load->model('model_categoria');
        $result = $this->model_categoria->consultar1($id);
   
        $datos = array('registros'=>$result);

        $this->load->helper('form');
        $this->load->view('biblioteca/formCategoria',$datos);
       
    }

    public function guardar(){
         $id = $this->input->get('cate_id');
         $cate_id = $this->input->post('cate_id');
         $cate_nombre = $this->input->post('cate_nombre');
         $this->load->model('model_categoria');
         
         $data=array(
             'cate_id'=>$cate_id,
             'cate_nombre'=>$cate_nombre            
         );
        $this->model_categoria->guardar($data,$id);
        if($id>0){

            $this->load->view('biblioteca/tabCategoria2');

        }else{
            redirect();
        }
       
    }
    public function buscar(){
        $cate_id = $this->input->post('cate_id');
    
        $this->load->model('model_categoria');
        $rows = $this->model_categoria->consultarvarios($cate_id);
        $data['rows']=$rows;
     
        $this->load->helper('form');
        if($rows!=NULL){
            $this->load->view('biblioteca/tabcategoria1',$data);
        }else{
            echo 'NO HAY NINGUN LIBRO RELACIONADO CON LO QUE ESTA BUSCANDO :( ';
            //redirect('Welcome/buscar');
        }
          
         
    }
}