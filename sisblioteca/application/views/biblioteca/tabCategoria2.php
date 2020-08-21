<?php 
<<<<<<< HEAD
        include("estilos.php");
=======
       include("estilos.php");
>>>>>>> 74cafa6825831d2c516c8b54c439a6a0b939fcd4
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
        
         

<<<<<<< HEAD
      <table class="table table-bordered table-active" id="product-list">
=======
      <table class="table table-active" id="product-list">
>>>>>>> 74cafa6825831d2c516c8b54c439a6a0b939fcd4
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
<<<<<<< HEAD
            url : "<?php echo base_url(); ?>ctrlcategoria/datosdeCategoria",
=======
            url : "<?php echo base_url(); ?>Welcome/datosdeCategoria",
>>>>>>> 74cafa6825831d2c516c8b54c439a6a0b939fcd4
            type : 'POST'
        },
        
       
    });
   

 
</script>


