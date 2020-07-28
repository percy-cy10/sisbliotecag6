<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrlusuarios extends CI_Controller {

	public function index(){
     
        
    }
    public function guardar(){

        $usua_login= $this->input->post('usua_login');
        $usua_password= $this->input->post('usua_password');
        $usua_codigo= $this->input->post('usua_codigo');
        $usua_nombres= $this->input->post('usua_nombres');
        $usua_apellidos= $this->input->post('usua_apellidos');
        $usua_direccion= $this->input->post('usua_direccion');
        $usua_email= $this->input->post('usua_email');
        $usua_telefono= $this->input->post('usua_telefono');
        $usua_esadmin= $this->input->post('usua_esadmin');

        $this->load->model('model_usuario');

        $data = array(
            'usua_login'=>$usua_login,
            'usua_password'=>$usua_password,
            'usua_codigo'=>$usua_codigo,
            'usua_nombres'=>$usua_nombres,
            'usua_apellidos'=>$usua_apellidos,
            'usua_direccion'=>$usua_direccion,
            'usua_email'=>$usua_email,
            'usua_telefono'=>$usua_telefono,
            'usua_esadmin'=>$usua_esadmin
        );
        $this->model_usuario->guardar($data);
        redirect();
 
	}
       
}