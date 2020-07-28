<?php 

 include("estilos.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>CREAR EJEMPLAR</title>
</head>
<body>
    <header class="container " >
        <br>
        <div class="card container "style="width: 700px;height: auto;" method="post">
          <div class="card-body">

        <form method="post"  action="<?php echo base_url();?>ctrlejemplar/guardar">
            
          <div class="input-group mb-3 input-group-lg">
            <div class="input-group-prepend">
              <span class="input-group-text">TITULO</span>
            </div>
            <input type="text" class="form-control" name="ejem_titulo">
          </div>
          <div class="input-group mb-3 input-group-lg">
            <div class="input-group-prepend">
              <span class="input-group-text">EDITORIAL</span>
            </div>
            <input type="text" class="form-control" name="ejem_editorial">
          </div>
          <div class="input-group mb-3 input-group-lg">
            <div class="input-group-prepend">
              <span class="input-group-text">PAGINAS</span>
            </div>
            <input type="text" class="form-control" name="ejem_paginas">
          </div>
          <div class="input-group mb-3 input-group-lg">
            <div class="input-group-prepend">
              <span class="input-group-text">ISBN</span>
            </div>
            <input type="text" class="form-control" name="ejem_isbn">
          </div>
        <div class="input-group mb-3 input-group-lg">
        <div class="input-group-prepend">
              <span class="input-group-text">IDIOMA</span>
            </div>
            <input type="text" class="form-control" name="ejem_idioma">
          </div>
          <div class="input-group mb-3 input-group-lg">
          <div class="input-group-prepend">
              <span class="input-group-text">PORTADA</span>
            </div>
            <input type="text" class="form-control" name="ejem_portada">
          </div>
          <div class="input-group mb-3 input-group-lg">
          <div class="input-group-prepend">
              <span class="input-group-text">DIGITAL</span>
            </div>
            <input type="text" class="form-control" name="ejem_digital">
          </div>
          <div class="input-group mb-3 input-group-lg">
          <div class="input-group-prepend">
              <span class="input-group-text">AUDIO</span>
            </div>
            <input type="text" class="form-control" name="ejem_audio">
          </div>
          <div class="input-group mb-3 input-group-lg">
          <div class="input-group-prepend">
              <span class="input-group-text">RESUMEN</span>
            </div>
            <input type="text" class="form-control" name="ejem_resumen">
          </div>
          <div class="input-group mb-3 input-group-lg">
          <div class="input-group-prepend">
              <span class="input-group-text">TIPO ID</span>
            </div>
            <input type="number" class="form-control" name="ejem_tipo_id">
          </div>
          <div class="input-group mb-3 input-group-lg">
          <div class="input-group-prepend">
              <span class="input-group-text">CATEGORIA ID</span>
            </div>
            <input type="number" class="form-control" name="ejem_cate_id">
          </div>
          <div class="input-group mb-3 input-group-lg">
          <div class="input-group-prepend">
              <span class="input-group-text">VALORACION</span>
            </div>
            <input type="text" class="form-control" name="ejem_valoracion">
          </div>
          <div class="input-group mb-3 input-group-lg">
          <div class="input-group-prepend">
              <span class="input-group-text">AÑO</span>
            </div>
            <input type="number" class="form-control" name="ejem_anio">
          </div>
          <div class="input-group mb-3 input-group-lg">
          <div class="input-group-prepend">
              <span class="input-group-text">NUMERO DE PRESTAMOS</span>
            </div>
            <input type="number" class="form-control" name="ejem_nprestamos">
          </div>
          <button  class="btn btn-success" type="submit">ENVIAR</button>
        </form>

          </div>
        </div>
    </header>
</body>
</html>