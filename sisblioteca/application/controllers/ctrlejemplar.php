<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrlejemplar extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));

    }

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

            $Titulo = $this->input->post('ejem_titulo');
            $file = uniqid();


            $data = $this->do_upload('./uploads/',$file);
            if(!$data)die("archivo vacio");
            $archivo = $data['file_name'];

            /*$data=array(
                'ejem_titulo'=>$Titulo,
                'ejem_portada'=>$archivo

            );*/
            //$this->db->insert('ejemplar',$data);


            $ejem_editorial = $this->input->post('ejem_editorial');
            $ejem_paginas = $this->input->post('ejem_paginas');
            $ejem_isbn = $this->input->post('ejem_isbn');
            $ejem_idioma = $this->input->post('ejem_idioma');
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
                'ejem_titulo'=>$Titulo,
                'ejem_editorial'=>$ejem_editorial,
                'ejem_paginas'=>$ejem_paginas,
                'ejem_isbn'=>$ejem_isbn,
                'ejem_idioma'=>$ejem_idioma,
                'ejem_portada'=>$archivo,
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

      //  }
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
            $sub_array[] = '<img width="80" src=" '.$url.'uploads/'.$r->ejem_portada.' "  >';
            $sub_array[] = $r->ejem_resumen;
            $sub_array[] = $r->cate_nombre;
            $sub_array[] = $r->ejem_anio;
            

            $sub_array[] = '<a href=" '.$url.'ctrlejemplar/editar?id='.$r->ejem_id.'" 
            class="btn btn-primary"><button style="background: none;border: none;"><li class="fa fa-edit"></li> Editar </button></a>';
            $sub_array[] = '<a href="'.$url.'ctrlejemplar/eliminar?id='.$r->ejem_id.'" 
            class="btn btn-danger" ><button style="background: none;border: none;"><li class="fa fa-trash"></li> Eliminar </button></a>';
            $sub_array[] = '<a href="'.$url.'ctrlejemplar/imprimir?id='.$r->ejem_cate_id.'" 
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
        $id1 = $this->input->get('id1');
        echo $id1;
        $this->load->library('pdf');

        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times','B',20);
            //color
        $pdf->SetTextColor(157, 25, 206);
        $pdf->Ln(17);
        $pdf->Cell(0,0,'"DESTALLES DEL LIBRO"',0,0,'C');

        $pdf->SetTextColor(0,0,0);
        $pdf->SetFont('Times','',12);
       
        $this->load->model('model_ejemplar');
        $rows = $this->model_ejemplar->datosPdf($id);
        $pdf->Rect(118,53,63.5,93.5);
        //$pdf->ln(40);
        //
        

        foreach ($rows->result() as $row) {
            
            $pdf->Text(30,60,'TITULO');
            $pdf->Text(61,60,':');
            $pdf->Text(63,60,$row->ejem_titulo);
            $pdf->Text(30,70,utf8_decode('EDITORIAL'));
            $pdf->Text(61,70,':');
            $pdf->Text(63,70,$row->ejem_editorial);
            $pdf->Text(30,80,'PAGINAS');
            $pdf->Text(61,80,':');
            $pdf->Text(63,80,$row->ejem_paginas);
            $pdf->Text(30,90,'ISBM');
            $pdf->Text(61,90,':');
            $pdf->Text(63,90,$row->ejem_isbn);
            $pdf->Text(30,100,'IDIOMA');
            $pdf->Text(61,100,':');
            $pdf->Text(63,100,utf8_decode($row->ejem_idioma));
            $pdf->Text(30,110,'RESUMEN');
            $pdf->Text(61,110,':');
            $pdf->Text(63,110,$row->ejem_resumen);
            $pdf->Text(30,120,'CATEGORIA');
            $pdf->Text(61,120,':');
            $pdf->Text(63,120,$row->cate_nombre);
            $pdf->Text(30,130,utf8_decode('AÑO'));
            $pdf->Text(61,130,':');
            $pdf->Text(63,130,$row->ejem_anio);
            $pdf->Text(30,140,'PRESTAMOS');
            $pdf->Text(61,140,':');
            $pdf->Text(63,140,$row->ejem_nprestamos);



            $pdf->Image(FCPATH."uploads/$row->ejem_portada",120,55,60,90);
            $pdf->Text(140,144,"PORTADA");



            $pdf->Text(21,160,utf8_decode('Qué sería de la vida sin libros, ¿verdad?  Tal y como dijo Joseph Addison (escritor y político británico), '));
            $pdf->Text(19,165,utf8_decode('"leer es para la mente lo que el ejercicio físico es para el cuerpo". Y qué razón llevaba. Leer estimula la'));
            $pdf->Text(19,170,utf8_decode('concentración y la empatía, agudiza los sentidos, reduce el estrés, mejora el sueño y nos hace más'));
            $pdf->Text(19,175,utf8_decode('inteligentes, entre otros muchísimos beneficios. Leer nos da la vida.'));


            $pdf->Text(21,185,utf8_decode('A lo largo de la historia se han escrito cientos de libros y obras literarias cuyas páginas y relatos se han'));
            $pdf->Text(19,190,utf8_decode('quedado para siempre grabados en nuestro corazón. En Diario Femenino somos unas verdaderas apasiona-'));
            $pdf->Text(19,195,utf8_decode('das de la lectura y, por eso, hemos querido hacer una recopilación de las 126 frases más bonitas de libros.'));
            $pdf->Text(19,200,utf8_decode('A continuación encontrarás algunos fragmentos literarios imposibles de olvidar y para todos los gustos:'));

            $pdf->Text(21,210,utf8_decode('citas de amor, de autoayuda, de libros famosos, de bestseller… Seguro que al leerlas no puedes evitar una'));
            $pdf->Text(19,215,utf8_decode('sonrisa en tu cara al recordar todo lo que te marcó ese libro y su escritor. ¡No esperes más y deléitate'));
            $pdf->Text(19,220,utf8_decode('las mejores frases de libros!'));
            
            $pdf->SetFont('Times','B',15);
            //color
            $pdf->SetTextColor(250, 0, 0 );
            $pdf->Text(25,240,utf8_decode('Siempre se puede ser mejor...!'),0,0,'T');
           
            $pdf->SetTextColor(0, 0, 0 );

            $pdf->Image('assets/percy.png',40,245,30,30);
            $pdf->Image('assets/dany.png',75,245,30,30);
            $pdf->Image('assets/julio.png',110,245,30,30);

        }
        $pdf->Output();
   }

   function subir(){

    $Titulo = $this->input->post('ejem_titulo');
    $file = uniqid();

    $data = $this->do_upload('./uploads/',$file);

    if(!$data)die("archivo vacio");

    $archivo = $data['file_name'];

    $data=array(
        'ejem_titulo'=>$Titulo,
        'ejem_portada'=>$archivo

    );
    $this->db->insert('ejemplar',$data);
}





   public function do_upload($path,$name)
   {
           $config['upload_path']          = $path;
           $config['allowed_types']        = 'gif|jpg|png|doc|docx|xls|xlsx|pdf|jpeg';
           $config['file_name']            = $name;
           $config['max_size']             = 5000;
           $config['max_width']            = 1024;
           $config['max_height']           = 768;

           $this->load->library('upload', $config);

           if ( ! $this->upload->do_upload('ejem_portada')){
                
                   return false;
           } else {
                   $data =$this->upload->data();
                   
                   return $data;

           }
   }

   
   
    
}