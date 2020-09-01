<?php 
 include("estilos.php");

?>
<style>
    .error{
       color: red;
    }
</style>

<body class="full-cover-background" style="background-image:url(https://thumbs.dreamstime.com/z/biblioteca-fondo-de-los-estantes-blancos-con-libros-y-texto-concepto-del-aprendizaje-la-educaci-n-ilustraci-n-d-145388432.jpg);">
<br>
<div class="container">

<div class="card" style="width: 28rem;float:left;left:30%;">
<h1 style="text-align: center;color:orange;">INGRESE LOS DATOS DEL EJEMPLAR</h1>
  <div class="card-body">

<?php 

    $form=array(
        'class'=>'was-validated p-3'

    );
    echo form_open('ctrlejemplar/procesar?id=0');

    echo "<div class='error'>";
      echo form_error('ejem_titulo');
    echo "</div>";
    
    $var=set_value('ejem_titulo');

      echo form_label('TITULO:', 'ejem_titulo');
      $data_t=array(
        'name'=> 'ejem_titulo',
        'class'=> 'form-control',
        'id'=>'ejem_titulo',
        'type'=>'text',
        'value'=>"$var"
        
      );
      echo form_input($data_t,'');

      echo "<div class='error'>";
         echo form_error('ejem_editorial');
      echo "</div>";

      echo form_label('EDITORIAL:', 'ejem_editorial');
      $data_e=array(
        'name'=> 'ejem_editorial',
        'class'=> 'form-control',
        'id'=>'ejem_editorial',
        'type'=>'text'
         
      );
      echo form_input($data_e,"");

      echo "<div class='error'>";
         echo form_error('ejem_paginas');
      echo "</div>";
      echo form_label('PAGINAS:', 'ejem_paginas');
      $data_p=array(
        'name'=> 'ejem_paginas',
        'class'=> 'form-control',
        'id'=>'ejem_paginas',
        'type'=>'number'
         
      );
      echo form_input($data_p,"");

      echo "<div class='error'>";
         echo form_error('ejem_isbn');
      echo "</div>";
      echo form_label('ISBN:', 'ejem_isbn');
      $data_i=array(
        'name'=> 'ejem_isbn',
        'class'=> 'form-control',
        'id'=>'ejem_isbn',
        'type'=>'text'
         
      );
      echo form_input($data_i,"");

      echo "<div class='error'>";
         echo form_error('ejem_idioma');
      echo "</div>";
      echo form_label('IDIOMA:', 'ejem_idioma');
      $data_id=array(
        'name'=> 'ejem_idioma',
        'class'=> 'form-control',
        'id'=>'ejem_idioma',
        'type'=>'text'
     
      );
      echo form_input($data_id,"");
       
      echo "<div class='error'>";
         echo form_error('ejem_portada');
      echo "</div>";
      echo form_label('PORTADA:', 'ejem_portada');
      $data_por=array(
        'name'=> 'ejem_portada',
        'class'=> 'form-control',
        'id'=>'ejem_portada',
        'type'=>'text'
     
      );
      echo form_input($data_por,"");

      echo "<div class='error'>";
        echo form_error('ejem_digital');
      echo "</div>";
      echo form_label('DIGITAL:', 'ejem_digital');
      $data_dig=array(
        'name'=> 'ejem_digital',
        'class'=> 'form-control',
        'id'=>'ejem_digital',
        'type'=>'text'
        
         
      );
      echo form_input($data_dig,"");

      echo "<div class='error'>";
         echo form_error('ejem_audio');
      echo "</div>";
      echo form_label('AUDIO:', 'ejem_audio');
      $data_au=array(
        'name'=> 'ejem_audio',
        'class'=> 'form-control',
        'id'=>'ejem_audio',
        'type'=>'text'
        
         
      );
      echo form_input($data_au,"");
 
      echo "<div class='error'>";
        echo form_error('ejem_resumen');
      echo "</div>";
      echo form_label('RESUMEN:', 'ejem_resumen');
      $data_res=array(
        'name'=> 'ejem_resumen',
        'class'=> 'form-control',
        'id'=>'ejem_resumen',
        'type'=>'text'
        
         
      );
      echo form_input($data_res,"");
      
      echo "<div class='error'>";
        echo form_error('ejem_cate_id');
      echo "</div>";
      echo form_label('EJEM_CATE_ID: &nbsp;', 'ejem_cate_id');
      echo "<br>";
      $estilos=array(
          'class'=>'form-control'

      );
      echo form_dropdown('ejem_cate_id',$opciones,'',$estilos);

      echo "<div class='error'>";
         echo form_error('ejem_valoracion');
      echo "</div>";
      echo form_label('VALORACION:', 'ejem_valoracion');
      $data_var=array(
        'name'=> 'ejem_valoracion',
        'class'=> 'form-control',
        'id'=>'ejem_valoracion',
        'type'=>'number'
        
         
      );
      echo form_input($data_var,"");

      echo "<div class='error'>";
         echo form_error('ejem_anio');
      echo "</div>";
      echo form_label('AÑO:', 'ejem_anio');
      $data_anio=array(
        'name'=> 'ejem_anio',
        'class'=> 'form-control',
        'id'=>'ejem_anio',
        'type'=>'date'
 
      );

      echo form_input($data_anio,"");

      echo "<div class='error'>";
         echo form_error('ejem_nprestamos');
      echo "</div>";
      echo form_label('NUMERO DE PRESTAMOS:', 'ejem_nprestamos');
      $data_nP=array(
        'name'=> 'ejem_nprestamos',
        'class'=> 'form-control',
        'id'=>'ejem_nprestamos',
        'type'=>'number'
    
      );
      echo form_input($data_nP,"");

      $estilos1=array(
        'class'=>'btn btn-success'
         

    );
    echo "<br>";
      echo form_submit('GUARDAR','Enviar',$estilos1);

   echo form_close();

?>

  </div>
</div>
  
</body>