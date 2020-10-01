<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrlejemplar extends CI_Controller {

	public function index(){
        
    }

    public function guardar(){

           $id = $this->input->get('id');

            $ejem_titulo = $this->input->post('ejem_titulo');
            $ejem_editorial = $this->input->post('ejem_editorial');
            $ejem_paginas = $this->input->post('ejem_paginas');
            $ejem_isbn = $this->input->post('ejem_isbn');
            $ejem_idioma = $this->input->post('ejem_idioma');
            $ejem_portada = $this->input->post('ejem_portada');
            $ejem_digital = $this->input->post('ejem_digital');
            $ejem_audio = $this->input->post('ejem_audio');
            $ejem_resumen = $this->input->post('ejem_resumen');
            $ejem_tipo_id = $this->input->post('ejem_tipo_id');
   
            $ejem_cate_id = $this->input->post('ejem_cate_id');
            
            $ejem_valoracion = $this->input->post('ejem_valoracion');
   
            $ejem_anio = $this->input->post('ejem_anio');
            $ejem_nprestamos = $this->input->post('ejem_nprestamos');
   
            $this->load->model('model_ejemplar');
            
            $data=array(
                'ejem_titulo'=>$ejem_titulo,
                'ejem_editorial'=>$ejem_editorial,
                'ejem_paginas'=>$ejem_paginas,
                'ejem_isbn'=>$ejem_isbn,
                'ejem_idioma'=>$ejem_idioma,
                'ejem_portada'=>$ejem_portada,
                'ejem_digital'=>$ejem_digital,
                'ejem_audio'=>$ejem_audio,
                'ejem_resumen'=>$ejem_resumen,
                'ejem_tipo_id'=>$ejem_tipo_id,
                'ejem_cate_id'=>$ejem_cate_id,
                'ejem_valoracion'=>$ejem_valoracion,
                'ejem_anio'=>$ejem_anio,
                'ejem_nprestamos'=>$ejem_nprestamos              
            );
        $this->model_ejemplar->guardar($data,$id);
       
        if($id>0){

            $this->load->view('biblioteca/tabEjemplar');

        }else{
            redirect();
        }

        
    }


    public function editar(){

        $id = $this->input->get('id');

        $this->load->model('model_ejemplar');
        $result = $this->model_ejemplar->consultar1($id);
        $datos = array('registros'=>$result);

        $this->load->model('model_categoria');
		$opciones = $this->model_categoria->getCategoria();
		$data['opciones']=$opciones;
        

        $general=$datos+$data;


        $this->load->helper('form');
        $this->load->view('biblioteca/formEjemplar1',$general);
    }


    public function eliminar(){
        $id = $this->input->get('id');
        $this->load->model('model_ejemplar');
        $this->model_ejemplar->eliminar($id); 
        
        
        $this->load->model('model_categoria');
		$opciones = $this->model_categoria->obtener();
		$datos['registros']=$opciones;

        $this->load->view('biblioteca/tabEjemplar',$datos);  
    }








    public function procesar(){

        $id = $this->input->get('id');

        $this->load->library('form_validation');
        $this->form_validation->set_rules('ejem_titulo', 'Titulo','alpha|required');
        $this->form_validation->set_rules('ejem_editorial', 'editorial','alpha|required');
        $this->form_validation->set_rules('ejem_paginas', 'paginas','numeric|required');
        $this->form_validation->set_rules('ejem_isbn', 'isb','is_natural|required|min_length[5]|max_length[5]');
        $this->form_validation->set_rules('ejem_idioma', 'idioma','alpha|required');
        $this->form_validation->set_rules('ejem_portada', 'portada','alpha|required');
        $this->form_validation->set_rules('ejem_digital', 'digital','alpha|required');
        $this->form_validation->set_rules('ejem_audio', 'audio','alpha|required');
        $this->form_validation->set_rules('ejem_resumen', 'resumen','alpha|required');
        $this->form_validation->set_rules('ejem_cate_id', 'cate_id','required');
        $this->form_validation->set_rules('ejem_valoracion', 'valoracion','numeric|required|min_length[2]|max_length[2]');
        $this->form_validation->set_rules('ejem_anio', 'anio','date|required');
        $this->form_validation->set_rules('ejem_nprestamos', 'prestamos','is_natural|required');
        

        if ($this->form_validation->run() == FALSE) {

            $direccion = base_url();
            $this->load->helper('form');
            
            $this->load->model('model_categoria');
            $opciones = $this->model_categoria->getCategoria();
            $data['opciones']=$opciones;

            $this->load->view("biblioteca/formejemplar",$data);
            
        
        } else {
            
            $ejem_titulo = $this->input->post('ejem_titulo');
            $ejem_editorial = $this->input->post('ejem_editorial');
            $ejem_paginas = $this->input->post('ejem_paginas');
            $ejem_isbn = $this->input->post('ejem_isbn');
            $ejem_idioma = $this->input->post('ejem_idioma');
            $ejem_portada = $this->input->post('ejem_portada');
            $ejem_digital = $this->input->post('ejem_digital');
            $ejem_audio = $this->input->post('ejem_audio');
            $ejem_resumen = $this->input->post('ejem_resumen');
            $ejem_tipo_id = $this->input->post('ejem_tipo_id');
   
            $ejem_cate_id = $this->input->post('ejem_cate_id');
            
            $ejem_valoracion = $this->input->post('ejem_valoracion');
   
            $ejem_anio = $this->input->post('ejem_anio');
            $ejem_nprestamos = $this->input->post('ejem_nprestamos');
   
            $this->load->model('model_ejemplar');
            
            $data=array(
                'ejem_titulo'=>$ejem_titulo,
                'ejem_editorial'=>$ejem_editorial,
                'ejem_paginas'=>$ejem_paginas,
                'ejem_isbn'=>$ejem_isbn,
                'ejem_idioma'=>$ejem_idioma,
                'ejem_portada'=>$ejem_portada,
                'ejem_digital'=>$ejem_digital,
                'ejem_audio'=>$ejem_audio,
                'ejem_resumen'=>$ejem_resumen,
                'ejem_tipo_id'=>$ejem_tipo_id,
                'ejem_cate_id'=>$ejem_cate_id,
                'ejem_valoracion'=>$ejem_valoracion,
                'ejem_anio'=>$ejem_anio,
                'ejem_nprestamos'=>$ejem_nprestamos              
            );
        $this->model_ejemplar->guardar($data,$id);
       
           redirect();

        }
    }
    








    public function datosdeejemplar()
	{
		
		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));


		
	   
		$this->load->model('model_ejemplar');
		$query = $this->model_ejemplar->datos();
        $data = array();
        
        
        
		//la base_url()
        $url = base_url();
		
		foreach($query->result() as $r) {
		 $sub_array = array();
		 $sub_array[] = $r->ejem_id;
         $sub_array[] = $r->ejem_titulo;
         $sub_array[] = $r->ejem_editorial;
         $sub_array[] = $r->ejem_paginas;
         $sub_array[] = $r->ejem_isbn;
         $sub_array[] = $r->ejem_idioma;
         $sub_array[] = $r->ejem_resumen;
         $sub_array[] = $r->cate_nombre;
         $sub_array[] = $r->ejem_anio;
         $sub_array[] = $r->ejem_nprestamos;
         
		 $sub_array[] = '<a href="'.$url.'ctrlejemplar/editar?id='.$r->ejem_id.'" 
		 class="btn btn-primary"><li class="fa fa-edit"></li>&nbspEditar</a>';
		 $sub_array[] = '<a href="'.$url.'ctrlejemplar/eliminar?id='.$r->ejem_id.'" 
         class="btn btn-danger" ><li class="fa fa-trash"></li>&nbspEliminar</a>';
         $sub_array[] = '<a href="'.$url.'ctrlejemplar/imprimir?id='.$r->ejem_cate_id.'" 
		 class="btn btn-secondary" ><li class="fas fa-arrow-alt-circle-down"></li>&nbspPDF</a>';
			   
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
        $id1 = $this->input->get('id1');
        echo $id1;
        $this->load->library('pdf');

        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times','',12);
       
        $this->load->model('model_ejemplar');
        $rows = $this->model_ejemplar->datosPdf($id);
        $pdf->Rect(5, 50, 200, 100);
        $pdf->ln(20);

        foreach ($rows->result() as $row) {
            $pdf->Text(20,60,'Titulo');
            $pdf->Text(100,60,$row->ejem_titulo);
            $pdf->Text(20,70,utf8_decode('Editorial'));
            $pdf->Text(100,70,$row->ejem_editorial);
            $pdf->Text(20,80,'Paginas');
            $pdf->Text(100,80,$row->ejem_paginas);
            $pdf->Text(20,90,'Isbn');
            $pdf->Text(100,90,$row->ejem_isbn);
            $pdf->Text(20,100,'Idioma');
            $pdf->Text(100,100,utf8_decode($row->ejem_idioma));
            $pdf->Text(20,110,'Resumen');
            $pdf->Text(100,110,$row->ejem_resumen);
            $pdf->Text(20,120,'Cate Nombre');
            $pdf->Text(100,120,$row->cate_nombre);
            $pdf->Text(20,130,utf8_decode('Año'));
            $pdf->Text(100,130,$row->ejem_anio);
            $pdf->Text(20,140,'Prestamos');
            $pdf->Text(100,140,$row->ejem_nprestamos);
        }
        $pdf->Output();
   }


   
    
}