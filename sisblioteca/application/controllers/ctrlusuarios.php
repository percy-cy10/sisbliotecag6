<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrlusuarios extends CI_Controller {

	 function __construct(){
		parent::__construct();
		
	}

	public function index()
	{
		$this->load->view('biblioteca/header');
		$this->load->view('biblioteca/menu');
		$this->load->view('biblioteca/tabusuarios');
		$this->load->view('biblioteca/footer');
		
    }
    public function guardar(){
        echo "hola";
    }
}