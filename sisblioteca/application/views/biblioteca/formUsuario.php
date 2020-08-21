<?php 
   include("estilos.php");
  //var_dump($registros);
?>
<style>
  .error{
      color: red;
      }
</style>
<body class="full-cover-background" style="background-image:url(https://thumbs.dreamstime.com/z/biblioteca-fondo-de-los-estantes-blancos-con-libros-y-texto-concepto-del-aprendizaje-la-educaci-n-ilustraci-n-d-145388432.jpg);">
<br>
<div class="container">

<div class="card" style="width: 35rem; left:27%;">
<br>
<h1 style="text-align: center;color:orange;">REGISTRE SUS DATOS</h1>
  <div class="card-body">


<?php 
<<<<<<< HEAD
   
   echo "<div>";
      echo validation_errors();
   echo "</div>"; 
    echo form_open("ctrlusuarios/procesar?id=$registros->usua_id");

=======
    $form=array(
      'class'=>'was-validated p-3'
    );

   echo form_open("ctrlusuarios/guardar?id=$registros->usua_id",$form);

>>>>>>> 74cafa6825831d2c516c8b54c439a6a0b939fcd4
    echo "<div>";
      echo form_label('LOGIN:', 'usua_login');
      $data_us=array(
        'name'=> 'usua_login',
        'class'=> 'form-control',
        'id'=>'usua_login',
        'type'=>'text',
        'value'=>"$registros->usua_login"
          
      );
<<<<<<< HEAD
      echo form_input($data_us,'');

      echo "</div>";



=======
      echo form_input($data_us,'','required');

        //para el icono de error del campo usua_login
        $error = array(
          'class' => 'invalid-feedback',
        );
        echo form_label('falta completar', 'usua_login', $error);
  
        //para el icono de bien del campo usua_login
        $correcto = array(
          'class' => 'valid-feedback',
        );
        echo form_label('correcto', 'usua_login', $correcto);
      echo "</div>";



>>>>>>> 74cafa6825831d2c516c8b54c439a6a0b939fcd4
    echo "<div>";
      echo form_label('PASSWORD:', 'usua_password');
      $data_pas=array(
        'name'=> 'usua_password',
        'class'=> 'form-control',
        'id'=>'usua_password',
        'type'=>'password',
        'value'=>"$registros->usua_password"
          
      );
<<<<<<< HEAD
      echo form_input($data_pas,'');
      
    echo "</div>";


=======
      echo form_input($data_pas,'','required');
      //para el icono de error del campo usua_password
      $error = array(
        'class' => 'invalid-feedback',
      );
      echo form_label('falta completar', 'usua_password', $error);

      //para el icono de bien del campo usua_password
      $correcto = array(
        'class' => 'valid-feedback',
      );
      echo form_label('correcto', 'usua_password', $correcto);
    echo "</div>";


>>>>>>> 74cafa6825831d2c516c8b54c439a6a0b939fcd4
    echo "<div>";
      echo form_label('CODIGO:', 'usua_codigo');
      $data_cod=array(
        'name'=> 'usua_codigo',
        'class'=> 'form-control',
        'id'=>'usua_codigo',
        'type'=>'text',
        'value'=>"$registros->usua_codigo"
          
      );
<<<<<<< HEAD
      echo form_input($data_cod,'');
      
    echo "</div>";


=======
      echo form_input($data_cod,'','required');
      //para el icono de error del campo usua_codigo
      $error = array(
        'class' => 'invalid-feedback',
      );
      echo form_label('falta completar', 'usua_codigo', $error);

      //para el icono de bien del campo usua_codigo
      $correcto = array(
        'class' => 'valid-feedback',
      );
      echo form_label('correcto', 'usua_codigo', $correcto);
    echo "</div>";


>>>>>>> 74cafa6825831d2c516c8b54c439a6a0b939fcd4
    echo "<div>";
      echo form_label('NOMBRES:', 'usua_nombres');
      $data_nom1=array(
        'name'=> 'usua_nombres',
        'class'=> 'form-control',
        'id'=>'usua_nombres',
        'type'=>'text',
        'value'=>"$registros->usua_nombres"
          
      );
<<<<<<< HEAD
      echo form_input($data_nom1,'');
      
    echo "</div>";

=======
      echo form_input($data_nom1,'','required');
      //para el icono de error del campo usua_nombres
      $error = array(
        'class' => 'invalid-feedback',
      );
      echo form_label('falta completar', 'usua_nombres', $error);

      //para el icono de bien del campo usua_nombres
      $correcto = array(
        'class' => 'valid-feedback',
      );
      echo form_label('correcto', 'usua_nombres', $correcto);
    echo "</div>";

>>>>>>> 74cafa6825831d2c516c8b54c439a6a0b939fcd4

    echo "<div>";
      echo form_label('APELLIDOS:', 'usua_apellidos');
      $data_ape=array(
        'name'=> 'usua_apellidos',
        'class'=> 'form-control',
        'id'=>'usua_apellidos',
        'type'=>'text',
        'value'=>"$registros->usua_apellidos"
          
      );
<<<<<<< HEAD
      echo form_input($data_ape,'');
=======
      echo form_input($data_ape,'','required');
      //para el icono de error del campo usua_apellidos
      $error = array(
        'class' => 'invalid-feedback',
      );
      echo form_label('falta completar', 'usua_apellidos', $error);

      //para el icono de bien del campo usua_apellidos
      $correcto = array(
        'class' => 'valid-feedback',
      );
      echo form_label('correcto', 'usua_apellidos', $correcto);
>>>>>>> 74cafa6825831d2c516c8b54c439a6a0b939fcd4
    echo "</div>";



    echo "<div>";
      echo form_label('DIRECCION:', 'usua_direccion');
      $data_dir=array(
        'name'=> 'usua_direccion',
        'class'=> 'form-control',
        'id'=>'usua_direccion',
        'type'=>'text',
        'value'=>"$registros->usua_direccion"
          
      );
<<<<<<< HEAD
      echo form_input($data_dir,'');
=======
      echo form_input($data_dir,'','required');
      //para el icono de error del campo usua_direccion
      $error = array(
        'class' => 'invalid-feedback',
      );
      echo form_label('falta completar', 'usua_direccion', $error);

      //para el icono de bien del campo usua_direccion
      $correcto = array(
        'class' => 'valid-feedback',
      );
      echo form_label('correcto', 'usua_direccion', $correcto);
>>>>>>> 74cafa6825831d2c516c8b54c439a6a0b939fcd4
    echo "</div>";



    echo "<div>";
      echo form_label('EMAIL:', 'usua_email');
      $data_ema=array(
        'name'=> 'usua_email',
        'class'=> 'form-control',
        'id'=>'usua_email',
        'type'=>'email',
        'value'=>"$registros->usua_email"
          
      );
<<<<<<< HEAD
      echo form_input($data_ema,'');
=======
      echo form_input($data_ema,'','required');
      //para el icono de error del campo usua_email
      $error = array(
        'class' => 'invalid-feedback',
      );
      echo form_label('falta completar', 'usua_email', $error);

      //para el icono de bien del campo usua_email
      $correcto = array(
        'class' => 'valid-feedback',
      );
      echo form_label('correcto', 'usua_email', $correcto);
>>>>>>> 74cafa6825831d2c516c8b54c439a6a0b939fcd4
    echo "</div>";



    echo "<div>";
      echo form_label('TELEFONO:', 'usua_telefono');
      $data_tel=array(
        'name'=> 'usua_telefono',
        'class'=> 'form-control',
        'id'=>'usua_telefono',
        'type'=>'text',
        'value'=>"$registros->usua_telefono"
          
      );
<<<<<<< HEAD
      echo form_input($data_tel,'');
=======
      echo form_input($data_tel,'','required');
      //para el icono de error del campo usua_telefono
      $error = array(
        'class' => 'invalid-feedback',
      );
      echo form_label('falta completar', 'usua_telefono', $error);

      //para el icono de bien del campo usua_telefono
      $correcto = array(
        'class' => 'valid-feedback',
      );
      echo form_label('correcto', 'usua_telefono', $correcto);
>>>>>>> 74cafa6825831d2c516c8b54c439a6a0b939fcd4
    echo "</div>";



    echo "<div>";
      echo form_label('ESAADMIN:', 'usua_esadmin');
      $data_esad=array(
        'name'=> 'usua_esadmin',
        'class'=> 'form-control',
        'id'=>'usua_esadmin',
        'type'=>'text',
        'value'=>"$registros->usua_esadmin"
          
      );
<<<<<<< HEAD
      echo form_input($data_esad,'');
=======
      echo form_input($data_esad,'','required');
      //para el icono de error del campo usua_esadmin
      $error = array(
        'class' => 'invalid-feedback',
      );
      echo form_label('falta completar', 'usua_esadmin', $error);

      //para el icono de bien del campo usua_esadmin
      $correcto = array(
        'class' => 'valid-feedback',
      );
      echo form_label('correcto', 'usua_esadmin', $correcto);
>>>>>>> 74cafa6825831d2c516c8b54c439a6a0b939fcd4
    echo "</div>";

      $estilos1=array(
        'class'=>'btn btn-success'
      );
      echo form_submit('Guardar','Guardar',$estilos1);
      
   echo form_close();

    ?>
  </div>
</div>
  
</body> 