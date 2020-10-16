<?php 
      include("estilos.php");
      include("estilosTab.php");
      $this->load->view('biblioteca/header');
		$this->load->view('biblioteca/menu');
		$this->load->view('biblioteca/footer');
?>
    <style>
        
      
    </style>
    <script type="text/javascript" src="../datatable/js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../datatable/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../datatable/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="../datatable/datatable.js"></script>
    <link rel="stylesheet" href="../datatable/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../datatable/css/responsive.dataTables.min.css">


<div class="container">
  <div class=" col-sm-8.2 p-3 bg-white ">
     <h1 class="text-warning text-center font-weight-bold">Lista de Usuarios</h1>
        
         

      <table class="table table-active display responsive nowrap" id="usuarios_list"  style="width:100%">
         <thead class="thead-dark">

               <tr>
                  <th>ID</th>
                  <th>LOGIN</th>
                  <th>PASSWORD</th>
                  <th>CODIGO</th>
                  <th>NOMBRES</th>
                  <th>APELLIDO</th>
                  <th>CORREO</th>
                  <th>DIRECCION</th>
                  <th>TELEFONO</th>
                  <th>EDITAR</th>
                  <th>ELIMINAR</th>
                  <th>PDF</th>
               </tr>
          </thead>
          <tbody>
	    	
			
		   </tbody>
	   </table>
  
   </div>
</div>
<script>
    $('#usuarios_list').DataTable({
        "ajax": {
            url : "<?php echo base_url(); ?>ctrlusuarios/datosdeUsuarios",
            type : 'POST'
        },     
    });
   
</script>

