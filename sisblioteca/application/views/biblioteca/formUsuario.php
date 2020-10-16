<?php 
   include("estilos.php");
?>
<body class="full-cover-background" style="background-image:url(https://thumbs.dreamstime.com/z/biblioteca-fondo-de-los-estantes-blancos-con-libros-y-texto-concepto-del-aprendizaje-la-educaci-n-ilustraci-n-d-145388432.jpg);">


<div class="container">
    <div class="card mt-5">
       <div class="card-header">
           <h1 style="text-align: center;color:orange;">REGISTRE SUS DATOS</h1>
       </div>
       <div class="card-body">
          <div class="form-row">

             <?php
                
               echo miForm($registros->usua_id);
                  echo miinput('text',"usua_login",'Login:','usua_login','required',$registros->usua_login,'',4);
                  echo miinput('text','usua_password','Password:','usua_password','required',$registros->usua_password,8,4);
                  echo miinput('text','usua_codigo','Codigo:','usua_codigo','required',$registros->usua_codigo,6,4);
                  echo miinput('text',"usua_nombres",'Nombres:','usua_nombres','required',$registros->usua_nombres,'',4);
                  echo miinput('text','usua_apellidos','Apellidos:','usua_apellidos','required',$registros->usua_apellidos,'',4);
                  echo miinput('text',"usua_direccion",'Direccion:','usua_direccion','required',$registros->usua_direccion,'',4);
                  echo miinput('email',"usua_email",'Email:','usua_email','required',$registros->usua_email,'',4);
                  echo miinput('tel',"usua_telefono",'Telefono:','usua_telefono','required',$registros->usua_telefono,9,4);
                  echo miinput('text',"usua_esadmin",'Esadmin:','usua_esadmin','required',$registros->usua_esadmin,4,4);
                echo miButon('btn btn-success','Guardar');
             ?>
          </div>
       </div>
    </div>
</div>
