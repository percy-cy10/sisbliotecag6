<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	 function __construct(){
		parent::__construct();
		$this->load->database();
		 
		
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

	

	public function usuario()
	{
		

		$this->load->view('biblioteca/formUsuario');
		
	}
	public function tabusuarios()
	{ 
		$this->load->view('biblioteca/tabusuarios');
		
	}
	public function ejemplar()
	{

		$this->load->helper('form');

		$this->load->model('model_categoria');
		$opciones = $this->model_categoria->getCategoria();
		$data['opciones']=$opciones;
        
		$this->load->view('biblioteca/formEjemplar',$data);


		
	}
	public function tabejemplar()
	{
	

		$this->load->model('model_categoria');
		$opciones = $this->model_categoria->obtener();
		$datos['registros']=$opciones;
		
		$this->load->view('biblioteca/tabEjemplar',$datos);
		
	}
	public function categoria()
	{
		$this->load->helper('form');
		$this->load->view('biblioteca/formCategoria1');
	}
	
	public function buscar(){

		$this->load->helper('form');
		$this->load->model('model_categoria');
		$opciones = $this->model_categoria->getCategoria();
	

		$data['opciones']=$opciones;

		$this->load->view('biblioteca/formBuscar',$data);
	}
	public function ver(){
		$this->load->view('biblioteca/pruebas');
	}


	public function tablacategoria(){
		$this->load->view('biblioteca/tabCategoria2');
	}

<<<<<<< HEAD
	
=======
	public function datosdeCategoria()
	{
		
		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));

	   
		$this->load->model('model_categoria');
		$query = $this->model_categoria->datos();
		$data = array();

		//la base_url()
        $url = base_url();
		
		foreach($query->result() as $r) {
		 $sub_array = array();
		 $sub_array[] = $r->cate_id;
		 $sub_array[] = $r->cate_nombre;
		 $sub_array[] = '<a href="'.$url.'ctrlcategoria/editar?cate_id='.$r->cate_id.'" 
		 class="btn btn-primary"><li class="fa fa-edit"></li>&nbspEditar</a>';
		 $sub_array[] = '<a href="'.$url.'ctrlcategoria/eliminar?cate_id='.$r->cate_id.'" 
		 class="btn btn-danger  disabled" ><li class="fa fa-trash"></li>&nbspEliminar</a>';
			   
		 $data[] = $sub_array;
		}
	    
		$result = array(
			 "draw" => $draw,
			 "recordsTotal" => $query->num_rows(),
			 "recordsFiltered" => $query->num_rows(),
			 "data" => $data
		  );
		  echo json_encode($result);
		exit();
	 
	}
>>>>>>> 74cafa6825831d2c516c8b54c439a6a0b939fcd4


}

