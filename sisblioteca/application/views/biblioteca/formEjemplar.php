<?php 
 
   include('estilos.php');
?>

<style>
 body{ 
     background-image:url('https://upload.wikimedia.org/wikipedia/commons/8/86/Portal_UNAP.jpg');
     background-position: center center;



background-repeat: no-repeat;


background-attachment: fixed;


background-size: cover;
    }
  .form-group{
       margin:0 0 0 27%;
       border-radius:1%;
  }

  #img{
    margin:0 0 0 5%;
  }
  #img1{
    margin:0 5% 0 0;
  }



</style>
<br><br>

<div class="container col-sm-7 shadow-lg p-2 mb-10 bg-white rounded">
   
		<h2 class="text-secondary  text-center font-weight-bold">Registro de Ejemplares</h2>
    <br>


   <form method="post"  action="<?php echo base_url();?>ctrlejemplar/guardar" > 


        <div class="form-group col-md-6 ">
            <label for="" class="text-primary font-weight-bold ">titulo</label >
            <input type="text" class="form-control" name="titulo"  placeholder="titulo" >
        </div>
        


        <div class="form-group col-md-6">
            <label for="" class="text-primary font-weight-bold">editorial</label>
            <input type="text" class="form-control" name="editorial"  placeholder="editorial" >
   
        </div>

        <div class="form-group col-md-6" >
            <label for="" class="text-primary font-weight-bold">paginas</label>
            <input type="text" class="form-control" name="paginas" placeholder="paginas" >
        </div>


        
        <div class="form-group col-md-6">
            <label for="" class="text-primary font-weight-bold">isbn</label>
            <input type="text" class="form-control" name="isbn"  placeholder="isbn" >
        </div>


        <div class="form-group col-md-6" >
            <label for="" class="text-primary font-weight-bold">idioma</label>
            <input type="text" class="form-control" id=""name="idioma"  placeholder="idioma" >     
        </div>
        
        <div class="form-group col-md-6" >
            <label for="" class="text-primary font-weight-bold">postada</label>
            <input type="text" class="form-control" id=""name="postada"  placeholder="postada" >     
        </div>
        
        <div class="form-group col-md-6" >
            <label for="" class="text-primary font-weight-bold">digital</label>
            <input type="text" class="form-control" id=""name="digital"  placeholder="digital" >     
        </div>
        
        <div class="form-group col-md-6" >
            <label for="" class="text-primary font-weight-bold">audio</label>
            <input type="text" class="form-control" id=""name="audio"  placeholder="audio" >     
        </div>

        <div class="form-group col-md-6" >
            <label for="" class="text-primary font-weight-bold">resumen</label>
            <input type="text" class="form-control" id=""name="resumen"  placeholder="resumen" >     
        </div>
        <div class="form-group col-md-6" >
            <label for="" class="text-primary font-weight-bold">tipo_id</label>
            <input type="text" class="form-control" id=""name="tipo_id"  placeholder="tipo_id" >     
        </div>

        <div class="form-group col-md-6" >
            <label for="" class="text-primary font-weight-bold">cate_id</label>
            <input type="text" class="form-control" id=""name="cate_id"  placeholder="cate_id" >     
        </div>
        <div class="form-group col-md-6" >
            <label for="" class="text-primary font-weight-bold">valoracion</label>
            <input type="text" class="form-control" id=""name="valoracion"  placeholder="valoracion" >     
        </div>
        <div class="form-group col-md-6" >
            <label for="" class="text-primary font-weight-bold">anio</label>
            <input type="text" class="form-control" id=""name="anio"  placeholder="anio" >     
        </div>
        <div class="form-group col-md-6" >
            <label for="" class="text-primary font-weight-bold">prestamos</label>
            <input type="text" class="form-control" id=""name="prestamos"  placeholder="prestamos" >     
        </div>




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