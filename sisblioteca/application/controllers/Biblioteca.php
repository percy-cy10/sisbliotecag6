<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class biblioteca extends CI_Controller {

	public function index()
	{
      
        $this->load->view('biblioteca/header');
        $this->load->view('biblioteca/login');
        $this->load->view('biblioteca/footer');
    }
    
    public function evaluar(){
        $usuario = $this->input->post('usuario');
        $password = $this->input->post('password');

        
        $result=$this->db->query("SELECT *FROM usuario WHERE usua_login='{$usuario}' AND usua_password ='{$password}'");
        
        if($result -> num_rows()>0){
            $row = $result->row();
            echo "bienvenido {$row->usua_login}";
            $data=array('user'=>$row->usua_login,'id'=>$row->usua_id,'auth'=>true);
            $this->session->set_userdata($data);
            redirect();

        }else{
            echo "incorrecto";
        }
    }

    public function salir(){
        $this->session->sess_destroy();
        redirect();
    }
    public function mostrar(){
        if($this->session->userdata('auth')==true){
            echo "informacion confidencial";
        }else{
            echo "no tienes prvilegios para ver esta informacion";
        }
        
    }
}