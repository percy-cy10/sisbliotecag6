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

          <form method="post"  action="<?php echo base_url();?>ctrlcategoria/guardar"  >
          <div class="input-group mb-3 input-group-lg">
            <div class="input-group-prepend">
              <span class="input-group-text">CATEGORIA ID</span>
            </div>
            <input type="number" class="form-control" name="cate_id">
          </div>
          <div class="input-group mb-3 input-group-lg">
            <div class="input-group-prepend">
              <span class="input-group-text">CATEGORIA NOMBRES</span>
            </div>
            <input type="text" class="form-control" name="cate_nombre">
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