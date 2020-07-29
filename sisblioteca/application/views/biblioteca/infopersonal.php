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
<div class="row">
  <div class=" col-sm-8.2 p-3 bg-white " id="div">
     <h1 class="text-warning text-center font-weight-bold">Lista de Usuarios</h1>
        
         

      <table class="table table-bordered table-active">
      <thead class="thead-dark">

            <tr>
               <th>ID</th>
               <th>LOGIN</th>
               <th>CODIGO</th>
               <th>NOMBRES</th>
               <th>APELLIDO</th>
               <th>CORREO</th>
               <th>DIRECCION</th>
               <th>TELEFONO</th>
               <th colspan='2'>OPCIONES</th>
            </tr>
		</thead>
		<tbody>
	    	<?php foreach($registros as $reg): ?>
               <tr>
                  <td><?php echo $reg->usua_id; ?></td>
                  <td><?php echo $reg->usua_login; ?></td>
                  <td><?php echo $reg->usua_codigo; ?></td>
                  <td><?php echo $reg->usua_nombres; ?></td>
                  <td><?php echo $reg->usua_apellidos; ?></td>
                  <td><?php echo $reg->usua_email; ?></td>
                  <td><?php echo $reg->usua_direccion; ?></td>
                  <td><?php echo $reg->usua_telefono; ?></td>
                  <td>

                     <a href="<?php echo base_url();?>ctrlusuarios/index?id=<?php echo $reg->usua_id;?>" class="btn btn-primary"><li class="fa fa-edit"></li>&nbspEditar</a>
                     <a href="<?php echo base_url();?>ctrlusuarios/eliminar?id=<?php echo $reg->usua_id;?>" class="btn btn-danger"><li class="fa fa-trash"></li>&nbspEliminar</a>

                  </td>
               </tr>
               <?php endforeach; ?>
			
		   </tbody>
	   </table>
   </div>
</div>