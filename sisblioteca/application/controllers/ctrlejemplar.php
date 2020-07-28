<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrlejemplar extends CI_Controller {

	public function index(){
        $id = $this->input->get('id');
    
        $this->load->model('model_ejemplar');

        $result1 = $this->model_ejemplar->editar($id);
        $result = $this->model_ejemplar->consultar();

        $datos1= array('registroid'=>$result1);
        $datos = array('registros'=>$result);
        
        if($id>0){
            $this->load->view('persona/formulario',$datos1);
        }else{
            $this->load->view('persona/lista',$datos);
        }
        
    }


    public function registro(){
        $datos = array('registroid'=>NULL);
        $this->load->view('persona/formulario',$datos);
    }



    public function guardar(){
            $id = $this->input->get('id');
            
            $nombres = $this->input->post('nombres');
            $apellidos = $this->input->post('apellidos');
            $edad = $this->input->post('edad');
            $email = $this->input->post('email');
            $contraseña = $this->input->post('contraseña');
            $direccion = $this->input->post('direccion');
            $this->load->model('model_ejemplar');
            
            $data=array(
                'nombres'=>$nombres,
                'apellidos'=>$apellidos,
                'edad'=>$edad,
                'email'=>$email,
                'contraseña'=>$contraseña,
                'direccion'=>$direccion
            );


        $this->model_ejemplar->guardar($data,$id);
      
        $result = $this->model_ejemplar->consultar();
        $datos = array('registros'=>$result);
        $this->load->view('persona/lista',$datos);
}


public function eliminar(){
    $id = $this->input->get('id');
    
    $this->load->model('model_ejemplar');
    $this->model_ejemplar->eliminar($id);

    $result = $this->model_ejemplar->consultar();
    $datos = array('registros'=>$result);
    $this->load->view('persona/lista',$datos);

   }


}