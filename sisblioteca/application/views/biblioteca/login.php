<!DOCTYPE html>
<html lang="es">
<head>
  <title>Inicio</title>
  <link href="https://kit-pro.fontawesome.com/releases/v5.11.2/css/pro.min.css" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <style type="text/css">
    .password-icon {
    float: right;
    position: relative;
    margin: -25px 10px 0 0;
    cursor: pointer;
  }
    
  </style>

<body class="full-cover-background" style="background-image:url(https://libreriaesoterica.net/wp-content/uploads/2019/12/biblioteca.jpg);">
  <br>
  <div class="container">
    <h1 style="color: blue;text-align: center;">BIBLIOTECA GRUPO 6</h1>
  <div class="card" style="width:30%;float: left;left: 36%">
  <div class="card-body">
        <form action="<?php echo base_url('biblioteca/evaluar')?>" method="post">
          <p class="text-center" style="margin-top: 17px;">
             <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1200px-User_icon_2.svg.png" width=100px height=100px>
         </p>
         <h4 class="text-center all-tittles" style="margin-bottom: 30px;">inicia sesión</h4>








            <label for="usuario">USUARIO:</label>
            <input type="text" name="usuario" class="form-control" placeholder="Enter su usuario" >

<br>

           <label for="password">CONTRASEÑA</label>
           <input type="password" name="password" class="form-control password1" value="" placeholder="imgrese se contraseña" />
            <span class="fa fa-fw fa-eye password-icon show-password"></span>

<br>
            <div class="group-material">
                <select class="material-control-login" required >
                    <option value="" disabled="" selected="">Tipo de usuario</option>
                    <option value="Student">Estudiante</option>
                    <option value="Teacher">Docente</option>
                    <option value="Admin">Administrador</option>
                </select>
            </div><br>
         <p>
           <input class="btn btn-success" type="submit" value="ingresar">
          
          </p>
      </form>
          <a href="#">
            <button class="btn btn-info" type="submit"> Registrarse </button>
          </a>
    </div> 
  </div>
</div>
     
     <script>
window.addEventListener("load", function() {
// icono para poder interaccionar con el elemento
showPassword = document.querySelector('.show-password');
showPassword.addEventListener('click', () => {
// elementos input de tipo password
password1 = document.querySelector('.password1');
if ( password1.type === "text" ) {
password1.type = "password"
showPassword.classList.remove('fa-eye-slash');
} else {
password1.type = "text"
showPassword.classList.toggle("fa-eye-slash");
}
})
});
</script>
</body>
</html>