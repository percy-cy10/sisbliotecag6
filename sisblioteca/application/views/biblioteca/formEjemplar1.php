<?php 
 include("estilos.php");

?>
<?php 
   echo form_open("ctrlejemplar/guardar?id=<?php echo $registros->ejem_id");
      echo form_label('TITULO:', 'ejem_titulo');
      $data_t=array(
        'name'=> 'ejem_titulo',
        'class'=> 'form-control',
        'id'=>'ejem_titulo',
        'type'=>'text',
        'value'=>"$registros->ejem_titulo"
      );
      echo form_input($data_t,"");
     

      echo form_label('EDITORIAL:', 'ejem_editorial');
      $data_e=array(
        'name'=> 'ejem_editorial',
        'class'=> 'form-control',
        'id'=>'ejem_editorial',
        'type'=>'text',
        'value'=>"$registros->ejem_editorial"
         
      );
      echo form_input($data_e,"");

      echo form_label('PAGINAS:', 'ejem_paginas');
      $data_p=array(
        'name'=> 'ejem_paginas',
        'class'=> 'form-control',
        'id'=>'ejem_paginas',
        'type'=>'number',
        'value'=>"$registros->ejem_paginas"
         
      );
      echo form_input($data_p,"");

      echo form_label('ISBN:', 'ejem_isbn');
      $data_i=array(
        'name'=> 'ejem_isbn',
        'class'=> 'form-control',
        'id'=>'ejem_isbn',
        'type'=>'text',
        'value'=>"$registros->ejem_isbn"
      );
      echo form_input($data_i,"");

      
       

      echo form_label('IDIOMA:', 'ejem_idioma');
      $data_id=array(
        'name'=> 'ejem_idioma',
        'class'=> 'form-control',
        'id'=>'ejem_idioma',
        'type'=>'text',
        'value'=>"$registros->ejem_idioma"
         
      );
      echo form_input($data_id,"");
       
      echo form_label('PORTADA:', 'ejem_portada');
      $data_por=array(
        'name'=> 'ejem_portada',
        'class'=> 'form-control',
        'id'=>'ejem_portada',
        'type'=>'text',
        'value'=>"$registros->ejem_portada"
         
      );
      echo form_input($data_por,"");

     


      echo form_label('DIGITAL:', 'ejem_digital');
      $data_dig=array(
        'name'=> 'ejem_digital',
        'class'=> 'form-control',
        'id'=>'ejem_digital',
        'type'=>'text',
        'value'=>"$registros->ejem_digital"
         
      );
      echo form_input($data_dig,"");

      echo form_label('AUDIO:', 'ejem_audio');
      $data_au=array(
        'name'=> 'ejem_audio',
        'class'=> 'form-control',
        'id'=>'ejem_audio',
        'type'=>'text',
        'value'=>"$registros->ejem_audio"
         
      );
      echo form_input($data_au,"");
      
    
      echo form_label('RESUMEN:', 'ejem_resumen');
      $data_res=array(
        'name'=> 'ejem_resumen',
        'class'=> 'form-control',
        'id'=>'ejem_resumen',
        'type'=>'text',
        'value'=>"$registros->ejem_resumen"
        
         
      );
      echo form_input($data_res,"");

     echo "<br>";
      echo form_label('EJEM_CATE_ID: &nbsp;', 'ejem_cate_id');
      echo form_dropdown('ejem_cate_id',$opciones,"$registros->ejem_cate_id");
     echo "<br>";







      echo form_label('VALORACION:', 'ejem_valoracion');
      $data_var=array(
        'name'=> 'ejem_valoracion',
        'class'=> 'form-control',
        'id'=>'ejem_valoracion',
        'type'=>'number',
        'value'=>"$registros->ejem_valoracion"
        
         
      );
      echo form_input($data_var,"");

      echo form_label('AÑO:', 'ejem_anio');
      $data_anio=array(
        'name'=> 'ejem_anio',
        'class'=> 'form-control',
        'id'=>'ejem_anio',
        'type'=>'text',
        'value'=>"$registros->ejem_anio"
        
         
      );
      echo form_input($data_anio,"");

      
      echo form_label('NUMERO DE PRESTAMOS:', 'ejem_nprestamos');
      $data_nP=array(
        'name'=> 'ejem_nprestamos',
        'class'=> 'form-control',
        'id'=>'ejem_nprestamos',
        'type'=>'text',
        'value'=>"$registros->ejem_nprestamos"
        
         
      );
      echo form_input($data_nP,"");
     
      echo form_submit('Guardar','Guardar');
    
   echo form_close();

?>
       
      
