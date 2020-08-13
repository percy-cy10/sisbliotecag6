<?php 
 include("estilos.php");
  //var_dump($registros);
?>
<?php 
   echo form_open("ctrlusuarios/guardar?id=$registros->usua_id");

      echo form_label('LOGIN:', 'usua_login');
      $data_us=array(
        'name'=> 'usua_login',
        'class'=> 'form-control',
        'id'=>'usua_login',
        'type'=>'text',
        'value'=>"$registros->usua_login"
          
      );
      echo form_input($data_us,"");

      echo form_label('PASSWORD:', 'usua_password');
      $data_pas=array(
        'name'=> 'usua_password',
        'class'=> 'form-control',
        'id'=>'usua_password',
        'type'=>'password',
        'value'=>"$registros->usua_password"
          
      );
      echo form_input($data_pas,"");

      echo form_label('CODIGO:', 'usua_codigo');
      $data_cod=array(
        'name'=> 'usua_codigo',
        'class'=> 'form-control',
        'id'=>'usua_codigo',
        'type'=>'text',
        'value'=>"$registros->usua_codigo"
          
      );
      echo form_input($data_cod,"");

      echo form_label('NOMBRES:', 'usua_nombres');
      $data_nom1=array(
        'name'=> 'usua_nombres',
        'class'=> 'form-control',
        'id'=>'usua_nombres',
        'type'=>'text',
        'value'=>"$registros->usua_nombres"
          
      );
      echo form_input($data_nom1,"");

      echo form_label('APELLIDOS:', 'usua_apellidos');
      $data_ape=array(
        'name'=> 'usua_apellidos',
        'class'=> 'form-control',
        'id'=>'usua_apellidos',
        'type'=>'text',
        'value'=>"$registros->usua_apellidos"
          
      );
      echo form_input($data_ape,"");

      echo form_label('DIRECCION:', 'usua_direccion');
      $data_dir=array(
        'name'=> 'usua_direccion',
        'class'=> 'form-control',
        'id'=>'usua_direccion',
        'type'=>'text',
        'value'=>"$registros->usua_direccion"
          
      );
      echo form_input($data_dir,"");


      echo form_label('EMAIL:', 'usua_email');
      $data_ema=array(
        'name'=> 'usua_email',
        'class'=> 'form-control',
        'id'=>'usua_email',
        'type'=>'email',
        'value'=>"$registros->usua_email"
          
      );
      echo form_input($data_ema,"");

      echo form_label('TELEFONO:', 'usua_telefono');
      $data_tel=array(
        'name'=> 'usua_telefono',
        'class'=> 'form-control',
        'id'=>'usua_telefono',
        'type'=>'text',
        'value'=>"$registros->usua_telefono"
          
      );
      echo form_input($data_tel,"");

      echo form_label('ESAADMIN:', 'usua_esadmin');
      $data_esad=array(
        'name'=> 'usua_esadmin',
        'class'=> 'form-control',
        'id'=>'usua_esadmin',
        'type'=>'text',
        'value'=>"$registros->usua_esadmin"
          
      );
      echo form_input($data_esad,"");


      echo form_submit('Guardar','Guardar');
      
   echo form_close();

?>