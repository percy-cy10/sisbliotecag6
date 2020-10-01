<style>
    
    #div{
      margin:0 0 0 -9%;
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

<div class="container">
<div class="row">
  <div class=" col-sm-8.2 p-3 bg-white " id="div">
     <h1 class="text-warning text-center font-weight-bold">LISTA DE EJEMPLARES</h1>
        
         

         <table class="table table-bordered table-active " id="ejemplar_list">
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
                         <th>IMPRIMIR</th>
                     <?php endif;?>
                  </tr>
            </thead>
            <tbody>
              

            </tbody>
         </table>
  </div>
</div>
</div>
<script>
    $('#ejemplar_list').DataTable({
        "ajax": {
            url : "<?php echo base_url(); ?>ctrlejemplar/datosdeejemplar",
            type : 'POST'
        },  
    });
</script>


