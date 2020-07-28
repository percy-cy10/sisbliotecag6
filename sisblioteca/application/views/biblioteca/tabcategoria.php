<?php 
 include("estilos.php");
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
     <h1 class="text-warning text-center font-weight-bold">BUSQUEDA</h1>
        
         

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
                     <a href="<?php echo base_url();?>ctrlusuarios/index?id=<?php echo $reg->usua_id;?>" class="btn btn-primary"><li class="fa fa-edit"></li>&nbspEditar</a>
                  </td>
               </tr>
               <?php endforeach; ?>
			
		   </tbody>
	   </table>
   </div>
</div>
</div>