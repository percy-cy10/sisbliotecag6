<style>
    
    #div{
       margin:0 0 0 4%;
       border-radius:1%;
  }

  
  #img1{
      margin:0 0 0 0;
  }


  body{
       background-image:url('img/portal.jpg');
       
    }


</style>
<?php 
   include('estilos.php');
?>

 <br>


<div class="row">
  <div class=" col-sm-8.5 p-2 bg-white " id="div">

<br>
<img src="img/tabla.png" width="120" height="120"  class="rounded float-right" id="img1">
            <h1 class="text-warning text-center font-weight-bold">Lista de Personas</h1>
            
            <a href="<?php echo base_url('persona/registro');?>" class="btn btn-info "><li class="fa fa-pencil"></li>&nbspAgregar Registros</a>

          <br><br>
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
                     <th>opciones</th>
                  </tr>
            </thead>
            <tbody>
               <?php foreach($registros as $reg): ?>
               <tr>
                  <td><?php echo $reg->id; ?></td>
                  <td><?php echo $reg->nombres; ?></td>
                  <td><?php echo $reg->apellidos; ?></td>
                  <td><?php echo $reg->edad; ?></td>
                  <td><?php echo $reg->email; ?></td>
                  <td><?php echo $reg->contraseña; ?></td>
                  <td><?php echo $reg->direccion; ?></td>
                  <td>

                      <a href="<?php echo base_url();?>persona/index?id=<?php echo $reg->id;?>" class="btn btn-primary"><li class="fa fa-edit"></li>&nbspEditar</a>
                      <a href="<?php echo base_url();?>persona/eliminar?id=<?php echo $reg->id;?>" class="btn btn-danger"><li class="fa fa-trash"></li>&nbspEliminar</a>

                  </td>
               </tr>
               <?php endforeach; ?>
            </tbody>
         </table>
  </div>

  
  <div class="col-sm-3">

    <div class="card text-white bg-dark mb-3">
         <img class="card-img-top" src="img/micode.png" alt="Card image cap" >
      <div class="card-body">
         <h5 class="card-title text-warning font-weight-bold">Modelos</h5>
         <p class="card-text font-weight-bold">son las clases PHP encargadas de relacionarse con 
            nuestra base de datos, tanto a la hora de extraer información como a la hora de inserción, 
            la selección de usuarios, actualización y borrado.</p>
         <a href="https://desarrolloweb.com/articulos/modelos-codeIgniter.html" class="btn btn-primary">Empieza a
           trabajar con Modelos</a>
      </div>
    </div>

  </div>
</div>
