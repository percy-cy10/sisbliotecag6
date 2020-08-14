<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrlejemplar1 extends CI_Controller {

	public function index(){
        
    }

    public function guardar(){
         $idbs = $this->input->get('ejem_cate_id');
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

         $this->load->model('model_ejemplar1');
         
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
     $this->model_ejemplar1->guardar($data,$idbs);
     if($idbs>0){
        $this->load->model('model_ejemplar1');
        $result = $this->model_ejemplar1->consultarvarios($idbs);
        $datos = array('registros'=>$result);
        $this->load->view('biblioteca/tabcategoria1',$datos);
    }else{
        redirect();
    }
       
      
    }


    public function editar(){
        $idbs = $this->input->get('ejem_cate_id');
        $this->load->model('model_ejemplar1');
        $result = $this->model_ejemplar1->consultar1($idbs);
        $datos = array('registros'=>$result);

        $this->load->model('model_categoria');
		$opciones = $this->model_categoria->getCategoria();
		$data['opciones']=$opciones;
        $general=$datos+$data;
        $this->load->helper('form');
        $this->load->view('biblioteca/formEjemplarb',$general);
    }


    public function eliminar(){
        $idbs = $this->input->get('ejem_cate_id');
        $this->load->model('model_ejemplar1');
        $this->model_ejemplar1->eliminar($idbs);  
        $result = $this->model_ejemplar1->consultar();
        $datos = array('registros'=>$result);
        $this->load->view('biblioteca/tabcategoria1',$datos);  
    }
    
}