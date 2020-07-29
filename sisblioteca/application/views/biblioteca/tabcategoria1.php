<style>
    
    #div{
      margin:0 0 0 -8%;
       border-radius:1%;
  }
  


</style>
<?php 


 $posicion=$this->session->userdata('veri'); 


   include('estilos.php');
      $this->load->view('biblioteca/header');
		$this->load->view('biblioteca/menu');
		$this->load->view('biblioteca/footer');
?>

 <br>

<div class="container">
<div class="row">
  <div class=" col-sm-8.2 p-3 bg-white " id="div">

  <?php if($registros->ejem_cate_id==1): ?>?>
     <h1 class="text-warning text-center font-weight-bold">Libros de Biomedicas</h1>
  <?php endif; ?>     
  <?php if($registros->ejem_cate_id==2): ?>?>
     <h1 class="text-warning text-center font-weight-bold">Libros de Sociales</h1>
  <?php endif; ?> 
  <?php if($registros->ejem_cate_id==3): ?>?>
     <h1 class="text-warning text-center font-weight-bold">Libros de Ingenierias</h1>
  <?php endif; ?> 

            <table class="table table-bordered table-active">
            <thead class="thead-dark">


                  <tr>
                     <th>ID</th>
                     <th>TITULO</th>
                     <th>EDITORIAL</th>
                     <th>PAGINAS</th>
                     <th>ISBN</th>
                     <th>IDIOMA</th>
                     <th>RESUMEM</th>
                     <th>TIPO_ID</th>
                     <th>CATE_ID</th>
                     <th>AÑO</th>
                     <th>PRESTAMOS</th>

                     <?php if($posicion==2):?>
                         <th>OPCIONES</th>
                      <?php endif;?>
                  </tr>
            </thead>
            <tbody>
               <tr>
                  <td><?php echo $registros->ejem_id; ?></td>
                  <td><?php echo $registros->ejem_titulo; ?></td>
                  <td><?php echo $registros->ejem_editorial; ?></td>
                  <td><?php echo $registros->ejem_paginas; ?></td>
                  <td><?php echo $registros->ejem_isbn; ?></td>
                  <td><?php echo $registros->ejem_idioma; ?></td>
                  <td><?php echo $registros->ejem_resumen; ?></td>
                  <td><?php echo $registros->ejem_tipo_id; ?></td>
                  <td><?php echo $registros->ejem_cate_id; ?></td>
                  <td><?php echo $registros->ejem_anio; ?></td>                 
                  <td><?php echo $registros->ejem_nprestamos; ?></td>

                  <?php if($posicion==2):?>
                     <td>
                        <a href="<?php echo base_url();?>ctrlejemplar1/editar?ejem_cate_id=<?php echo $registros->ejem_cate_id;?>" class="btn btn-primary"><li class="fa fa-edit"></li>&nbspEditar</a>
                        <a href="<?php echo base_url();?>ctrlejemplar1/eliminar?ejem_cate_id=<?php echo $registros->ejem_cate_id;?>" class="btn btn-danger"><li class="fa fa-trash"></li>&nbspEliminar</a>
                     </td>
                 <?php endif;?>
               </tr>
              
            </tbody>
         </table>
  </div>
</div>
</div>


