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
<style>
    #div{
      margin:0 0 0 -3%;
     border-radius:1%;
  }
</style>
<br>
<div class="container">
<div class="row">
  <div class=" col-sm-8.2 p-3 bg-white " id="div">
     <h1 class="text-warning text-center font-weight-bold">CATEGORIA</h1>


      <table class="table table-active" id="categoria_list">
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
</div>

<script>
    $('#categoria_list').DataTable({
        "ajax": {
            url : "<?php echo base_url(); ?>ctrlcategoria/datosdeCategoria",
            type : 'POST'
        },     
    });
   
</script>


