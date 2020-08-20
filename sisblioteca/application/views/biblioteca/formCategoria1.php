<?php 
 include("estilos.php");

?>
<body class="full-cover-background" style="background-image:url(https://thumbs.dreamstime.com/z/biblioteca-fondo-de-los-estantes-blancos-con-libros-y-texto-concepto-del-aprendizaje-la-educaci-n-ilustraci-n-d-145388432.jpg);">
<br>
<div class="container">

<div class="card" style="width: 28rem;float:left;left:30%;">
<h1 style="text-align: center;color:orange;">INGRESE LOS DATOS DE LA CATEGORIA</h1>
  <div class="card-body">

<?php 
  
   $form=array(
      'class'=>'was-validated p-3'

   );

   echo form_open('ctrlcategoria/guardar?cate_id=0', $form);

      echo form_label('CATEGORIA ID:', 'cate_id');
      $cate_id1=array(
        'name'=> 'cate_id',
        'class'=> 'form-control ',
        'id'=>'cate_id',
        'type'=>'number',
        'placeholder'=>'opcion' 
      );
      echo form_input($cate_id1,'','required');

       //para el icono de error del campo cate_id
       $error = array(
        'class' => 'invalid-feedback',
      );
      echo form_label('falta completar', 'cate_id', $error);

      //para el icono de bien del campo cate_id
      $correcto1 = array(
        'class' => 'valid-feedback',
      );
      echo form_label('correcto', 'cate_id', $correcto1);



      
    $string1 = '<div>';
    echo $string1;

        echo form_label('CATEGORIA NOMBRES:', 'cate_nombre');
        $cate_nom=array(
          'name'=> 'cate_nombre',
          'class'=> 'form-control',
          'id'=>'cate_nombre',
          'type'=>'text',
          'placeholder'=>'categoria'
          
        );
        echo form_input($cate_nom,"",'required'); 

        //para el campo cate_nombre
        $error1 = array(
          'class' => 'invalid-feedback',
        );
        
        echo form_label('falta completar', 'cate_nombre', $error1);

        //para el campo cate_nombre
      
        $correcto = array(
          'class' => 'valid-feedback',
        );
        echo form_label('correcto', 'cate_nombre', $correcto);

    $string = '</div>';
    echo $string;
     



      echo "<br>";
      echo form_submit('Guardar','Guardar','class="btn btn-success"');
    

      $string = '</div></div>';
      echo form_close($string);
?>
       
  
</body> 
     
         
