<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrlejemplar extends CI_Controller {

	public function index(){
        
    }

    public function guardar(){
      
         $titulo = $this->input->post('titulo');
         $editorial = $this->input->post('editorial');
         $paginas = $this->input->post('paginas');
         $isbn = $this->input->post('isbn');
         $idioma = $this->input->post('idioma');
         $postada = $this->input->post('postada');
         $digital = $this->input->post('digital');
         $audio = $this->input->post('audio');
         $resumen = $this->input->post('resumen');
         $tipo_id = $this->input->post('tipo_id');
         $cate_id = $this->input->post('cate_id');
         $valoracion = $this->input->post('valoracion');
         $anio = $this->input->post('anio');
         $prestamos = $this->input->post('prestamos');

         $this->load->model('model_ejemplar');
         
         $data=array(
             'ejem_titulo'=>$titulo,
             'ejem_editorial'=>$editorial,
             'ejem_paginas'=>$paginas,
             'ejem_isbn'=>$isbn,
             'ejem_idioma'=>$idioma,
             'ejem_portada'=>$postada,
             'ejem_digital'=>$digital,
             'ejem_audio'=>$audio,
             'ejem_resumen'=>$resumen,
             'ejem_tipo_id'=>$tipo_id,
             'ejem_cate_id'=>$cate_id,
             'ejem_valoracion'=>$valoracion,
             'ejem_anio'=>$anio,
             'ejem_nprestamos'=>$prestamos              
         );
     $this->model_ejemplar->guardar($data);
     redirect();
       
      
    }
    
}