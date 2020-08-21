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

   echo "<div>";
      echo validation_errors();
   echo "</div>"; 
    echo form_open("ctrlusuarios/procesar?id=$registros->usua_id");


    echo "<div>";
      echo form_label('LOGIN:', 'usua_login');
      $data_us=array(
        'name'=> 'usua_login',
        'class'=> 'form-control',
        'id'=>'usua_login',
        'type'=>'text',
        'value'=>"$registros->usua_login"
          
      );
      echo form_input($data_us,'');

      echo "</div>";



    echo "<div>";
      echo form_label('PASSWORD:', 'usua_password');
      $data_pas=array(
        'name'=> 'usua_password',
        'class'=> 'form-control',
        'id'=>'usua_password',
        'type'=>'password',
        'value'=>"$registros->usua_password"
          
      );
      echo form_input($data_pas,'');
      
    echo "</div>";


    echo "<div>";
      echo form_label('CODIGO:', 'usua_codigo');
      $data_cod=array(
        'name'=> 'usua_codigo',
        'class'=> 'form-control',
        'id'=>'usua_codigo',
        'type'=>'text',
        'value'=>"$registros->usua_codigo"
          
      );

      echo form_input($data_cod,'');
      
    echo "</div>";

    echo "<div>";
      echo form_label('NOMBRES:', 'usua_nombres');
      $data_nom1=array(
        'name'=> 'usua_nombres',
        'class'=> 'form-control',
        'id'=>'usua_nombres',
        'type'=>'text',
        'value'=>"$registros->usua_nombres"
          
      );
      echo form_input($data_nom1,'');
      
    echo "</div>";

    echo "<div>";
      echo form_label('APELLIDOS:', 'usua_apellidos');
      $data_ape=array(
        'name'=> 'usua_apellidos',
        'class'=> 'form-control',
        'id'=>'usua_apellidos',
        'type'=>'text',
        'value'=>"$registros->usua_apellidos"
          
      );

      echo form_input($data_ape,'');

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

      echo form_input($data_dir,'');
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
      echo form_input($data_ema,'');
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
      echo form_input($data_tel,'');
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

      echo form_input($data_esad,'');

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