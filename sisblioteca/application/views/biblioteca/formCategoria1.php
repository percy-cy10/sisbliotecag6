<?php 
 include("estilos.php");

?>
<div class="container">
<?php 
   echo form_open('ctrlcategoria/guardar?cate_id=0');
      echo form_label('CATEGORIA ID:', 'cate_id');
      $cate_id1=array(
        'name'=> 'cate_id',
        'class'=> 'form-control',
        'id'=>'cate_id',
        'type'=>'number'
         
      );
      echo form_input($cate_id1,"");
      
      echo form_label('CATEGORIA NOMBRES:', 'cate_nombre');
      $cate_nom=array(
        'name'=> 'cate_nombre',
        'class'=> 'form-control',
        'id'=>'cate_nombre',
        'type'=>'text'
         
      );
      echo form_input($cate_nom,"");
     
     
      echo form_submit('Guardar','Guardar','class="btn btn-success"');
    
   echo form_close();

?>
     
         
