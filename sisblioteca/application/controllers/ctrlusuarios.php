<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrlusuarios extends CI_Controller {

	public function index(){
        $id = $this->input->get('id');
    
        $this->load->model('model_usuario');
        $result = $this->model_usuario->consultar1($id);

        $datos = array('registros'=>$result);
        $this->load->helper("formularioUsua");

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
            $this->load->model('model_usuario');
            $result = $this->model_usuario->consultar();
            $datos = array('registros'=>$result);
		    $this->load->view('biblioteca/tabusuarios',$datos);
        }else{
            redirect();
        }
        
 
    }

    public function eliminar(){
        $id = $this->input->get('id');
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

    public function procesar()
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('username', 'Nombre de usuario', 'required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]');
        $this->form_validation->set_rules('passconf', 'Confirmar Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('formulario');
        } else {
            echo "Datos cargador correctamente";
        }
        
    }
       
    public function datosdeUsuarios()
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
         
		 $sub_array[] = '<a href="'.$url.'ctrlusuarios/index?id='.$r->usua_id.'" 
		 class="btn btn-primary"><button style="background: none;border: none;"><li class="fa fa-edit"></li> Editar </button></a>';
		 $sub_array[] = '<a href="'.$url.'ctrlusuarios/eliminar?id='.$r->usua_id.'" 
         class="btn btn-danger" ><button style="background: none;border: none;"><li class="fa fa-trash"></li> Eliminar </button></a>';
         $sub_array[] = '<a href="'.$url.'ctrlusuarios/imprimir?id='.$r->usua_id.'" 
		 class="btn btn-secondary" ><button style="background: none;border: none;"><li class="fas fa-arrow-alt-circle-down"></li> PDF </button></a>';
			   
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
    
    function imprimir(){
         $id = $this->input->get('id');
         $this->load->library('pdf');

         $pdf = new PDF();
         $pdf->AliasNbPages();
         $pdf->AddPage();
         $pdf->SetFont('Times','',12);
        
         $this->load->model('model_usuario');
         $rows = $this->model_usuario->consultarPdf($id);
         $pdf->Rect(30, 60, 150, 85);
         $pdf->Image(FCPATH."uploads/fcarnet2.jpg",30.5, 60.5, 149, 84);
         $pdf->ln(20);
         $pdf->SetFont('Times','B',20);
         $pdf->SetTextColor(157, 25, 206);
         $pdf->Cell(0,0,'"INFORMACION PERSONAL"',0,0,'C');

         $pdf->SetTextColor(0, 0, 0);

         foreach ($rows->result() as $row) {
             $pdf->Rect(34.5,79.5,50,60);

             $pdf->Image(FCPATH."uploads/usuario.jpg",35,80,49,59);

             $pdf->Image(FCPATH."uploads/snperu.gif",35,62,13,15);
             $pdf->Image('https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Logo_UNAP.png/554px-Logo_UNAP.png',160,62,15,15,'PNG');
             $pdf->SetFont('Times','B',13);
             $pdf->Text(50,69,utf8_decode('UNIVERSIDAD NACIONAL DEL ALTIPLANO'));
             $pdf->SetFont('Arial','I',10);
             $pdf->Text(50,74,utf8_decode('ESCUELA PROFESIONAL DE INGENIERÍA DE SISTERMAS'));
             
             $pdf->SetFont('Times','B',20);
             //$pdf->Text(90,85,'USUARIO');
             
             $pdf->Text(50,135,$row->usua_login);

             $pdf->SetFont('Times','',13);
             $pdf->Text(120,143,utf8_decode('Clave'));
             $pdf->Text(133,143,':');
             $pdf->Text(135,143,$row->usua_password);

             $pdf->SetFont('Arial','B',14);
             $pdf->Text(90,84,'CARNET DEL USUARIO');
             $pdf->SetFont('Times','',13);
             $pdf->Text(90,90,'Codigo');
             $pdf->Text(117,90,':');
             $pdf->Text(120,90,$row->usua_codigo);
             $pdf->Text(90,97,'Nombres');
             $pdf->Text(117,97,':');
             $pdf->Text(120,97,utf8_decode($row->usua_nombres));
             $pdf->Text(90,104,'Apellidos');
             $pdf->Text(117,104,':');
             $pdf->Text(120,104,utf8_decode($row->usua_apellidos));
             $pdf->Text(90,111,'Email');
             $pdf->Text(117,111,':');
             $pdf->Text(120,111,utf8_decode($row->usua_email));
             $pdf->Text(90,118,'Direccion');
             $pdf->Text(117,118,':');
             $pdf->Text(120,118,utf8_decode($row->usua_direccion));
             $pdf->Text(90,125,'Telefono');
             $pdf->Text(117,125,':');
             $pdf->Text(120,125,$row->usua_telefono);

             $pdf->Image(FCPATH."assets/percy.png",145,110,30,30);

             $pdf->Text(90,132,utf8_decode('AÑO'));
             $pdf->Text(117,132,':');
             $pdf->Text(120,132,'2020-10-16');

            $pdf->Text(21,160,utf8_decode('Qué sería de la vida sin libros, ¿verdad?  Tal y como dijo Joseph Addison (escritor y político británico), '));
            $pdf->Text(19,165,utf8_decode('"leer es para la mente lo que el ejercicio físico es para el cuerpo". Y qué razón llevaba. Leer estimula la'));
            $pdf->Text(19,170,utf8_decode('concentración y la empatía, agudiza los sentidos, reduce el estrés, mejora el sueño y nos hace más'));
            $pdf->Text(19,175,utf8_decode('inteligentes, entre otros muchísimos beneficios. Leer nos da la vida.'));

            $pdf->Image(FCPATH."uploads/personal.png",110,170,90,80);

            $pdf->Text(21,185,utf8_decode('A lo largo de la historia se han escrito cientos de libros y'));
            $pdf->Text(19,190,utf8_decode('quedado para siempre grabados en nuestro corazón. '));
            $pdf->Text(19,195,utf8_decode('das de la lectura y, por eso,'));
            $pdf->Text(19,200,utf8_decode('A continuación encontrarás algunos'));

            $pdf->Text(21,210,utf8_decode('citas de amor, de autoayuda, de libros famosos,'));
            $pdf->Text(19,215,utf8_decode('sonrisa en tu cara al recordar todo lo'));
            $pdf->Text(19,220,utf8_decode('las mejores frases de libros!'));
            
            $pdf->SetFont('Times','B',15);
            //color
            $pdf->SetTextColor(250, 0, 0 );
            $pdf->Text(25,240,utf8_decode('Siempre se puede ser mejor...!'),0,0,'T');
           
            $pdf->SetTextColor(0, 0, 0 );


            //$pdf->Image(FCPATH."uploads/usuario.jpg",110,170,90,80);
         }
         $pdf->Output();
    }
}