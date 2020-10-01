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
            class="btn btn-primary"><li class="fa fa-edit"></li>&nbspEditar</a>';
            $sub_array[] = '<a href="'.$url.'ctrlcategoria/eliminar?cate_id='.$r->cate_id.'" 
            class="btn btn-danger  disabled" ><li class="fa fa-trash"></li>&nbspEliminar</a>';
            $sub_array[] = '<a href="'.$url.'ctrlcategoria/imprimir?id='.$r->cate_id.'" 
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
        $this->load->library('pdf');

        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times','',12);
       
        $this->load->model('model_categoria');
        $rows = $this->model_categoria->consultarPDF($id);
  
        $header = array('categoria id', 'categoria nombre');
        $pdf->BasicTable($header,$rows);
        $pdf->Output();
        
   }
    


    
}