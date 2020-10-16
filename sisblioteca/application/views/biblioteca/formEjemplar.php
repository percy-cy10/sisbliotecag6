<?php 
 include("estilos.php");

?>
<body class="full-cover-background" style="background-image:url(https://thumbs.dreamstime.com/z/biblioteca-fondo-de-los-estantes-blancos-con-libros-y-texto-concepto-del-aprendizaje-la-educaci-n-ilustraci-n-d-145388432.jpg);">


<div class="container">
    <div class="card mt-4">
       <div class="card-header">
           <h1 style="text-align: center;color:orange;">REGISTRE SUS DATOS</h1>
       </div>
       <div class="card-body">
          <div class="form-row">

             <?php

             $form=array(
              'class'=>"form-inline"

             );
                
               echo form_open_multipart('ctrlejemplar/procesar?id=0',$form);

                        echo miinput('text',"ejem_titulo",'TITULO:&nbsp;&nbsp;&nbsp;&nbsp;','','required','',4);
                        echo miinput('text',"ejem_editorial",'EDITORIAL:','','required','',4);
                        echo miinput('text',"ejem_paginas",'PAGINAS:','','required',3,4);
                        echo miinput('text',"ejem_isbn",'ISBN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','','required',8,4);
                        echo miinput('text',"ejem_idioma",'IDIOMA:&nbsp;&nbsp;&nbsp;&nbsp;','','required','',4);                      
                        echo miinput('text',"ejem_digital",'DIGITAL_:','','required','',4);
                        
                        echo miinput('text',"ejem_audio",'AUDIO:&nbsp;&nbsp;&nbsp;&nbsp;','','required','',4);
                        echo miinput('text',"ejem_resumen",'RESUMEN:','','required','',4);
                        echo miinput('number',"ejem_valoracion",'Valoracion:','','required',1,4);
                        echo miinput('number',"ejem_nprestamos",'Prestamos:','','required',1,4);
                        echo miinput('date',"ejem_anio",'AÑO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','','required','',4);
                        echo miSelect('ejem_cate_id','EJEM_ID:',$registros ,1);
                        echo miinput('file',"ejem_portada",'PORTADA:','','required','',6);
                        
                        echo miButon('btn btn-success','Enviar');
              
                echo form_close();
             ?>
          </div>
       </div>
    </div>
</div>
