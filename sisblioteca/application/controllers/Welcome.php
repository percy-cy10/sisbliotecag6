<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	 function __construct(){
		parent::__construct();
		
		
		if($this->session->userdata('auth')!=true){
				redirect('Biblioteca');
				dic("");
		};
	}

	public function index()
	{
		$this->load->view('biblioteca/header');
		$this->load->view('biblioteca/menu');
		$this->load->view('biblioteca/welcome_message');
		$this->load->view('biblioteca/footer');
		
	}
	public function infopersonal(){
		
		if($this->session->userdata('auth')!=true) die("ascesso denegado");{
			$idp=$this->session->userdata('id');
		    $data['usuario'] = $this->db->query("SELECT * FROM usuario WHERE usua_id='{$idp}'")->row();
			$this->load->view('biblioteca/header');
		    $this->load->view('biblioteca/menu');
			$this->load->view('biblioteca/infopersonal',$data);
		    $this->load->view('biblioteca/footer');
	   }
	}
	public function admin(){
		
	    if($this->session->userdata('auth')!=true) die("ascesso denegado");
		if($this->session->userdata('id')!=1) die("ascesso denegado");
		
		    $data['usuario'] = $this->db->query("SELECT * FROM usuario")->result();
			$this->load->view('biblioteca/header');
		    $this->load->view('biblioteca/menu');
			$this->load->view('biblioteca/admin',$data);
		    $this->load->view('biblioteca/footer');
	   

    }
	public function usuario()
	{
		$this->load->view('biblioteca/formUsuario');
		
	}
	public function tabusuarios()
	{ 
		$this->load->model('model_usuario');
        $result = $this->model_usuario->consultar();
        $datos = array('registros'=>$result);
		$this->load->view('biblioteca/tabusuarios',$datos);
		
	}
	public function ejemplar()
	{
		$this->load->view('biblioteca/formEjemplar');
		
	}
	public function tabejemplar()
	{
		$this->load->model('model_ejemplar');
        $result = $this->model_ejemplar->consultar();
        $datos = array('registros'=>$result);
		$this->load->view('biblioteca/tabEjemplar',$datos);
		
	}
	public function categoria()
	{
		$this->load->view('biblioteca/formCategoria');
		
	}
	public function tabcategoria()
	{
		$this->load->model('model_categoria');
        $result = $this->model_categoria->consultar();
        $datos = array('registros'=>$result);
		$this->load->view('biblioteca/tabCategoria',$datos);
		
	}
}

