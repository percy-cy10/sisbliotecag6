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

             $form=array(
              'class'=>"form-inline"

             );
                
                zecho form_open_multipart('ctrlejemplar/procesar?id=0',$form);

                        echo miinput('text',"ejem_titulo",'TITULO:','','required','','');
                        echo miinput('text',"ejem_editorial",'EDITORIAL:','','required','',6);
                        echo miinput('text',"ejem_paginas",'PAGINAS:','','required',3,'');
                        echo miinput('text',"ejem_isbn",'ISBN:','','required',8,'');
                        echo miinput('text',"ejem_idioma",'IDIOMA:','','required','','');
                        echo miinput('file',"ejem_portada",'PORTADA:','','required','',6);
                        echo miinput('text',"ejem_digital",'DIGITAL:','','required','','');
                        echo miinput('text',"ejem_audio",'AUDIO:','','required','','');
                        echo miinput('text',"ejem_resumen",'RESUMEN:','','required','',6);
                        echo miinput('number',"ejem_valoracion",'VALORACION:','','required',1,'');
                        echo miSelect('ejem_cate_id','EJEM_CATE_ID:',$registros ,'');
                      
                        echo miinput('date',"ejem_anio",'AÑO:','','required','',3);
                        echo miinput('number',"ejem_nprestamos",'N. DE PRESTAMOS:','','required',1,2);
                       
                        echo miButon('btn btn-success','Enviar');
              
                echo form_close();
             ?>
          </div>
       </div>
    </div>
</div>
