<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
      <link href="https://kit-pro.fontawesome.com/releases/v5.11.2/css/pro.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="full-cover-background" style="background-image:url(assets/img/font-login.jpg);">
  <div class="container">
    <form action="<?php echo base_url('biblioteca/evaluar')?>" method="post">
        <p class="text-center" style="margin-top: 17px;">
           <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.eleconomista.es%2Fstatus%2Fnoticias%2F10083026%2F09%2F19%2FLa-biblioteca-cambia-de-rol-de-los-libros-a-la-formacion.html&psig=AOvVaw1dmUJ5sr6Fyso63kyePE7R&ust=1595881644771000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCPiW48rg6-oCFQAAAAAdAAAAABAD" width="100" height="100">
       </p>
       <h4 class="text-center all-tittles" style="margin-bottom: 30px;">inicia sesión</h4>
       <p>
         <label for="usuario">usuario</label>
         <input type="text" name="usuario">
       </p>
       <p>
         <label for="password">password</label>
         <input type="password" name="password">
       </p>
          <div class="group-material">
              <select class="material-control-login" required >
                  <option value="" disabled="" selected="">Tipo de usuario</option>
                  <option value="Student">Estudiante</option>
                  <option value="Teacher">Docente</option>
                  <option value="Admin">Administrador</option>
              </select>
          </div>
       <p>
         <input class="btn btn-success" type="submit" value="ingresar">
        <a href="registro.php">
            <button class="btn-login3" type="submit"><i class="zmdi zmdi-arrow-left"></i> &nbsp; Registrarse </button>
          </a>
        </p>
    </form>

    </div>    
</body>
</html>