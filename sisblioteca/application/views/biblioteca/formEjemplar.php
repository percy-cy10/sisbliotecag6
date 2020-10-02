<?php 
 include("estilos.php");

?>
<style>
    .error{
       color: red;
    }
</style>

<body class="full-cover-background" style="background-image:url(https://thumbs.dreamstime.com/z/biblioteca-fondo-de-los-estantes-blancos-con-libros-y-texto-concepto-del-aprendizaje-la-educaci-n-ilustraci-n-d-145388432.jpg);">
<br>
<div class="container">

<div class="card" style="width: 35rem;float:left;left:30%;">
<h1 style="text-align: center;color:orange;">INGRESE LOS DATOS DEL EJEMPLAR</h1>
  <div class="card-body">

<?php 
 

    $form=array(
        'class'=>'was-validated p-3',
        'id'=>'loginForm'

    );
    echo form_open('ctrlejemplar/procesar?id=0',$form);

    

    echo miinput('text',"ejem_titulo",'TITULO:','','required');
    echo miinput('text',"ejem_editorial",'EDITORIAL:','','required');
    echo miinput('text',"ejem_paginas",'PAGINAS:','','required');
    echo miinput('text',"ejem_isbn",'ISBN:','','required');
    echo miinput('text',"ejem_isbn",'ISBN:','','required');
    echo miinput('text',"ejem_idioma",'IDIOMA:','','required');
    echo miinput('text',"ejem_portada",'PORTADA:','','required');
    echo miinput('text',"ejem_digital",'DIGITAL:','','required');
    echo miinput('text',"ejem_audio",'AUDIO:','','required');
    echo miinput('text',"ejem_resumen",'RESUMEN:','','required');
    echo miinput('text',"ejem_resumen",'RESUMEN:','','required');
    echo miSelect('ejem_cate_id','EJEM_CATE_ID:',$registros );
    echo miinput('number',"ejem_valoracion",'VALORACION:','','required');
    echo miinput('date',"ejem_anio",'AÑO:','','required');
    echo miinput('number',"ejem_nprestamos",'NUMERO DE PRESTAMOS:','','required');

    echo miButon('btn btn-success','Enviar');

     
    
    
    echo form_close();

?>

  </div>
</div>
  
</body>