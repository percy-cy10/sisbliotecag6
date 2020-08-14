<?php 
 include("estilos.php");

?>
<body class="full-cover-background" style="background-image:url(https://thumbs.dreamstime.com/z/biblioteca-fondo-de-los-estantes-blancos-con-libros-y-texto-concepto-del-aprendizaje-la-educaci-n-ilustraci-n-d-145388432.jpg);">

<div class="container">
<br>
<div class="card" style="width: 28rem;float:left;left:30%;">
<h1 style="text-align: center;color:orange;">SELECCIONE UNA CATEGORIA A BUSCAR</h1>
  <div class="card-body">
<?php 
  
   echo form_open('ctrlcategoria/buscar?cate_id=0');

   $opcionesES=array(
      'class'=> 'form-control'
       
    );
      echo form_dropdown('cate_id',$opciones,'', $opcionesES);

      $estilos1=array(
         'class'=>'btn btn-success'
         
     );
      echo "<br>";
      echo form_submit('BUSCAR','BUSCAR',$estilos1);
    
   echo form_close();

?>
       
       </div>
</div>
  
</body>  
       
