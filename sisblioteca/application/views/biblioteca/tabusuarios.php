<?php 
 include("estilos.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
      <table class="table table-bordered table-striped" >
	    <thead class="thead-dark">
		   <th>ID</th>
           <th>LOGIN</th>
           <th>PASSWORD</th>
           <th>CODIGO</th>
		   <th>NOMBRES</th>
		   <th>APELLIDO</th>
		   <th>CORREO</th>
		   <th>DIRECCION</th>
           <th>TELEFONO</th>
		   <th colspan='2'>OPCIONES</th>
		</thead>
		<tbody>
		<?php foreach($registros as $reg): ?>
               <tr>
                  <td><?php echo $reg->ejem_id; ?></td>
                  <td><?php echo $reg->ejem_titulo; ?></td>
                  <td><?php echo $reg->ejem_editorial; ?></td>
                  <td><?php echo $reg->ejem_paginas; ?></td>
                  <td><?php echo $reg->ejem_isbn; ?></td>
                  <td><?php echo $reg->ejem_idioma; ?></td>
                  <td><?php echo $reg->ejem_portada; ?></td>
                  <td><?php echo $reg->ejem_digital; ?></td>
                  <td><?php echo $reg->ejem_audio; ?></td>
                  <td><?php echo $reg->ejem_resumen; ?></td>
                  <td><?php echo $reg->ejem_tipo_id; ?></td>
                  <td><?php echo $reg->ejem_cate_id; ?></td>
                  <td><?php echo $reg->ejem_valoracion; ?></td>
                  <td><?php echo $reg->ejem_anio; ?></td>                 
                  <td><?php echo $reg->ejem_nprestamos; ?></td>
                
               </tr>
               <?php endforeach; ?>
			
		</tbody>
	  </table>
	</div>
</body>
</html>