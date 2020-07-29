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
</style>
<br>
<div class="container">
<div class="row ">
  <div class=" col-sm-8.2 p-3 bg-white " id="div">
     <h1 class="text-warning text-center font-weight-bold">CATEGORIA</h1>
        
         

      <table class="table table-bordered table-active">
      <thead class="thead-dark">

            <tr>
               <th>cate_id</th>
               <th>cate_nombre</th>
               <th colspan='2'>OPCIONES</th>
            </tr>
		</thead>
		<tbody>
	    	<?php foreach($registros as $reg): ?>
               <tr>
                  <td><?php echo $reg->cate_id; ?></td>
                  <td><?php echo $reg->cate_nombre; ?></td>
                  <td>
                     <a href="<?php echo base_url();?>ctrlcategoria/index?cate_id=<?php echo $reg->cate_id;?>" class="btn btn-primary"><li class="fa fa-edit"></li>&nbspEditar</a>
                     <a href="<?php echo base_url();?>ctrlcategoria/eliminar?cate_id=<?php echo $reg->cate_id;?>" class="btn btn-danger"><li class="fa fa-trash"></li>&nbspEliminar</a>
                  </td>
               </tr>
               <?php endforeach; ?>
			
		   </tbody>
	   </table>
   </div>
</div>
</div>