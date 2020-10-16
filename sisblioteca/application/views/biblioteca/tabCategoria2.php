<?php 
       include("estilos.php");
        include("estilosTab.php");
        $this->load->view('biblioteca/header');
		$this->load->view('biblioteca/menu');
		$this->load->view('biblioteca/footer');
?>
<?php 
        $posicion=$this->session->userdata('veri'); 
        $this->load->view('biblioteca/header');
		$this->load->view('biblioteca/footer');
?>

    <script type="text/javascript" src="../datatable/js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../datatable/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../datatable/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="../datatable/datatable.js"></script>
    <link rel="stylesheet" href="../datatable/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../datatable/css/responsive.dataTables.min.css">



<div class="container">
  <div class=" col-sm-8.2 p-3 bg-white " >
     <h1 class="text-warning text-center font-weight-bold">CATEGORIA</h1>


      <table class="table table-active display responsive nowrap" id="categoria_list"  style="width:100%">
         <thead class="thead-dark">

               <tr>
                  <th>ID CATEGORIA</th>
                  <th>NOMBRE CATEGORIA</th>
                  <?php if($posicion==2):?>
                     <th>EDITAR</th>
                     <th>ELIMINAR</th>
                     <th>IMPRIMIR</th>
                  <?php endif;?>
               </tr>
         </thead>
         <tbody>
                
         </tbody>
	   </table>
   <br>
  </div>
</div>

<script>
    $('#categoria_list').DataTable({
        "ajax": {
            url : "<?php echo base_url(); ?>ctrlcategoria/datosdeCategoria",
            type : 'POST'
        },     
    });
   
</script>


