<?php 
   include("estilos.php");
?>
<body class="full-cover-background" style="background-image:url(https://thumbs.dreamstime.com/z/biblioteca-fondo-de-los-estantes-blancos-con-libros-y-texto-concepto-del-aprendizaje-la-educaci-n-ilustraci-n-d-145388432.jpg);">
<br>
<div class="container">

<div class="card" style="width: 35rem; left:23%;">
<br>
<h1 style="text-align: center;color:orange;">REGISTRE SUS DATOS</h1>
  <div class="card-body">


<?php 
    $form=array(
      'class'=>'was-validated p-3',
      'id'=>'loginForm'
    );

   echo form_open("ctrlusuarios/guardar?id=$registros->usua_id",$form);

    
   echo miinput('text',"usua_login",'LOGIN:','usua_login','required',$registros->usua_login);
   echo miinput('text','usua_password','PASSWORD:','usua_password','required',$registros->usua_password);
   echo miinput('text','usua_codigo','CODIGO:','usua_codigo','required',$registros->usua_codigo);
   echo miinput('text',"usua_nombres",'NOMBRES','usua_nombres','required',$registros->usua_nombres);
   echo miinput('text','usua_apellidos','APELLIDOS:','usua_apellidos','required',$registros->usua_apellidos);
   echo miinput('text',"usua_direccion",'DIRECCION:','usua_direccion','required',$registros->usua_direccion);
   echo miinput('email',"usua_email",'EMAIL:','usua_email','required',$registros->usua_email);
   echo miinput('tel',"usua_telefono",'TELEFONO:','usua_telefono','required',$registros->usua_telefono);
   echo miinput('text',"usua_esadmin",'ESAADMIN:','usua_esadmin','required',$registros->usua_esadmin);
   
   echo miButon('btn btn-success','Guardar');

   echo form_close();

    ?>
  </div>
</div>
  
</body> 