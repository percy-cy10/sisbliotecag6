<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrlusuarios extends CI_Controller {

	 function __construct(){
		parent::__construct();
		
	}

    public function guardar(){
        $login= $this->input->post('login');
        $password= $this->input->post('password');
        $codigo= $this->input->post('codigo');
        $nombres= $this->input->post('nombres');
        $apellidos= $this->input->post('apellidos');
        $correo= $this->input->post('correo');
        $direccion= $this->input->post('direccion');
        $telefono= $this->input->post('telefono');

        $this->load->model('model_usuario');

        $data = array(
            'login'=>$login,
            'password'=>$password,
            'nombres'=>$nombres,
            'apellidos'=>$apellidos,
            'correo'=>$correo,
            'direccion'=>$direccion,
            'telefono'=>$telefono
        );
        $this->model_usuario->guardar($data);
 
	}
       
}