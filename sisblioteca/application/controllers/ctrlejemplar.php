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
       
           redirect();

        
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
        $this->form_validation->set_rules('ejem_isbn', 'isb','is_natural|required');
        $this->form_validation->set_rules('ejem_idioma', 'idioma','alpha|required');
        $this->form_validation->set_rules('ejem_portada', 'portada','alpha|required');
        $this->form_validation->set_rules('ejem_digital', 'digital','alpha|required');
        $this->form_validation->set_rules('ejem_audio', 'audio','alpha|required');
        $this->form_validation->set_rules('ejem_resumen', 'resumen','alpha|required');
        $this->form_validation->set_rules('ejem_cate_id', 'cate_id','required');
        $this->form_validation->set_rules('ejem_valoracion', 'valoracion','alpha|required');
        $this->form_validation->set_rules('ejem_anio', 'anio','numeric|required');
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



   
    
}