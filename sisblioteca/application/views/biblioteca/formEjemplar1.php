<?php 
 include("estilos.php");

?>
<body class="full-cover-background" style="background-image:url(https://thumbs.dreamstime.com/z/biblioteca-fondo-de-los-estantes-blancos-con-libros-y-texto-concepto-del-aprendizaje-la-educaci-n-ilustraci-n-d-145388432.jpg);">
<br>
<div class="container">

<div class="card" style="width: 28rem;float:left;left:30%;">
<h1 style="text-align: center;color:orange;">INGRESE LOS NUEVOS DATOS DEL EJEMPLAR</h1>
  <div class="card-body">
<?php 
   
   $form=array(
     'class'=>'was-validated'
   );

   echo form_open_multipart("ctrlejemplar/procesar?id=$registros->ejem_id",$form);

      echo form_label('TITULO:', 'ejem_titulo');
      $data_t=array(
        'name'=> 'ejem_titulo',
        'class'=> 'form-control',
        'id'=>'ejem_titulo',
        'type'=>'text',
        'value'=>"$registros->ejem_titulo"
      );
      echo form_input($data_t,"",'required');
     

      echo form_label('EDITORIAL:', 'ejem_editorial');
      $data_e=array(
        'name'=> 'ejem_editorial',
        'class'=> 'form-control',
        'id'=>'ejem_editorial',
        'type'=>'text',
        'value'=>"$registros->ejem_editorial"
         
      );
      echo form_input($data_e,"",'required');

      echo form_label('PAGINAS:', 'ejem_paginas');
      $data_p=array(
        'name'=> 'ejem_paginas',
        'class'=> 'form-control',
        'id'=>'ejem_paginas',
        'type'=>'number',
        'value'=>"$registros->ejem_paginas"
         
      );
      echo form_input($data_p,"",'required');

      echo form_label('ISBN:', 'ejem_isbn');
      $data_i=array(
        'name'=> 'ejem_isbn',
        'class'=> 'form-control',
        'id'=>'ejem_isbn',
        'type'=>'text',
        'value'=>"$registros->ejem_isbn"
      );
      echo form_input($data_i,"",'required');

      
       

      echo form_label('IDIOMA:', 'ejem_idioma');
      $data_id=array(
        'name'=> 'ejem_idioma',
        'class'=> 'form-control',
        'id'=>'ejem_idioma',
        'type'=>'text',
        'value'=>"$registros->ejem_idioma"
         
      );
      echo form_input($data_id,"",'required');
       


      echo form_label('PORTADA:', 'ejem_portada');
      $data_por=array(
        'name'=> 'ejem_portada',
        'class'=> 'form-control',
        'id'=>'ejem_portada',
        'type'=>'file',
        'value'=>"$registros->ejem_portada"
         
      );
      echo form_input($data_por,"",'required');

     


      echo form_label('DIGITAL:', 'ejem_digital');
      $data_dig=array(
        'name'=> 'ejem_digital',
        'class'=> 'form-control',
        'id'=>'ejem_digital',
        'type'=>'text',
        'value'=>"$registros->ejem_digital"
         
      );
      echo form_input($data_dig,"",'required');

      echo form_label('AUDIO:', 'ejem_audio');
      $data_au=array(
        'name'=> 'ejem_audio',
        'class'=> 'form-control',
        'id'=>'ejem_audio',
        'type'=>'text',
        'value'=>"$registros->ejem_audio"
         
      );
      echo form_input($data_au,"",'required');
      
    
      echo form_label('RESUMEN:', 'ejem_resumen');
      $data_res=array(
        'name'=> 'ejem_resumen',
        'class'=> 'form-control',
        'id'=>'ejem_resumen',
        'type'=>'text',
        'value'=>"$registros->ejem_resumen"
        
         
      );
      echo form_input($data_res,"",'required');
      $estilos=array(
        'class'=>'form-control'
  
    );

    
     echo "<br>";
      echo form_label('EJEM_CATE_ID: &nbsp;', 'ejem_cate_id');
      echo form_dropdown('ejem_cate_id',$opciones,"$registros->ejem_cate_id",$estilos);
     echo "<br>";







      echo form_label('VALORACION:', 'ejem_valoracion');
      $data_var=array(
        'name'=> 'ejem_valoracion',
        'class'=> 'form-control',
        'id'=>'ejem_valoracion',
        'type'=>'number',
        'value'=>"$registros->ejem_valoracion"
        
         
      );
      echo form_input($data_var,"",'required');

      echo form_label('AÑO:', 'ejem_anio');
      $data_anio=array(
        'name'=> 'ejem_anio',
        'class'=> 'form-control',
        'id'=>'ejem_anio',
        'type'=>'date',
        'value'=>"$registros->ejem_anio"
        
         
      );
      echo form_input($data_anio,"",'required');

      
      echo form_label('NUMERO DE PRESTAMOS:', 'ejem_nprestamos');
      $data_nP=array(
        'name'=> 'ejem_nprestamos',
        'class'=> 'form-control',
        'id'=>'ejem_nprestamos',
        'type'=>'number',
        'value'=>"$registros->ejem_nprestamos"
        
         
      );
      echo form_input($data_nP,"",'required');

      echo "<br>";
      $estilos1=array(
        'class'=>'btn btn-success'
         

    );
      echo form_submit('Guardar','Guardar',$estilos1);
    
    
   echo form_close();

?>
       
       </div>
</div>
  
</body>  
