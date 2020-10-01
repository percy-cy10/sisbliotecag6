<?php 
 include("estilos.php");

?>
<body class="full-cover-background" style="background-image:url(https://thumbs.dreamstime.com/z/biblioteca-fondo-de-los-estantes-blancos-con-libros-y-texto-concepto-del-aprendizaje-la-educaci-n-ilustraci-n-d-145388432.jpg);">
<br>


<div class="container">
  <div class="card" style="width: 28rem;float:left;left:30%;">
    <h1 style="text-align: center;color:orange;">INGRESE LOS DATOS DE LA CATEGORIA</h1>
      <div class="card-body">
          <?php
 
            echo form_open('ctrlcategoria/guardar?cate_id=0');

              echo miinput('number',"cate_id",'CATEGORIA ID:','opcion','required');
              echo miinput('text',"cate_nombre",'CATEGORIA NOMBRES:','categoria','required');
              echo miButon('btn btn-success','Guardar');

            echo form_close();

          ?>
      </div>
  </div>
</body> 
     
         
