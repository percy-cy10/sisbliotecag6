<?php 
 include("estilos.php");

?>
<h3>escoja la CATEGORIA</h3>
<?php 
  
   echo form_open('ctrlcategoria/buscar?cate_id=0');

      echo form_dropdown('cate_id',$opciones );

      echo form_submit('BUSCAR','BUSCAR');
    
   echo form_close();

?>
       
