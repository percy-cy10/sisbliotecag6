<?php 
 include("estilos.php");

?>
<body class="full-cover-background" style="background-image:url(https://thumbs.dreamstime.com/z/biblioteca-fondo-de-los-estantes-blancos-con-libros-y-texto-concepto-del-aprendizaje-la-educaci-n-ilustraci-n-d-145388432.jpg);">

<div class="container">

<div class="card" style="width: 28rem;float:left;left:30%;">
<h1 style="text-align: center;color:orange;">INGRESE LOS DATOS DEL EJEMPLAR</h1>
  <div class="card-body">
<h3>escoja la CATEGORIA</h3>
<?php 
  
   echo form_open('ctrlcategoria/buscar?cate_id=0');

      echo form_dropdown('cate_id',$opciones );

      echo form_submit('BUSCAR','BUSCAR');
    
   echo form_close();

?>
       
       </div>
</div>
  
</body>  
       
