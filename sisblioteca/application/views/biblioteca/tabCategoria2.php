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
<br>

     <h1 class="text-warning text-center font-weight-bold">CATEGORIA</h1>
        
         

      <table class="table table-bordered table-active" id="product-list">
         <thead class="thead-dark">

               <tr>
                  <th>ID CATEGORIA</th>
                  <th>NOMBRE CATEGORIA</th>
                  <?php if($posicion==2):?>
                     <th>EDITAR</th>
                  <?php endif;?>
                  <?php if($posicion==2):?>
                     <th>ELIMINAR</th>
                  <?php endif;?>
               </tr>
         </thead>
         <tbody>
                
         </tbody>
	   </table>
  
   <br>
<script>
    $('#product-list').DataTable({
        "ajax": {
            url : "<?php echo base_url(); ?>ctrlcategoria/datosdeCategoria",
            type : 'POST'
        },
        
       
    });
   

 
</script>


