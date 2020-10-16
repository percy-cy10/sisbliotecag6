<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrlcategoria extends CI_Controller {

	public function index(){

        //$id = $this->input->get('cate_id');
    
        //$this->load->model('model_categoria');
        //$result = $this->model_categoria->consultar1($id);
    
        //$datos = array('registros'=>$result);
       
       // $this->load->view('biblioteca/formCategoria',$datos);  
    }
    
    public function editar(){

        $id = $this->input->get('cate_id');
        $this->load->model('model_categoria');
        $result = $this->model_categoria->consultar1($id);
        $datos = array('registros'=>$result);

        $this->load->helper('form');
        $this->load->view('biblioteca/formCategoria',$datos);
       
    }

    public function guardar(){
         $id = $this->input->get('cate_id');
         $cate_id = $this->input->post('cate_id');
         $cate_nombre = $this->input->post('cate_nombre');
         $this->load->model('model_categoria');
         
         $data=array(
             'cate_id'=>$cate_id,
             'cate_nombre'=>$cate_nombre            
         );
         
        $this->model_categoria->guardar($data,$id);
        if($id>0){

            $this->load->view('biblioteca/tabCategoria2');

        }else{
            redirect();
        }
       
    }
    public function buscar(){
        $cate_id = $this->input->post('cate_id');
    
        $this->load->model('model_categoria');
        $rows = $this->model_categoria->consultarvarios($cate_id);
        $data['rows']=$rows;
     
        $this->load->helper('form');
        if($rows!=NULL){
            $this->load->view('biblioteca/tabcategoria1',$data);
        }else{
            echo 'NO HAY NINGUN LIBRO RELACIONADO CON LO QUE ESTA BUSCANDO :( ';
            //redirect('Welcome/buscar');
        }
          
         
    }
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
            class="btn btn-primary"><button style="background: none;border: none;"> <li class="fa fa-edit"></li> Editar </button></a>';
            $sub_array[] = '<a href="'.$url.'ctrlcategoria/eliminar?cate_id='.$r->cate_id.'" 
            class="btn btn-danger  disabled" ><button style="background: none;border: none;"><li class="fa fa-trash"></li> Eliminar</button></a>';
            $sub_array[] = '<a href="'.$url.'ctrlcategoria/imprimir?id='.$r->cate_id.'" 
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
        $pdf->SetFont('Times','B',30);
        $pdf->SetTextColor(157, 25, 206);
        $pdf->Text(55,50,'TIPO DE TEXTO');

        $this->load->model('model_categoria');
        $rows = $this->model_categoria->consultarPDF($id);
        $miCabecera = array('Id', 'Nombre');
        $pdf->cabeceraVertical($miCabecera);
        $pdf->datosVerticales($rows);

        $pdf->SetFont('Times','B',20);
        $pdf->SetTextColor(66, 202, 27);
        $pdf->Text(10,90,'Ingeniera');
        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->Text(10,100,utf8_decode(' Cuando hablamos de libros generales de ingeniería, estamos hablando , '));
        $pdf->Text(10,110,utf8_decode('"básicamente de libros relacionados con la matemática, la física, química,'));
        $pdf->Text(10,120,utf8_decode(' el cálculo, álgebra análisis,que son prácticamente libros de cursos o materias'));
        $pdf->Text(10,130,utf8_decode('que se enseñan en la mayoría de casos al principio de todas las ramas de ingeniería.'));
     
        $pdf->SetFont('Times','B',20);
        $pdf->SetTextColor(66, 202, 27);
        $pdf->Text(10,150,'Sociales');
        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->Text(10,160,utf8_decode(' En este sentido, lo social puede otorgar un sentido de pertenencia  '));
        $pdf->Text(10,170,utf8_decode('"En este sentido, lo social puede otorgar un sentido de pertenencia '));
        $pdf->Text(10,180,utf8_decode('  Por ejemplo, la noción de convivencia social se refiere al modo'));
        $pdf->Text(10,190,utf8_decode('de convivir que tienen los integrantes de una sociedad.'));
     
        $pdf->SetFont('Times','B',20);
        $pdf->SetTextColor(66, 202, 27);
        $pdf->Text(10,210,'Biomedicas');
        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->Text(10,220,utf8_decode(' es un término que engloba el conocimiento y la investigación que es común a los campos  '));
        $pdf->Text(10,230,utf8_decode('" de la medicina como la odontología y las disciplinas del ámbito de la biología,'));
        $pdf->Text(10,240,utf8_decode(' como son la bioquímica, inmunología, histología, genética, embriología, anatomía, fisiología,'));
        $pdf->Text(10,250,utf8_decode('patología, ingeniería biomédica, zoología, botánica, microbiología y farmacología..'));
     
        $pdf->Output();
        
   }
    


    
}