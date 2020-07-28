<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrlusuarios extends CI_Controller {

	 function __construct(){
		parent::__construct();
		
	}

<<<<<<< HEAD
	public function index(){
=======
	public function index()
	{
        $this->load->model('model_usuario');
		$this->load->view('biblioteca/header');
		$this->load->view('biblioteca/menu');
		$this->load->view('biblioteca/tabusuarios');
		$this->load->view('biblioteca/footer');
>>>>>>> 508a78db25728e3374c88208ce4d66f20d66b545
		
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
            'edad'=>$edad
        );
        $this->model_personas->guardar($data);
    }
}