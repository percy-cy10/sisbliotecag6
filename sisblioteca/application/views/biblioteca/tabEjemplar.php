<style>
    
    #div{
       margin:0 0 0 2.5%;
       border-radius:1%;
  }


</style>
<?php 
   include('estilos.php');
?>

 <br>


<div class="row">
  <div class=" col-sm-8.2 p-3 bg-white " id="div">
     <h1 class="text-warning text-center font-weight-bold">Lista de Ejemplares</h1>
        
         

            <table class="table table-bordered table-active">
            <thead class="thead-dark">


                  <tr>
                     <th>id</th>
                     <th>nombres</th>
                     <th>apellidos</th>
                     <th>edad</th>
                     <th>email</th>
                     <th>contraseña</th>
                     <th>direccion</th>
                     <th>id</th>
                     <th>nombres</th>
                     <th>apellidos</th>
                     <th>edad</th>
                     <th>email</th>
                     <th>contraseña</th>
                     <th>direccion</th>
                     <th>contraseña</th>
                     <th>direccion</th>
                  </tr>
            </thead>
            <tbody>
               <?php foreach($registros as $reg): ?>
               <tr>
                  <td><?php echo $reg->ejem_id; ?></td>
                  <td><?php echo $reg->ejem_titulo; ?></td>
                  <td><?php echo $reg->ejem_editorial; ?></td>
                  <td><?php echo $reg->ejem_paginas; ?></td>
                  <td><?php echo $reg->ejem_isbn; ?></td>
                  <td><?php echo $reg->ejem_idioma; ?></td>
                  <td><?php echo $reg->ejem_portada; ?></td>
                  <td><?php echo $reg->ejem_digital; ?></td>
                  <td><?php echo $reg->ejem_audio; ?></td>
                  <td><?php echo $reg->ejem_resumen; ?></td>
                  <td><?php echo $reg->ejem_tipo_id; ?></td>
                  <td><?php echo $reg->ejem_cate_id; ?></td>
                  <td><?php echo $reg->ejem_valoracion; ?></td>
                  <td><?php echo $reg->ejem_anio; ?></td>                 
                  <td><?php echo $reg->ejem_nprestamos; ?></td>
                
               </tr>
               <?php endforeach; ?>
            </tbody>
         </table>
  </div>
</div>


