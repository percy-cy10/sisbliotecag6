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

    

    $tv=set_value('ejem_titulo');
      echo form_label('TITULO:', 'ejem_titulo');
      $data_t=array(
        'name'=> 'ejem_titulo',
        'class'=> 'form-control',
        'id'=>'ejem_titulo',
        'type'=>'text',
        'value'=>"$tv"
        
      );
      echo form_input($data_t,'');
      echo "<div class='error'>";
        echo form_error('ejem_titulo');
      echo "</div>";


     
      $edv=set_value('ejem_editorial');
      echo form_label('EDITORIAL:', 'ejem_editorial');
      $data_e=array(
        'name'=> 'ejem_editorial',
        'class'=> 'form-control',
        'id'=>'ejem_editorial',
        'type'=>'text',
        'value'=>"$edv"
         
      );
      echo form_input($data_e,"");
      echo "<div class='error'>";
        echo form_error('ejem_editorial');
      echo "</div>";


      
      $pagv=set_value('ejem_paginas');
      echo form_label('PAGINAS:', 'ejem_paginas');
      $data_p=array(
        'name'=> 'ejem_paginas',
        'class'=> 'form-control',
        'id'=>'ejem_paginas',
        'type'=>'number',
        'value'=>"$pagv"
         
      );
      echo form_input($data_p,"");
      echo "<div class='error'>";
         echo form_error('ejem_paginas');
      echo "</div>";



     
      $isbv=set_value('ejem_isbn');
      echo form_label('ISBN:', 'ejem_isbn');
      $data_i=array(
        'name'=> 'ejem_isbn',
        'class'=> 'form-control',
        'id'=>'ejem_isbn',
        'type'=>'text',
        'value'=>"$isbv"
         
      );
      echo form_input($data_i,"");
      echo "<div class='error'>";
        echo form_error('ejem_isbn');
      echo "</div>";


      $idiov=set_value('ejem_idioma');
      echo form_label('IDIOMA:', 'ejem_idioma');
      $data_id=array(
        'name'=> 'ejem_idioma',
        'class'=> 'form-control',
        'id'=>'ejem_idioma',
        'type'=>'text',
        'value'=>"$idiov"
     
      );
      echo form_input($data_id,"");
      echo "<div class='error'>";
         echo form_error('ejem_idioma');
      echo "</div>";


       
     
      $porv=set_value('ejem_portada');
      echo form_label('PORTADA:', 'ejem_portada');
      $data_por=array(
        'name'=> 'ejem_portada',
        'class'=> 'form-control',
        'id'=>'ejem_portada',
        'type'=>'text',
        'value'=>"$porv"
     
      );
      echo form_input($data_por,"");
      echo "<div class='error'>";
        echo form_error('ejem_portada');
      echo "</div>";


      $digv=set_value('ejem_digital');
      echo form_label('DIGITAL:', 'ejem_digital');
      $data_dig=array(
        'name'=> 'ejem_digital',
        'class'=> 'form-control',
        'id'=>'ejem_digital',
        'type'=>'text',
        'value'=>"$digv"
  
      );
      echo form_input($data_dig,"");
      echo "<div class='error'>";
        echo form_error('ejem_digital');
      echo "</div>";


      $audv=set_value('ejem_audio');
      echo form_label('AUDIO:', 'ejem_audio');
      $data_au=array(
        'name'=> 'ejem_audio',
        'class'=> 'form-control',
        'id'=>'ejem_audio',
        'type'=>'text',
        'value'=>"$audv"
 
      );
      echo form_input($data_au,"");
      echo "<div class='error'>";
        echo form_error('ejem_audio');
      echo "</div>";

      $resv=set_value('ejem_resumen');
      echo form_label('RESUMEN:', 'ejem_resumen');
      $data_res=array(
        'name'=> 'ejem_resumen',
        'class'=> 'form-control',
        'id'=>'ejem_resumen',
        'type'=>'text',
        'value'=>"$resv"
        
         
      );
      echo form_input($data_res,"");
      echo "<div class='error'>";
         echo form_error('ejem_resumen');
      echo "</div>";
      
     

      echo "<div class='error'>";
        echo form_error('ejem_cate_id');
      echo "</div>";
      echo form_label('EJEM_CATE_ID: &nbsp;', 'ejem_cate_id');
      echo "<br>";
      $estilos=array(
          'class'=>'form-control'
      );
      echo form_dropdown('ejem_cate_id',$opciones,'',$estilos);

 echo "<br>";

      $valv=set_value('ejem_valoracion');
      echo form_label('VALORACION:', 'ejem_valoracion');
      $data_var=array(
        'name'=> 'ejem_valoracion',
        'class'=> 'form-control',
        'id'=>'ejem_valoracion',
        'type'=>'number',
        'value'=>"$valv"
 
      );
      echo form_input($data_var,"");
      echo "<div class='error'>";
         echo form_error('ejem_valoracion');
      echo "</div>";



      $aniov=set_value('ejem_anio');
      echo form_label('AÑO:', 'ejem_anio');
      $data_anio=array(
        'name'=> 'ejem_anio',
        'class'=> 'form-control',
        'id'=>'ejem_anio',
        'type'=>'date',
        'value'=>"$aniov"
 
      );


      echo form_input($data_anio,"");
      echo "<div class='error'>";
         echo form_error('ejem_anio');
      echo "</div>";



   
      $npresv=set_value('ejem_nprestamos');
      echo form_label('NUMERO DE PRESTAMOS:', 'ejem_nprestamos');
      $data_nP=array(
        'name'=> 'ejem_nprestamos',
        'class'=> 'form-control',
        'id'=>'ejem_nprestamos',
        'type'=>'number',
        'value'=>"$npresv"
    
      );
      echo form_input($data_nP,"");
      echo "<div class='error'>";
        echo form_error('ejem_nprestamos');
      echo "</div>";

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