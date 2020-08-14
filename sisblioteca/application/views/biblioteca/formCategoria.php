<?php 
 include("estilos.php");

?>
<body class="full-cover-background" style="background-image:url(https://thumbs.dreamstime.com/z/biblioteca-fondo-de-los-estantes-blancos-con-libros-y-texto-concepto-del-aprendizaje-la-educaci-n-ilustraci-n-d-145388432.jpg);">

<div class="container">

<div class="card" style="width: 28rem;float:left;left:30%;">
<h1 style="text-align: center;color:orange;">INGRESE LOS DATOS DEL EJEMPLAR</h1>
  <div class="card-body">
<?php 
  
  echo form_open("ctrlcategoria/guardar?cate_id=$registros->cate_id");

 
  $cate_id1=array(
    'name'=> 'cate_id',
    'class'=> 'form-control',
    'id'=>'cate_id',
    'type'=>'hidden',
    'value'=>"$registros->cate_id"
     
  );
  echo form_input($cate_id1,"");
  
  echo form_label('CATEGORIA NOMBRES:', 'cate_nombre');
  $cate_nom=array(
    'name'=> 'cate_nombre',
    'class'=> 'form-control',
    'id'=>'cate_nombre',
    'type'=>'text',
    'value'=>"$registros->cate_nombre"
  );
  echo form_input($cate_nom,"");
 

     echo form_submit('ENVIAR','ENVIAR');
   
  echo form_close();

?>
       
       </div>
</div>
  
</body>  