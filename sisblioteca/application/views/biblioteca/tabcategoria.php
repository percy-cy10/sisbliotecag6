<?php 
 include("estilos.php");
 $this->load->view('biblioteca/header');
		$this->load->view('biblioteca/menu');
		$this->load->view('biblioteca/footer');
?>
<style>
    
    #div{
       margin:0 0 0 2.5%;
       border-radius:1%;
  }
  <?php 


 $posicion=$this->session->userdata('veri'); 


   include('estilos.php');
      $this->load->view('biblioteca/header');
		$this->load->view('biblioteca/footer');
?>

</style>
<br>
<div class="container">
<div class="row ">
  <div class=" col-sm-8.2 p-3 bg-white " id="div">
     <h1 class="text-warning text-center font-weight-bold">CATEGORIA</h1>
        
         

      <table class="table table-bordered table-active">
      <thead class="thead-dark">

            <tr>
               <th>ID CATEGORIA</th>
               <th>NOMBRE CATEGORIA</th>
               <?php if($posicion==2):?>
               <th colspan='2'>OPCIONES</th>
               <?php endif;?>
            </tr>
		</thead>
		<tbody>
	    	<?php foreach($registros as $reg): ?>
               <tr>
                  <td><?php echo $reg->cate_id; ?></td>
                  <td><?php echo $reg->cate_nombre; ?></td>
                  <?php if($posicion==2):?>
                  <td>
                     <a href="<?php echo base_url();?>ctrlcategoria/editar?cate_id=<?php echo $reg->cate_id;?>" class="btn btn-primary"><li class="fa fa-edit"></li>&nbspEditar</a>
                 </td>
                 <?php endif;?>
               </tr>
               <?php endforeach; ?>
			
		   </tbody>
	   </table>
   </div>
</div>
</div>