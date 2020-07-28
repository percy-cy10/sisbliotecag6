<?php 
 include("estilos.php");

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

          <form method="post"  action="<?php echo base_url();?>ctrlusuarios/guardar"  >
          <div class="input-group mb-3 input-group-lg">
            <div class="input-group-prepend">
              <span class="input-group-text">LOGIN</span>
            </div>
            <input type="text" class="form-control" name="login">
          </div>
          <div class="input-group mb-3 input-group-lg">
            <div class="input-group-prepend">
              <span class="input-group-text">PASSWORD</span>
            </div>
            <input type="password" class="form-control" name="password">
          </div>
          <div class="input-group mb-3 input-group-lg">
            <div class="input-group-prepend">
              <span class="input-group-text">CODIGO</span>
            </div>
            <input type="text" class="form-control" name="codigo">
          </div>
          <div class="input-group mb-3 input-group-lg">
            <div class="input-group-prepend">
              <span class="input-group-text">NOMBRES</span>
            </div>
            <input type="text" class="form-control" name="nombres">
          </div>
        <div class="input-group mb-3 input-group-lg">
        <div class="input-group-prepend">
              <span class="input-group-text">APELLIDOS</span>
            </div>
            <input type="text" class="form-control" name="apellidos">
          </div>
          <div class="input-group mb-3 input-group-lg">
          <div class="input-group-prepend">
              <span class="input-group-text">E-MAIL</span>
            </div>
            <input type="email" class="form-control" name="correo">
          </div>
          <div class="input-group mb-3 input-group-lg">
          <div class="input-group-prepend">
              <span class="input-group-text">DIRECCION</span>
            </div>
            <input type="text" class="form-control" name="direccion">
          </div>
          <div class="input-group mb-3 input-group-lg">
          <div class="input-group-prepend">
              <span class="input-group-text">TELEFONO</span>
            </div>
            <input type="number" class="form-control" name="telefono">
          </div>
          <button  class="btn btn-success" type="submit">ENVIAR</button>
        </form>

          </div>
        </div>
    </header>
</body>
</html>