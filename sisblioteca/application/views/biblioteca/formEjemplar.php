<?php 
 include("estilos.php");

?>
<div class="container">
<?php 
   echo form_open('ctrlejemplar/guardar?id=0');

      echo form_label('TITULO:', 'ejem_titulo');
      $data_t=array(
        'name'=> 'ejem_titulo',
        'class'=> 'form-control',
        'id'=>'ejem_titulo',
        'type'=>'text'
         
      );
      echo form_input($data_t,"");

      echo form_label('EDITORIAL:', 'ejem_editorial');
      $data_e=array(
        'name'=> 'ejem_editorial',
        'class'=> 'form-control',
        'id'=>'ejem_editorial',
        'type'=>'text'
         
      );
      echo form_input($data_e,"");

      echo form_label('PAGINAS:', 'ejem_paginas');
      $data_p=array(
        'name'=> 'ejem_paginas',
        'class'=> 'form-control',
        'id'=>'ejem_paginas',
        'type'=>'number'
         
      );
      echo form_input($data_p,"");

      echo form_label('ISBN:', 'ejem_isbn');
      $data_i=array(
        'name'=> 'ejem_isbn',
        'class'=> 'form-control',
        'id'=>'ejem_isbn',
        'type'=>'text'
         
      );
      echo form_input($data_i,"");

      echo form_label('IDIOMA:', 'ejem_idioma');
      $data_id=array(
        'name'=> 'ejem_idioma',
        'class'=> 'form-control',
        'id'=>'ejem_idioma',
        'type'=>'text'
        
         
      );
      echo form_input($data_id,"");
       
      echo form_label('PORTADA:', 'ejem_portada');
      $data_por=array(
        'name'=> 'ejem_portada',
        'class'=> 'form-control',
        'id'=>'ejem_portada',
        'type'=>'text'
        
         
      );
      echo form_input($data_por,"");

      echo form_label('DIGITAL:', 'ejem_digital');
      $data_dig=array(
        'name'=> 'ejem_digital',
        'class'=> 'form-control',
        'id'=>'ejem_digital',
        'type'=>'text'
        
         
      );
      echo form_input($data_dig,"");

      echo form_label('AUDIO:', 'ejem_audio');
      $data_au=array(
        'name'=> 'ejem_audio',
        'class'=> 'form-control',
        'id'=>'ejem_audio',
        'type'=>'text'
        
         
      );
      echo form_input($data_au,"");

      echo form_label('RESUMEN:', 'ejem_resumen');
      $data_res=array(
        'name'=> 'ejem_resumen',
        'class'=> 'form-control',
        'id'=>'ejem_resumen',
        'type'=>'text'
        
         
      );
      echo form_input($data_res,"");

      echo form_label('Cate ID:', 'ejem_cate_id');
      $data_cat=array(
        'name'=> 'ejem_cate_id',
        'class'=> 'form-control',
        'id'=>'ejem_cate_id',
        'type'=>'text'
        
         
      );
      echo form_input($data_cat,"");

      echo form_label('VALORACION:', 'ejem_valoracion');
      $data_var=array(
        'name'=> 'ejem_valoracion',
        'class'=> 'form-control',
        'id'=>'ejem_valoracion',
        'type'=>'number'
        
         
      );
      echo form_input($data_var,"");

      echo form_label('AÑO:', 'ejem_anio');
      $data_anio=array(
        'name'=> 'ejem_anio',
        'class'=> 'form-control',
        'id'=>'ejem_anio',
        'type'=>'text'
        
         
      );
      echo form_input($data_anio,"");

      
      echo form_label('NUMERO DE PRESTAMOS:', 'ejem_nprestamos');
      $data_nP=array(
        'name'=> 'ejem_nprestamos',
        'class'=> 'form-control',
        'id'=>'ejem_nprestamos',
        'type'=>'text'
        
         
      );
      echo form_input($data_nP,"");
      echo form_submit('Enviar','Enviar',"class='btn btn-success'");


   echo form_close();

?>