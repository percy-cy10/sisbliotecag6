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

<div class="card" style="width: 35rem;float:left;left:30%;">
<h1 style="text-align: center;color:orange;">INGRESE LOS DATOS DEL EJEMPLAR</h1>
  <div class="card-body">

<?php 
 

    $form=array(
        'class'=>'was-validated p-3',
        'id'=>'loginForm'

    );
    echo form_open('ctrlejemplar/procesar?id=0',$form);

    

<<<<<<< HEAD
    echo miinput('text',"ejem_titulo",'TITULO:','','required');
    echo miinput('text',"ejem_editorial",'EDITORIAL:','','required');
    echo miinput('text',"ejem_paginas",'PAGINAS:','','required');
    echo miinput('text',"ejem_isbn",'ISBN:','','required');
    echo miinput('text',"ejem_isbn",'ISBN:','','required');
    echo miinput('text',"ejem_idioma",'IDIOMA:','','required');
    echo miinput('text',"ejem_portada",'PORTADA:','','required');
    echo miinput('text',"ejem_digital",'DIGITAL:','','required');
    echo miinput('text',"ejem_audio",'AUDIO:','','required');
    echo miinput('text',"ejem_resumen",'RESUMEN:','','required');
    echo miinput('text',"ejem_resumen",'RESUMEN:','','required');
    echo miSelect('ejem_cate_id','EJEM_CATE_ID:',$registros );
    echo miinput('number',"ejem_valoracion",'VALORACION:','','required');
    echo miinput('date',"ejem_anio",'AÑO:','','required');
    echo miinput('number',"ejem_nprestamos",'NUMERO DE PRESTAMOS:','','required');

    echo miButon('btn btn-success','Enviar');
=======



      echo "<div>";
        $edv=set_value('ejem_editorial');
        echo form_label('EDITORIAL:', 'ejem_editorial');
        $data_e=array(
          'name'=> 'ejem_editorial',
          'class'=> 'form-control',
          'id'=>'ejem_editorial',
          'type'=>'text',
          'value'=>"$edv"
          
        );
        echo form_input($data_e,"",'required');

        if($edv==NULL){

          $error = array(
            'class' => 'invalid-feedback',
          );
          echo form_label('falta completar', 'ejem_editorial', $error);
          $correcto = array(
            'class' => 'valid-feedback',
          );
          echo form_label('correcto', 'ejem_editorial', $correcto);
        }

       //validacion para codeigniter
        echo "<div class='error'>";
          echo form_error('ejem_editorial');
        echo "</div>";
      echo "</div>";

      
      echo "<div>";
          $pagv=set_value('ejem_paginas');
          echo form_label('PAGINAS:', 'ejem_paginas');
          $data_p=array(
            'name'=> 'ejem_paginas',
            'class'=> 'form-control',
            'id'=>'ejem_paginas',
            'type'=>'number',
            'value'=>"$pagv"
            
          );
          echo form_input($data_p,"",'required');
          if($pagv==NULL){
            $error = array(
              'class' => 'invalid-feedback',
            );
            echo form_label('falta completar', 'ejem_paginas', $error);
            $correcto = array(
              'class' => 'valid-feedback',
            );
            echo form_label('correcto', 'ejem_paginas', $correcto);
          }

          
          echo "<div class='error'>";
            echo form_error('ejem_paginas');
          echo "</div>";
      echo "</div>";


      echo "<div>";
          $isbv=set_value('ejem_isbn');
          echo form_label('ISBN:', 'ejem_isbn');
          $data_i=array(
            'name'=> 'ejem_isbn',
            'class'=> 'form-control',
            'id'=>'ejem_isbn',
            'type'=>'text',
            'value'=>"$isbv"
            
          );
          echo form_input($data_i,"",'required');

          if($isbv==NULL){
            $error = array(
              'class' => 'invalid-feedback',
            );
            echo form_label('falta completar', 'ejem_isbn', $error);
            $correcto = array(
              'class' => 'valid-feedback',
            );
            echo form_label('correcto', 'ejem_isbn', $correcto);
          }


          echo "<div class='error'>";
            echo form_error('ejem_isbn');
          echo "</div>";
      echo "</div>";




      echo "<div>";
          $idiov=set_value('ejem_idioma');
          echo form_label('IDIOMA:', 'ejem_idioma');
          $data_id=array(
            'name'=> 'ejem_idioma',
            'class'=> 'form-control',
            'id'=>'ejem_idioma',
            'type'=>'text',
            'value'=>"$idiov"
        
          );
          echo form_input($data_id,"",'required');
          if($idiov==NULL){
            $error = array(
              'class' => 'invalid-feedback',
            );
            echo form_label('falta completar', 'ejem_idioma', $error);
            $correcto = array(
              'class' => 'valid-feedback',
            );
            echo form_label('correcto', 'ejem_idioma', $correcto);
          }


          echo "<div class='error'>";
            echo form_error('ejem_idioma');
          echo "</div>";
      echo "</div>";


       
      echo "<div>";
          $porv=set_value('ejem_portada');
          echo form_label('PORTADA:', 'ejem_portada');
          $data_por=array(
            'name'=> 'ejem_portada',
            'class'=>'form-control input-lg',
            'id'=>'ejem_portada',
            'type'=>'file',
            'value'=>"$porv"
            
        
          );
          echo form_input($data_por,"",'required');
          if($porv==NULL){
            $error = array(
              'class' => 'invalid-feedback',
            );
            echo form_label('falta completar', 'ejem_portada', $error);
            $correcto = array(
              'class' => 'valid-feedback',
            );
            echo form_label('correcto', 'ejem_portada', $correcto);
          }


          echo "<div class='error'>";
            echo form_error('ejem_portada');
          echo "</div>";
      echo "</div>";



      echo "<div>";
          $digv=set_value('ejem_digital');
          echo form_label('DIGITAL:', 'ejem_digital');
          $data_dig=array(
            'name'=> 'ejem_digital',
            'class'=> 'form-control',
            'id'=>'ejem_digital',
            'type'=>'text',
            'value'=>"$digv"
      
          );
          echo form_input($data_dig,"",'required');
          if($digv==NULL){
            $error = array(
              'class' => 'invalid-feedback',
            );
            echo form_label('falta completar', 'ejem_digital', $error);
            $correcto = array(
              'class' => 'valid-feedback',
            );
            echo form_label('correcto', 'ejem_digital', $correcto);
          }


          echo "<div class='error'>";
            echo form_error('ejem_digital');
          echo "</div>";
      echo "</div>";



      echo "<div>";
          $audv=set_value('ejem_audio');
          echo form_label('AUDIO:', 'ejem_audio');
          $data_au=array(
            'name'=> 'ejem_audio',
            'class'=> 'form-control',
            'id'=>'ejem_audio',
            'type'=>'text',
            'value'=>"$audv"
    
          );
          echo form_input($data_au,"",'required');
          if($audv==NULL){
              $error = array(
                'class' => 'invalid-feedback',
              );
              echo form_label('falta completar', 'ejem_audio', $error);
              $correcto = array(
                'class' => 'valid-feedback',
              );
              echo form_label('correcto', 'ejem_audio', $correcto);
            }


          echo "<div class='error'>";
            echo form_error('ejem_audio');
          echo "</div>";
      echo "</div>";


      
      echo "<div>";
          $resv=set_value('ejem_resumen');
          echo form_label('RESUMEN:', 'ejem_resumen');
          $data_res=array(
            'name'=> 'ejem_resumen',
            'class'=> 'form-control',
            'id'=>'ejem_resumen',
            'type'=>'text',
            'value'=>"$resv"
            
            
          );
          echo form_input($data_res,"",'required');

          if($resv==NULL){
            $error = array(
              'class' => 'invalid-feedback',
            );
            echo form_label('falta completar', 'ejem_resumen', $error);
            $correcto = array(
              'class' => 'valid-feedback',
            );
            echo form_label('correcto', 'ejem_resumen', $correcto);
          }

          echo "<div class='error'>";
            echo form_error('ejem_resumen');
          echo "</div>";

      echo "</div>";
>>>>>>> c85f39f7de743b2dd4670f3182acd3d0acf7b0d4
     
    
    
    echo form_close();

?>

  </div>
</div>
  
</body>