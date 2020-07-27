<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	 function __construct(){
		parent::__construct();
		
		
		if($this->session->userdata('auth')!=true){
				redirect('biblioteca');
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
	public function confidencial(){
		
		if($this->session->userdata('auth')!=true) die("ascesso denegado");{
			$idp=$this->session->userdata('id');
		    $data['usuario'] = $this->db->query("SELECT * FROM usuario WHERE usua_id='{$idp}'")->row();
			$this->load->view('biblioteca/header');
		    $this->load->view('biblioteca/menu');
			$this->load->view('biblioteca/confidencial',$data);
		    $this->load->view('biblioteca/footer');
	   }
	}
	public function usuarios(){
		
	    if($this->session->userdata('auth')!=true) die("ascesso denegado");
		if($this->session->userdata('id')!=1) die("ascesso denegado");
		
		    $data['usuario'] = $this->db->query("SELECT * FROM usuario")->result();
			$this->load->view('biblioteca/header');
		    $this->load->view('biblioteca/menu');
			$this->load->view('biblioteca/usuarios',$data);
		    $this->load->view('biblioteca/footer');
	   
	}
	public function registro()
	{
		$this->load->view('biblioteca/header');
		$this->load->view('biblioteca/menu');
		$this->load->view('biblioteca/Registro');
		$this->load->view('biblioteca/footer');
		
	}
}

