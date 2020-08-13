<?php 
 include("estilos.php");

?>
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