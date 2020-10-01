<?php 
      include("estilos.php");
      include("estilosTab.php");
      $this->load->view('biblioteca/header');
		$this->load->view('biblioteca/menu');
		$this->load->view('biblioteca/footer');
?>
<style>
    
    #div{
       margin:0 0 0 -9%;
       border-radius:1%;
  }
</style>
<br>
<div class="container">
<div class="row">
  <div class=" col-sm-8.2 p-3 bg-white " id="div">
     <h1 class="text-warning text-center font-weight-bold">Lista de Usuarios</h1>
        
         

      <table class="table table-bordered table-active" id="usuarios_list">
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
</div>
<script>
    $('#usuarios_list').DataTable({
        "ajax": {
            url : "<?php echo base_url(); ?>ctrlusuarios/datosdeUsuarios",
            type : 'POST'
        },     
    });
   
</script>

