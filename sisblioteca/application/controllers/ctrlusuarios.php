<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrlusuarios extends CI_Controller {

	public function index(){
        $id = $this->input->get('id');
    
        $this->load->model('model_usuario');
        $result = $this->model_usuario->consultar1($id);

        $datos = array('registros'=>$result);
       

        $this->load->helper('form');
        
        $this->load->view('biblioteca/formUsuario',$datos);
        
        
    }
    public function guardar(){
    
        
        $id = $this->input->get('id');

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
        $this->model_usuario->guardar($data,$id);
        if($id>0){
        
		    $this->load->view('biblioteca/tabusuarios');
        }else{
            redirect();
        }
        
 
    }

    public function eliminar(){
        $id = $this->input->get('id');b
        $this->load->model('model_usuario');
        $this->model_usuario->eliminar($id);  
        $result = $this->model_usuario->consultar();
        $datos = array('registros'=>$result);
        $this->load->view('biblioteca/tabusuarios',$datos);   
    }
    public function eliminar1(){
        $id = $this->input->get('id');
        $this->load->model('model_usuario');
        $this->model_usuario->eliminar($id); 
        redirect('Biblioteca/salir');

    }
    public function datosdeUsuario()
	{
		
		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));

	   
		$this->load->model('model_usuario');
		$query = $this->model_usuario->datos();
		$data = array();

		//la base_url()
        $url = base_url();
    
		foreach($query->result() as $r) {
		 $sub_array = array();
		 $sub_array[] = $r->usua_id;
         $sub_array[] = $r->usua_login;
         $sub_array[] = $r->usua_password;
         $sub_array[] = $r->usua_codigo;
         $sub_array[] = $r->usua_nombres;
         $sub_array[] = $r->usua_apellidos;
         $sub_array[] = $r->usua_email;
         $sub_array[] = $r->usua_direccion;
         $sub_array[] = $r->usua_telefono;
         $sub_array[] = $r->usua_esadmin;

         
		 $sub_array[] = '<a href="'.$url.'ctrlusuarios/index?id='.$r->usua_id.'" 
		 class="btn btn-primary"><li class="fa fa-edit"></li>&nbspEditar</a>';
		 $sub_array[] = '<a href="'.$url.'ctrlusuarios/eliminar?id='.$r->usua_id.'" 
		 class="btn btn-danger" ><li class="fa fa-trash"></li>&nbspEliminar</a>';
			   
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
       
}