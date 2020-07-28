<?php 
 include("estilos.php");
  //var_dump($registros);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>CREAR USUARIO</title>
</head>
<body>
    <header class="container " >
        <br>
        <div class="card container "style="width: 700px;height: auto;">
          <div class="card-body">

          <form method="post"  action="<?php echo base_url();?>ctrlusuarios/guardar?id=<?php echo $registros->usua_id;?>"  >
          <div class="input-group mb-3 input-group-lg">
            <div class="input-group-prepend">
              <span class="input-group-text">LOGIN</span>
            </div>
            <input type="text" class="form-control" name="usua_login" value="<?php echo $registros->usua_login;?>">
          </div>
          <div class="input-group mb-3 input-group-lg">
            <div class="input-group-prepend">
              <span class="input-group-text">PASSWORD</span>
            </div>
            <input type="password" class="form-control" name="usua_password" value="<?php echo $registros->usua_password;?>">
          </div>
          <div class="input-group mb-3 input-group-lg">
            <div class="input-group-prepend">
              <span class="input-group-text">CODIGO</span>
            </div>
            <input type="text" class="form-control" name="usua_codigo"  value="<?php echo $registros->usua_codigo;?>">
          </div>
          <div class="input-group mb-3 input-group-lg">
            <div class="input-group-prepend">
              <span class="input-group-text">NOMBRES</span>
            </div>
            <input type="text" class="form-control" name="usua_nombres" value="<?php echo $registros->usua_nombres;?>">
          </div>
        <div class="input-group mb-3 input-group-lg">
        <div class="input-group-prepend">
              <span class="input-group-text">APELLIDOS</span>
            </div>
            <input type="text" class="form-control" name="usua_apellidos" value="<?php echo $registros->usua_apellidos;?>">
          </div>
          <div class="input-group mb-3 input-group-lg">
          <div class="input-group-prepend">
              <span class="input-group-text">DIRECCION</span>
            </div>
            <input type="text" class="form-control" name="usua_direccion" value="<?php echo $registros->usua_direccion;?>">
          </div>
          <div class="input-group mb-3 input-group-lg">
          <div class="input-group-prepend">
              <span class="input-group-text">EMAIL</span>
            </div>
            <input type="text" class="form-control" name="usua_email" value="<?php echo $registros->usua_email;?>">
          </div>
          <div class="input-group mb-3 input-group-lg">
          <div class="input-group-prepend">
              <span class="input-group-text">TELEFONO</span>
            </div>
            <input type="text" class="form-control" name="usua_telefono" value="<?php echo $registros->usua_telefono;?>">
          </div>
          
          <div class="input-group mb-3 input-group-lg">
          <div class="input-group-prepend">
              <span class="input-group-text">ESAADMIN</span>
            </div>
            <input type="text" class="form-control" name="usua_esadmin" value="<?php echo $registros->usua_esadmin;?>">
          </div>

          <div class="text-center">
          <button  class="btn btn-success" type="submit"><li class="fa fa-save"> </li>&nbspENVIAR</button>
          </div>
        </form>

          </div>
        </div>
    </header>
</body>
</html>