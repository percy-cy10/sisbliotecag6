<?php 
 include("estilos.php");
 include("estilosTab.php");
      $this->load->view('biblioteca/header');
		$this->load->view('biblioteca/menu');
		$this->load->view('biblioteca/footer');
?>
<style>
    
    #div{
       margin:0 0 0 2.5%;
       border-radius:1%;
  }
</style>
<?php 



        $posicion=$this->session->userdata('veri'); 
        $this->load->view('biblioteca/header');
		$this->load->view('biblioteca/footer');
?>
<br>

     <h1 class="text-warning text-center font-weight-bold">Lista de Usuarios</h1>
        
         

      <table class="table table-bordered table-active" id="usuario">
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
               <th>ESADMIN</th>
               <th>EDITAR</th>
               <th>ELIMINAR</th>
            </tr>
		</thead>
		<tbody>

		   </tbody>
	   </table>
      <script>
    $('#usuario').DataTable({
        "ajax": {
            url : "<?php echo base_url(); ?>ctrlusuarios/datosdeUsuario",
            type : 'POST'
        },
        
       
    });
   

 
</script>
