<style>
    
    #div{
      margin:0 0 0 -8%;
       border-radius:1%;
  }
  


</style>
<?php 


 $posicion=$this->session->userdata('veri'); 


   include('estilos.php');
   include("estilosTab.php");
      $this->load->view('biblioteca/header');
		$this->load->view('biblioteca/menu');
		$this->load->view('biblioteca/footer');
?>

 <br>
     <h1 class="text-warning text-center font-weight-bold">LISTA DE EJEMPLARES</h1>
        
         

            <table class="table table-bordered table-active" id="product-list">
            <thead class="thead-dark">


                  <tr>
                     <th>ID</th>
                     <th>TITULO</th>
                     <th>EDITORIAL</th>
                     <th>PAGINAS</th>
                     <th>ISBN</th>
                     <th>IDIOMA</th>
                     <th>RESUMEM</th>
                     <th>CATE_ID</th>
                     <th>AÑO</th>
                     <th>PRESTAMOS</th>

                     <?php if($posicion==2):?>
                         <th>EDITAR</th>
                         <th>ELIMINAR</th>
                      <?php endif;?>
                  </tr>
            </thead>
            <tbody>
         
            </tbody>
         </table>
         <script>
    $('#product-list').DataTable({
        "ajax": {
            url : "<?php echo base_url(); ?>ctrlejemplar/datosdeEjemplar",
            type : 'POST'
        },
        
       
    });
   

 
</script>


