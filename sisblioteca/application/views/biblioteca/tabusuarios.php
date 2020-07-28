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
           <th>ESADMIN</th>
		   <th colspan='2'>OPCIONES</th>
		</thead>
		<tbody>
		<?php foreach($registros as $reg): ?>
               <tr>
                  <td><?php echo $reg->usua_id; ?></td>
                  <td><?php echo $reg->usua_login; ?></td>
                  <td><?php echo $reg->usua_password; ?></td>
                  <td><?php echo $reg->usua_codigo; ?></td>
                  <td><?php echo $reg->usua_nombres; ?></td>
                  <td><?php echo $reg->usua_apellidos; ?></td>
                  <td><?php echo $reg->usua_direccion; ?></td>
                  <td><?php echo $reg->usua_email; ?></td>
                  <td><?php echo $reg->usua_telefono; ?></td>
                  <td><?php echo $reg->usua_esadmin; ?></td>
                
               </tr>
               <?php endforeach; ?>
			
		</tbody>
	  </table>
	</div>
</body>
</html>